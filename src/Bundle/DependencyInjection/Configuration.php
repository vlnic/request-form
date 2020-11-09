<?php

namespace Vlnic\RequestForm\Bundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Vlnic\RequestForm\Bundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        return new TreeBuilder('default');
    }
}