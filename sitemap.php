<?php
/* XML sitemap — served as /sitemap.xml via .htaccess. */
header('Content-Type: application/xml; charset=utf-8');

$base = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http')
      . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost')
      . rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

$pages = [
  ''        => '1.0',
  'about'   => '0.8',
  'product' => '0.9',
  'contact' => '0.8',
  'e-rickshaw-lithium-battery-pack' => '0.7',
  'golf-cart-lithium-battery'       => '0.7',
  'e-scooter-lithium-battery-pack'  => '0.7',
  'e-boat-lithium-battery'          => '0.7',
  'single-phase-ups-battery'        => '0.7',
  'solar-inverter-lithium-battery'  => '0.7',
  'three-phase-ups-lithium-battery' => '0.7',
  'forklift-lithium-battery-pack'   => '0.7',
  'stacker-lithium-battery'         => '0.7',
  'scissor-lift-lithium-battery'    => '0.7',
  'agv-lithium-battery'             => '0.7',
  'lead-acid-battery'               => '0.7',
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $path => $priority): ?>
  <url>
    <loc><?php echo htmlspecialchars($base . '/' . $path); ?></loc>
    <priority><?php echo $priority; ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
