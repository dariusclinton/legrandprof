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
        'lgp_user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LGP\\UserBundle\\Controller\\MainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_user_become_prof' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LGP\\UserBundle\\Controller\\ProfController::becomeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/prof/become',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_parent_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LGP\\UserBundle\\Controller\\RegistrationParentController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/register/parent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_prof_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LGP\\UserBundle\\Controller\\RegistrationProfController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/register/prof',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_reservation_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LGPReservationBundle:Default:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservation/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_reservation_detail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LGP\\ReservationBundle\\Controller\\ReservationController::detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservation/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_reservation_cart' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LGP\\ReservationBundle\\Controller\\ReservationController::cartAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservation/cart',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_reservation_cart_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LGP\\ReservationBundle\\Controller\\ReservationController::addCartAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservation/cart/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_course_category' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::allCategoriesAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/course/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_course_find_category' => array (  0 =>   array (    0 => 'category',    1 => 'page',  ),  1 =>   array (    '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::categoryAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category',    ),    2 =>     array (      0 => 'text',      1 => '/course/search/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_course_find' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/course/search/profs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_course_find_prof' => array (  0 =>   array (    0 => 'intitule_cours',    1 => 'page',  ),  1 =>   array (    '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchCourseAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'intitule_cours',    ),    2 =>     array (      0 => 'text',      1 => '/course/search/profs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_course_find_prof_refine' => array (  0 =>   array (    0 => 'ville',    1 => 'intitule_cours',    2 => 'page',  ),  1 =>   array (    '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchRefineAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'intitule_cours',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ville',    ),    3 =>     array (      0 => 'text',      1 => '/course/search/profs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_course_find_prof_city' => array (  0 =>   array (    0 => 'ville',    1 => 'page',  ),  1 =>   array (    '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchCityAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ville',    ),    2 =>     array (      0 => 'text',      1 => '/course/search/profs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lgp_core_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LGP\\CoreBundle\\Controller\\LgpController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
