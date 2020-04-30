<?php
$host = Yii::$app->request->hostInfo; // домен сайта

/* @var $urls */
/* @var $host */

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach($urlsForRender as $url): ?>
        <?php if (isset($url[0]) && !empty($url[0])): ?>
            <url>
                <loc><?= $host . htmlspecialchars($url[0]); ?></loc>
                <changefreq><?= $url[1] ?></changefreq>
            </url>
        <?php endif; ?>
    <?php endforeach; ?>
</urlset>