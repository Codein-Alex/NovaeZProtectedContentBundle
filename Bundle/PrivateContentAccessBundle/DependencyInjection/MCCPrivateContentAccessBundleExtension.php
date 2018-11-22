<?php

namespace MCC\Bundle\PrivateContentAccessBundle\DependencyInjection;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class MCPrivateContentAccessBundleExtension
 *
 * @package GA\PrivateContentAccessBundle\DependencyInjection
 */
class MCCPrivateContentAccessBundleExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        //$loader->load('routing.yml');
        $loader->load('services.yml');
    }
}