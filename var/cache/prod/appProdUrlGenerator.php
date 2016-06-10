<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agence',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_vendre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::vendreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/vendre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_louer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::louerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/louer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_rechercher' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::rechercherAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/rechercher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_vconsulter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::vconsulterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/consulter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_vsupprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::vsupprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_vmodifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::vmodifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_vvendre' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::vvendreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/vvendre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_vvendu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::vvenduAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/vendus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_lconsulter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::lconsulterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/consulterl',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_lsupprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::lsupprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_ajouterl' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::ajouterlAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/ajouterl',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_lmodifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::lmodifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_llouer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::llouerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/llouer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ag_platform_lloue' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::lloueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/loues',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platform_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'OCPlatformBundle\\Controller\\AdvertController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/platform',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platform_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OCPlatformBundle\\Controller\\AdvertController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/advert',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platform_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OCPlatformBundle\\Controller\\AdvertController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platform_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OCPlatformBundle\\Controller\\AdvertController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platform_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OCPlatformBundle\\Controller\\AdvertController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
