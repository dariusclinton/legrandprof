<?php

/* LGPCourseBundle:Course:search.html.twig */
class __TwigTemplate_b63bfeb809a255412e9dee78c9aa652a67b5f73b123a43b69190d9c8d6efa9dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Course:search.html.twig", 1);
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
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array(), "any", true, true) && ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array()) != null))) {
            // line 5
            echo "        Profs de ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array()), "intitule", array()), "html", null, true);
            echo " - ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
    ";
        } else {
            // line 7
            echo "        Profs - ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
    ";
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
        echo "');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">
                    ";
        // line 21
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array(), "any", true, true) && ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array()) != null))) {
            // line 22
            echo "                        <h1 class=\"hero-title\">Grands Profs en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array()), "intitule", array()), "html", null, true);
            echo " </h1>

                        <ol class=\"breadcrumb-list\">
                            <li><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
            echo " \">Accueil</a></li>
                            ";
            // line 27
            echo "                            ";
            if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "quartier", array(), "any", true, true)) {
                // line 28
                echo "                                <li>
                                    ";
                // line 29
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lgp_course_find_prof_refine_quarter")) {
                    // line 30
                    echo "                                        <a href=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city_quarter", array("slug_ville" => $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "quartier", array()), "slugVille", array()), "slug_quartier" => $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "quartier", array()), "intitule", array()))), "html", null, true);
                    echo " \">
                                            ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "quartier", array()), "ville", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "quartier", array()), "intitule", array()), "html", null, true);
                    echo "
                                        </a>
                                    ";
                } else {
                    // line 34
                    echo "                                        <a href=\" ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("slugVille" => $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "quartier", array()), "slugVille", array()))), "html", null, true);
                    echo " \">
                                            ";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "quartier", array()), "ville", array()), "html", null, true);
                    echo "
                                        </a>
                                    ";
                }
                // line 38
                echo "                                </li>
                            ";
            }
            // line 40
            echo "                            <li><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array()), "intitule", array()), "html", null, true);
            echo "</span></li>
                        </ol>

                    ";
        } else {
            // line 44
            echo "                        <h1 class=\"hero-title\"> Resultat de la recherche </h1>
                    ";
        }
        // line 46
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
                                <h4>Rechercher</h4>
                            </div>

                            <div class=\"sidebar-search-content\">
                                ";
        // line 73
        $this->loadTemplate("LGPCourseBundle:Form:course_form_search.html.twig", "LGPCourseBundle:Course:search.html.twig", 73)->display($context);
        // line 74
        echo "                            </div>
                        </div>

                        ";
        // line 83
        echo "
                        ";
        // line 186
        echo "
                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">

                    ";
        // line 194
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array(), "any", true, true)) {
            // line 195
            echo "                        <div class=\"sorting-wrappper\">

                            <div class=\"sorting-header\">

                                <h3 class=\"sorting-title uppercase\">Des Grands profs
                                    en ";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array()), "intitule", array()), "html", null, true);
            echo "</h3>
                                <p class=\"sorting-lead\">";
            // line 201
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "matieres_profs", array())), "html", null, true);
            echo " Grands profs trouvés</p>
                            </div>

                            ";
            // line 230
            echo "
                        </div>
                    ";
        }
        // line 233
        echo "
                    <div class=\"package-list-item-wrapper on-page-result-page\">

                        ";
        // line 236
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "matieres_profs", array())) != 0)) {
            // line 237
            echo "
                        ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "matieres_profs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["enseigne"]) {
                // line 239
                echo "                            <div class=\"package-list-item clearfix\">
                                <div class=\"image\">
                                    ";
                // line 241
                if ((null === $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array()))) {
                    // line 242
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
                    echo "\" alt=\"Tour Package\"/>
                                    ";
                } else {
                    // line 244
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array()), "webPath", array())), "html", null, true);
                    echo "\" alt=\" image prof \"/>
                                    ";
                }
                // line 246
                echo "                                </div>

                                <div class=\"content\">
                                    <h5>";
                // line 249
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "prenoms", array()) . "  ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "nom", array()))), "html", null, true);
                echo "
                                        <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button>
                                    </h5>
                                    <div class=\"row gap-10\">
                                        <div class=\"col-sm-12 col-md-9\">

                                            <p class=\"line18\"> ";
                // line 255
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "presentation", array()), "html", null, true);
                echo " </p>
                                            <br>
                                            <ul class=\"list-info\">
                                                <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span
                                                            class=\"font600\">Position: </span>
                                                    ";
                // line 260
                if ( !(null === $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array()))) {
                    // line 261
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array())), "html", null, true);
                    echo "
                                                    ";
                } else {
                    // line 263
                    echo "                                                        NON DEFINIE
                                                    ";
                }
                // line 265
                echo "                                                </li>

                                                <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span
                                                            class=\"font600\">Cours :</span>
                                                    ";
                // line 269
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
                    // line 270
                    echo "                                                        ";
                    if (($this->getAttribute($context["loop"], "index", array()) != $this->getAttribute($context["loop"], "last", array()))) {
                        // line 271
                        echo "                                                            <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
                        echo " \"
                                                               title=\"\">";
                        // line 272
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a> -
                                                        ";
                    } else {
                        // line 274
                        echo "                                                            <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
                        echo " \"
                                                               title=\"\">";
                        // line 275
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a>
                                                        ";
                    }
                    // line 277
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
                // line 278
                echo "                                                </li>
                                            </ul>

                                        </div>
                                        <div class=\"col-sm-12 col-md-3 text-right text-left-sm\">
                                            ";
                // line 283
                $context["avisSum"] = 0;
                // line 284
                echo "                                            ";
                $context["allAvis"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "avisRep", array()), "findBy", array(0 => array("prof" => $this->getAttribute($context["enseigne"], "prof", array()))), "method");
                // line 285
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["allAvis"]) ? $context["allAvis"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                    // line 286
                    echo "                                                ";
                    $context["avisSum"] = ((isset($context["avisSum"]) ? $context["avisSum"] : null) + $this->getAttribute($context["avis"], "note", array()));
                    // line 287
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 288
                echo "                                            ";
                if ((twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : null)) != 0)) {
                    // line 289
                    echo "                                                ";
                    $context["avisRange"] = ((isset($context["avisSum"]) ? $context["avisSum"] : null) / twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : null)));
                    // line 290
                    echo "                                            ";
                } else {
                    // line 291
                    echo "                                                ";
                    $context["avisRange"] = 0;
                    // line 292
                    echo "                                            ";
                }
                // line 293
                echo "                                            <div class=\"rating-wrapper\">
                                                <div class=\"raty-wrapper\">
                                                    <div>
                                                        ";
                // line 296
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 297
                    echo "                                                            ";
                    if ((twig_round((isset($context["avisRange"]) ? $context["avisRange"] : null)) >= $context["i"])) {
                        // line 298
                        echo "                                                                <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                     src=\"";
                        // line 299
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                        echo "\">
                                                            ";
                    } else {
                        // line 301
                        echo "                                                                <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                     src=\"";
                        // line 302
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                        echo "\"
                                                                     title=\"\">
                                                            ";
                    }
                    // line 305
                    echo "                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 306
                echo "                                                    </div>
                                                    <span> / ";
                // line 307
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : null)), "html", null, true);
                echo " avis</span>
                                                </div>
                                            </div>
                                            ";
                // line 310
                ob_start();
                // line 311
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "enseignementRep", array()), "getPrixProf", array(0 => $this->getAttribute($context["enseigne"], "prof", array())), "method"), "html", null, true);
                echo "
                                            ";
                $context["minPrice"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 313
                echo "                                            <div class=\"price\">";
                echo twig_escape_filter($this->env, (isset($context["minPrice"]) ? $context["minPrice"] : null), "html", null, true);
                echo " Fcfa / Mois <br> Prix minimal</div>
                                            <a href=\" ";
                // line 314
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_profile_prof", array("slug" => $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "slug", array()))), "html", null, true);
                echo " \"
                                               class=\"btn btn-primary btn-sm\">Voir Profil</a>
                                            <a href=\" ";
                // line 316
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
            // line 325
            echo "
                    </div>

                    ";
            // line 328
            $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "LGPCourseBundle:Course:search.html.twig", 328)->display($context);
            // line 329
            echo "
                    ";
        }
        // line 331
        echo "
                </div>

            </div>

        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Course:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 331,  457 => 329,  455 => 328,  450 => 325,  435 => 316,  430 => 314,  425 => 313,  419 => 311,  417 => 310,  411 => 307,  408 => 306,  402 => 305,  396 => 302,  391 => 301,  386 => 299,  381 => 298,  378 => 297,  374 => 296,  369 => 293,  366 => 292,  363 => 291,  360 => 290,  357 => 289,  354 => 288,  348 => 287,  345 => 286,  340 => 285,  337 => 284,  335 => 283,  328 => 278,  314 => 277,  309 => 275,  304 => 274,  299 => 272,  294 => 271,  291 => 270,  274 => 269,  268 => 265,  264 => 263,  258 => 261,  256 => 260,  248 => 255,  239 => 249,  234 => 246,  228 => 244,  222 => 242,  220 => 241,  216 => 239,  212 => 238,  209 => 237,  207 => 236,  202 => 233,  197 => 230,  191 => 201,  187 => 200,  180 => 195,  178 => 194,  168 => 186,  165 => 83,  160 => 74,  158 => 73,  129 => 46,  125 => 44,  117 => 40,  113 => 38,  107 => 35,  102 => 34,  94 => 31,  89 => 30,  87 => 29,  84 => 28,  81 => 27,  77 => 25,  70 => 22,  68 => 21,  58 => 14,  54 => 12,  51 => 11,  43 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    {% if params.courseFound is defined and params.courseFound != null %}
        Profs de {{ params.courseFound.intitule }} - {{ parent() }}
    {% else %}
        Profs - {{ parent() }}
    {% endif %}
{% endblock %}

