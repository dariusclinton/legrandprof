<?php

/* LGPCourseBundle:Course:search_city.html.twig */
class __TwigTemplate_60fb8dbe470506bdd326b98db7f0d28a8b67310816001e29000b0883d260eecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Course:search_city.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ville", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "

    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
        echo "');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">
                    ";
        // line 18
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "matieres_profs", array())) != 0)) {
            // line 19
            echo "                        <h1 class=\"hero-title\">Grands Profs dans la ville de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ville", array()), "html", null, true);
            echo " </h1>

                        <ol class=\"breadcrumb-list\">
                            <li><a href=\" ";
            // line 22
            echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
            echo " \">Accueil</a></li>
                            ";
            // line 24
            echo "                            ";
            if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ville", array(), "any", true, true)) {
                // line 25
                echo "                                <li><span> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ville", array()), "html", null, true);
                echo " </span></li>
                            ";
            }
            // line 27
            echo "                        </ol>
                    ";
        } else {
            // line 29
            echo "                        <h1 class=\"hero-title\"> Resultat de la recherche </h1>
                    ";
        }
        // line 31
        echo "                </div>

            </div>

        </div>

    </div>
    <!-- end Page title -->


    <div class=\"content-wrapper\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-4 col-md-3\">

                    <aside class=\"sidebar with-filter\">

                        <div class=\"sidebar-search-wrapper bg-light-2\">

                            <div class=\"\">
                                <h4>Affinez votre recherche </h4>
                            </div>

                            <div class=\"sidebar-search-content\">

                                <div class=\"form-group\">
                                    ";
        // line 60
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courses", array())) {
            // line 61
            echo "                                        <datalist id=\"cours\">
                                            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 63
                echo "                                                <option> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "intitule", array()), "html", null, true);
                echo " </option>}
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                                        </datalist>
                                    ";
        }
        // line 67
        echo "                                </div>

                                ";
        // line 69
        $this->loadTemplate("LGPCourseBundle:Form:course_form_search.html.twig", "LGPCourseBundle:Course:search_city.html.twig", 69)->display($context);
        // line 70
        echo "                            </div>

                        </div>

                        ";
        // line 80
        echo "
                        ";
        // line 183
        echo "
                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">

                    <div class=\"sorting-wrappper\">

                        <div class=\"sorting-header\">
                            <h3 class=\"sorting-title uppercase\">Des Grands dans la ville de ";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ville", array()), "html", null, true);
        echo "</h3>
                            <p class=\"sorting-lead\">";
        // line 195
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "matieres_profs", array())), "html", null, true);
        echo " Grands profs trouvés</p>
                        </div>

                        ";
        // line 225
        echo "
                    </div>

                    <div class=\"package-list-item-wrapper on-page-result-page\">

                        ";
        // line 230
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "matieres_profs", array())) != 0)) {
            // line 231
            echo "
                        ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "matieres_profs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["enseigne"]) {
                // line 233
                echo "                            <div class=\"package-list-item clearfix\">
                                <div class=\"image\">
                                    ";
                // line 235
                if ( !$this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array())) {
                    // line 236
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
                    echo "\" alt=\"Tour Package\"/>

                                    ";
                } else {
                    // line 239
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array()), "webPath", array())), "html", null, true);
                    echo "\" alt=\" image prof \"/>
                                    ";
                }
                // line 241
                echo "                                </div>

                                <div class=\"content\">
                                    <h5>";
                // line 244
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, (($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "prenoms", array()) . "  ") . $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "nom", array()))), "html", null, true);
                echo "
                                        <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button>
                                    </h5>
                                    <div class=\"row gap-10\">
                                        <div class=\"col-sm-12 col-md-9\">

                                            <p class=\"line18\"> ";
                // line 250
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "presentation", array()), "html", null, true);
                echo " </p>
                                            <br>
                                            <ul class=\"list-info\">
                                                <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span
                                                            class=\"font600\">Position: </span>
                                                    ";
                // line 255
                if ( !(null === $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array()))) {
                    // line 256
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array())), "html", null, true);
                    echo "
                                                    ";
                } else {
                    // line 258
                    echo "                                                        NON DEFINIE
                                                    ";
                }
                // line 260
                echo "                                                </li>

                                                <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span
                                                            class=\"font600\">Cours :</span>
                                                    ";
                // line 264
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "enseignementRep", array()), "getCoursByProf", array(0 => $this->getAttribute($context["enseigne"], "prof", array())), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["ens_cours"]) {
                    // line 265
                    echo "                                                        ";
                    if (($this->getAttribute($context["loop"], "index", array()) != $this->getAttribute($context["loop"], "last", array()))) {
                        // line 266
                        echo "                                                            <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
                        echo " \"
                                                               title=\"\">";
                        // line 267
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a> -
                                                        ";
                    } else {
                        // line 269
                        echo "                                                            <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
                        echo " \"
                                                               title=\"\">";
                        // line 270
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a>
                                                        ";
                    }
                    // line 272
                    echo "                                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens_cours'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                echo "                                                </li>
                                            </ul>

                                        </div>
                                        <div class=\"col-sm-12 col-md-3 text-right text-left-sm\">
                                            ";
                // line 278
                $context["avisSum"] = 0;
                $context["allAvis"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "avisRep", array()), "findBy", array(0 => array("prof" => $this->getAttribute($context["enseigne"], "prof", array()))), "method");
                // line 279
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["allAvis"]) ? $context["allAvis"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                    // line 280
                    echo "                                                ";
                    $context["avisSum"] = ((isset($context["avisSum"]) ? $context["avisSum"] : null) + $this->getAttribute($context["avis"], "note", array()));
                    // line 281
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 282
                echo "                                            ";
                if ((twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : null)) != 0)) {
                    // line 283
                    echo "                                                ";
                    $context["avisRange"] = ((isset($context["avisSum"]) ? $context["avisSum"] : null) / twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : null)));
                    // line 284
                    echo "                                            ";
                } else {
                    // line 285
                    echo "                                                ";
                    $context["avisRange"] = 0;
                    // line 286
                    echo "                                            ";
                }
                // line 287
                echo "                                            <div class=\"rating-wrapper\">
                                                <div class=\"raty-wrapper\">
                                                    <div>
                                                        ";
                // line 290
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 291
                    echo "                                                            ";
                    if ((twig_round((isset($context["avisRange"]) ? $context["avisRange"] : null)) >= $context["i"])) {
                        // line 292
                        echo "                                                                <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                     src=\"";
                        // line 293
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                        echo "\">
                                                            ";
                    } else {
                        // line 295
                        echo "                                                                <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                     src=\"";
                        // line 296
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                        echo "\"
                                                                     title=\"\">
                                                            ";
                    }
                    // line 299
                    echo "                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 300
                echo "                                                    </div>
                                                    <span> / ";
                // line 301
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : null)), "html", null, true);
                echo " avis</span>
                                                </div>
                                            </div>
                                            ";
                // line 304
                ob_start();
                // line 305
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "enseignementRep", array()), "getPrixProf", array(0 => $this->getAttribute($context["enseigne"], "prof", array())), "method"), "html", null, true);
                echo "
                                            ";
                $context["minPrice"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 307
                echo "                                            <div class=\"price\">";
                echo twig_escape_filter($this->env, (isset($context["minPrice"]) ? $context["minPrice"] : null), "html", null, true);
                echo " Fcfa / Mois <br> Prix minimal</div>
                                            <a href=\" ";
                // line 308
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_profile_prof", array("slug" => $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "slug", array()))), "html", null, true);
                echo " \"
                                               class=\"btn btn-primary btn-sm\">Voir Profil</a>
                                            <a href=\" ";
                // line 310
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_reservation_detail", array("slug" => $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "slug", array()))), "html", null, true);
                echo " \"
                                               class=\"anchor btn btn-primary btn-sm\" style=\"margin-top: 10px;\">Réserver
                                                un cours</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseigne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "                    </div>

                    ";
            // line 321
            $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "LGPCourseBundle:Course:search_city.html.twig", 321)->display($context);
            // line 322
            echo "
                    ";
        }
        // line 324
        echo "
                </div>

            </div>

        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Course:search_city.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 324,  435 => 322,  433 => 321,  429 => 319,  414 => 310,  409 => 308,  404 => 307,  398 => 305,  396 => 304,  390 => 301,  387 => 300,  381 => 299,  375 => 296,  370 => 295,  365 => 293,  360 => 292,  357 => 291,  353 => 290,  348 => 287,  345 => 286,  342 => 285,  339 => 284,  336 => 283,  333 => 282,  327 => 281,  324 => 280,  319 => 279,  316 => 278,  309 => 273,  295 => 272,  290 => 270,  285 => 269,  280 => 267,  275 => 266,  272 => 265,  255 => 264,  249 => 260,  245 => 258,  239 => 256,  237 => 255,  229 => 250,  220 => 244,  215 => 241,  209 => 239,  202 => 236,  200 => 235,  196 => 233,  192 => 232,  189 => 231,  187 => 230,  180 => 225,  174 => 195,  170 => 194,  157 => 183,  154 => 80,  148 => 70,  146 => 69,  142 => 67,  138 => 65,  129 => 63,  125 => 62,  122 => 61,  120 => 60,  89 => 31,  85 => 29,  81 => 27,  75 => 25,  72 => 24,  68 => 22,  61 => 19,  59 => 18,  49 => 11,  44 => 8,  41 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    {{ params.ville }} - {{ parent() }}
{% endblock %}

