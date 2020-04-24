<?php
$host = Yii::$app->request->hostInfo; // домен сайта
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= $host ?></loc>
        <changefreq>daily</changefreq>
        <priority>1</priority>
    </url>
    <?php foreach ($urls as $url): ?>
        <url>
            <loc><?= $host . $url[0] ?></loc>
            <changefreq><?= $url[1] ?></changefreq>
        </url>
    <?php endforeach; ?>
</urlset>