{% block body %}

    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">
                    {% if params.courseFound is defined and params.courseFound != null %}
                        <h1 class=\"hero-title\">Grands Profs en {{ params.courseFound.intitule }} </h1>

                        <ol class=\"breadcrumb-list\">
                            <li><a href=\"{{ path('lgp_core_homepage') }} \">Accueil</a></li>
                            {#  <li><a href=\"#\">Profs</a></li> #}
                            {% if params.quartier is defined %}
                                <li>
                                    {% if app.request.attributes.get(\"_route\") == \"lgp_course_find_prof_refine_quarter\" %}
                                        <a href=\" {{ path('lgp_course_find_prof_city_quarter', {'slug_ville' : params.quartier.slugVille, 'slug_quartier' : params.quartier.intitule}) }} \">
                                            {{ params.quartier.ville }} - {{ params.quartier.intitule }}
                                        </a>
                                    {% else %}
                                        <a href=\" {{ path('lgp_course_find_prof_city', {'slugVille' : params.quartier.slugVille}) }} \">
                                            {{ params.quartier.ville }}
                                        </a>
                                    {% endif %}
                                </li>
                            {% endif %}
                            <li><span>{{ params.courseFound.intitule }}</span></li>
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
                                <h4>Rechercher</h4>
                            </div>

                            <div class=\"sidebar-search-content\">
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

                    {% if params.courseFound is defined %}
                        <div class=\"sorting-wrappper\">

                            <div class=\"sorting-header\">

                                <h3 class=\"sorting-title uppercase\">Des Grands profs
                                    en {{ params.courseFound.intitule }}</h3>
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
                    {% endif %}

                    <div class=\"package-list-item-wrapper on-page-result-page\">

                        {% if params.matieres_profs | length != 0 %}

                        {% for enseigne in params.matieres_profs %}
                            <div class=\"package-list-item clearfix\">
                                <div class=\"image\">
                                    {% if enseigne.prof.image is null %}
                                        <img src=\"{{ asset('uploads/profils/default.png') }}\" alt=\"Tour Package\"/>
                                    {% else %}
                                        <img src=\"{{ asset(enseigne.prof.image.webPath) }}\" alt=\" image prof \"/>
                                    {% endif %}
                                </div>

                                <div class=\"content\">
                                    <h5>{{ enseigne.prof.prenoms ~\"  \"~ enseigne.prof.nom | upper }}
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
                                                            <a href=\" {{ path('lgp_course_find_prof',{'slug':ens_cours.cours.slug,}) }} \"
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
                                            {% set avisSum = 0 %}
                                            {% set allAvis = params.avisRep.findBy({'prof':enseigne.prof}) %}
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
                                            <a href=\" {{ path('lgp_course_profile_prof',{'slug' : enseigne.prof.slug}) }} \"
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
{% endblock %} 
";
    }
}
