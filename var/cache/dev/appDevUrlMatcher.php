<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // lgp_user_homepage
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lgp_user_homepage');
                }

                return array (  '_controller' => 'LGP\\UserBundle\\Controller\\MainController::indexAction',  '_route' => 'lgp_user_homepage',);
            }

            // lgp_user_become_prof
            if ($pathinfo === '/user/prof/become') {
                return array (  '_controller' => 'LGPUserBundle:Prof:become',  '_route' => 'lgp_user_become_prof',);
            }

            if (0 === strpos($pathinfo, '/user/register/p')) {
                // lgp_parent_registration
                if ($pathinfo === '/user/register/parent') {
                    return array (  '_controller' => 'LGP\\UserBundle\\Controller\\RegistrationParentController::registerAction',  '_route' => 'lgp_parent_registration',);
                }

                // lgp_prof_registration
                if ($pathinfo === '/user/register/prof') {
                    return array (  '_controller' => 'LGP\\UserBundle\\Controller\\RegistrationProfController::registerAction',  '_route' => 'lgp_prof_registration',);
                }

            }

            if (0 === strpos($pathinfo, '/user/p')) {
                // lgp_user_parent_avis_add
                if ($pathinfo === '/user/parent/avis/add') {
                    return array (  '_controller' => 'LGP\\UserBundle\\Controller\\AvisController::addAction',  '_route' => 'lgp_user_parent_avis_add',);
                }

                // lgp_user_prof_avis_delete
                if (0 === strpos($pathinfo, '/user/prof/avis/delete') && preg_match('#^/user/prof/avis/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_prof_avis_delete')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\AvisController::profDeleteAction',));
                }

                if (0 === strpos($pathinfo, '/user/parent/avis')) {
                    // lgp_user_parent_avis_delete
                    if (0 === strpos($pathinfo, '/user/parent/avis/delete') && preg_match('#^/user/parent/avis/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_parent_avis_delete')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\AvisController::parentDeleteAction',));
                    }

                    // lgp_user_parent_avis_update
                    if (0 === strpos($pathinfo, '/user/parent/avis/update') && preg_match('#^/user/parent/avis/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_parent_avis_update')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\AvisController::updateAction',));
                    }

                    // lgp_user_parent_avis
                    if ($pathinfo === '/user/parent/avis') {
                        return array (  '_controller' => 'LGP\\UserBundle\\Controller\\AvisController::parentAction',  '_route' => 'lgp_user_parent_avis',);
                    }

                }

                if (0 === strpos($pathinfo, '/user/prof')) {
                    // lgp_user_prof_avis
                    if ($pathinfo === '/user/prof/avis') {
                        return array (  '_controller' => 'LGP\\UserBundle\\Controller\\AvisController::profAction',  '_route' => 'lgp_user_prof_avis',);
                    }

                    if (0 === strpos($pathinfo, '/user/prof/indisponibilite')) {
                        // lgp_user_prof_indisponibilite
                        if ($pathinfo === '/user/prof/indisponibilite') {
                            return array (  '_controller' => 'LGP\\UserBundle\\Controller\\IndisponibiliteController::indexAction',  '_route' => 'lgp_user_prof_indisponibilite',);
                        }

                        // lgp_user_prof_indisponibilite_add
                        if ($pathinfo === '/user/prof/indisponibilite/add') {
                            return array (  '_controller' => 'LGP\\UserBundle\\Controller\\IndisponibiliteController::addAction',  '_route' => 'lgp_user_prof_indisponibilite_add',);
                        }

                        // lgp_user_prof_indisponibilite_update
                        if (0 === strpos($pathinfo, '/user/prof/indisponibilite/update') && preg_match('#^/user/prof/indisponibilite/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_prof_indisponibilite_update')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\IndisponibiliteController::updateAction',));
                        }

                        // lgp_user_prof_indisponibilite_delete
                        if (0 === strpos($pathinfo, '/user/prof/indisponibilite/delete') && preg_match('#^/user/prof/indisponibilite/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_prof_indisponibilite_delete')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\IndisponibiliteController::deleteAction',));
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/user/message')) {
                if (0 === strpos($pathinfo, '/user/messages')) {
                    // lgp_user_message_send
                    if ($pathinfo === '/user/messages/send') {
                        return array (  '_controller' => 'LGP\\UserBundle\\Controller\\MessageController::sendAction',  '_route' => 'lgp_user_message_send',);
                    }

                    // lgp_user_message_receive
                    if ($pathinfo === '/user/messages/receive') {
                        return array (  '_controller' => 'LGP\\UserBundle\\Controller\\MessageController::receiveAction',  '_route' => 'lgp_user_message_receive',);
                    }

                }

                // lgp_user_message_new
                if ($pathinfo === '/user/message/new') {
                    return array (  '_controller' => 'LGP\\UserBundle\\Controller\\MessageController::newAction',  '_route' => 'lgp_user_message_new',);
                }

                // lgp_user_message_delete
                if (0 === strpos($pathinfo, '/user/message/delete') && preg_match('#^/user/message/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_message_delete')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\MessageController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/reservation')) {
            // lgp_reservation_homepage
            if (rtrim($pathinfo, '/') === '/reservation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lgp_reservation_homepage');
                }

                return array (  '_controller' => 'LGPReservationBundle:Default:index',  '_route' => 'lgp_reservation_homepage',);
            }

            // lgp_reservation_detail
            if (0 === strpos($pathinfo, '/reservation/detail') && preg_match('#^/reservation/detail/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_reservation_detail')), array (  '_controller' => 'LGP\\ReservationBundle\\Controller\\ReservationController::detailAction',));
            }

            if (0 === strpos($pathinfo, '/reservation/cart')) {
                // lgp_reservation_cart
                if ($pathinfo === '/reservation/cart') {
                    return array (  '_controller' => 'LGP\\ReservationBundle\\Controller\\ReservationController::cartAction',  '_route' => 'lgp_reservation_cart',);
                }

                // lgp_reservation_cart_add
                if (0 === strpos($pathinfo, '/reservation/cart/add') && preg_match('#^/reservation/cart/add/(?P<profId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_reservation_cart_add')), array (  '_controller' => 'LGP\\ReservationBundle\\Controller\\ReservationController::addCartAction',));
                }

                // lgp_reservation_cart_remove
                if (0 === strpos($pathinfo, '/reservation/cart/remove') && preg_match('#^/reservation/cart/remove/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_reservation_cart_remove')), array (  '_controller' => 'LGP\\ReservationBundle\\Controller\\ReservationController::removeCartAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/course')) {
            // lgp_course_category
            if (0 === strpos($pathinfo, '/course/categories') && preg_match('#^/course/categories(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_category')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::allCategoriesAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/course/search')) {
                // lgp_course_find_category
                if (0 === strpos($pathinfo, '/course/search/categories') && preg_match('#^/course/search/categories/(?P<category>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find_category')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::categoryAction',  'page' => 1,));
                }

                if (0 === strpos($pathinfo, '/course/search/profs')) {
                    // lgp_course_find
                    if (preg_match('#^/course/search/profs(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchAction',  'page' => 1,));
                    }

                    // lgp_course_find_prof
                    if (preg_match('#^/course/search/profs/(?P<intitule_cours>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find_prof')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchCourseAction',  'page' => 1,));
                    }

                    // lgp_course_find_prof_refine
                    if (preg_match('#^/course/search/profs/(?P<ville>[^/]++)/(?P<intitule_cours>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find_prof_refine')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchRefineAction',  'page' => 1,));
                    }

                }

                // lgp_course_find_prof_city
                if (0 === strpos($pathinfo, '/course/search/ville') && preg_match('#^/course/search/ville/(?P<ville>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find_prof_city')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchCityAction',  'page' => 1,));
                }

            }

            // lgp_course_update_classe
            if (0 === strpos($pathinfo, '/course/update') && preg_match('#^/course/update/(?P<profId>\\d+)/(?P<coursId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_update_classe')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::updateClasseAction',));
            }

        }

        // lgp_core_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lgp_core_homepage');
            }

            return array (  '_controller' => 'LGP\\CoreBundle\\Controller\\LgpController::indexAction',  '_route' => 'lgp_core_homepage',);
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
