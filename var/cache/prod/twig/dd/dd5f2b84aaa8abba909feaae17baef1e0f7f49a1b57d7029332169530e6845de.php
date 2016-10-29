<?php

/* LGPReservationBundle:Cart:cart.html.twig */
class __TwigTemplate_8468d46ddfb1db1be95b7004ea57dbe6a8b00ea30163dacc1d1eea7417cca922 extends Twig_Template
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
        if (( !(null === (isset($context["panier"]) ? $context["panier"] : null)) &&  !twig_test_empty($this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), "items", array())))) {
            // line 22
            echo "                        : ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), "items", array())), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
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
        if (( !(null === (isset($context["panier"]) ? $context["panier"] : null)) && (twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), "items", array())) != 0))) {
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
            if ((array_key_exists("panier", $context) && (twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), "items", array())) != 0))) {
                // line 48
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), "items", array()));
                foreach ($context['_seq'] as $context["key"] => $context["booker"]) {
                    // line 49
                    echo "                                            ";
                    $context["cours"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "coursRep", array()), "find", array(0 => $this->getAttribute($context["booker"], "coursId", array())), "method");
                    // line 50
                    echo "                                            ";
                    $context["prof"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "profRep", array()), "find", array(0 => $this->getAttribute($context["booker"], "profId", array())), "method");
                    // line 51
                    echo "                                            <tr>
                                                <td> 
                                                    ";
                    // line 53
                    if ( !(null === $this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "image", array()))) {
                        // line 54
                        echo "                                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "image", array()), "webPath", array())), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : null), "intitule", array()), "html", null, true);
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
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "prenoms", array()) . " ") . twig_upper_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "nom", array()))), "html", null, true);
                    echo " </p>
                                                </td>
                                                <td>
                                                    ";
                    // line 81
                    $context["prixReservation"] = ((isset($context["prixReservation"]) ? $context["prixReservation"] : null) + $this->getAttribute($context["booker"], "prixTotal", array()));
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
            echo twig_escape_filter($this->env, (isset($context["prixReservation"]) ? $context["prixReservation"] : null), "html", null, true);
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
        return array (  267 => 115,  258 => 109,  253 => 106,  245 => 101,  238 => 97,  232 => 94,  227 => 91,  224 => 90,  213 => 85,  206 => 82,  204 => 81,  198 => 78,  195 => 77,  190 => 74,  185 => 72,  174 => 66,  169 => 64,  160 => 60,  156 => 58,  150 => 56,  144 => 54,  142 => 53,  138 => 51,  135 => 50,  132 => 49,  127 => 48,  125 => 47,  115 => 39,  113 => 38,  109 => 36,  100 => 33,  97 => 32,  92 => 31,  83 => 28,  80 => 27,  76 => 26,  71 => 23,  65 => 22,  63 => 21,  53 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "";
    }
}
