<?php
/* Back-compat: old product-details.php?p=slug links 301 to the per-product pages. */
$slug = preg_replace('/[^a-z0-9-]/', '', strtolower($_GET['p'] ?? ''));
header('Location: ' . ($slug !== '' ? $slug : 'product'), true, 301);
exit;
