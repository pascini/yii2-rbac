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
 * @var $model pascini\rbac\models\Role
 * @var $this  yii\web\View
 */

$this->title = Yii::t('rbac', 'Update permission');
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $this->beginContent('@pascini/rbac/views/layout.php') ?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

<?php $this->endContent() ?>
