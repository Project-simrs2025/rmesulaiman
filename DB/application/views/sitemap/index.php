<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-type: application/xml; charset="ISO-8859-1"', true);  
?> 
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
  xmlns:xhtml="http://www.w3.org/1999/xhtml">
  <url>
    <loc><?=site_url();?></loc>
    <lastmod><?=gmdate('Y-m-d');?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.1</priority>
  </url>
  <?php if (!empty($post)) { ?>
    <?php foreach($post as $row) {?>
    <url>
      <loc><?=site_url('blog/'.$row['slug']);?></loc>
      <lastmod><?=gmdate('Y-m-d', strtotime($row['tgl_rilis']));?></lastmod>
      <changefreq>daily</changefreq>
      <priority>0.1</priority>
    </url>
    <?php } ?>
  <?php } ?>
</urlset>