<?php
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Created by PhpStorm.
 * User: jawa
 * Date: 27.12.15
 * Time: 18:12
 */
class UserExtension extends Extension //can be extend by Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        //get copy of container instance and after load, this copy is merged to container
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__, '/../Resources/config'));
        $loader->load('services.xml');
    }
}