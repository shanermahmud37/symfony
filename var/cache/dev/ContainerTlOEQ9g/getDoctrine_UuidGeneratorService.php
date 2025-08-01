<?php

namespace ContainerTlOEQ9g;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_UuidGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.uuid_generator' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Id/AbstractIdGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/IdGenerator/UuidGenerator.php';

        return $container->privates['doctrine.uuid_generator'] = new \Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator(NULL);
    }
}