{% block body %}


    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">
                    {% if params.matieres_profs | length != 0 %}
                        <h1 class=\"hero-title\">Grands Profs dans la ville de {{ params.ville }} </h1>

                        <ol class=\"breadcrumb-list\">
                            <li><a href=\" {{ path('lgp_core_homepage') }} \">Accueil</a></li>
                            {#  <li><a href=\"#\">Profs</a></li> #}
                            {% if params.ville is defined %}
                                <li><span> {{ params.ville }} </span></li>
                            {% endif %}
                        </ol>
                    {% else %}
                        <h1 class=\"hero-title\"> Resultat de la recherche </h1>
                    {% endif %}
                </div>

            </div>

        </div>

    </div>
    <!-- end Page title -->


    <div class=\"content-wrapper\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-4 col-md-3\">

                    <aside class=\"sidebar with-filter\">

                        <div class=\"sidebar-search-wrapper bg-light-2\">

                            <div class=\"\">
                                <h4>Affinez votre recherche </h4>
                            </div>

                            <div class=\"sidebar-search-content\">

                                <div class=\"form-group\">
                                    {% if params.courses %}
                                        <datalist id=\"cours\">
                                            {% for course in params.courses %}
                                                <option> {{ course.intitule }} </option>}
                                            {% endfor %}
                                        </datalist>
                                    {% endif %}
                                </div>

                                {% include 'LGPCourseBundle:Form:course_form_search.html.twig' %}
                            </div>

                        </div>

                        {#
                             BLOCK  AFFINEZ RECHERCHE
                          <div class=\"sidebar-header clearfix\">
                             <h4>Affinez</h4>
                             <a href=\"#\" class=\"sidebar-reset-filter\"><i class=\"fa fa-times\"></i> Annuler</a>
                         </div> #}

                        {#  <div class=\"sidebar-inner\">
 
                             <div class=\"sidebar-module\">
                                 <h6 class=\"sidebar-title\">Entrez un nom</h6>
                                 <div class=\"sidebar-module-inner\">
                                     <div class=\"sidebar-mini-search\">
                                         <div class=\"input-group\">
                                             <input type=\"text\" class=\"form-control\" placeholder=\"Qui ?...\">
                                             <span class=\"input-group-btn\">
                                                 <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                                             </span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
 
 
                             <div class=\"clear\"></div>
 
                             <div class=\"sidebar-module\">
                                 <h6 class=\"sidebar-title\">Affinez par note</h6>
                                 <div class=\"sidebar-module-inner\">
                                     <input id=\"star_range\" />
                                 </div>
                             </div>
 
                             <div class=\"clear\"></div>
 
                             <div class=\"sidebar-module\">
 
                                 <h6 class=\"sidebar-title\">Affinez par quartier</h6>
                                 <div class=\"sidebar-module-inner\">
                                     <div class=\"checkbox-block\">
                                         <input id=\"ville-1\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"ville-1\">Akwa <span class=\"checkbox-count\">(90)</span></label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"ville-2\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"ville-2\">Bonapriso <span class=\"checkbox-count\">(25)</span></label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"ville-3\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"ville-3\">Logpom <span class=\"checkbox-count\">(15)</span></label>
                                     </div>
                                     <div class=\"ville-block\">
                                         <input id=\"property_type-4\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"property_type-4\">Bonamoussadi<span class=\"checkbox-count\">(20)</span></label>
                                     </div>
                                     <div class=\"more-less-wrapper\">
 
                                         <div id=\"property_type_more_less\" class=\"collapse\"> 
                                             <div class=\"more-less-inner\">
 
                                                 <div class=\"checkbox-block\">
                                                     <input id=\"ville-6\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
                                                     <label class=\"\" for=\"ville-6\">Bonaberi <span class=\"checkbox-count\">(25)</span></label>
                                                 </div>
 
                                             </div>
                                         </div>
                                         <button class=\"btn btn-more-less collapsed\" data-toggle=\"collapse\" data-target=\"#property_type_more_less\">Montrer plus</button>
 
                                     </div>
 
                                 </div>
                             </div>
 
                             <div class=\"clear\"></div>
 
                             <div class=\"sidebar-module\">
                                 <h6 class=\"sidebar-title\">Affinez par niveau</h6>
                                 <div class=\"sidebar-module-inner\">
                                     <div class=\"checkbox-block\">
                                         <input id=\"niveau-1\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"niveau-1\">Primaire</label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"niveau-2\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"niveau-2\">Collège</label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"niveau-3\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"niveau-3\">Seconde</label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"niveau-4\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"niveau-4\">Première</label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"niveau-5\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"niveau-5\">Terminale</label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"niveau-6\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"niveau-6\">Supérieur</label>
                                     </div>
 
                                 </div>
                             </div>
 
 
                         </div> #}

                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">

                    <div class=\"sorting-wrappper\">

                        <div class=\"sorting-header\">
                            <h3 class=\"sorting-title uppercase\">Des Grands dans la ville de {{ params.ville }}</h3>
                            <p class=\"sorting-lead\">{{ params.matieres_profs | length }} Grands profs trouvés</p>
                        </div>

                        {#   <div class=\"sorting-content\">
  
                              <div class=\"row\">
  
                                  <div class=\"col-sm-12 col-md-8\">
                                      <div class=\"sort-by-wrapper\">
                                          <label class=\"sorting-label\">Sort by: </label> 
                                          <div class=\"sorting-middle-holder\">
                                              <ul class=\"sort-by\">
                                                  <li class=\"active up\"><a href=\"#\">Note <i class=\"fa fa-long-arrow-down\"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
  
                                  <div class=\"col-sm-12 col-md-4\">
                                      <div class=\"sort-by-wrapper mt pull-right pull-left-sm mt-10-sm\">
                                          <label class=\"sorting-label\">Voir : </label> 
                                          <div class=\"sorting-middle-holder\">
                                              <a href=\"#\" class=\"btn btn-sorting active\"><i class=\"fa fa-th-list\"></i></a>
                                          </div>
                                      </div>
                                  </div>
  
                              </div>
  
                          </div> #}

                    </div>

                    <div class=\"package-list-item-wrapper on-page-result-page\">

                        {% if params.matieres_profs | length != 0 %}

                        {% for enseigne in params.matieres_profs %}
                            <div class=\"package-list-item clearfix\">
                                <div class=\"image\">
                                    {% if not enseigne.prof.image %}
                                        <img src=\"{{ asset('uploads/profils/default.png') }}\" alt=\"Tour Package\"/>

                                    {% else %}
                                        <img src=\"{{ asset(enseigne.prof.image.webPath) }}\" alt=\" image prof \"/>
                                    {% endif %}
                                </div>

                                <div class=\"content\">
                                    <h5>{{ (enseigne.prof.prenoms ~\"  \"~ enseigne.prof.nom) | upper }}
                                        <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button>
                                    </h5>
                                    <div class=\"row gap-10\">
                                        <div class=\"col-sm-12 col-md-9\">

                                            <p class=\"line18\"> {{ enseigne.prof.presentation }} </p>
                                            <br>
                                            <ul class=\"list-info\">
                                                <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span
                                                            class=\"font600\">Position: </span>
                                                    {% if enseigne.prof.ville is not null %}
                                                        {{ enseigne.prof.ville | upper }}
                                                    {% else %}
                                                        NON DEFINIE
                                                    {% endif %}
                                                </li>

                                                <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span
                                                            class=\"font600\">Cours :</span>
                                                    {% for ens_cours in params.enseignementRep.getCoursByProf(enseigne.prof) %}
                                                        {% if loop.index != loop.last %}
                                                            <a href=\" {{ path('lgp_course_find_prof',{'slug':ens_cours.cours.slug}) }} \"
                                                               title=\"\">{{ ens_cours.cours.intitule }}</a> -
                                                        {% else %}
                                                            <a href=\" {{ path('lgp_course_find_prof',{'slug':ens_cours.cours.slug}) }} \"
                                                               title=\"\">{{ ens_cours.cours.intitule }}</a>
                                                        {% endif %}
                                                    {% endfor %}
                                                </li>
                                            </ul>

                                        </div>
                                        <div class=\"col-sm-12 col-md-3 text-right text-left-sm\">
                                            {% set avisSum = 0 %}{% set allAvis = params.avisRep.findBy({'prof':enseigne.prof}) %}
                                            {% for avis in  allAvis %}
                                                {% set avisSum = avisSum + avis.note %}
                                            {% endfor %}
                                            {% if allAvis | length != 0 %}
                                                {% set avisRange = avisSum / allAvis | length %}
                                            {% else %}
                                                {% set avisRange = 0 %}
                                            {% endif %}
                                            <div class=\"rating-wrapper\">
                                                <div class=\"raty-wrapper\">
                                                    <div>
                                                        {% for i in range(1,5) %}
                                                            {% if (avisRange | round) >= i %}
                                                                <img alt=\" {{ i }} \"
                                                                     src=\"{{ asset('images/raty/star-on-sm.png') }}\">
                                                            {% else %}
                                                                <img alt=\" {{ i }} \"
                                                                     src=\"{{ asset('images/raty/star-off-sm.png') }}\"
                                                                     title=\"\">
                                                            {% endif %}
                                                        {% endfor %}
                                                    </div>
                                                    <span> / {{ allAvis | length }} avis</span>
                                                </div>
                                            </div>
                                            {% set minPrice %}
                                                {{ params.enseignementRep.getPrixProf(enseigne.prof) }}
                                            {% endset %}
                                            <div class=\"price\">{{ minPrice }} Fcfa / Mois <br> Prix minimal</div>
                                            <a href=\" {{ path('lgp_course_profile_prof', {'slug':enseigne.prof.slug}) }} \"
                                               class=\"btn btn-primary btn-sm\">Voir Profil</a>
                                            <a href=\" {{ path('lgp_reservation_detail',{'slug': enseigne.prof.slug}) }} \"
                                               class=\"anchor btn btn-primary btn-sm\" style=\"margin-top: 10px;\">Réserver
                                                un cours</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        {% endfor %}
                    </div>

                    {% include('LGPCourseBundle:Pagination:pagination.html.twig') %}

                    {% endif %}

                </div>

            </div>

        </div>

    </div>
{% endblock %}";
    }
}
