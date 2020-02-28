<?php foreach ($AttributesModels as $attrModel): ?>
    <?php
    echo \frontend\abstractComponents\widgets\filterCategory\FabricFilterWiget::widget([
        'attrModel' => $attrModel,
    ]);
    ?>
<?php endforeach; ?>
