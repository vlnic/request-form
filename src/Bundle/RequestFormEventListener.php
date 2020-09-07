<?php

namespace Vlnic\RequestForm\Bundle;

use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Vlnic\RequestForm\RequestFormBinder;

/**
 * Class RequestFormEventListener
 * @package Vlnic\RequestForm\Bundle
 */
class RequestFormEventListener
{
    protected $binder;

    /**
     * RequestFormEventListener constructor.
     * @param RequestFormBinder $binder
     */
    public function __construct(RequestFormBinder $binder)
    {
        $this->binder = $binder;
    }

    public function onKernelController(ControllerEvent $event)
    {
        $errorResponse = $this->binder->bind($event->getRequest(), $event->getController());

        if (null === $errorResponse) {
            return;
        }
        $event->setController(fn() => $errorResponse);
    }
}