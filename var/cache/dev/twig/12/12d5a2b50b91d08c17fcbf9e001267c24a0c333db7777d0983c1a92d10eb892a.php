<?php

/* LGPReservationBundle:Cart:cart.html.twig */
class __TwigTemplate_95de305f26c74d71cc3fc1b2f2579ff812a0c841e283310673a9892c66fcd535 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPReservationBundle:Cart:cart.html.twig", 2);
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
        $__internal_ad2ed39a3db23d796797676aaf9b1210c40bf32a7e23e40fe955e3789070eac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2ed39a3db23d796797676aaf9b1210c40bf32a7e23e40fe955e3789070eac8->enter($__internal_ad2ed39a3db23d796797676aaf9b1210c40bf32a7e23e40fe955e3789070eac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Cart:cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad2ed39a3db23d796797676aaf9b1210c40bf32a7e23e40fe955e3789070eac8->leave($__internal_ad2ed39a3db23d796797676aaf9b1210c40bf32a7e23e40fe955e3789070eac8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a51e55185af3295c3437af90dfaa6fcb23395a885316ad2f5eb73a3db2bef7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51e55185af3295c3437af90dfaa6fcb23395a885316ad2f5eb73a3db2bef7d5->enter($__internal_a51e55185af3295c3437af90dfaa6fcb23395a885316ad2f5eb73a3db2bef7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Panier  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a51e55185af3295c3437af90dfaa6fcb23395a885316ad2f5eb73a3db2bef7d5->leave($__internal_a51e55185af3295c3437af90dfaa6fcb23395a885316ad2f5eb73a3db2bef7d5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f672515a202f4c158747b0c9a56f94f255c5a44704828616623a854ae0f20a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f672515a202f4c158747b0c9a56f94f255c5a44704828616623a854ae0f20a41->enter($__internal_f672515a202f4c158747b0c9a56f94f255c5a44704828616623a854ae0f20a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context["panier"] = $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "panier", array());
        // line 10
        echo "    ";
        $context["prixReservation"] = 0;
        // line 11
        echo "    <div class=\"bg-grey\">
        ";
        // line 12
        $this->loadTemplate("LGPReservationBundle:Reservation:etapes.html.twig", "LGPReservationBundle:Cart:cart.html.twig", 12)->display($context);
        // line 13
        echo "        <div class=\"content-wrapper\">

            <div class=\"container\">
                <br><br>
                <h1 class=\"panier-title\">
                    VOTRE PANIER 
                    
                </h1>
                <h3 class=\"panier-subtitle\">Recapitulatif de la commande - <i>Votre panier contient ";
        // line 21
        if (( !(null === (isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier"))) &&  !twig_test_empty($this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "items", array())))) {
            // line 22
            echo "                        : ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "items", array())), "html", null, true);
            echo " Profs 
                    ";
        }
        // line 23
        echo " </i></h3>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 28
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " 
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 33
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " 
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </div>
                    <div class=\"col-md-12\">
                        ";
        // line 38
        if (( !(null === (isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier"))) && (twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "items", array())) != 0))) {
            // line 39
            echo "                            <table class=\"table table-hover table-bordered\">
                                <thead>
                                <th style=\"width:15%\"></th>
                                <th style=\"width:40%; text-align:center;\">Cours</th>
                                <th style=\"width:20%; text-align:center;\">Sous-Total</th>
                                <th style=\"width:5%\"></th>
                                </thead>
                                <tbody>
                                    ";
            // line 47
            if ((array_key_exists("panier", $context) && (twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "items", array())) != 0))) {
                // line 48
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "items", array()));
                foreach ($context['_seq'] as $context["key"] => $context["booker"]) {
                    // line 49
                    echo "                                            ";
                    $context["cours"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "coursRep", array()), "find", array(0 => $this->getAttribute($context["booker"], "coursId", array())), "method");
                    // line 50
                    echo "                                            ";
                    $context["prof"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "profRep", array()), "find", array(0 => $this->getAttribute($context["booker"], "profId", array())), "method");
                    // line 51
                    echo "                                            <tr>
                                                <td> 
                                                    ";
                    // line 53
                    if ( !(null === $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "image", array()))) {
                        // line 54
                        echo "                                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "image", array()), "webPath", array())), "html", null, true);
                        echo "\" width=\"50px\">
                                                    ";
                    } else {
                        // line 56
                        echo "                                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
                        echo "\">
                                                    ";
                    }
                    // line 58
                    echo "                                                </td>
                                                <td>
                                                    <p><b class=\"font800\">Cours de <i style=\"color:#d84315\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "intitule", array()), "html", null, true);
                    echo "</i> en classe de <i style=\"color:#d84315\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "classe", array()), "html", null, true);
                    echo "</i> </b></p>
                                                    <ul class=\"list-info\">
                                                        <li>
                                                            <span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span>
                                                            <span class=\"font800\">Lieu du cours: </span>";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "lieu", array()), "html", null, true);
                    echo "
                                                            <span class=\"font800\">Ville et quartier:</span>
                                                            ";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "ville", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "quartier", array()), "html", null, true);
                    echo "
                                                        </li>

                                                        <li>
                                                            <span class=\"icon\"><i class=\"fa fa-calendar\"></i></span>
                                                            <span class=\"font800\">Date de début : </span>
                                                            ";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "dateDebut", array()), "html", null, true);
                    echo " 
                                                            <span class=\"font800\">nombre d'apprenants :</span>
                                                            ";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "nombreApprenants", array()), "html", null, true);
                    echo "
                                                        </li>
                                                        ";
                    // line 77
                    echo "                                                    </ul><br>
                                                    <p><b>Prof : </b> ";
                    // line 78
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "prenoms", array()) . " ") . twig_upper_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "nom", array()))), "html", null, true);
                    echo " </p>
                                                </td>
                                                <td>
                                                    ";
                    // line 81
                    $context["prixReservation"] = ((isset($context["prixReservation"]) ? $context["prixReservation"] : $this->getContext($context, "prixReservation")) + $this->getAttribute($context["booker"], "prixTotal", array()));
                    // line 82
                    echo "                                                    <h2 class=\"price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "prixTotal", array()), "html", null, true);
                    echo " FCFA </h2>
                                                </td>
                                                <td style=\"text-align:center\">
                                                    <a title=\"supprimer du panier\"  onclick=\"location.href = '";
                    // line 85
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_reservation_cart_remove", array("key" => $context["key"])), "html", null, true);
                    echo "'\" class=\"btn-cancel\"><i class=\"fa fa-remove\"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['booker'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                                    ";
            }
            // line 91
            echo "                                </tbody>
                            </table>
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right\">
                                <h1><b>Total : <span class=\"total\">";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["prixReservation"]) ? $context["prixReservation"] : $this->getContext($context, "prixReservation")), "html", null, true);
            echo " FCFA / Mois</span></b></h1>
                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right\">
                                <a href=\" ";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find");
            echo " \" class=\"btn btn-primary\" title=\"\">
                                    Faire une recherche
                                </a>
                                <a class=\"btn btn-primary\" 
                                       href=\" ";
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_reservation_paiement");
            echo "\">
                                   Passer a l'etape suivante
                                </a>
                            </div>
                        ";
        } else {
            // line 106
            echo "                            <h1>Votre panier est vide !!!</h1>
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left\">
                                    <a href=\" ";
            // line 109
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find");
            echo " \" class=\"btn btn-primary\" title=\"\">
                                        Faire une recherche
                                    </a>
                                </div>
                            </div>
                        ";
        }
        // line 115
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_f672515a202f4c158747b0c9a56f94f255c5a44704828616623a854ae0f20a41->leave($__internal_f672515a202f4c158747b0c9a56f94f255c5a44704828616623a854ae0f20a41_prof);

    }

    public function getTemplateName()
    {
        return "LGPReservationBundle:Cart:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 115,  273 => 109,  268 => 106,  260 => 101,  253 => 97,  247 => 94,  242 => 91,  239 => 90,  228 => 85,  221 => 82,  219 => 81,  213 => 78,  210 => 77,  205 => 74,  200 => 72,  189 => 66,  184 => 64,  175 => 60,  171 => 58,  165 => 56,  159 => 54,  157 => 53,  153 => 51,  150 => 50,  147 => 49,  142 => 48,  140 => 47,  130 => 39,  128 => 38,  124 => 36,  115 => 33,  112 => 32,  107 => 31,  98 => 28,  95 => 27,  91 => 26,  86 => 23,  80 => 22,  78 => 21,  68 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    Panier  - {{ parent() }}
{% endblock %}

{% block body %}
    {% set panier = params.panier %}
    {% set prixReservation = 0 %}
    <div class=\"bg-grey\">
        {% include 'LGPReservationBundle:Reservation:etapes.html.twig' %}
        <div class=\"content-wrapper\">

            <div class=\"container\">
                <br><br>
                <h1 class=\"panier-title\">
                    VOTRE PANIER 
                    
                </h1>
                <h3 class=\"panier-subtitle\">Recapitulatif de la commande - <i>Votre panier contient {% if panier is not null and not panier.items is empty %}
                        : {{panier.items | length}} Profs 
                    {% endif %} </i></h3>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        {% for message in app.session.flashBag.get('warning') %}
                            <div class=\"alert alert-danger\">
                                {{message}} 
                            </div>
                        {% endfor %}
                        {% for message in app.session.flashBag.get('info') %}
                            <div class=\"alert alert-success\">
                                {{message}} 
                            </div>
                        {% endfor %}
                    </div>
                    <div class=\"col-md-12\">
                        {% if panier is not null and panier.items | length != 0 %}
                            <table class=\"table table-hover table-bordered\">
                                <thead>
                                <th style=\"width:15%\"></th>
                                <th style=\"width:40%; text-align:center;\">Cours</th>
                                <th style=\"width:20%; text-align:center;\">Sous-Total</th>
                                <th style=\"width:5%\"></th>
                                </thead>
                                <tbody>
                                    {% if panier is defined and panier.items | length != 0 %}
                                        {% for key, booker in panier.items %}
                                            {% set cours = params.coursRep.find(booker.coursId) %}
                                            {% set prof = params.profRep.find(booker.profId) %}
                                            <tr>
                                                <td> 
                                                    {% if prof.image is not null %}
                                                        <img src=\"{{ asset(prof.image.webPath) }}\" width=\"50px\">
                                                    {% else %}
                                                        <img src=\"{{ asset('uploads/profils/default.png') }}\">
                                                    {% endif %}
                                                </td>
                                                <td>
                                                    <p><b class=\"font800\">Cours de <i style=\"color:#d84315\">{{cours.intitule}}</i> en classe de <i style=\"color:#d84315\">{{booker.classe}}</i> </b></p>
                                                    <ul class=\"list-info\">
                                                        <li>
                                                            <span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span>
                                                            <span class=\"font800\">Lieu du cours: </span>{{booker.lieu}}
                                                            <span class=\"font800\">Ville et quartier:</span>
                                                            {{booker.ville}} - {{booker.quartier}}
                                                        </li>

                                                        <li>
                                                            <span class=\"icon\"><i class=\"fa fa-calendar\"></i></span>
                                                            <span class=\"font800\">Date de début : </span>
                                                            {{booker.dateDebut}} 
                                                            <span class=\"font800\">nombre d'apprenants :</span>
                                                            {{booker.nombreApprenants}}
                                                        </li>
                                                        {#   <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Compétences :</span> Mathématiques, Physiques,...</li> #}
                                                    </ul><br>
                                                    <p><b>Prof : </b> {{prof.prenoms ~\" \"~prof.nom | upper}} </p>
                                                </td>
                                                <td>
                                                    {% set prixReservation = prixReservation + booker.prixTotal %}
                                                    <h2 class=\"price\">{{booker.prixTotal}} FCFA </h2>
                                                </td>
                                                <td style=\"text-align:center\">
                                                    <a title=\"supprimer du panier\"  onclick=\"location.href = '{{ path('lgp_reservation_cart_remove',{'key': key}) }}'\" class=\"btn-cancel\"><i class=\"fa fa-remove\"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    {% endif %}
                                </tbody>
                            </table>
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right\">
                                <h1><b>Total : <span class=\"total\">{{prixReservation}} FCFA / Mois</span></b></h1>
                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right\">
                                <a href=\" {{path('lgp_course_find')}} \" class=\"btn btn-primary\" title=\"\">
                                    Faire une recherche
                                </a>
                                <a class=\"btn btn-primary\" 
                                       href=\" {{path('lgp_reservation_paiement')}}\">
                                   Passer a l'etape suivante
                                </a>
                            </div>
                        {% else %}
                            <h1>Votre panier est vide !!!</h1>
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left\">
                                    <a href=\" {{path('lgp_course_find')}} \" class=\"btn btn-primary\" title=\"\">
                                        Faire une recherche
                                    </a>
                                </div>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
";
    }
}
