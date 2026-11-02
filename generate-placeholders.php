<?php
/**
 * BGSS & Associates – Placeholder Image Generator
 * Run this once to create SVG placeholder images in /assets/images/
 * Usage: php generate-placeholders.php
 */

$base = __DIR__ . '/assets/images/';

$placeholders = [
    'hero-bg.jpg'           => ['w' => 1920, 'h' => 1080, 'label' => 'Hero Background', 'bg' => '#0D1B2A', 'fg' => '#B8860B'],
    'about-office.jpg'      => ['w' => 600,  'h' => 750,  'label' => 'About – Office',  'bg' => '#F4F1EC', 'fg' => '#0D1B2A'],
    'partner-bhaumik.jpg'   => ['w' => 400,  'h' => 533,  'label' => 'Bhaumik Goda',   'bg' => '#E8E4DE', 'fg' => '#0D1B2A'],
    'partner-saumya.jpg'    => ['w' => 400,  'h' => 533,  'label' => 'Saumya Sheth',   'bg' => '#E8E4DE', 'fg' => '#0D1B2A'],
    'partner-shalibhadra.jpg'=> ['w' => 400, 'h' => 533,  'label' => 'Shalibhadra Shah','bg'=> '#E8E4DE', 'fg' => '#0D1B2A'],
    'partner-malay.jpg'     => ['w' => 400,  'h' => 533,  'label' => 'Malay Kalavadia','bg' => '#E8E4DE', 'fg' => '#0D1B2A'],
    'og-image.jpg'          => ['w' => 1200, 'h' => 630,  'label' => 'OG Share Image', 'bg' => '#0D1B2A', 'fg' => '#B8860B'],
];

foreach ($placeholders as $filename => $cfg) {
    // Generate SVG placeholder (as .jpg filename but SVG content for browser display)
    $svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" width="{$cfg['w']}" height="{$cfg['h']}" viewBox="0 0 {$cfg['w']} {$cfg['h']}">
  <rect width="{$cfg['w']}" height="{$cfg['h']}" fill="{$cfg['bg']}"/>
  <text
    x="50%" y="48%"
    dominant-baseline="middle"
    text-anchor="middle"
    font-family="Georgia, serif"
    font-size="24"
    fill="{$cfg['fg']}"
    opacity="0.7"
  >{$cfg['label']}</text>
  <text
    x="50%" y="58%"
    dominant-baseline="middle"
    text-anchor="middle"
    font-family="Arial, sans-serif"
    font-size="14"
    fill="{$cfg['fg']}"
    opacity="0.4"
  >{$cfg['w']} × {$cfg['h']} px – Replace with actual image</text>
  <rect x="20" y="20" width="{$cfg['w'] - 40}" height="{$cfg['h'] - 40}" fill="none" stroke="{$cfg['fg']}" stroke-width="1" opacity="0.15"/>
</svg>
SVG;

    // Save as .svg alongside the placeholder filename reference
    $svgPath = $base . pathinfo($filename, PATHINFO_FILENAME) . '.svg';
    file_put_contents($svgPath, $svg);
    echo "✓ Created: $svgPath\n";
}

echo "\n✅ All placeholder SVGs generated.\n";
echo "⚠  Replace these SVG files with actual JPEG/WebP images before going live.\n";
echo "   Image filenames expected by the PHP templates:\n";
foreach (array_keys($placeholders) as $f) {
    echo "   → /assets/images/$f\n";
}
