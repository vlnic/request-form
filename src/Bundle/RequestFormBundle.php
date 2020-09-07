<?php

namespace Vlnic\RequestForm\Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
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

    /**
     * @param ContainerBuilder $containerBuilder
     */
    public function build(ContainerBuilder $containerBuilder)
    {
        parent::build($containerBuilder);
    }
}