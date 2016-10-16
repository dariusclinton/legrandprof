<?php

/* LGPReservationBundle:Cart:cart.html.twig */
class __TwigTemplate_54a0ee84710ed170e1c447971cddcbb93136b8c371d8e9c41e84300a2cf7e1ac extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    Panier  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["panier"] = $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "panier", array());
        // line 10
        echo "    ";
        $context["prixReservation"] = 0;
        // line 11
        echo "    <div class=\"bg-grey\">
        <div class=\"content-wrapper\">

            <div class=\"container\">
                ";
        // line 15
        $this->loadTemplate("LGPReservationBundle:Reservation:etapes.html.twig", "LGPReservationBundle:Cart:cart.html.twig", 15)->display($context);
        // line 16
        echo "                <br><br>
                <h1 class=\"panier-title\">
                    VOTRE PANIER 
                    ";
        // line 19
        if (( !(null === (isset($context["panier"]) ? $context["panier"] : null)) &&  !twig_test_empty($this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), "items", array())))) {
            // line 20
            echo "                        : ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), "items", array())), "html", null, true);
            echo " Profs 
                    ";
        }
        // line 22
        echo "                </h1>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 27
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " 
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 32
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " 
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </div>
                    <div class=\"col-md-12\">
                        ";
        // line 37
        if (( !(null === (isset($context["panier"]) ? $context["panier"] : null)) && (twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), "items", array())) != 0))) {
            // line 38
            echo "                            <table class=\"table table-hover table-striped\">
                                <thead>
                                <th style=\"width:25%\"></th>
                                <th style=\"width:40%; text-align:center;\">Cours</th>
                                <th style=\"width:20%; text-align:center;\">Sous-Total</th>
                                <th style=\"width:5%\"></th>
                                </thead>
                                <tbody>
                                    ";
            // line 46
            if ((array_key_exists("panier", $context) && (twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), "items", array())) != 0))) {
                // line 47
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), "items", array()));
                foreach ($context['_seq'] as $context["key"] => $context["booker"]) {
                    // line 48
                    echo "                                            ";
                    $context["cours"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "coursRep", array()), "find", array(0 => $this->getAttribute($context["booker"], "coursId", array())), "method");
                    // line 49
                    echo "                                            ";
                    $context["prof"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "profRep", array()), "find", array(0 => $this->getAttribute($context["booker"], "profId", array())), "method");
                    // line 50
                    echo "                                            <tr>
                                                <td> 
                                                    ";
                    // line 52
                    if ($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "image", array(), "any", true, true)) {
                        // line 53
                        echo "                                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "image", array()), "webPath", array())), "html", null, true);
                        echo "\" width=\"50px\">
                                                    ";
                    } else {
                        // line 55
                        echo "                                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                        echo "\"> 
                                                    ";
                    }
                    // line 57
                    echo "                                                </td>
                                                <td>
                                                    <p><b class=\"font800\">Cours de <i style=\"color:#d84315\">";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : null), "intitule", array()), "html", null, true);
                    echo "</i> en classe de <i style=\"color:#d84315\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "classe", array()), "html", null, true);
                    echo "</i> </b></p>
                                                    <ul class=\"list-info\">
                                                        <li>
                                                            <span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span>
                                                            <span class=\"font800\">Lieu du cours: </span>";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "lieu", array()), "html", null, true);
                    echo "
                                                            <span class=\"font800\">Ville et quartier:</span>
                                                            ";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "ville", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "quartier", array()), "html", null, true);
                    echo "
                                                        </li>

                                                        <li>
                                                            <span class=\"icon\"><i class=\"fa fa-calendar\"></i></span>
                                                            <span class=\"font800\">Date de début : </span>
                                                            ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "dateDebut", array()), "html", null, true);
                    echo " 
                                                            <span class=\"font800\">nombre d'apprenants :</span>
                                                            ";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "nombreApprenants", array()), "html", null, true);
                    echo "
                                                        </li>
                                                        ";
                    // line 76
                    echo "                                                    </ul><br>
                                                    <p><b>Prof : </b> ";
                    // line 77
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "prenoms", array()) . " ") . twig_upper_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "nom", array()))), "html", null, true);
                    echo " </p>
                                                </td>
                                                <td>
                                                    ";
                    // line 80
                    $context["prixReservation"] = ((isset($context["prixReservation"]) ? $context["prixReservation"] : null) + $this->getAttribute($context["booker"], "prixTotal", array()));
                    // line 81
                    echo "                                                    <h2 class=\"price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "prixTotal", array()), "html", null, true);
                    echo " FCFA </h2>
                                                </td>
                                                <td style=\"text-align:center\">
                                                    <a title=\"supprimer du panier\"  onclick=\"location.href = '";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_reservation_cart_remove", array("key" => $context["key"])), "html", null, true);
                    echo "'\" class=\"btn-cancel\"><i class=\"fa fa-remove\"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['booker'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                                    ";
            }
            // line 90
            echo "                                </tbody>
                            </table>
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right\">
                                <h1><b>Total : <span class=\"total\">";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["prixReservation"]) ? $context["prixReservation"] : null), "html", null, true);
            echo " FCFA / Mois</span></b></h1>
                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right\">
                                <a href=\" ";
            // line 96
            echo $this->env->getExtension('routing')->getPath("lgp_course_find");
            echo " \" class=\"btn btn-primary\" title=\"\">
                                    Faire une recherche
                                </a>
                                <a class=\"btn btn-primary\" 
                                       href=\" ";
            // line 100
            echo $this->env->getExtension('routing')->getPath("lgp_reservation_paiement");
            echo "\">
                                   Passer a l'etape suivante
                                </a>
                            </div>
                        ";
        } else {
            // line 105
            echo "                            <h1>Votre panier est vide !!!</h1>
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left\">
                                    <a href=\" ";
            // line 108
            echo $this->env->getExtension('routing')->getPath("lgp_course_find");
            echo " \" class=\"btn btn-primary\" title=\"\">
                                        Faire une recherche
                                    </a>
                                </div>
                            </div>
                        ";
        }
        // line 114
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>

";
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
        return array (  265 => 114,  256 => 108,  251 => 105,  243 => 100,  236 => 96,  230 => 93,  225 => 90,  222 => 89,  211 => 84,  204 => 81,  202 => 80,  196 => 77,  193 => 76,  188 => 73,  183 => 71,  172 => 65,  167 => 63,  158 => 59,  154 => 57,  148 => 55,  142 => 53,  140 => 52,  136 => 50,  133 => 49,  130 => 48,  125 => 47,  123 => 46,  113 => 38,  111 => 37,  107 => 35,  98 => 32,  95 => 31,  90 => 30,  81 => 27,  78 => 26,  74 => 25,  69 => 22,  63 => 20,  61 => 19,  56 => 16,  54 => 15,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 2,);
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
        <div class=\"content-wrapper\">

            <div class=\"container\">
                {% include 'LGPReservationBundle:Reservation:etapes.html.twig' %}
                <br><br>
                <h1 class=\"panier-title\">
                    VOTRE PANIER 
                    {% if panier is not null and not panier.items is empty %}
                        : {{panier.items | length}} Profs 
                    {% endif %}
                </h1>
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
                            <table class=\"table table-hover table-striped\">
                                <thead>
                                <th style=\"width:25%\"></th>
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
                                                    {% if prof.image is defined %}
                                                        <img src=\"{{ asset(prof.image.webPath) }}\" width=\"50px\">
                                                    {% else %}
                                                        <img src=\"{{ asset('uploads/profils/default.jpg') }}\"> 
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
