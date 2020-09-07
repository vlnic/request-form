<?php

namespace Vlnic\RequestForm\Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Vlnic\RequestForm\Bundle\DependencyInjection\RequestFormExtension;

/**
 * Class RequestFormBundle
 * @package Vlnic\RequestForm\Bundle
 */
class RequestFormBundle extends Bundle
{
    protected function getContainerExtensionClass()
    {
        return RequestFormExtension::class;
    }
}