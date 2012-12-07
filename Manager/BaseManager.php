<?php
namespace MultiServerControl\CoreBundle\Manager;

/**
 * File: BaseManager.php
 * Date: 12/8/12
 *
 * (c) Fabian Frick <fabi.kcirf@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
abstract class BaseManager
{
    abstract public function start();

    abstract public function stop();

    abstract public function restart();

    abstract public function isRunning();
}
