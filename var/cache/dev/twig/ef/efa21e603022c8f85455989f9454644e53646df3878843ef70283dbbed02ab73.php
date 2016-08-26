<?php

/* @LGPReservation/Reservation/detail.html.twig */
class __TwigTemplate_f6b1025aa2a84fcb7f2bf16792d37a88306be50e9d0957ba7707c21dd560488a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPReservation/Reservation/detail.html.twig", 2);
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
        $__internal_76f5366d51882d1de0066657f1f536c3f4e920e017ccfac1f97bece9d873ad1a = $this->env->getExtension("native_profiler");
        $__internal_76f5366d51882d1de0066657f1f536c3f4e920e017ccfac1f97bece9d873ad1a->enter($__internal_76f5366d51882d1de0066657f1f536c3f4e920e017ccfac1f97bece9d873ad1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPReservation/Reservation/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f5366d51882d1de0066657f1f536c3f4e920e017ccfac1f97bece9d873ad1a->leave($__internal_76f5366d51882d1de0066657f1f536c3f4e920e017ccfac1f97bece9d873ad1a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3af8e02b37192af7d8a21b41fab15ff4bc94d94ce05715105ad0d231a52c61e4 = $this->env->getExtension("native_profiler");
        $__internal_3af8e02b37192af7d8a21b41fab15ff4bc94d94ce05715105ad0d231a52c61e4->enter($__internal_3af8e02b37192af7d8a21b41fab15ff4bc94d94ce05715105ad0d231a52c61e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Detail Reservation  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3af8e02b37192af7d8a21b41fab15ff4bc94d94ce05715105ad0d231a52c61e4->leave($__internal_3af8e02b37192af7d8a21b41fab15ff4bc94d94ce05715105ad0d231a52c61e4_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_795458f4909012f27cd17561762f2c036c91bc32eea4f25d0d6626ace7f4ecbe = $this->env->getExtension("native_profiler");
        $__internal_795458f4909012f27cd17561762f2c036c91bc32eea4f25d0d6626ace7f4ecbe->enter($__internal_795458f4909012f27cd17561762f2c036c91bc32eea4f25d0d6626ace7f4ecbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <div class=\"breadcrumb-wrapper bg-light-2\">

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
                                            <h5 class=\"heading mt-0\">Choisir la classe de cours</h5>
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
                                            <b>Choisir un cours</b>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <select id=\"course\" name=\"course\" class=\"form-control\">
                                                <option disabled selected>Choisir un cours</option>
                                                ";
        // line 68
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "cours", array(), "any", true, true)) {
            // line 69
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "cours", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ens"]) {
                // line 70
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens"], "cours", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens"], "cours", array()), "intitule", array()), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                                                ";
        }
        // line 73
        echo "                                            </select>
                                        </div>
                                    </div>  
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Choisir une classe</b>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <select id=\"classes\" name=\"classes\" class=\"form-control\">
                                                <option disabled selected>Choisir une classe</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br><br>

                                <div class=\"payment-header clearfix\">

                                    <div class=\"number\">
                                        2
                                    </div>

                                    <div class=\"row gap-10\">

                                        <div class=\"col-sm-9\">
                                            <h5 class=\"heading mt-0\">Nombre d'heures par jour</h5>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class=\"payment-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Nombre d'heures par jour</b>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <select id=\"classe\" name=\"classe\" class=\"form-control\">
                                                <option value=\"0.5\">30min</option>
                                                <option value=\"1\">1h</option>
                                                <option value=\"1.5\">1h30</option>
                                                <option value=\"2\">2h</option>
                                                <option value=\"2.5\">2h30</option>
                                                <option value=\"3\">3h</option>}
                                                <option value=\"4\">4</option>}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br><br>

                                <div class=\"payment-header clearfix\">

                                    <div class=\"number\">
                                        3
                                    </div>

                                    <div class=\"row gap-10\">
                                        <div class=\"col-sm-9\">
                                            <h5 class=\"heading mt-0\">Choisir des jours de cours</h5>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class=\"payment-content\" id=\"joursDeCours\">
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

                ";
        // line 160
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "prof", array(), "any", true, true)) {
            // line 161
            echo "                    ";
            $context["prof"] = $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "prof", array());
            // line 162
            echo "                        <input type=\"hidden\" name=\"prof\" id=\"profId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id", array()), "html", null, true);
            echo "\">
                        <div class=\"col-sm-4 col-md-3 hidden-xs\">

                            <div class=\"price-summary-wrapper\">

                                <h4 class=\"heading mt-0 text-primary uppercase\">";
            // line 167
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "prenoms", array()) . " ") . $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "nom", array())), "html", null, true);
            echo "</h4>


                                <ul class=\"price-summary-list\">

                                    <li>
                                        ";
            // line 173
            if ($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "image", array(), "any", true, true)) {
                // line 174
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "image", array()), "webPath", array())), "html", null, true);
                echo "\">
                                        ";
            } else {
                // line 176
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                echo "\">
                                        ";
            }
            // line 178
            echo "                                    </li>
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
                        ";
        }
        // line 216
        echo "
                        </div>

                    </div>

                </div>


                ";
        
        $__internal_795458f4909012f27cd17561762f2c036c91bc32eea4f25d0d6626ace7f4ecbe->leave($__internal_795458f4909012f27cd17561762f2c036c91bc32eea4f25d0d6626ace7f4ecbe_prof);

    }

    public function getTemplateName()
    {
        return "@LGPReservation/Reservation/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 216,  265 => 178,  259 => 176,  253 => 174,  251 => 173,  242 => 167,  233 => 162,  230 => 161,  228 => 160,  139 => 73,  136 => 72,  125 => 70,  120 => 69,  118 => 68,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
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
/* */
/*     <div class="breadcrumb-wrapper bg-light-2">*/
/* */
/*         <div class="container">*/
/* */
/*             <ol class="breadcrumb-list booking-step">*/
/*                 <li><a href="#">Accueil</a></li>*/
/*                 <li><span>reservation</span></li>*/
/*             </ol>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="content-wrapper">*/
/* */
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-8 col-md-9" role="main">*/
/* */
/*                     <div class="section-title text-left">*/
/* */
/*                         <h3>Cours de mathématiques <small> / Terminale C</small></h3>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="payment-container">*/
/* */
/*                         <form>	*/
/* */
/*                             <div class="payment-box">*/
/* */
/*                                 <div class="payment-header clearfix">*/
/* */
/*                                     <div class="number">*/
/*                                         1*/
/*                                     </div>*/
/* */
/*                                     <div class="row gap-10">*/
/* */
/*                                         <div class="col-sm-9">*/
/*                                             <h5 class="heading mt-0">Choisir la classe de cours</h5>*/
/*                                         </div>*/
/* */
/*                                         <div class="col-sm-3">*/
/*                                             <a href="#" class="btn btn-primary btn-inverse btn-sm pull-right pull-left-xs mb-20-xss">Revoir le profil</a>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <br>*/
/*                                 <div class="payment-content">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <b>Choisir un cours</b>*/
/*                                         </div>*/
/*                                         <div class="col-md-3">*/
/*                                             <select id="course" name="course" class="form-control">*/
/*                                                 <option disabled selected>Choisir un cours</option>*/
/*                                                 {% if params.cours is defined %}*/
/*                                                     {% for ens in params.cours %}*/
/*                                                         <option value="{{ens.cours.id}}">{{ens.cours.intitule}}</option>*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>  */
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <b>Choisir une classe</b>*/
/*                                         </div>*/
/*                                         <div class="col-md-3">*/
/*                                             <select id="classes" name="classes" class="form-control">*/
/*                                                 <option disabled selected>Choisir une classe</option>*/
/* */
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <br><br>*/
/* */
/*                                 <div class="payment-header clearfix">*/
/* */
/*                                     <div class="number">*/
/*                                         2*/
/*                                     </div>*/
/* */
/*                                     <div class="row gap-10">*/
/* */
/*                                         <div class="col-sm-9">*/
/*                                             <h5 class="heading mt-0">Nombre d'heures par jour</h5>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <br>*/
/*                                 <div class="payment-content">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <b>Nombre d'heures par jour</b>*/
/*                                         </div>*/
/*                                         <div class="col-md-3">*/
/*                                             <select id="classe" name="classe" class="form-control">*/
/*                                                 <option value="0.5">30min</option>*/
/*                                                 <option value="1">1h</option>*/
/*                                                 <option value="1.5">1h30</option>*/
/*                                                 <option value="2">2h</option>*/
/*                                                 <option value="2.5">2h30</option>*/
/*                                                 <option value="3">3h</option>}*/
/*                                                 <option value="4">4</option>}*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <br><br>*/
/* */
/*                                 <div class="payment-header clearfix">*/
/* */
/*                                     <div class="number">*/
/*                                         3*/
/*                                     </div>*/
/* */
/*                                     <div class="row gap-10">*/
/*                                         <div class="col-sm-9">*/
/*                                             <h5 class="heading mt-0">Choisir des jours de cours</h5>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                                 <br>*/
/*                                 <div class="payment-content" id="joursDeCours">*/
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/*                             <div class="row mt-20">*/
/* */
/*                                 <div class="col-sm-12 col-md-12">*/
/* */
/*                                     <button class="btn btn-primary">Réserver ce cours</button>&nbsp;&nbsp;*/
/*                                     <button class="btn">Ajouter dans le panier</button>*/
/* */
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/*                         </form>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 {% if params.prof is defined %}*/
/*                     {% set prof = params.prof %}*/
/*                         <input type="hidden" name="prof" id="profId" value="{{prof.id}}">*/
/*                         <div class="col-sm-4 col-md-3 hidden-xs">*/
/* */
/*                             <div class="price-summary-wrapper">*/
/* */
/*                                 <h4 class="heading mt-0 text-primary uppercase">{{ prof.prenoms ~ " "~ prof.nom }}</h4>*/
/* */
/* */
/*                                 <ul class="price-summary-list">*/
/* */
/*                                     <li>*/
/*                                         {% if prof.image is defined %}*/
/*                                             <img src="{{ asset(prof.image.webPath) }}">*/
/*                                         {% else %}*/
/*                                             <img src="{{ asset('uploads/profils/default.jpg') }}">*/
/*                                         {% endif %}*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/* */
/*                                     <li>*/
/*                                         <h6 class="heading mt-20 mb-5 text-primary uppercase">Prix</h6>*/
/*                                         <div class="row gap-10 mt-10">*/
/*                                             <div class="col-xs-7 col-sm-7">*/
/*                                                 Prix*/
/*                                             </div>*/
/*                                             <div class="col-xs-5 col-sm-5 text-right">*/
/*                                                 40.000 FCFA*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                     </li>*/
/* */
/*                                     <li class="divider"></li>*/
/* */
/*                                     <li class="total-price">*/
/* */
/*                                         <div class="row gap-10">*/
/*                                             <div class="col-xs-5 col-sm-5">*/
/*                                                 <h5 class="heading mt-0 mb-0 text-white">Prix total</h5>*/
/*                                                 <p>Mensuel</p>*/
/*                                             </div>*/
/*                                             <div class="col-xs-7 col-sm-7 text-right">*/
/*                                                 <span class="block font20 font600 mb-5">40.000 Fcfa</span>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                     </li>*/
/* */
/*                                 </ul>*/
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/*                         {% endif %}*/
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/* */
/*                 {% endblock %}*/
/* */
