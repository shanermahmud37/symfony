<?php

namespace ContainerTlOEQ9g;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_YamlLint_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.yaml_lint.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/SignalableCommandInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.yaml_lint.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('lint:yaml', [], 'Lint a YAML file and outputs encountered errors', false, #[\Closure(name: 'console.command.yaml_lint', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand')] fn (): \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand => ($container->privates['console.command.yaml_lint'] ?? $container->load('getConsole_Command_YamlLintService')));
    }
}
