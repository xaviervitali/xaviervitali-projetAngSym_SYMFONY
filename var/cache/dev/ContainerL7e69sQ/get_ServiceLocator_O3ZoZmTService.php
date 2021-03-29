<?php

namespace ContainerL7e69sQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O3ZoZmTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O3ZoZmT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O3ZoZmT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::admin' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Controller\\AdminController::allowAccess' => ['privates', '.service_locator.BICivRD', 'get_ServiceLocator_BICivRDService', true],
            'App\\Controller\\AdminController::commentAllow' => ['privates', '.service_locator.VaH0zlD', 'get_ServiceLocator_VaH0zlDService', true],
            'App\\Controller\\AdminController::commentDelete' => ['privates', '.service_locator.VaH0zlD', 'get_ServiceLocator_VaH0zlDService', true],
            'App\\Controller\\AdminController::comments' => ['privates', '.service_locator.D_7y3F7', 'get_ServiceLocator_D7y3F7Service', true],
            'App\\Controller\\AdminController::deleteFile' => ['privates', '.service_locator._1_qV4D', 'get_ServiceLocator_1QV4DService', true],
            'App\\Controller\\AdminController::deleteUser' => ['privates', '.service_locator.LQrEdG5', 'get_ServiceLocator_LQrEdG5Service', true],
            'App\\Controller\\AdminController::editUser' => ['privates', '.service_locator.LQrEdG5', 'get_ServiceLocator_LQrEdG5Service', true],
            'App\\Controller\\AdminController::mailDelete' => ['privates', '.service_locator.tYKojH3', 'get_ServiceLocator_TYKojH3Service', true],
            'App\\Controller\\AdminController::mailIndex' => ['privates', '.service_locator.2GsQyvi', 'get_ServiceLocator_2GsQyviService', true],
            'App\\Controller\\AdminController::upload' => ['privates', '.service_locator.Oj2VTeb', 'get_ServiceLocator_Oj2VTebService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\AdminController:admin' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Controller\\AdminController:allowAccess' => ['privates', '.service_locator.BICivRD', 'get_ServiceLocator_BICivRDService', true],
            'App\\Controller\\AdminController:commentAllow' => ['privates', '.service_locator.VaH0zlD', 'get_ServiceLocator_VaH0zlDService', true],
            'App\\Controller\\AdminController:commentDelete' => ['privates', '.service_locator.VaH0zlD', 'get_ServiceLocator_VaH0zlDService', true],
            'App\\Controller\\AdminController:comments' => ['privates', '.service_locator.D_7y3F7', 'get_ServiceLocator_D7y3F7Service', true],
            'App\\Controller\\AdminController:deleteFile' => ['privates', '.service_locator._1_qV4D', 'get_ServiceLocator_1QV4DService', true],
            'App\\Controller\\AdminController:deleteUser' => ['privates', '.service_locator.LQrEdG5', 'get_ServiceLocator_LQrEdG5Service', true],
            'App\\Controller\\AdminController:editUser' => ['privates', '.service_locator.LQrEdG5', 'get_ServiceLocator_LQrEdG5Service', true],
            'App\\Controller\\AdminController:mailDelete' => ['privates', '.service_locator.tYKojH3', 'get_ServiceLocator_TYKojH3Service', true],
            'App\\Controller\\AdminController:mailIndex' => ['privates', '.service_locator.2GsQyvi', 'get_ServiceLocator_2GsQyviService', true],
            'App\\Controller\\AdminController:upload' => ['privates', '.service_locator.Oj2VTeb', 'get_ServiceLocator_Oj2VTebService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\AdminController::admin' => '?',
            'App\\Controller\\AdminController::allowAccess' => '?',
            'App\\Controller\\AdminController::commentAllow' => '?',
            'App\\Controller\\AdminController::commentDelete' => '?',
            'App\\Controller\\AdminController::comments' => '?',
            'App\\Controller\\AdminController::deleteFile' => '?',
            'App\\Controller\\AdminController::deleteUser' => '?',
            'App\\Controller\\AdminController::editUser' => '?',
            'App\\Controller\\AdminController::mailDelete' => '?',
            'App\\Controller\\AdminController::mailIndex' => '?',
            'App\\Controller\\AdminController::upload' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:admin' => '?',
            'App\\Controller\\AdminController:allowAccess' => '?',
            'App\\Controller\\AdminController:commentAllow' => '?',
            'App\\Controller\\AdminController:commentDelete' => '?',
            'App\\Controller\\AdminController:comments' => '?',
            'App\\Controller\\AdminController:deleteFile' => '?',
            'App\\Controller\\AdminController:deleteUser' => '?',
            'App\\Controller\\AdminController:editUser' => '?',
            'App\\Controller\\AdminController:mailDelete' => '?',
            'App\\Controller\\AdminController:mailIndex' => '?',
            'App\\Controller\\AdminController:upload' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}