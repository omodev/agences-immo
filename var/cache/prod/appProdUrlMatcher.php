<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // user_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_homepage');
            }

            return array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::homeAction',  '_route' => 'user_homepage',);
        }

        // ag_platform_home
        if ($pathinfo === '/agence') {
            return array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::homeAction',  '_route' => 'ag_platform_home',);
        }

        if (0 === strpos($pathinfo, '/platform')) {
            // ag_platform_vendre
            if ($pathinfo === '/platform/vendre') {
                return array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::vendreAction',  '_route' => 'ag_platform_vendre',);
            }

            // ag_platform_louer
            if ($pathinfo === '/platform/louer') {
                return array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::louerAction',  '_route' => 'ag_platform_louer',);
            }

            // ag_platform_ajouter
            if ($pathinfo === '/platform/ajouter') {
                return array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::ajouterAction',  '_route' => 'ag_platform_ajouter',);
            }

            // ag_platform_rechercher
            if ($pathinfo === '/platform/rechercher') {
                return array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::rechercherAction',  '_route' => 'ag_platform_rechercher',);
            }

            // ag_platform_vconsulter
            if ($pathinfo === '/platform/consulter') {
                return array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::vconsulterAction',  '_route' => 'ag_platform_vconsulter',);
            }

            // ag_platform_vsupprimer
            if (0 === strpos($pathinfo, '/platform/delete') && preg_match('#^/platform/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ag_platform_vsupprimer')), array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::vsupprimerAction',));
            }

            // ag_platform_vmodifier
            if (0 === strpos($pathinfo, '/platform/modifier') && preg_match('#^/platform/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ag_platform_vmodifier')), array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::vmodifierAction',));
            }

            if (0 === strpos($pathinfo, '/platform/v')) {
                // ag_platform_vvendre
                if (0 === strpos($pathinfo, '/platform/vvendre') && preg_match('#^/platform/vvendre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ag_platform_vvendre')), array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::vvendreAction',));
                }

                // ag_platform_vvendu
                if ($pathinfo === '/platform/vendus') {
                    return array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::vvenduAction',  '_route' => 'ag_platform_vvendu',);
                }

            }

            // ag_platform_lconsulter
            if ($pathinfo === '/platform/consulterl') {
                return array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::lconsulterAction',  '_route' => 'ag_platform_lconsulter',);
            }

            // ag_platform_lsupprimer
            if (0 === strpos($pathinfo, '/platform/delete') && preg_match('#^/platform/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ag_platform_lsupprimer')), array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::lsupprimerAction',));
            }

            // ag_platform_ajouterl
            if ($pathinfo === '/platform/ajouterl') {
                return array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::ajouterlAction',  '_route' => 'ag_platform_ajouterl',);
            }

            // ag_platform_lmodifier
            if (0 === strpos($pathinfo, '/platform/modifier') && preg_match('#^/platform/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ag_platform_lmodifier')), array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::lmodifierAction',));
            }

            if (0 === strpos($pathinfo, '/platform/l')) {
                // ag_platform_llouer
                if (0 === strpos($pathinfo, '/platform/llouer') && preg_match('#^/platform/llouer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ag_platform_llouer')), array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::llouerAction',));
                }

                // ag_platform_lloue
                if ($pathinfo === '/platform/loues') {
                    return array (  '_controller' => 'AGPlatformBundle\\Controller\\AgenceController::lloueAction',  '_route' => 'ag_platform_lloue',);
                }

            }

            // oc_platform_home
            if (preg_match('#^/platform(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_home')), array (  '_controller' => 'OCPlatformBundle\\Controller\\AdvertController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/platform/ad')) {
                // oc_platform_view
                if (0 === strpos($pathinfo, '/platform/advert') && preg_match('#^/platform/advert/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_view')), array (  '_controller' => 'OCPlatformBundle\\Controller\\AdvertController::viewAction',));
                }

                // oc_platform_add
                if ($pathinfo === '/platform/add') {
                    return array (  '_controller' => 'OCPlatformBundle\\Controller\\AdvertController::addAction',  '_route' => 'oc_platform_add',);
                }

            }

            // oc_platform_edit
            if (0 === strpos($pathinfo, '/platform/edit') && preg_match('#^/platform/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_edit')), array (  '_controller' => 'OCPlatformBundle\\Controller\\AdvertController::editAction',));
            }

            // oc_platform_delete
            if (0 === strpos($pathinfo, '/platform/delete') && preg_match('#^/platform/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_delete')), array (  '_controller' => 'OCPlatformBundle\\Controller\\AdvertController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
