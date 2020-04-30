<?= '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php for ($i = 1; $i < $countOfFiles + 1; $i++): ?>
        <sitemap>
            <loc><?= \yii\helpers\Url::to(['/sitemap/' . $i . '/'], 'https'); ?></loc>
        </sitemap>
    <?php endfor; ?>
    <sitemap>
        <loc><?= \yii\helpers\Url::to(['/sitemap/otherUrls/'], 'https'); ?></loc>
    </sitemap>
</sitemapindex>
