<?php

namespace ContainerV0JMnxH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_OFKCS4GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.oFKCS4G' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mercure'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'UpdateHandler.php';

        return $container->privates['.messenger.handler_descriptor.oFKCS4G'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\Mercure\Messenger\UpdateHandler(($container->privates['mercure.hub.default.traceable'] ?? self::getMercure_Hub_Default_TraceableService($container))), []);
    }
}
