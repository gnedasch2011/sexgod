<?php
//echo '<pre>';print_r($menuItem);die();
; ?>
<ul class="categoryMenu">
    <?php foreach ($menuItem as $item): ?>
        <?php
        $urlCat = "/catalog/$item->slug/";
//        echo "<pre>";
//        print_r($item->subMenu);
//        die();
        ?>
        <?php if (trim($item->slug) == trim($categoryName)): ?>
            <li class="subCategoryMenu"><a class="activeMenuItem"
                        href="<?= $urlCat ;?>"><?= $item->name; ?></a>
                <ul>

                    <?php foreach ($item->subMenu as $subItem): ?>

                        <li class="subCategoryMenu"><a
                                    href="<?= "/catalog/$subItem->slug/"; ?>"><?= $subItem->name; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <? continue; ?>
        <?php endif; ?>
        <li class="subCategoryMenu active"><a
                    href="<?= $urlCat; ?>"><?= $item->name; ?></a></li>
    <?php endforeach; ?>
</ul>
