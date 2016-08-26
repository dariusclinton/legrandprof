<?php

/* LGPReservationBundle:Reservation:detail.html.twig */
class __TwigTemplate_42f33e4e0edc5688e30b032df59b7d3c7bb42f65d9161ad0c50b81ad0830559a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPReservationBundle:Reservation:detail.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fa85941377fe37bc6f1afac15d660fe4849916504fb373b20d6f24372a2cb60 = $this->env->getExtension("native_profiler");
        $__internal_2fa85941377fe37bc6f1afac15d660fe4849916504fb373b20d6f24372a2cb60->enter($__internal_2fa85941377fe37bc6f1afac15d660fe4849916504fb373b20d6f24372a2cb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fa85941377fe37bc6f1afac15d660fe4849916504fb373b20d6f24372a2cb60->leave($__internal_2fa85941377fe37bc6f1afac15d660fe4849916504fb373b20d6f24372a2cb60_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3eb5071772d57d561508d2c3cf4042fd63a952756996531554d104ae239683c = $this->env->getExtension("native_profiler");
        $__internal_b3eb5071772d57d561508d2c3cf4042fd63a952756996531554d104ae239683c->enter($__internal_b3eb5071772d57d561508d2c3cf4042fd63a952756996531554d104ae239683c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Detail Reservation  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b3eb5071772d57d561508d2c3cf4042fd63a952756996531554d104ae239683c->leave($__internal_b3eb5071772d57d561508d2c3cf4042fd63a952756996531554d104ae239683c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d98254c0757557d574b6fda9e38a210963b67f5072330893e7a4f1437333338 = $this->env->getExtension("native_profiler");
        $__internal_6d98254c0757557d574b6fda9e38a210963b67f5072330893e7a4f1437333338->enter($__internal_6d98254c0757557d574b6fda9e38a210963b67f5072330893e7a4f1437333338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"breadcrumb-wrapper bg-light-2\">
\t\t\t\t
            <div class=\"container\">

                    <ol class=\"breadcrumb-list booking-step\">
                            <li><a href=\"#\">Accueil</a></li>
                            <li><span>reservation</span></li>
                    </ol>

            </div>

    </div>

    <div class=\"content-wrapper\">

            <div class=\"container\">
                    <div class=\"row\">
                            <div class=\"col-sm-8 col-md-9\" role=\"main\">

                                    <div class=\"section-title text-left\">

                                            <h3>Cours de mathématiques <small> / Terminale C</small></h3>

                                    </div>

                                    <div class=\"payment-container\">

                                            <form>\t

                                                    <div class=\"payment-box\">

                                                            <div class=\"payment-header clearfix\">

                                                                    <div class=\"number\">
                                                                            1
                                                                    </div>

                                                                    <div class=\"row gap-10\">

                                                                            <div class=\"col-sm-9\">
                                                                                    <h5 class=\"heading mt-0\">Détails de la réservation</h5>
                                                                            </div>

                                                                            <div class=\"col-sm-3\">
                                                                                    <a href=\"#\" class=\"btn btn-primary btn-inverse btn-sm pull-right pull-left-xs mb-20-xss\">Revoir le profil</a>
                                                                            </div>

                                                                    </div>

                                                            </div>
                                                            <br>
                                                            <div class=\"payment-content\">
                                                                    <div class=\"row\">
                                                                            <div class=\"col-md-3\">
                                                                                    <div class=\"checkbox-block\">
                                                                                            <input id=\"j1\" type=\"checkbox\" class=\"checkbox\" checked>
                                                                                            <label class=\"\" for=\"j1\"><b>Lundi </b></label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class=\"col-md-3\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Heure début\">
                                                                            </div>
                                                                            <div class=\"col-md-3\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Heure Fin\">
                                                                            </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                            <div class=\"col-md-3\">
                                                                                    <div class=\"checkbox-block\">
                                                                                            <input id=\"j2\" type=\"checkbox\" class=\"checkbox\">
                                                                                            <label class=\"\" for=\"j2\"><b>Mardi </b></label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class=\"col-md-3\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Heure début\" disabled>
                                                                            </div>
                                                                            <div class=\"col-md-3\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Heure Fin\" disabled>
                                                                            </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                            <div class=\"col-md-3\">
                                                                                    <div class=\"checkbox-block\">
                                                                                            <input id=\"j3\" type=\"checkbox\" class=\"checkbox\" checked>
                                                                                            <label class=\"\" for=\"j3\"><b>Mercredi </b></label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class=\"col-md-3\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Heure début\">
                                                                            </div>
                                                                            <div class=\"col-md-3\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Heure Fin\">
                                                                            </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                            <div class=\"col-md-3\">
                                                                                    <div class=\"checkbox-block\">
                                                                                            <input id=\"j4\" type=\"checkbox\" class=\"checkbox\">
                                                                                            <label class=\"\" for=\"j4\"><b>Jeudi </b></label>
                                                                                    </div>
                                                                            </div>
                                                                            <div class=\"col-md-3\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Heure début\" disabled>
                                                                            </div>
                                                                            <div class=\"col-md-3\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Heure Fin\" disabled>
                                                                            </div>
                                                                    </div>


                                                            </div>

                                                    </div>

                                                    <div class=\"row mt-20\">

                                                            <div class=\"col-sm-12 col-md-12\">

                                                                    <button class=\"btn btn-primary\">Réserver ce cours</button>&nbsp;&nbsp;
                                                                    <button class=\"btn\">Ajouter dans le panier</button>

                                                            </div>

                                                    </div>

                                            </form>

                                    </div>

                            </div>

                            <div class=\"col-sm-4 col-md-3 hidden-xs\">

                                    <div class=\"price-summary-wrapper\">

                                            <h4 class=\"heading mt-0 text-primary uppercase\">Antony Robert</h4>


                                            <ul class=\"price-summary-list\">

                                                    <li><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/man/01.jpg"), "html", null, true);
        echo "\"></li>
                                                    <li class=\"divider\"></li>

                                                    <li>
                                                            <h6 class=\"heading mt-20 mb-5 text-primary uppercase\">Prix</h6>
                                                            <div class=\"row gap-10 mt-10\">
                                                                    <div class=\"col-xs-7 col-sm-7\">
                                                                            Prix
                                                                    </div>
                                                                    <div class=\"col-xs-5 col-sm-5 text-right\">
                                                                            40.000 FCFA
                                                                    </div>
                                                            </div>

                                                    </li>

                                                    <li class=\"divider\"></li>

                                                    <li class=\"total-price\">

                                                            <div class=\"row gap-10\">
                                                                    <div class=\"col-xs-5 col-sm-5\">
                                                                            <h5 class=\"heading mt-0 mb-0 text-white\">Prix total</h5>
                                                                            <p>Mensuel</p>
                                                                    </div>
                                                                    <div class=\"col-xs-7 col-sm-7 text-right\">
                                                                            <span class=\"block font20 font600 mb-5\">40.000 Fcfa</span>
                                                                    </div>
                                                            </div>

                                                    </li>

                                            </ul>

                                    </div>

                            </div>

                    </div>

            </div>

    </div>

    
";
        
        $__internal_6d98254c0757557d574b6fda9e38a210963b67f5072330893e7a4f1437333338->leave($__internal_6d98254c0757557d574b6fda9e38a210963b67f5072330893e7a4f1437333338_prof);

    }

    public function getTemplateName()
    {
        return "LGPReservationBundle:Reservation:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 149,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Detail Reservation  - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="breadcrumb-wrapper bg-light-2">*/
/* 				*/
/*             <div class="container">*/
/* */
/*                     <ol class="breadcrumb-list booking-step">*/
/*                             <li><a href="#">Accueil</a></li>*/
/*                             <li><span>reservation</span></li>*/
/*                     </ol>*/
/* */
/*             </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="content-wrapper">*/
/* */
/*             <div class="container">*/
/*                     <div class="row">*/
/*                             <div class="col-sm-8 col-md-9" role="main">*/
/* */
/*                                     <div class="section-title text-left">*/
/* */
/*                                             <h3>Cours de mathématiques <small> / Terminale C</small></h3>*/
/* */
/*                                     </div>*/
/* */
/*                                     <div class="payment-container">*/
/* */
/*                                             <form>	*/
/* */
/*                                                     <div class="payment-box">*/
/* */
/*                                                             <div class="payment-header clearfix">*/
/* */
/*                                                                     <div class="number">*/
/*                                                                             1*/
/*                                                                     </div>*/
/* */
/*                                                                     <div class="row gap-10">*/
/* */
/*                                                                             <div class="col-sm-9">*/
/*                                                                                     <h5 class="heading mt-0">Détails de la réservation</h5>*/
/*                                                                             </div>*/
/* */
/*                                                                             <div class="col-sm-3">*/
/*                                                                                     <a href="#" class="btn btn-primary btn-inverse btn-sm pull-right pull-left-xs mb-20-xss">Revoir le profil</a>*/
/*                                                                             </div>*/
/* */
/*                                                                     </div>*/
/* */
/*                                                             </div>*/
/*                                                             <br>*/
/*                                                             <div class="payment-content">*/
/*                                                                     <div class="row">*/
/*                                                                             <div class="col-md-3">*/
/*                                                                                     <div class="checkbox-block">*/
/*                                                                                             <input id="j1" type="checkbox" class="checkbox" checked>*/
/*                                                                                             <label class="" for="j1"><b>Lundi </b></label>*/
/*                                                                                     </div>*/
/*                                                                             </div>*/
/*                                                                             <div class="col-md-3">*/
/*                                                                                     <input type="text" class="form-control" placeholder="Heure début">*/
/*                                                                             </div>*/
/*                                                                             <div class="col-md-3">*/
/*                                                                                     <input type="text" class="form-control" placeholder="Heure Fin">*/
/*                                                                             </div>*/
/*                                                                     </div>*/
/*                                                                     <div class="row">*/
/*                                                                             <div class="col-md-3">*/
/*                                                                                     <div class="checkbox-block">*/
/*                                                                                             <input id="j2" type="checkbox" class="checkbox">*/
/*                                                                                             <label class="" for="j2"><b>Mardi </b></label>*/
/*                                                                                     </div>*/
/*                                                                             </div>*/
/*                                                                             <div class="col-md-3">*/
/*                                                                                     <input type="text" class="form-control" placeholder="Heure début" disabled>*/
/*                                                                             </div>*/
/*                                                                             <div class="col-md-3">*/
/*                                                                                     <input type="text" class="form-control" placeholder="Heure Fin" disabled>*/
/*                                                                             </div>*/
/*                                                                     </div>*/
/*                                                                     <div class="row">*/
/*                                                                             <div class="col-md-3">*/
/*                                                                                     <div class="checkbox-block">*/
/*                                                                                             <input id="j3" type="checkbox" class="checkbox" checked>*/
/*                                                                                             <label class="" for="j3"><b>Mercredi </b></label>*/
/*                                                                                     </div>*/
/*                                                                             </div>*/
/*                                                                             <div class="col-md-3">*/
/*                                                                                     <input type="text" class="form-control" placeholder="Heure début">*/
/*                                                                             </div>*/
/*                                                                             <div class="col-md-3">*/
/*                                                                                     <input type="text" class="form-control" placeholder="Heure Fin">*/
/*                                                                             </div>*/
/*                                                                     </div>*/
/*                                                                     <div class="row">*/
/*                                                                             <div class="col-md-3">*/
/*                                                                                     <div class="checkbox-block">*/
/*                                                                                             <input id="j4" type="checkbox" class="checkbox">*/
/*                                                                                             <label class="" for="j4"><b>Jeudi </b></label>*/
/*                                                                                     </div>*/
/*                                                                             </div>*/
/*                                                                             <div class="col-md-3">*/
/*                                                                                     <input type="text" class="form-control" placeholder="Heure début" disabled>*/
/*                                                                             </div>*/
/*                                                                             <div class="col-md-3">*/
/*                                                                                     <input type="text" class="form-control" placeholder="Heure Fin" disabled>*/
/*                                                                             </div>*/
/*                                                                     </div>*/
/* */
/* */
/*                                                             </div>*/
/* */
/*                                                     </div>*/
/* */
/*                                                     <div class="row mt-20">*/
/* */
/*                                                             <div class="col-sm-12 col-md-12">*/
/* */
/*                                                                     <button class="btn btn-primary">Réserver ce cours</button>&nbsp;&nbsp;*/
/*                                                                     <button class="btn">Ajouter dans le panier</button>*/
/* */
/*                                                             </div>*/
/* */
/*                                                     </div>*/
/* */
/*                                             </form>*/
/* */
/*                                     </div>*/
/* */
/*                             </div>*/
/* */
/*                             <div class="col-sm-4 col-md-3 hidden-xs">*/
/* */
/*                                     <div class="price-summary-wrapper">*/
/* */
/*                                             <h4 class="heading mt-0 text-primary uppercase">Antony Robert</h4>*/
/* */
/* */
/*                                             <ul class="price-summary-list">*/
/* */
/*                                                     <li><img src="{{ asset('images/man/01.jpg') }}"></li>*/
/*                                                     <li class="divider"></li>*/
/* */
/*                                                     <li>*/
/*                                                             <h6 class="heading mt-20 mb-5 text-primary uppercase">Prix</h6>*/
/*                                                             <div class="row gap-10 mt-10">*/
/*                                                                     <div class="col-xs-7 col-sm-7">*/
/*                                                                             Prix*/
/*                                                                     </div>*/
/*                                                                     <div class="col-xs-5 col-sm-5 text-right">*/
/*                                                                             40.000 FCFA*/
/*                                                                     </div>*/
/*                                                             </div>*/
/* */
/*                                                     </li>*/
/* */
/*                                                     <li class="divider"></li>*/
/* */
/*                                                     <li class="total-price">*/
/* */
/*                                                             <div class="row gap-10">*/
/*                                                                     <div class="col-xs-5 col-sm-5">*/
/*                                                                             <h5 class="heading mt-0 mb-0 text-white">Prix total</h5>*/
/*                                                                             <p>Mensuel</p>*/
/*                                                                     </div>*/
/*                                                                     <div class="col-xs-7 col-sm-7 text-right">*/
/*                                                                             <span class="block font20 font600 mb-5">40.000 Fcfa</span>*/
/*                                                                     </div>*/
/*                                                             </div>*/
/* */
/*                                                     </li>*/
/* */
/*                                             </ul>*/
/* */
/*                                     </div>*/
/* */
/*                             </div>*/
/* */
/*                     </div>*/
/* */
/*             </div>*/
/* */
/*     </div>*/
/* */
/*     */
/* {% endblock %}*/
/* */
