<?php

namespace ContainerL7e69sQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCurrentDateTimeDirectoryNamerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/DirectoryNamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/CurrentDateTimeDirectoryNamer.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/DateTimeHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/CurrentDateTimeHelper.php';

        return $container->services['Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer'] = new \Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer(new \Vich\UploaderBundle\Naming\CurrentDateTimeHelper(), ($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()));
    }
}
