<?php

namespace SchulIT\IdpExchangeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {

    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder('idp_exchange');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('user_limit')
                    ->defaultValue(1)
                ->end()
                ->scalarNode('endpoint')
                    ->isRequired()
                ->end()
                ->scalarNode('token')
                    ->isRequired()
                ->end()
                ->scalarNode('guzzle')
                    ->isRequired()
                ->end()
                ->scalarNode('user_loader')
                    ->isRequired()
                ->end()
                ->scalarNode('user_updater')
                    ->isRequired()
                ->end()
                ->scalarNode('serializer')->end()
                ->scalarNode('logger')->end()
            ->end();

        return $treeBuilder;
    }
}