<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Categorias</h1>
<ul>
    <?php foreach ($categorias as $categoria): ?>
        <li>
            <?= Html::encode("{$categoria->nomecate} ({$categoria->codecate})") ?>
        </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
