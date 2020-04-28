<?php
$host = Yii::$app->request->hostInfo; // домен сайта
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
?>
<?= $fullXmlFile; ?>
</urlset>