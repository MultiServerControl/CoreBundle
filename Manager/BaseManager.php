<?php
namespace MultiServerControl\CoreBundle\Manager;

/**
 * Created by JetBrains PhpStorm.
 * User: fabian
 * Date: 12/7/12
 * Time: 10:47 PM
 * To change this template use File | Settings | File Templates.
 */
abstract class BaseManager
{
    abstract public function start();

    abstract public function stop();

    abstract public function restart();

    abstract public function isRunning();
}
