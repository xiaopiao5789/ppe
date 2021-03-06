<?php
/**
 * Created by PhpStorm.
 * User: 明月有色
 * Date: 2017/11/29
 * Time: 14:27
 */

namespace Apps\Facades;

use Apps\Facades\Containers\ConfigContainer;
use Apps\Facades\Containers\QueueContainer;
use Apps\Facades\Containers\SessionContainer;
use Framework\Support\Containers\EventContainer;
use Framework\Support\Containers\LogContainer;
use Framework\Support\FacadeKernel;

class Kernel extends FacadeKernel
{
    /**
     * 开启的门脸
     *
     * @return array
     */
    protected function register()
    {
        return [
            'Log'=>LogContainer::class,
            'Event'=>EventContainer::class,
            'Config'=>ConfigContainer::class,
            'Queue'=>QueueContainer::class,
            'Session'=>SessionContainer::class,
        ];
    }
}