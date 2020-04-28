<?php
$host = Yii::$app->request->hostInfo; // домен сайта
?>
<?php foreach ($urls as $url): ?>
    <?php if (isset($url[0]) && !empty($url[0])): ?>
        <url>
            <loc><?= $host . htmlspecialchars($url[0]); ?></loc>
            <changefreq><?= $url[1] ?></changefreq>
        </url>
    <?php endif; ?>
<?php endforeach; ?>
</urlset>