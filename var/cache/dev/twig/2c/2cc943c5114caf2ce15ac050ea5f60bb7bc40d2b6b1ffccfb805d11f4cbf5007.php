<?php

/* LGPReservationBundle:Reservation:detail.html.twig */
class __TwigTemplate_399d2934b398e380c035b13c58ffe7c547b0253ab042ded1e41a5300e3ec5f41 extends Twig_Template
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
        $__internal_ba492981aa12a33d02105d02220e6bc05cf133101ccc88605a62c5f9925b0904 = $this->env->getExtension("native_profiler");
        $__internal_ba492981aa12a33d02105d02220e6bc05cf133101ccc88605a62c5f9925b0904->enter($__internal_ba492981aa12a33d02105d02220e6bc05cf133101ccc88605a62c5f9925b0904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba492981aa12a33d02105d02220e6bc05cf133101ccc88605a62c5f9925b0904->leave($__internal_ba492981aa12a33d02105d02220e6bc05cf133101ccc88605a62c5f9925b0904_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_37f37cb69fe4fd1f94949bc621affbb04b08e5c442c227ad3fdf7a578c8ae4f2 = $this->env->getExtension("native_profiler");
        $__internal_37f37cb69fe4fd1f94949bc621affbb04b08e5c442c227ad3fdf7a578c8ae4f2->enter($__internal_37f37cb69fe4fd1f94949bc621affbb04b08e5c442c227ad3fdf7a578c8ae4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Detail Reservation  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_37f37cb69fe4fd1f94949bc621affbb04b08e5c442c227ad3fdf7a578c8ae4f2->leave($__internal_37f37cb69fe4fd1f94949bc621affbb04b08e5c442c227ad3fdf7a578c8ae4f2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbf264e12b864de7a69d74596078b6c9aa7c902ac64f7db0a9d74679a62249e9 = $this->env->getExtension("native_profiler");
        $__internal_cbf264e12b864de7a69d74596078b6c9aa7c902ac64f7db0a9d74679a62249e9->enter($__internal_cbf264e12b864de7a69d74596078b6c9aa7c902ac64f7db0a9d74679a62249e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                        <form method=\"post\" id=\"reservationForm\">\t

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
                                            <select id=\"course\" name=\"course\" class=\"form-control\" required>
                                                <option value=\"\" disabled selected>Choisir un cours</option>
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
                                            <select id=\"classes\" name=\"classes\" class=\"form-control\" required>
                                                <option disabled selected value=\"\">
                                                    Choisir une classe 
                                                </option>
                                            </select>
                                            <span id=\"loading-classe\" style=\"display:none\">
                                                <i class=\"fa fa-spinner fa-pulse fa-fw\"></i>
                                                <span class=\"sr-only\">Loading...</span>
                                            </span>
                                            ";
        // line 92
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
                                            <input type=\"text\" id=\"reservation-startdate\" name=\"reservationDate\" class=\"form-control\" placeholder=\"Date début\" required>
                                            <span class=\"input-group-addon add-on\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
                                        </div>
                                    </div> 
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Nombre d'apprenants </b>
                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <select id=\"nbApprenants\" name=\"nbApprenants\" class=\"form-control\" required>
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
                                        3
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
                                            <select id=\"lieuDeCours\" name=\"lieuDeCours\" class=\"form-control\" required>
                                                <option value=\"\" disabled selected>Choix du lieu</option>
                                                <option value=\"Chez le parent\">Chez le parent</option>
                                                <option value=\"Chez le prof\">Chez le prof</option>
                                                <option value=\"autre lieu\">autre lieu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Ville</b>
                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <input type=\"text\" id=\"ville\" name=\"\" class=\"form-control\" placeholder=\"ville\" required>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Quartier</b>
                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <input type=\"text\" id=\"quartier\" name=\"\" class=\"form-control\" placeholder=\"quartier\" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mt-20\">

                                <div class=\"col-sm-12 col-md-12\">

                                    <a class=\"btn btn-default\" href=\" ";
        // line 188
        echo $this->env->getExtension('routing')->getPath("lgp_course_find");
        echo " \">Retourné a la recherche</a>&nbsp;&nbsp;
                                    <button class=\"btn btn-primary\" type=\"submit\">Ajouter dans le panier</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                ";
        // line 201
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "prof", array(), "any", true, true)) {
            // line 202
            echo "                    ";
            $context["prof"] = $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "prof", array());
            // line 203
            echo "                    <input type=\"hidden\" name=\"prof\" id=\"profId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id", array()), "html", null, true);
            echo "\">
                    <div class=\"col-sm-4 col-md-3 hidden-xs\">

                        <div class=\"price-summary-wrapper\">

                            <h4 class=\"heading mt-0 text-primary uppercase\">";
            // line 208
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "prenoms", array()) . " ") . twig_upper_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "nom", array()))), "html", null, true);
            echo "</h4>


                            <ul class=\"price-summary-list\">

                                <li>
                                    ";
            // line 214
            if ( !(null === $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "image", array()))) {
                // line 215
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "image", array()), "webPath", array())), "html", null, true);
                echo "\">
                                    ";
            } else {
                // line 217
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                echo "\">
                                    ";
            }
            // line 219
            echo "                                </li>
                                <li class=\"divider\"></li>

                                <li>
                                    <h6 class=\"heading mt-20 mb-5 text-primary uppercase\">Prix</h6>
                                    <div class=\"row gap-10 mt-10\">
                                        <div class=\"col-xs-7 col-sm-7\">
                                            Prix
                                        </div>
                                        <div class=\"col-xs-5 col-sm-5 text-right\" >
                                            <span id=\"prixH\">0 </span>
                                            FCFA/Mois
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
        // line 254
        echo "            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Ajout d'un prof au panier</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div id=\"loading\" class=\"col-md-12\">
                        <i class=\"fa fa-spinner fa-pulse fa-2x fa-fw\"></i>
                        <span class=\"sr-only\">Loading...</span>
                        chargement &hellip;";
        // line 269
        echo "</div>
                    <div id=\"success\" style=\"display:none\">
                        <div class=\"col-md-6 col-sm-6 animated fadeInDown\" style=\"text-align:center\">
                            <div class=\"thumbnail\">
                                ";
        // line 273
        if ( !(null === $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "image", array()))) {
            // line 274
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "image", array()), "webPath", array())), "html", null, true);
            echo "\">
                                ";
        } else {
            // line 276
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
            echo "\">
                                ";
        }
        // line 278
        echo "                                <div class=\"caption\">
                                    <h4 class=\"heading mt-0 text-primary uppercase\">";
        // line 279
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "prenoms", array()) . " ") . twig_upper_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "nom", array()))), "html", null, true);
        echo "</h4>
                                    <p>A été ajouté a votre panier avec succès !!!</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6\">
                            ";
        // line 285
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method"))) {
            // line 286
            echo "                                Votre panier compte ";
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method"), "items", array())) + 1), "html", null, true);
            echo " Profs !!!
                            ";
        } else {
            // line 288
            echo "                                Votre panier compte 1 Prof !!!
                            ";
        }
        // line 290
        echo "                        </div> 
                    </div>
                </div>
            </div>
            <div class=\"modal-footer animated fadeIn\" id=\"modal-footer\" style=\"display:none\">
                <a href=\" ";
        // line 295
        echo $this->env->getExtension('routing')->getPath("lgp_reservation_cart");
        echo " \" class=\"btn btn-primary\" title=\"\">Reserver maintenant</a>
                <a href=\" ";
        // line 296
        echo $this->env->getExtension('routing')->getPath("lgp_course_find");
        echo " \" class=\"btn btn-default\" title=\"\">Trouver d'autres profs</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
