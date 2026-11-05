param([int]$port = 8080)

$folder = $PSScriptRoot
$listener = New-Object System.Net.HttpListener
$prefix = "http://localhost:$port/"
$listener.Prefixes.Add($prefix)

try {
    $listener.Start()
    Write-Host "HTTP server running at: $prefix"
    Write-Host "Root folder: $folder"
    
    $mimeTypes = @{
        ".html" = "text/html; charset=utf-8"
        ".htm"  = "text/html; charset=utf-8"
        ".css"  = "text/css; charset=utf-8"
        ".js"   = "application/javascript; charset=utf-8"
        ".json" = "application/json; charset=utf-8"
        ".svg"  = "image/svg+xml"
        ".jpg"  = "image/jpeg"
        ".jpeg" = "image/jpeg"
        ".png"  = "image/png"
        ".ico"  = "image/x-icon"
        ".woff" = "font/woff"
        ".woff2"= "font/woff2"
    }

    while ($listener.IsListening) {
        try {
            $context = $listener.GetContext()
            $request = $context.Request
            $response = $context.Response

            $urlPath = $request.Url.LocalPath
            if ($urlPath -eq "/" -or [string]::IsNullOrWhiteSpace($urlPath)) {
                $urlPath = "/index.html"
            }

            # Remove leading slash and normalize slashes
            $relPath = $urlPath.TrimStart("/").Replace("/", "\")
            $filePath = Join-Path $folder $relPath

            # If directory, look for index.html or index.php
            if (Test-Path $filePath -PathType Container) {
                if (Test-Path (Join-Path $filePath "index.html") -PathType Leaf) {
                    $filePath = Join-Path $filePath "index.html"
                } elseif (Test-Path (Join-Path $filePath "index.php") -PathType Leaf) {
                    $filePath = Join-Path $filePath "index.php"
                }
            }

            if (-not (Test-Path $filePath -PathType Leaf)) {
                # Try appending .html
                if (Test-Path "$filePath.html" -PathType Leaf) {
                    $filePath = "$filePath.html"
                }
            }

            if (Test-Path $filePath -PathType Leaf) {
                $ext = [System.IO.Path]::GetExtension($filePath).ToLower()
                $mime = if ($mimeTypes.ContainsKey($ext)) { $mimeTypes[$ext] } else { "application/octet-stream" }
                
                $bytes = [System.IO.File]::ReadAllBytes($filePath)
                $response.ContentType = $mime
                $response.ContentLength64 = $bytes.Length
                $response.StatusCode = 200
                $response.AddHeader("Access-Control-Allow-Origin", "*")
                if ($request.HttpMethod -ne "HEAD") {
                    $response.OutputStream.Write($bytes, 0, $bytes.Length)
                }
            } else {
                $msg = [System.Text.Encoding]::UTF8.GetBytes("404 Not Found")
                $response.StatusCode = 404
                $response.ContentLength64 = $msg.Length
                if ($request.HttpMethod -ne "HEAD") {
                    $response.OutputStream.Write($msg, 0, $msg.Length)
                }
            }
            $response.OutputStream.Close()
        } catch {
            Write-Warning "Request error: $_"
        }
    }
} catch {
    Write-Error $_
} finally {
    if ($listener -and $listener.IsListening) {
        $listener.Stop()
        $listener.Close()
    }
}
