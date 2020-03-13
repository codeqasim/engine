<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= base_url();?></loc>
        <priority>1.0</priority>
    </url>

    <?php foreach($urls as $url) { ?>
        <url>
            <loc><?= base_url().$url ?></loc>
            <priority>0.5</priority>
            <lastmod><?=date('Y-m-d')?></lastmod>
            <changefreq>monthly</changefreq>
        </url>
    <?php } ?>

</urlset>