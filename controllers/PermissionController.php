<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/pascini>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace pascini\rbac\controllers;

use yii\rbac\Permission;
use yii\web\NotFoundHttpException;
use yii\rbac\Item;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class PermissionController extends ItemControllerAbstract
{
    /** @var string */
    protected $modelClass = 'pascini\rbac\models\Permission';

    /** @var int */
    protected $type = Item::TYPE_PERMISSION;

    /** @inheritdoc */
    protected function getItem($name)
    {
        $role = \Yii::$app->authManager->getPermission($name);

        if ($role instanceof Permission) {
            return $role;
        }

        throw new NotFoundHttpException;
    }
}
