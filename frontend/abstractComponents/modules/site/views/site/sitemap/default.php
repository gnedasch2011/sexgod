<?php
$host = Yii::$app->request->hostInfo; // домен сайта
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
?>
<url>
    <loc><?= $host ?></loc>
    <changefreq>daily</changefreq>
    <priority>1</priority>
</url>
<?php foreach ($urls as $url): ?>
    <?php if (isset($url[0]) && !empty($url[0])): ?>
        <url>
            <loc><?= $host . htmlspecialchars($url[0]); ?></loc>
            <changefreq><?= $url[1] ?></changefreq>
        </url>
    <?php endif; ?>
<?php endforeach; ?>
</urlset>