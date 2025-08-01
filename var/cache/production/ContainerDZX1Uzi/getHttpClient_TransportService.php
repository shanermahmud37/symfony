<?php

namespace ContainerDZX1Uzi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttpClient_TransportService extends App_KernelProductionDebugContainer
{
    /**
     * Gets the private 'http_client.transport' shared service.
     *
     * @return \Symfony\Contracts\HttpClient\HttpClientInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-client-contracts'.\DIRECTORY_SEPARATOR.'HttpClientInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-client'.\DIRECTORY_SEPARATOR.'HttpClient.php';

        $container->privates['http_client.transport'] = $instance = \Symfony\Component\HttpClient\HttpClient::create([], 6);

        $a = new \Monolog\Logger('http_client');
        $a->pushHandler(($container->privates['monolog.handler.null_internal'] ??= new \Monolog\Handler\NullHandler()));

        $instance->setLogger($a);

        return $instance;
    }
}
