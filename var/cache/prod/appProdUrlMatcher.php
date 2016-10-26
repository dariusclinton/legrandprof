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

        if (0 === strpos($pathinfo, '/user')) {
            // lgp_user_homepage
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lgp_user_homepage');
                }

                return array (  '_controller' => 'LGP\\UserBundle\\Controller\\MainController::indexAction',  '_route' => 'lgp_user_homepage',);
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
                // lgp_user_prof_dashboard
                if ($pathinfo === '/user/prof/dashboard') {
                    return array (  '_controller' => 'LGP\\UserBundle\\Controller\\DashboardController::profAction',  '_route' => 'lgp_user_prof_dashboard',);
                }

                // lgp_user_parent_dashboard
                if ($pathinfo === '/user/parent/dashboard') {
                    return array (  '_controller' => 'LGP\\UserBundle\\Controller\\DashboardController::parentAction',  '_route' => 'lgp_user_parent_dashboard',);
                }

            }

            if (0 === strpos($pathinfo, '/user/avis')) {
                // lgp_user_avis_add
                if ($pathinfo === '/user/avis/add') {
                    return array (  '_controller' => 'LGP\\UserBundle\\Controller\\AvisController::addAction',  '_route' => 'lgp_user_avis_add',);
                }

                // lgp_user_avis_voir
                if (0 === strpos($pathinfo, '/user/avis/voir') && preg_match('#^/user/avis/voir/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_avis_voir')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\AvisController::voirAction',));
                }

                // lgp_user_avis_delete
                if (0 === strpos($pathinfo, '/user/avis/delete') && preg_match('#^/user/avis/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_avis_delete')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\AvisController::deleteAction',));
                }

                // lgp_user_avis_update
                if (0 === strpos($pathinfo, '/user/avis/update') && preg_match('#^/user/avis/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_avis_update')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\AvisController::updateAction',));
                }

                // lgp_user_avis
                if ($pathinfo === '/user/avis') {
                    return array (  '_controller' => 'LGP\\UserBundle\\Controller\\AvisController::indexAction',  '_route' => 'lgp_user_avis',);
                }

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

                // lgp_user_message_voir
                if (preg_match('#^/user/message/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_message_voir')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\MessageController::voirAction',));
                }

            }

            if (0 === strpos($pathinfo, '/user/prof')) {
                if (0 === strpos($pathinfo, '/user/prof/cours')) {
                    // lgp_user_prof_cours
                    if ($pathinfo === '/user/prof/cours') {
                        return array (  '_controller' => 'LGP\\UserBundle\\Controller\\CoursController::indexAction',  '_route' => 'lgp_user_prof_cours',);
                    }

                    // lgp_user_prof_cours_add
                    if ($pathinfo === '/user/prof/cours/add') {
                        return array (  '_controller' => 'LGP\\UserBundle\\Controller\\CoursController::addAction',  '_route' => 'lgp_user_prof_cours_add',);
                    }

                    // lgp_user_prof_cours_update
                    if (0 === strpos($pathinfo, '/user/prof/cours/update') && preg_match('#^/user/prof/cours/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_prof_cours_update')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\CoursController::updateAction',));
                    }

                    // lgp_user_prof_cours_delete
                    if (0 === strpos($pathinfo, '/user/prof/cours/delete') && preg_match('#^/user/prof/cours/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_prof_cours_delete')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\CoursController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/user/prof/evaluations')) {
                    // lgp_user_prof_evaluation
                    if ($pathinfo === '/user/prof/evaluations') {
                        return array (  '_controller' => 'LGP\\UserBundle\\Controller\\EvaluationController::indexAction',  '_route' => 'lgp_user_prof_evaluation',);
                    }

                    // lgp_user_prof_evaluation_delete
                    if (0 === strpos($pathinfo, '/user/prof/evaluations/delete') && preg_match('#^/user/prof/evaluations/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_prof_evaluation_delete')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\EvaluationController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/user/prof/seance-de-cours')) {
                    // lgp_user_prof_seance_de_cours
                    if (rtrim($pathinfo, '/') === '/user/prof/seance-de-cours') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'lgp_user_prof_seance_de_cours');
                        }

                        return array (  '_controller' => 'LGP\\UserBundle\\Controller\\SeanceDeCoursController::indexAction',  '_route' => 'lgp_user_prof_seance_de_cours',);
                    }

                    // lgp_user_prof_seance_de_cours_delete
                    if (0 === strpos($pathinfo, '/user/prof/seance-de-cours/delete') && preg_match('#^/user/prof/seance\\-de\\-cours/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_prof_seance_de_cours_delete')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\SeanceDeCoursController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/user/anomalie')) {
                // lgp_user_anomalies
                if ($pathinfo === '/user/anomalies') {
                    return array (  '_controller' => 'LGP\\UserBundle\\Controller\\AnomalieController::indexAction',  '_route' => 'lgp_user_anomalies',);
                }

                // lgp_user_anomalie_add
                if ($pathinfo === '/user/anomalie/add') {
                    return array (  '_controller' => 'LGP\\UserBundle\\Controller\\AnomalieController::addAction',  '_route' => 'lgp_user_anomalie_add',);
                }

                // lgp_user_anomalie_update
                if (0 === strpos($pathinfo, '/user/anomalie/update') && preg_match('#^/user/anomalie/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_anomalie_update')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\AnomalieController::updateAction',));
                }

                // lgp_user_anomalie_delete
                if (0 === strpos($pathinfo, '/user/anomalie/delete') && preg_match('#^/user/anomalie/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_anomalie_delete')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\AnomalieController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/user/nouvelle')) {
                // lgp_user_nouvelles_categories_cours
                if ($pathinfo === '/user/nouvelles-categories-cours') {
                    return array (  '_controller' => 'LGP\\UserBundle\\Controller\\NouvelleCategorieCoursController::indexAction',  '_route' => 'lgp_user_nouvelles_categories_cours',);
                }

                if (0 === strpos($pathinfo, '/user/nouvelle-categorie-cours')) {
                    // lgp_user_nouvelle_categorie_cours_add
                    if ($pathinfo === '/user/nouvelle-categorie-cours/add') {
                        return array (  '_controller' => 'LGP\\UserBundle\\Controller\\NouvelleCategorieCoursController::addAction',  '_route' => 'lgp_user_nouvelle_categorie_cours_add',);
                    }

                    // lgp_user_nouvelle_categorie_cours_update
                    if (0 === strpos($pathinfo, '/user/nouvelle-categorie-cours/update') && preg_match('#^/user/nouvelle\\-categorie\\-cours/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_nouvelle_categorie_cours_update')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\NouvelleCategorieCoursController::updateAction',));
                    }

                    // lgp_user_nouvelle_categorie_cours_delete
                    if (0 === strpos($pathinfo, '/user/nouvelle-categorie-cours/delete') && preg_match('#^/user/nouvelle\\-categorie\\-cours/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_nouvelle_categorie_cours_delete')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\NouvelleCategorieCoursController::deleteAction',));
                    }

                }

            }

            // lgp_user_mes_reservations
            if ($pathinfo === '/user/mes-reservations') {
                return array (  '_controller' => 'LGP\\UserBundle\\Controller\\ReservationController::indexAction',  '_route' => 'lgp_user_mes_reservations',);
            }

            // lgp_user_programme_et_jours_de_cours_voir
            if (0 === strpos($pathinfo, '/user/reservation-enseignement') && preg_match('#^/user/reservation\\-enseignement/(?P<id>\\d+)/programme\\-et\\-jours\\-de\\-cours$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_programme_et_jours_de_cours_voir')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\ReservationController::showProgrammeAndJoursDeCoursAction',));
            }

            if (0 === strpos($pathinfo, '/user/prof')) {
                // lgp_user_prof_demandes_de_cours
                if ($pathinfo === '/user/prof/mes-demandes-de-cours') {
                    return array (  '_controller' => 'LGP\\UserBundle\\Controller\\MesDemandesDeCoursController::indexAction',  '_route' => 'lgp_user_prof_demandes_de_cours',);
                }

                // lgp_user_prof_demande_de_cours_edit
                if (0 === strpos($pathinfo, '/user/prof/demande-de-cours/edit') && preg_match('#^/user/prof/demande\\-de\\-cours/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_user_prof_demande_de_cours_edit')), array (  '_controller' => 'LGP\\UserBundle\\Controller\\MesDemandesDeCoursController::editAction',));
                }

            }

            // lgp_user_mes_paiements
            if ($pathinfo === '/user/mes-paiements') {
                return array (  '_controller' => 'LGP\\UserBundle\\Controller\\PaiementController::indexAction',  '_route' => 'lgp_user_mes_paiements',);
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
            if (0 === strpos($pathinfo, '/reservation/detail') && preg_match('#^/reservation/detail/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_reservation_detail')), array (  '_controller' => 'LGP\\ReservationBundle\\Controller\\ReservationController::detailAction',));
            }

            if (0 === strpos($pathinfo, '/reservation/c')) {
                // lgp_reservation_confirm
                if (0 === strpos($pathinfo, '/reservation/cart/confirm') && preg_match('#^/reservation/cart/confirm/(?P<userId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_reservation_confirm')), array (  '_controller' => 'LGP\\ReservationBundle\\Controller\\ReservationController::confirmReservationAction',));
                }

                // lgp_reservation_confirm_page
                if ($pathinfo === '/reservation/confirmation') {
                    return array (  '_controller' => 'LGP\\ReservationBundle\\Controller\\ReservationController::confirmviewReservationAction',  '_route' => 'lgp_reservation_confirm_page',);
                }

            }

            // lgp_reservation_paiement
            if ($pathinfo === '/reservation/paiement') {
                return array (  '_controller' => 'LGP\\ReservationBundle\\Controller\\ReservationController::paiementModeAction',  '_route' => 'lgp_reservation_paiement',);
            }

            if (0 === strpos($pathinfo, '/reservation/cart')) {
                // lgp_reservation_cart
                if ($pathinfo === '/reservation/cart') {
                    return array (  '_controller' => 'LGP\\ReservationBundle\\Controller\\CartController::cartAction',  '_route' => 'lgp_reservation_cart',);
                }

                // lgp_reservation_cart_update_paiement
                if ($pathinfo === '/reservation/cart/paiement') {
                    return array (  '_controller' => 'LGP\\ReservationBundle\\Controller\\CartController::cartUpdatePaiementAction',  '_route' => 'lgp_reservation_cart_update_paiement',);
                }

                // lgp_reservation_cart_add
                if (0 === strpos($pathinfo, '/reservation/cart/add') && preg_match('#^/reservation/cart/add/(?P<profId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_reservation_cart_add')), array (  '_controller' => 'LGP\\ReservationBundle\\Controller\\CartController::addCartAction',));
                }

                // lgp_reservation_cart_remove
                if (0 === strpos($pathinfo, '/reservation/cart/remove') && preg_match('#^/reservation/cart/remove/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_reservation_cart_remove')), array (  '_controller' => 'LGP\\ReservationBundle\\Controller\\CartController::removeCartAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/course')) {
            // lgp_course_categories
            if (0 === strpos($pathinfo, '/course/categories') && preg_match('#^/course/categories(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_categories')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CategorieController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/course/search')) {
                // lgp_course_find_category
                if (0 === strpos($pathinfo, '/course/search/categories') && preg_match('#^/course/search/categories/(?P<slug>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find_category')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CategorieController::courseListAction',  'page' => 1,));
                }

                // lgp_course_find
                if (0 === strpos($pathinfo, '/course/search/profs') && preg_match('#^/course/search/profs(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchAction',  'page' => 1,));
                }

                // lgp_course_find_prof_course
                if (0 === strpos($pathinfo, '/course/search/course') && preg_match('#^/course/search/course/(?P<slug_course>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find_prof_course')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchCourseAction',  'page' => 1,));
                }

                // lgp_course_find_prof_name
                if (0 === strpos($pathinfo, '/course/search/profs-name') && preg_match('#^/course/search/profs\\-name/(?P<prof_name>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find_prof_name')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchProfNameAction',  'page' => 1,));
                }

                // lgp_course_find_prof_category
                if (0 === strpos($pathinfo, '/course/search/category') && preg_match('#^/course/search/category/(?P<category_name>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find_prof_category')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchCategorieNameAction',  'page' => 1,));
                }

                if (0 === strpos($pathinfo, '/course/search/profs')) {
                    // lgp_course_find_prof_course_city
                    if (preg_match('#^/course/search/profs/(?P<slug_ville>[^/]++)/(?P<slug_cours>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find_prof_course_city')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchCourseCityAction',  'page' => 1,));
                    }

                    // lgp_course_find_prof_course_quarter
                    if (preg_match('#^/course/search/profs/(?P<slug_ville>[^/]++)/(?P<slug_quartier>[^/]++)/(?P<slug_cours>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find_prof_course_quarter')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchCourseQuarterAction',  'page' => 1,));
                    }

                }

                if (0 === strpos($pathinfo, '/course/search/ville')) {
                    // lgp_course_find_prof_city
                    if (preg_match('#^/course/search/ville/(?P<slugVille>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find_prof_city')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchCityAction',  'page' => 1,));
                    }

                    // lgp_course_find_prof_city_quarter
                    if (preg_match('#^/course/search/ville/(?P<slug_ville>[^/]++)/quartier/(?P<slug_quartier>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_find_prof_city_quarter')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\CourseController::searchQuarterAction',  'page' => 1,));
                    }

                }

            }

            // lgp_course_update_classe
            if (0 === strpos($pathinfo, '/course/update') && preg_match('#^/course/update/(?P<profId>\\d+)/(?P<coursId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_lgp_course_update_classe;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_update_classe')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\UpdateDataAjaxController::updateClasseAction',));
            }
            not_lgp_course_update_classe:

            // lgp_course_all_intitule
            if ($pathinfo === '/course/all/intitule') {
                return array (  '_controller' => 'LGP\\CourseBundle\\Controller\\UpdateDataAjaxController::updateCourseDataAction',  '_route' => 'lgp_course_all_intitule',);
            }

            // lgp_prof_all_names
            if ($pathinfo === '/course/profs/names') {
                return array (  '_controller' => 'LGP\\CourseBundle\\Controller\\UpdateDataAjaxController::updateProfsNamesDataAction',  '_route' => 'lgp_prof_all_names',);
            }

            // lgp_course_all_categories
            if ($pathinfo === '/course/all/categories') {
                return array (  '_controller' => 'LGP\\CourseBundle\\Controller\\UpdateDataAjaxController::updateCategoriesNamesAction',  'page' => 1,  '_route' => 'lgp_course_all_categories',);
            }

            // lgp_course_profile_prof
            if (0 === strpos($pathinfo, '/course/profile') && preg_match('#^/course/profile/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lgp_course_profile_prof')), array (  '_controller' => 'LGP\\CourseBundle\\Controller\\EnseignementController::profileAction',));
            }

        }

        // lgp_core_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lgp_core_homepage');
            }

            return array (  '_controller' => 'LGP\\CoreBundle\\Controller\\LgpController::indexAction',  '_route' => 'lgp_core_homepage',);
        }

        // lgp_core_how_it_works
        if ($pathinfo === '/how-it-works') {
            return array (  '_controller' => 'LGP\\CoreBundle\\Controller\\LgpController::howAction',  '_route' => 'lgp_core_how_it_works',);
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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
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

                return array (  '_controller' => 'LGP\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'LGP\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
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

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/user/p')) {
                if (0 === strpos($pathinfo, '/admin/user/prof')) {
                    // admin_lgp_user_prof_list
                    if ($pathinfo === '/admin/user/prof/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'lgp.admin.prof',  '_sonata_name' => 'admin_lgp_user_prof_list',  '_route' => 'admin_lgp_user_prof_list',);
                    }

                    // admin_lgp_user_prof_create
                    if ($pathinfo === '/admin/user/prof/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'lgp.admin.prof',  '_sonata_name' => 'admin_lgp_user_prof_create',  '_route' => 'admin_lgp_user_prof_create',);
                    }

                    // admin_lgp_user_prof_batch
                    if ($pathinfo === '/admin/user/prof/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'lgp.admin.prof',  '_sonata_name' => 'admin_lgp_user_prof_batch',  '_route' => 'admin_lgp_user_prof_batch',);
                    }

                    // admin_lgp_user_prof_edit
                    if (preg_match('#^/admin/user/prof/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_user_prof_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'lgp.admin.prof',  '_sonata_name' => 'admin_lgp_user_prof_edit',));
                    }

                    // admin_lgp_user_prof_delete
                    if (preg_match('#^/admin/user/prof/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_user_prof_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'lgp.admin.prof',  '_sonata_name' => 'admin_lgp_user_prof_delete',));
                    }

                    // admin_lgp_user_prof_show
                    if (preg_match('#^/admin/user/prof/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_user_prof_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'lgp.admin.prof',  '_sonata_name' => 'admin_lgp_user_prof_show',));
                    }

                    // admin_lgp_user_prof_export
                    if ($pathinfo === '/admin/user/prof/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'lgp.admin.prof',  '_sonata_name' => 'admin_lgp_user_prof_export',  '_route' => 'admin_lgp_user_prof_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/user/parent')) {
                    // admin_lgp_user_parents_list
                    if ($pathinfo === '/admin/user/parent/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'lgp.admin.parent',  '_sonata_name' => 'admin_lgp_user_parents_list',  '_route' => 'admin_lgp_user_parents_list',);
                    }

                    // admin_lgp_user_parents_create
                    if ($pathinfo === '/admin/user/parent/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'lgp.admin.parent',  '_sonata_name' => 'admin_lgp_user_parents_create',  '_route' => 'admin_lgp_user_parents_create',);
                    }

                    // admin_lgp_user_parents_batch
                    if ($pathinfo === '/admin/user/parent/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'lgp.admin.parent',  '_sonata_name' => 'admin_lgp_user_parents_batch',  '_route' => 'admin_lgp_user_parents_batch',);
                    }

                    // admin_lgp_user_parents_edit
                    if (preg_match('#^/admin/user/parent/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_user_parents_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'lgp.admin.parent',  '_sonata_name' => 'admin_lgp_user_parents_edit',));
                    }

                    // admin_lgp_user_parents_delete
                    if (preg_match('#^/admin/user/parent/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_user_parents_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'lgp.admin.parent',  '_sonata_name' => 'admin_lgp_user_parents_delete',));
                    }

                    // admin_lgp_user_parents_show
                    if (preg_match('#^/admin/user/parent/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_user_parents_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'lgp.admin.parent',  '_sonata_name' => 'admin_lgp_user_parents_show',));
                    }

                    // admin_lgp_user_parents_export
                    if ($pathinfo === '/admin/user/parent/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'lgp.admin.parent',  '_sonata_name' => 'admin_lgp_user_parents_export',  '_route' => 'admin_lgp_user_parents_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/quartiers-cibles')) {
                // admin_lgp_user_quartier_list
                if ($pathinfo === '/admin/quartiers-cibles/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'lgp.admin.quartier_cible',  '_sonata_name' => 'admin_lgp_user_quartier_list',  '_route' => 'admin_lgp_user_quartier_list',);
                }

                // admin_lgp_user_quartier_create
                if ($pathinfo === '/admin/quartiers-cibles/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'lgp.admin.quartier_cible',  '_sonata_name' => 'admin_lgp_user_quartier_create',  '_route' => 'admin_lgp_user_quartier_create',);
                }

                // admin_lgp_user_quartier_batch
                if ($pathinfo === '/admin/quartiers-cibles/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'lgp.admin.quartier_cible',  '_sonata_name' => 'admin_lgp_user_quartier_batch',  '_route' => 'admin_lgp_user_quartier_batch',);
                }

                // admin_lgp_user_quartier_edit
                if (preg_match('#^/admin/quartiers\\-cibles/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_user_quartier_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'lgp.admin.quartier_cible',  '_sonata_name' => 'admin_lgp_user_quartier_edit',));
                }

                // admin_lgp_user_quartier_delete
                if (preg_match('#^/admin/quartiers\\-cibles/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_user_quartier_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'lgp.admin.quartier_cible',  '_sonata_name' => 'admin_lgp_user_quartier_delete',));
                }

                // admin_lgp_user_quartier_show
                if (preg_match('#^/admin/quartiers\\-cibles/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_user_quartier_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'lgp.admin.quartier_cible',  '_sonata_name' => 'admin_lgp_user_quartier_show',));
                }

                // admin_lgp_user_quartier_export
                if ($pathinfo === '/admin/quartiers-cibles/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'lgp.admin.quartier_cible',  '_sonata_name' => 'admin_lgp_user_quartier_export',  '_route' => 'admin_lgp_user_quartier_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/re')) {
                if (0 === strpos($pathinfo, '/admin/reservation')) {
                    // admin_lgp_reservation_reservation_list
                    if ($pathinfo === '/admin/reservation/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'lgp.admin.reservation',  '_sonata_name' => 'admin_lgp_reservation_reservation_list',  '_route' => 'admin_lgp_reservation_reservation_list',);
                    }

                    // admin_lgp_reservation_reservation_create
                    if ($pathinfo === '/admin/reservation/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'lgp.admin.reservation',  '_sonata_name' => 'admin_lgp_reservation_reservation_create',  '_route' => 'admin_lgp_reservation_reservation_create',);
                    }

                    // admin_lgp_reservation_reservation_batch
                    if ($pathinfo === '/admin/reservation/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'lgp.admin.reservation',  '_sonata_name' => 'admin_lgp_reservation_reservation_batch',  '_route' => 'admin_lgp_reservation_reservation_batch',);
                    }

                    // admin_lgp_reservation_reservation_edit
                    if (preg_match('#^/admin/reservation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_reservation_reservation_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'lgp.admin.reservation',  '_sonata_name' => 'admin_lgp_reservation_reservation_edit',));
                    }

                    // admin_lgp_reservation_reservation_delete
                    if (preg_match('#^/admin/reservation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_reservation_reservation_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'lgp.admin.reservation',  '_sonata_name' => 'admin_lgp_reservation_reservation_delete',));
                    }

                    // admin_lgp_reservation_reservation_show
                    if (preg_match('#^/admin/reservation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_reservation_reservation_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'lgp.admin.reservation',  '_sonata_name' => 'admin_lgp_reservation_reservation_show',));
                    }

                    // admin_lgp_reservation_reservation_export
                    if ($pathinfo === '/admin/reservation/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'lgp.admin.reservation',  '_sonata_name' => 'admin_lgp_reservation_reservation_export',  '_route' => 'admin_lgp_reservation_reservation_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/remunerations')) {
                    // admin_lgp_user_remuneration_list
                    if ($pathinfo === '/admin/remunerations/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'lgp.admin.remuneration',  '_sonata_name' => 'admin_lgp_user_remuneration_list',  '_route' => 'admin_lgp_user_remuneration_list',);
                    }

                    // admin_lgp_user_remuneration_create
                    if ($pathinfo === '/admin/remunerations/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'lgp.admin.remuneration',  '_sonata_name' => 'admin_lgp_user_remuneration_create',  '_route' => 'admin_lgp_user_remuneration_create',);
                    }

                    // admin_lgp_user_remuneration_batch
                    if ($pathinfo === '/admin/remunerations/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'lgp.admin.remuneration',  '_sonata_name' => 'admin_lgp_user_remuneration_batch',  '_route' => 'admin_lgp_user_remuneration_batch',);
                    }

                    // admin_lgp_user_remuneration_edit
                    if (preg_match('#^/admin/remunerations/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_user_remuneration_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'lgp.admin.remuneration',  '_sonata_name' => 'admin_lgp_user_remuneration_edit',));
                    }

                    // admin_lgp_user_remuneration_delete
                    if (preg_match('#^/admin/remunerations/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_user_remuneration_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'lgp.admin.remuneration',  '_sonata_name' => 'admin_lgp_user_remuneration_delete',));
                    }

                    // admin_lgp_user_remuneration_show
                    if (preg_match('#^/admin/remunerations/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_user_remuneration_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'lgp.admin.remuneration',  '_sonata_name' => 'admin_lgp_user_remuneration_show',));
                    }

                    // admin_lgp_user_remuneration_export
                    if ($pathinfo === '/admin/remunerations/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'lgp.admin.remuneration',  '_sonata_name' => 'admin_lgp_user_remuneration_export',  '_route' => 'admin_lgp_user_remuneration_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/JourDeCours')) {
                // admin_lgp_reservation_jourdecours_list
                if ($pathinfo === '/admin/JourDeCours/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'lgp.admin.jourdecours',  '_sonata_name' => 'admin_lgp_reservation_jourdecours_list',  '_route' => 'admin_lgp_reservation_jourdecours_list',);
                }

                // admin_lgp_reservation_jourdecours_create
                if ($pathinfo === '/admin/JourDeCours/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'lgp.admin.jourdecours',  '_sonata_name' => 'admin_lgp_reservation_jourdecours_create',  '_route' => 'admin_lgp_reservation_jourdecours_create',);
                }

                // admin_lgp_reservation_jourdecours_batch
                if ($pathinfo === '/admin/JourDeCours/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'lgp.admin.jourdecours',  '_sonata_name' => 'admin_lgp_reservation_jourdecours_batch',  '_route' => 'admin_lgp_reservation_jourdecours_batch',);
                }

                // admin_lgp_reservation_jourdecours_edit
                if (preg_match('#^/admin/JourDeCours/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_reservation_jourdecours_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'lgp.admin.jourdecours',  '_sonata_name' => 'admin_lgp_reservation_jourdecours_edit',));
                }

                // admin_lgp_reservation_jourdecours_delete
                if (preg_match('#^/admin/JourDeCours/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_reservation_jourdecours_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'lgp.admin.jourdecours',  '_sonata_name' => 'admin_lgp_reservation_jourdecours_delete',));
                }

                // admin_lgp_reservation_jourdecours_show
                if (preg_match('#^/admin/JourDeCours/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_reservation_jourdecours_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'lgp.admin.jourdecours',  '_sonata_name' => 'admin_lgp_reservation_jourdecours_show',));
                }

                // admin_lgp_reservation_jourdecours_export
                if ($pathinfo === '/admin/JourDeCours/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'lgp.admin.jourdecours',  '_sonata_name' => 'admin_lgp_reservation_jourdecours_export',  '_route' => 'admin_lgp_reservation_jourdecours_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/reservation-enseignement')) {
                // admin_lgp_reservation_reservationenseignement_list
                if ($pathinfo === '/admin/reservation-enseignement/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'lgp.admin.reservationenseignement',  '_sonata_name' => 'admin_lgp_reservation_reservationenseignement_list',  '_route' => 'admin_lgp_reservation_reservationenseignement_list',);
                }

                // admin_lgp_reservation_reservationenseignement_create
                if ($pathinfo === '/admin/reservation-enseignement/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'lgp.admin.reservationenseignement',  '_sonata_name' => 'admin_lgp_reservation_reservationenseignement_create',  '_route' => 'admin_lgp_reservation_reservationenseignement_create',);
                }

                // admin_lgp_reservation_reservationenseignement_batch
                if ($pathinfo === '/admin/reservation-enseignement/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'lgp.admin.reservationenseignement',  '_sonata_name' => 'admin_lgp_reservation_reservationenseignement_batch',  '_route' => 'admin_lgp_reservation_reservationenseignement_batch',);
                }

                // admin_lgp_reservation_reservationenseignement_edit
                if (preg_match('#^/admin/reservation\\-enseignement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_reservation_reservationenseignement_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'lgp.admin.reservationenseignement',  '_sonata_name' => 'admin_lgp_reservation_reservationenseignement_edit',));
                }

                // admin_lgp_reservation_reservationenseignement_delete
                if (preg_match('#^/admin/reservation\\-enseignement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_reservation_reservationenseignement_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'lgp.admin.reservationenseignement',  '_sonata_name' => 'admin_lgp_reservation_reservationenseignement_delete',));
                }

                // admin_lgp_reservation_reservationenseignement_show
                if (preg_match('#^/admin/reservation\\-enseignement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_reservation_reservationenseignement_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'lgp.admin.reservationenseignement',  '_sonata_name' => 'admin_lgp_reservation_reservationenseignement_show',));
                }

                // admin_lgp_reservation_reservationenseignement_export
                if ($pathinfo === '/admin/reservation-enseignement/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'lgp.admin.reservationenseignement',  '_sonata_name' => 'admin_lgp_reservation_reservationenseignement_export',  '_route' => 'admin_lgp_reservation_reservationenseignement_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/C')) {
                if (0 === strpos($pathinfo, '/admin/Categories-cours')) {
                    // admin_lgp_course_categorie_list
                    if ($pathinfo === '/admin/Categories-cours/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'lgp.admin.categorie_cours',  '_sonata_name' => 'admin_lgp_course_categorie_list',  '_route' => 'admin_lgp_course_categorie_list',);
                    }

                    // admin_lgp_course_categorie_create
                    if ($pathinfo === '/admin/Categories-cours/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'lgp.admin.categorie_cours',  '_sonata_name' => 'admin_lgp_course_categorie_create',  '_route' => 'admin_lgp_course_categorie_create',);
                    }

                    // admin_lgp_course_categorie_batch
                    if ($pathinfo === '/admin/Categories-cours/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'lgp.admin.categorie_cours',  '_sonata_name' => 'admin_lgp_course_categorie_batch',  '_route' => 'admin_lgp_course_categorie_batch',);
                    }

                    // admin_lgp_course_categorie_edit
                    if (preg_match('#^/admin/Categories\\-cours/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_course_categorie_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'lgp.admin.categorie_cours',  '_sonata_name' => 'admin_lgp_course_categorie_edit',));
                    }

                    // admin_lgp_course_categorie_delete
                    if (preg_match('#^/admin/Categories\\-cours/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_course_categorie_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'lgp.admin.categorie_cours',  '_sonata_name' => 'admin_lgp_course_categorie_delete',));
                    }

                    // admin_lgp_course_categorie_show
                    if (preg_match('#^/admin/Categories\\-cours/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_course_categorie_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'lgp.admin.categorie_cours',  '_sonata_name' => 'admin_lgp_course_categorie_show',));
                    }

                    // admin_lgp_course_categorie_export
                    if ($pathinfo === '/admin/Categories-cours/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'lgp.admin.categorie_cours',  '_sonata_name' => 'admin_lgp_course_categorie_export',  '_route' => 'admin_lgp_course_categorie_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/Cours')) {
                    // admin_lgp_course_cours_list
                    if ($pathinfo === '/admin/Cours/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'lgp.admin.cours',  '_sonata_name' => 'admin_lgp_course_cours_list',  '_route' => 'admin_lgp_course_cours_list',);
                    }

                    // admin_lgp_course_cours_create
                    if ($pathinfo === '/admin/Cours/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'lgp.admin.cours',  '_sonata_name' => 'admin_lgp_course_cours_create',  '_route' => 'admin_lgp_course_cours_create',);
                    }

                    // admin_lgp_course_cours_batch
                    if ($pathinfo === '/admin/Cours/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'lgp.admin.cours',  '_sonata_name' => 'admin_lgp_course_cours_batch',  '_route' => 'admin_lgp_course_cours_batch',);
                    }

                    // admin_lgp_course_cours_edit
                    if (preg_match('#^/admin/Cours/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_course_cours_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'lgp.admin.cours',  '_sonata_name' => 'admin_lgp_course_cours_edit',));
                    }

                    // admin_lgp_course_cours_delete
                    if (preg_match('#^/admin/Cours/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_course_cours_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'lgp.admin.cours',  '_sonata_name' => 'admin_lgp_course_cours_delete',));
                    }

                    // admin_lgp_course_cours_show
                    if (preg_match('#^/admin/Cours/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_course_cours_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'lgp.admin.cours',  '_sonata_name' => 'admin_lgp_course_cours_show',));
                    }

                    // admin_lgp_course_cours_export
                    if ($pathinfo === '/admin/Cours/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'lgp.admin.cours',  '_sonata_name' => 'admin_lgp_course_cours_export',  '_route' => 'admin_lgp_course_cours_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/Enseignement')) {
                // admin_lgp_course_enseignement_list
                if ($pathinfo === '/admin/Enseignement/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'lgp.admin.enseignement',  '_sonata_name' => 'admin_lgp_course_enseignement_list',  '_route' => 'admin_lgp_course_enseignement_list',);
                }

                // admin_lgp_course_enseignement_create
                if ($pathinfo === '/admin/Enseignement/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'lgp.admin.enseignement',  '_sonata_name' => 'admin_lgp_course_enseignement_create',  '_route' => 'admin_lgp_course_enseignement_create',);
                }

                // admin_lgp_course_enseignement_batch
                if ($pathinfo === '/admin/Enseignement/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'lgp.admin.enseignement',  '_sonata_name' => 'admin_lgp_course_enseignement_batch',  '_route' => 'admin_lgp_course_enseignement_batch',);
                }

                // admin_lgp_course_enseignement_edit
                if (preg_match('#^/admin/Enseignement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_course_enseignement_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'lgp.admin.enseignement',  '_sonata_name' => 'admin_lgp_course_enseignement_edit',));
                }

                // admin_lgp_course_enseignement_delete
                if (preg_match('#^/admin/Enseignement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_course_enseignement_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'lgp.admin.enseignement',  '_sonata_name' => 'admin_lgp_course_enseignement_delete',));
                }

                // admin_lgp_course_enseignement_show
                if (preg_match('#^/admin/Enseignement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_course_enseignement_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'lgp.admin.enseignement',  '_sonata_name' => 'admin_lgp_course_enseignement_show',));
                }

                // admin_lgp_course_enseignement_export
                if ($pathinfo === '/admin/Enseignement/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'lgp.admin.enseignement',  '_sonata_name' => 'admin_lgp_course_enseignement_export',  '_route' => 'admin_lgp_course_enseignement_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/programme-de-cours')) {
                // admin_lgp_course_programmedecours_list
                if ($pathinfo === '/admin/programme-de-cours/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'lgp.admin.programmedecours',  '_sonata_name' => 'admin_lgp_course_programmedecours_list',  '_route' => 'admin_lgp_course_programmedecours_list',);
                }

                // admin_lgp_course_programmedecours_create
                if ($pathinfo === '/admin/programme-de-cours/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'lgp.admin.programmedecours',  '_sonata_name' => 'admin_lgp_course_programmedecours_create',  '_route' => 'admin_lgp_course_programmedecours_create',);
                }

                // admin_lgp_course_programmedecours_batch
                if ($pathinfo === '/admin/programme-de-cours/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'lgp.admin.programmedecours',  '_sonata_name' => 'admin_lgp_course_programmedecours_batch',  '_route' => 'admin_lgp_course_programmedecours_batch',);
                }

                // admin_lgp_course_programmedecours_edit
                if (preg_match('#^/admin/programme\\-de\\-cours/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_course_programmedecours_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'lgp.admin.programmedecours',  '_sonata_name' => 'admin_lgp_course_programmedecours_edit',));
                }

                // admin_lgp_course_programmedecours_delete
                if (preg_match('#^/admin/programme\\-de\\-cours/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_course_programmedecours_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'lgp.admin.programmedecours',  '_sonata_name' => 'admin_lgp_course_programmedecours_delete',));
                }

                // admin_lgp_course_programmedecours_show
                if (preg_match('#^/admin/programme\\-de\\-cours/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_lgp_course_programmedecours_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'lgp.admin.programmedecours',  '_sonata_name' => 'admin_lgp_course_programmedecours_show',));
                }

                // admin_lgp_course_programmedecours_export
                if ($pathinfo === '/admin/programme-de-cours/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'lgp.admin.programmedecours',  '_sonata_name' => 'admin_lgp_course_programmedecours_export',  '_route' => 'admin_lgp_course_programmedecours_export',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