";
        
        $__internal_cbf264e12b864de7a69d74596078b6c9aa7c902ac64f7db0a9d74679a62249e9->leave($__internal_cbf264e12b864de7a69d74596078b6c9aa7c902ac64f7db0a9d74679a62249e9_prof);

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
        return array (  422 => 296,  418 => 295,  411 => 290,  407 => 288,  401 => 286,  399 => 285,  390 => 279,  387 => 278,  381 => 276,  375 => 274,  373 => 273,  367 => 269,  350 => 254,  313 => 219,  307 => 217,  301 => 215,  299 => 214,  290 => 208,  281 => 203,  278 => 202,  276 => 201,  260 => 188,  162 => 92,  142 => 73,  139 => 72,  128 => 70,  123 => 69,  121 => 68,  65 => 15,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    Detail Reservation  - {{ parent() }}
{% endblock %}

{% block body %}

    <div class=\"breadcrumb-wrapper bg-light-2\">

        <div class=\"container\">

            <ol class=\"breadcrumb-list booking-step\">
                <li><a href=\" {{path('lgp_core_homepage')}} \">Accueil</a></li>
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

                        <form method=\"post\" id=\"reservationForm\">\t

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
                                            <select id=\"course\" name=\"course\" class=\"form-control\" required>
                                                <option value=\"\" disabled selected>Choisir un cours</option>
                                                {% if params.cours is defined %}
                                                    {% for ens in params.cours %}
                                                        <option value=\"{{ens.cours.id}}\">{{ens.cours.intitule}}</option>
                                                    {% endfor %}
                                                {% endif %}
                                            </select>
                                        </div>
                                    </div>  
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Choisir une classe</b>

                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <select id=\"classes\" name=\"classes\" class=\"form-control\" required>
                                                <option disabled selected value=\"\">
                                                    Choisir une classe 
                                                </option>
                                            </select>
                                            <span id=\"loading-classe\" style=\"display:none\">
                                                <i class=\"fa fa-spinner fa-pulse fa-fw\"></i>
                                                <span class=\"sr-only\">Loading...</span>
                                            </span>
                                            {#  <img id=\"loader\" src=\" {{asset('images/original-orange-loading-gif-large.gif')}} \" alt=\"\" width=\"2\" height=\"3\"> #}
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
                                            <input type=\"text\" id=\"reservation-startdate\" name=\"reservationDate\" class=\"form-control\" placeholder=\"Date début\" required>
                                            <span class=\"input-group-addon add-on\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
                                        </div>
                                    </div> 
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Nombre d'apprenants </b>
                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <select id=\"nbApprenants\" name=\"nbApprenants\" class=\"form-control\" required>
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
                                        3
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
                                            <select id=\"lieuDeCours\" name=\"lieuDeCours\" class=\"form-control\" required>
                                                <option value=\"\" disabled selected>Choix du lieu</option>
                                                <option value=\"Chez le parent\">Chez le parent</option>
                                                <option value=\"Chez le prof\">Chez le prof</option>
                                                <option value=\"autre lieu\">autre lieu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Ville</b>
                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <input type=\"text\" id=\"ville\" name=\"\" class=\"form-control\" placeholder=\"ville\" required>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Quartier</b>
                                        </div>
                                        <div class=\"col-md-3 input-group\">
                                            <input type=\"text\" id=\"quartier\" name=\"\" class=\"form-control\" placeholder=\"quartier\" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mt-20\">

                                <div class=\"col-sm-12 col-md-12\">

                                    <a class=\"btn btn-default\" href=\" {{path('lgp_course_find')}} \">Retourné a la recherche</a>&nbsp;&nbsp;
                                    <button class=\"btn btn-primary\" type=\"submit\">Ajouter dans le panier</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                {% if params.prof is defined %}
                    {% set prof = params.prof %}
                    <input type=\"hidden\" name=\"prof\" id=\"profId\" value=\"{{prof.id}}\">
                    <div class=\"col-sm-4 col-md-3 hidden-xs\">

                        <div class=\"price-summary-wrapper\">

                            <h4 class=\"heading mt-0 text-primary uppercase\">{{ prof.prenoms ~ \" \"~ prof.nom | upper }}</h4>


                            <ul class=\"price-summary-list\">

                                <li>
                                    {% if prof.image is not null %}
                                        <img src=\"{{ asset(prof.image.webPath) }}\">
                                    {% else %}
                                        <img src=\"{{ asset('uploads/profils/default.jpg') }}\">
                                    {% endif %}
                                </li>
                                <li class=\"divider\"></li>

                                <li>
                                    <h6 class=\"heading mt-20 mb-5 text-primary uppercase\">Prix</h6>
                                    <div class=\"row gap-10 mt-10\">
                                        <div class=\"col-xs-7 col-sm-7\">
                                            Prix
                                        </div>
                                        <div class=\"col-xs-5 col-sm-5 text-right\" >
                                            <span id=\"prixH\">0 </span>
                                            FCFA/Mois
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
                {% endif %}
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Ajout d'un prof au panier</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div id=\"loading\" class=\"col-md-12\">
                        <i class=\"fa fa-spinner fa-pulse fa-2x fa-fw\"></i>
                        <span class=\"sr-only\">Loading...</span>
                        chargement &hellip;{#  <img src=\" {{asset('images/original-orange-loading-gif-large.gif')}}\" alt=\"chargement\" width=\"40\" height=\"42\"> #}</div>
                    <div id=\"success\" style=\"display:none\">
                        <div class=\"col-md-6 col-sm-6 animated fadeInDown\" style=\"text-align:center\">
                            <div class=\"thumbnail\">
                                {% if prof.image is not null %}
                                    <img src=\"{{ asset(prof.image.webPath) }}\">
                                {% else %}
                                    <img src=\"{{ asset('uploads/profils/default.jpg') }}\">
                                {% endif %}
                                <div class=\"caption\">
                                    <h4 class=\"heading mt-0 text-primary uppercase\">{{ prof.prenoms ~ \" \"~ prof.nom | upper }}</h4>
                                    <p>A été ajouté a votre panier avec succès !!!</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6\">
                            {% if app.session.get('panier') is not null %}
                                Votre panier compte {{app.session.get('panier').items | length + 1}} Profs !!!
                            {% else %}
                                Votre panier compte 1 Prof !!!
                            {% endif %}
                        </div> 
                    </div>
                </div>
            </div>
            <div class=\"modal-footer animated fadeIn\" id=\"modal-footer\" style=\"display:none\">
                <a href=\" {{path('lgp_reservation_cart')}} \" class=\"btn btn-primary\" title=\"\">Reserver maintenant</a>
                <a href=\" {{path('lgp_course_find')}} \" class=\"btn btn-default\" title=\"\">Trouver d'autres profs</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{% endblock %}
";
    }
}
