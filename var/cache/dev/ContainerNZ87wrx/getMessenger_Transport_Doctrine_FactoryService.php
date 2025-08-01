<?php

namespace ContainerNZ87wrx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_Doctrine_FactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.transport.doctrine.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Bridge\Doctrine\Transport\DoctrineTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-messenger'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'DoctrineTransportFactory.php';

        return $container->privates['messenger.transport.doctrine.factory'] = new \Symfony\Component\Messenger\Bridge\Doctrine\Transport\DoctrineTransportFactory(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
