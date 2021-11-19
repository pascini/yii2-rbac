<?php

namespace pascini\rbac;

use yii\base\Module;

/**
 * Rbac console module.
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class RbacConsoleModule extends Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'pascini\rbac\commands';
}
