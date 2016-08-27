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
        $__internal_94a6e6b83321eef53ba18c92c7e13604b3dcff07181790af1a65db77a8e41e13 = $this->env->getExtension("native_profiler");
        $__internal_94a6e6b83321eef53ba18c92c7e13604b3dcff07181790af1a65db77a8e41e13->enter($__internal_94a6e6b83321eef53ba18c92c7e13604b3dcff07181790af1a65db77a8e41e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94a6e6b83321eef53ba18c92c7e13604b3dcff07181790af1a65db77a8e41e13->leave($__internal_94a6e6b83321eef53ba18c92c7e13604b3dcff07181790af1a65db77a8e41e13_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bceeafad3de071956c276055481b33888e4c58ca91985e89ae9a5eaa685c527d = $this->env->getExtension("native_profiler");
        $__internal_bceeafad3de071956c276055481b33888e4c58ca91985e89ae9a5eaa685c527d->enter($__internal_bceeafad3de071956c276055481b33888e4c58ca91985e89ae9a5eaa685c527d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Detail Reservation  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bceeafad3de071956c276055481b33888e4c58ca91985e89ae9a5eaa685c527d->leave($__internal_bceeafad3de071956c276055481b33888e4c58ca91985e89ae9a5eaa685c527d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f3712eba3c0e1d302ecd049c42c76b60af5358c60cd7a152b8a869b715b9c19 = $this->env->getExtension("native_profiler");
        $__internal_9f3712eba3c0e1d302ecd049c42c76b60af5358c60cd7a152b8a869b715b9c19->enter($__internal_9f3712eba3c0e1d302ecd049c42c76b60af5358c60cd7a152b8a869b715b9c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <div class=\"breadcrumb-wrapper bg-light-2\">

        <div class=\"container\">

            <ol class=\"breadcrumb-list booking-step\">
                <li><a href=\" ";
        // line 15
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo " \">Accueil</a></li>
                <li><span>reservation</span></li>
            </ol>

        </div>

    </div>

    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 col-md-9\" role=\"main\">

                    <div class=\"section-title text-left\">

                        <h3>Ajouter un prof au panier</h3>

                    </div>

                    <div class=\"payment-container\">

                        <form action=\"  \" method=\"get\" id=\"reservationForm\">\t

                            <div class=\"payment-box\">

                                <div class=\"payment-header clearfix\">

                                    <div class=\"number\">
                                        1
                                    </div>

                                    <div class=\"row gap-10\">

                                        <div class=\"col-sm-9\">
                                            <h5 class=\"heading mt-0\">Choisir le cours et la classe.</h5>
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
                                        <div class=\"col-md-3 input-group\">
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
                                        <div class=\"col-md-3 input-group\">
                                            <select id=\"classes\" name=\"classes\" class=\"form-control\">
                                                <option disabled selected>Choisir une classe</option>
                                            </select>
                                            ";
        // line 85
        echo "                                        </div>
                                    </div>
                                </div>
                                <br><br>

                                <div class=\"payment-header clearfix\">

                                    <div class=\"number\">
                                        2
                                    </div>

                                    <div class=\"row gap-10\">

                                        <div class=\"col-sm-9\">
                                            <h5 class=\"heading mt-0\">Durée et nombre d'heures par jour</h5>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class=\"payment-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Durée</b>
                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <select id=\"reservationDuree\" name=\"duree\" class=\"form-control\">
                                                <option value=\"1\">1 semaine</option>
                                                <option value=\"2\">2 semaines</option>
                                                <option value=\"3\">3 semaines</option>
                                                <option value=\"4\">1 mois</option>
                                                <option value=\"8\">2 mois</option>
                                                <option value=\"12\">3 mois</option>
                                                <option value=\"24\">6 mois </option>
                                                <option value=\"48\">1 ans</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Nombre d'heures par jour</b>
                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <select id=\"heuresParjours\" name=\"classe\" class=\"form-control\">
                                                <option value=\"1\">1 heure</option>
                                                <option value=\"2\">2 heures</option>
                                                <option value=\"3\">3 heures</option>
                                                <option value=\"4\">4 heures</option>
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
                                            <h5 class=\"heading mt-0\">Date de debut et nombres d'apprenants</h5>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class=\"payment-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Quand souhaitez-vous commencer?</b>
                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <input type=\"text\" id=\"reservation-startdate\" name=\"reservationDate\" class=\"form-control\" placeholder=\"Date début\">
                                            <span class=\"input-group-addon add-on\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
                                        </div>
                                    </div> 
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Nombre d'apprenants </b>
                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <select id=\"nbApprenants\" name=\"nbApprenants\" class=\"form-control\">
                                                <option value=\"1\">1 personne</option>
                                                <option value=\"2\">2 personnes</option>
                                                <option value=\"3\">3 personnes</option>
                                                <option value=\"4\">4 personnes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br><br>

                                <div class=\"payment-header clearfix\">

                                    <div class=\"number\">
                                        4
                                    </div>

                                    <div class=\"row gap-10\">
                                        <div class=\"col-sm-9\">
                                            <h5 class=\"heading mt-0\">Choisir des jours de cours</h5>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class=\"payment-content\" id=\"joursDeCours\"></div>
                                <br><br>
                                <div class=\"payment-header clearfix\">

                                    <div class=\"number\">
                                        5
                                    </div>

                                    <div class=\"row gap-10\">
                                        <div class=\"col-sm-9\">
                                            <h5 class=\"heading mt-0\">Choisir le lieu de cours</h5>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class=\"payment-content\" id=\"\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Lieu de cours</b>
                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <select id=\"lieuDeCours\" name=\"lieuDeCours\" class=\"form-control\">
                                                <option value=\"\" disabled selected>Choix du lieu</option>
                                                <option value=\"Chez le parent\">Chez le parent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Ville</b>
                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <input type=\"text\" id=\"ville\" name=\"\" class=\"form-control\" placeholder=\"ville\">
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Quartier</b>
                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <input type=\"text\" id=\"quartier\" name=\"\" class=\"form-control\" placeholder=\"quartier\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mt-20\">

                                <div class=\"col-sm-12 col-md-12\">

                                    <a class=\"btn btn-primary\">Réserver ce cours</a>&nbsp;&nbsp;
                                    <button class=\"btn\" type=\"submit\">Ajouter dans le panier</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                ";
        // line 256
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "prof", array(), "any", true, true)) {
            // line 257
            echo "                    ";
            $context["prof"] = $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "prof", array());
            // line 258
            echo "                        <input type=\"hidden\" name=\"prof\" id=\"profId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id", array()), "html", null, true);
            echo "\">
                        <div class=\"col-sm-4 col-md-3 hidden-xs\">

                            <div class=\"price-summary-wrapper\">

                                <h4 class=\"heading mt-0 text-primary uppercase\">";
            // line 263
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "prenoms", array()) . " ") . $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "nom", array())), "html", null, true);
            echo "</h4>


                                <ul class=\"price-summary-list\">

                                    <li>
                                        ";
            // line 269
            if ($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "image", array(), "any", true, true)) {
                // line 270
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "image", array()), "webPath", array())), "html", null, true);
                echo "\">
                                        ";
            } else {
                // line 272
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                echo "\">
                                        ";
            }
            // line 274
            echo "                                    </li>
                                    <li class=\"divider\"></li>

                                    <li>
                                        <h6 class=\"heading mt-20 mb-5 text-primary uppercase\">Prix</h6>
                                        <div class=\"row gap-10 mt-10\">
                                            <div class=\"col-xs-7 col-sm-7\">
                                                Prix
                                            </div>
                                            <div class=\"col-xs-5 col-sm-5 text-right\" >
                                                <span id=\"prixH\">0 </span>
                                                FCFA/H
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
                                                <span class=\"block font20 font600 mb-5\"><span id=\"prixTotal\">0</span> Fcfa</span>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div>

                        </div>
                        ";
        }
        // line 313
        echo "                        </div>
                    </div>
                </div>
            </div>
            <script type=\"text/javascript\">
                function updateClasse() {
                    var profId = \$(\"#profId\").val();
                    var coursId = \$(\"#course\").val();

                    \$.ajax({
                        method: \"POST\",
                        url: \"/legrandprof/web/app_dev.php/course/update/\" + profId + \"/\" + coursId,
                        data: {}
                    }).success(function(answer) {
                        window.classes = [];
                        window.prix = [];
                        for (i = 0; i < answer.length; i++)
                        {
                            classes.push(answer[i].classe);
                            prix.push(answer[i].prix);
                        }
                        \$('#classes option').each(function() {
                            if (\$(this).val() != '')
                            {
                                \$(this).remove();
                            }
                        });
                        for (i = 0; i < classes.length; i++)
                        {
                            \$('#classes').append('<option value=\"' + i + '\">' + classes[i] + '</option>');
                        }
                        if (classes.length == 0) {
                            \$('#classes').append('<option disabled selected></option>');
                        }

                        updatePrix();
                        updatePrixTotal();
                    }).error(function(answer) {
                        console.log(answer);
                    });
                }

                function calculTotal() {
                    if (\$(\"#couse\").text() == \"Choisir un cours\" && \$(\"#classes\").text() == '') {
                        return 0;
                    }

                    var selectedval = \$(\"#classes option:selected\").val();
                    var prixHoraire = window.prix[selectedval];
                    var nbHeureparjour = \$(\"#heuresParjours option:selected\").val();
                    var nbJours = 0;
                    for (i = 0; i < window.days.length; i++) {
                        if (\$(\"#j\" + i).prop('checked')) {
                            nbJours += 1;
                        }
                    }

                    var prixTotal = prixHoraire * nbHeureparjour * nbJours;
                    return prixTotal;
                }

                function updatePrix() {
                    \$(\"#prixH\").text('');
                    var selectedval = \$(\"#classes option:selected\").val();
                    \$(\"#prixH\").text(window.prix[selectedval]);
                }

                function updatePrixTotal() {
                    \$(\"#prixTotal\").text('');
                    prixT = calculTotal();
                    \$(\"#prixTotal\").text(prixT);
                }
            </script>
            ";
        
        $__internal_9f3712eba3c0e1d302ecd049c42c76b60af5358c60cd7a152b8a869b715b9c19->leave($__internal_9f3712eba3c0e1d302ecd049c42c76b60af5358c60cd7a152b8a869b715b9c19_prof);

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
        return array (  406 => 313,  365 => 274,  359 => 272,  353 => 270,  351 => 269,  342 => 263,  333 => 258,  330 => 257,  328 => 256,  155 => 85,  142 => 73,  139 => 72,  128 => 70,  123 => 69,  121 => 68,  65 => 15,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
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
/*                 <li><a href=" {{path('lgp_core_homepage')}} ">Accueil</a></li>*/
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
/*                         <h3>Ajouter un prof au panier</h3>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="payment-container">*/
/* */
/*                         <form action="  " method="get" id="reservationForm">	*/
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
/*                                             <h5 class="heading mt-0">Choisir le cours et la classe.</h5>*/
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
/*                                         <div class="col-md-3 input-group">*/
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
/*                                         <div class="col-md-3 input-group">*/
/*                                             <select id="classes" name="classes" class="form-control">*/
/*                                                 <option disabled selected>Choisir une classe</option>*/
/*                                             </select>*/
/*                                             {#  <img id="loader" src=" {{asset('images/original-orange-loading-gif-large.gif')}} " alt="" width="2" height="3"> #}*/
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
/*                                             <h5 class="heading mt-0">Durée et nombre d'heures par jour</h5>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <br>*/
/*                                 <div class="payment-content">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <b>Durée</b>*/
/*                                         </div>*/
/*                                         <div class="col-md-3 input-group">*/
/*                                             <select id="reservationDuree" name="duree" class="form-control">*/
/*                                                 <option value="1">1 semaine</option>*/
/*                                                 <option value="2">2 semaines</option>*/
/*                                                 <option value="3">3 semaines</option>*/
/*                                                 <option value="4">1 mois</option>*/
/*                                                 <option value="8">2 mois</option>*/
/*                                                 <option value="12">3 mois</option>*/
/*                                                 <option value="24">6 mois </option>*/
/*                                                 <option value="48">1 ans</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <b>Nombre d'heures par jour</b>*/
/*                                         </div>*/
/*                                         <div class="col-md-3 input-group">*/
/*                                             <select id="heuresParjours" name="classe" class="form-control">*/
/*                                                 <option value="1">1 heure</option>*/
/*                                                 <option value="2">2 heures</option>*/
/*                                                 <option value="3">3 heures</option>*/
/*                                                 <option value="4">4 heures</option>*/
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
/* */
/*                                         <div class="col-sm-9">*/
/*                                             <h5 class="heading mt-0">Date de debut et nombres d'apprenants</h5>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <br>*/
/*                                 <div class="payment-content">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <b>Quand souhaitez-vous commencer?</b>*/
/*                                         </div>*/
/*                                         <div class="col-md-3 input-group">*/
/*                                             <input type="text" id="reservation-startdate" name="reservationDate" class="form-control" placeholder="Date début">*/
/*                                             <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>*/
/*                                         </div>*/
/*                                     </div> */
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <b>Nombre d'apprenants </b>*/
/*                                         </div>*/
/*                                         <div class="col-md-3 input-group">*/
/*                                             <select id="nbApprenants" name="nbApprenants" class="form-control">*/
/*                                                 <option value="1">1 personne</option>*/
/*                                                 <option value="2">2 personnes</option>*/
/*                                                 <option value="3">3 personnes</option>*/
/*                                                 <option value="4">4 personnes</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <br><br>*/
/* */
/*                                 <div class="payment-header clearfix">*/
/* */
/*                                     <div class="number">*/
/*                                         4*/
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
/*                                 <div class="payment-content" id="joursDeCours"></div>*/
/*                                 <br><br>*/
/*                                 <div class="payment-header clearfix">*/
/* */
/*                                     <div class="number">*/
/*                                         5*/
/*                                     </div>*/
/* */
/*                                     <div class="row gap-10">*/
/*                                         <div class="col-sm-9">*/
/*                                             <h5 class="heading mt-0">Choisir le lieu de cours</h5>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                                 <br>*/
/*                                 <div class="payment-content" id="">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <b>Lieu de cours</b>*/
/*                                         </div>*/
/*                                         <div class="col-md-3 input-group">*/
/*                                             <select id="lieuDeCours" name="lieuDeCours" class="form-control">*/
/*                                                 <option value="" disabled selected>Choix du lieu</option>*/
/*                                                 <option value="Chez le parent">Chez le parent</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <b>Ville</b>*/
/*                                         </div>*/
/*                                         <div class="col-md-3 input-group">*/
/*                                             <input type="text" id="ville" name="" class="form-control" placeholder="ville">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <b>Quartier</b>*/
/*                                         </div>*/
/*                                         <div class="col-md-3 input-group">*/
/*                                             <input type="text" id="quartier" name="" class="form-control" placeholder="quartier">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="row mt-20">*/
/* */
/*                                 <div class="col-sm-12 col-md-12">*/
/* */
/*                                     <a class="btn btn-primary">Réserver ce cours</a>&nbsp;&nbsp;*/
/*                                     <button class="btn" type="submit">Ajouter dans le panier</button>*/
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
/*                                             <div class="col-xs-5 col-sm-5 text-right" >*/
/*                                                 <span id="prixH">0 </span>*/
/*                                                 FCFA/H*/
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
/*                                                 <span class="block font20 font600 mb-5"><span id="prixTotal">0</span> Fcfa</span>*/
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
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <script type="text/javascript">*/
/*                 function updateClasse() {*/
/*                     var profId = $("#profId").val();*/
/*                     var coursId = $("#course").val();*/
/* */
/*                     $.ajax({*/
/*                         method: "POST",*/
/*                         url: "/legrandprof/web/app_dev.php/course/update/" + profId + "/" + coursId,*/
/*                         data: {}*/
/*                     }).success(function(answer) {*/
/*                         window.classes = [];*/
/*                         window.prix = [];*/
/*                         for (i = 0; i < answer.length; i++)*/
/*                         {*/
/*                             classes.push(answer[i].classe);*/
/*                             prix.push(answer[i].prix);*/
/*                         }*/
/*                         $('#classes option').each(function() {*/
/*                             if ($(this).val() != '')*/
/*                             {*/
/*                                 $(this).remove();*/
/*                             }*/
/*                         });*/
/*                         for (i = 0; i < classes.length; i++)*/
/*                         {*/
/*                             $('#classes').append('<option value="' + i + '">' + classes[i] + '</option>');*/
/*                         }*/
/*                         if (classes.length == 0) {*/
/*                             $('#classes').append('<option disabled selected></option>');*/
/*                         }*/
/* */
/*                         updatePrix();*/
/*                         updatePrixTotal();*/
/*                     }).error(function(answer) {*/
/*                         console.log(answer);*/
/*                     });*/
/*                 }*/
/* */
/*                 function calculTotal() {*/
/*                     if ($("#couse").text() == "Choisir un cours" && $("#classes").text() == '') {*/
/*                         return 0;*/
/*                     }*/
/* */
/*                     var selectedval = $("#classes option:selected").val();*/
/*                     var prixHoraire = window.prix[selectedval];*/
/*                     var nbHeureparjour = $("#heuresParjours option:selected").val();*/
/*                     var nbJours = 0;*/
/*                     for (i = 0; i < window.days.length; i++) {*/
/*                         if ($("#j" + i).prop('checked')) {*/
/*                             nbJours += 1;*/
/*                         }*/
/*                     }*/
/* */
/*                     var prixTotal = prixHoraire * nbHeureparjour * nbJours;*/
/*                     return prixTotal;*/
/*                 }*/
/* */
/*                 function updatePrix() {*/
/*                     $("#prixH").text('');*/
/*                     var selectedval = $("#classes option:selected").val();*/
/*                     $("#prixH").text(window.prix[selectedval]);*/
/*                 }*/
/* */
/*                 function updatePrixTotal() {*/
/*                     $("#prixTotal").text('');*/
/*                     prixT = calculTotal();*/
/*                     $("#prixTotal").text(prixT);*/
/*                 }*/
/*             </script>*/
/*             {% endblock %}*/
/* */
