<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/pascini>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var $this     yii\web\View
 * @var $content string
 */

use pascini\rbac\widgets\Menu;

?>

<?= Menu::widget() ?>

<div style="padding: 10px 0">
    <?= $content ?>
</div>
