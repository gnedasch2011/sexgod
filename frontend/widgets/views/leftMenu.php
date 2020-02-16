<?php
//echo '<pre>';print_r($menuItem);die();
; ?>
<ul class="categoryMenu">
    <?php foreach ($menuItem as $item): ?>
        <?php

//        echo "<pre>";
//        print_r($item->subMenu);
//        die();
        ?>
        <?php if (trim($item->slug) == trim($categoryName)): ?>
            <li class="subCategoryMenu"><a class="activeMenuItem"
                        href="/products/<?= $item->slug; ?>"><?= $item->name; ?></a>
                <ul>
                    <?php foreach ($item->subMenu as $subItem): ?>
                        <li class="subCategoryMenu"><a
                                    href="/products/<?= $subItem->slug; ?>"><?= $subItem->name; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <? continue ;?>
        <?php endif; ?>
        <li class="subCategoryMenu active"><a
                    href="/products/<?= $item->slug; ?>"><?= $item->name; ?></a></li>
    <?php endforeach; ?>
</ul>
