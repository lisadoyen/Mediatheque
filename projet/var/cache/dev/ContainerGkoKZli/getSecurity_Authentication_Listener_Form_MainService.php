<?php

namespace ContainerGkoKZli;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Form_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.listener.form.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';

        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));
        $b = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, []);
        $b->setOptions(['login_path' => 'security_login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $b->setProviderKey('main');
        $c = ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService'));

        $d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($container->services['http_kernel'] ?? $container->getHttpKernelService()), $a, [], $c);
        $d->setOptions(['login_path' => 'security_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $container->privates['security.authentication.listener.form.main'] = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.authentication.manager'] ?? $container->getSecurity_Authentication_ManagerService()), new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), $a, 'main', $b, $d, ['login_path' => 'security_login', 'check_path' => 'security_login', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'enable_csrf' => false, 'post_only' => true], $c, ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), NULL);
    }
}
