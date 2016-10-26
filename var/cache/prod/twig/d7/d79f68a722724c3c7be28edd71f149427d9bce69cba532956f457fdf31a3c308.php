<?php

/* LGPCourseBundle:Course:search.html.twig */
class __TwigTemplate_0458fa1824796fbe766a1f99cdcb617b15e8f40e786d8c823806bc829ef5352b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_homepage");
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find_prof_city_quarter", array("slug_ville" => $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "quartier", array()), "slugVille", array()), "slug_quartier" => $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "quartier", array()), "intitule", array()))), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find_prof_city", array("slugVille" => $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "quartier", array()), "slugVille", array()))), "html", null, true);
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

                                <h3 class=\"sorting-title uppercase\">
                                    Des Grands profs en
                                    ";
            // line 201
            if ( !(null === $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array()))) {
                // line 202
                echo "                                        <span style=\"color: orangered;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array()), "intitule", array()), "html", null, true);
                echo "</span>
                                    ";
            } else {
                // line 204
                echo "                                        <span style=\"color: orangered;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "intitule", array()), "html", null, true);
                echo "</span>
                                    ";
            }
            // line 206
            echo "                                </h3>
                                <p class=\"sorting-lead\"><strong>";
            // line 207
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "matieres_profs", array())), "html", null, true);
            echo "</strong> Grands profs trouvés</p>
                            </div>

                            ";
            // line 236
            echo "
                        </div>
                    ";
        }
        // line 239
        echo "
                    <div class=\"package-list-item-wrapper on-page-result-page\">

                        ";
        // line 242
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "matieres_profs", array())) != 0)) {
            // line 243
            echo "
                        ";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "matieres_profs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["enseigne"]) {
                // line 245
                echo "                            <div class=\"package-list-item clearfix\">
                                <div class=\"image\">
                                    ";
                // line 247
                if ((null === $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array()))) {
                    // line 248
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
                    echo "\" alt=\"Tour Package\"/>
                                    ";
                } else {
                    // line 250
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array()), "webPath", array())), "html", null, true);
                    echo "\" alt=\" image prof \"/>
                                    ";
                }
                // line 252
                echo "                                </div>

                                <div class=\"content\">
                                    <h5>";
                // line 255
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "prenoms", array()) . "  ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "nom", array()))), "html", null, true);
                echo "
                                        <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button>
                                    </h5>
                                    <div class=\"row gap-10\">
                                        <div class=\"col-sm-12 col-md-9\">

                                            <p class=\"line18\"> ";
                // line 261
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "presentation", array()), "html", null, true);
                echo " </p>
                                            <br>
                                            <ul class=\"list-info\">
                                                <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span
                                                            class=\"font600\">Position: </span>
                                                    ";
                // line 266
                if ( !(null === $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array()))) {
                    // line 267
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array())), "html", null, true);
                    echo "
                                                    ";
                } else {
                    // line 269
                    echo "                                                        NON DEFINIE
                                                    ";
                }
                // line 271
                echo "                                                </li>

                                                <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span
                                                            class=\"font600\">Cours :</span>
                                                    ";
                // line 275
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
                    // line 276
                    echo "                                                        ";
                    if (($this->getAttribute($context["loop"], "index", array()) != $this->getAttribute($context["loop"], "last", array()))) {
                        // line 277
                        echo "                                                            <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
                        echo " \"
                                                               title=\"\">";
                        // line 278
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a> -
                                                        ";
                    } else {
                        // line 280
                        echo "                                                            <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
                        echo " \"
                                                               title=\"\">";
                        // line 281
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a>
                                                        ";
                    }
                    // line 283
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
                // line 284
                echo "                                                </li>
                                            </ul>

                                        </div>
                                        <div class=\"col-sm-12 col-md-3 text-right text-left-sm\">
                                            ";
                // line 289
                $context["avisSum"] = 0;
                // line 290
                echo "                                            ";
                $context["allAvis"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "avisRep", array()), "findBy", array(0 => array("prof" => $this->getAttribute($context["enseigne"], "prof", array()))), "method");
                // line 291
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["allAvis"]) ? $context["allAvis"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                    // line 292
                    echo "                                                ";
                    $context["avisSum"] = ((isset($context["avisSum"]) ? $context["avisSum"] : null) + $this->getAttribute($context["avis"], "note", array()));
                    // line 293
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 294
                echo "                                            ";
                if ((twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : null)) != 0)) {
                    // line 295
                    echo "                                                ";
                    $context["avisRange"] = ((isset($context["avisSum"]) ? $context["avisSum"] : null) / twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : null)));
                    // line 296
                    echo "                                            ";
                } else {
                    // line 297
                    echo "                                                ";
                    $context["avisRange"] = 0;
                    // line 298
                    echo "                                            ";
                }
                // line 299
                echo "                                            <div class=\"rating-wrapper\">
                                                <div class=\"raty-wrapper\">
                                                    <div>
                                                        ";
                // line 302
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 303
                    echo "                                                            ";
                    if ((twig_round((isset($context["avisRange"]) ? $context["avisRange"] : null)) >= $context["i"])) {
                        // line 304
                        echo "                                                                <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                     src=\"";
                        // line 305
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                        echo "\">
                                                            ";
                    } else {
                        // line 307
                        echo "                                                                <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                     src=\"";
                        // line 308
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                        echo "\"
                                                                     title=\"\">
                                                            ";
                    }
                    // line 311
                    echo "                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 312
                echo "                                                    </div>
                                                    <span> / ";
                // line 313
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : null)), "html", null, true);
                echo " avis</span>
                                                </div>
                                            </div>
                                            ";
                // line 316
                ob_start();
                // line 317
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "enseignementRep", array()), "getPrixProf", array(0 => $this->getAttribute($context["enseigne"], "prof", array())), "method"), "html", null, true);
                echo "
                                            ";
                $context["minPrice"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 319
                echo "                                            <div class=\"price\">";
                echo twig_escape_filter($this->env, (isset($context["minPrice"]) ? $context["minPrice"] : null), "html", null, true);
                echo " Fcfa / Mois <br> Prix minimal</div>
                                            <a href=\" ";
                // line 320
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_profile_prof", array("slug" => $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "slug", array()))), "html", null, true);
                echo " \"
                                               class=\"btn btn-primary btn-sm\">Voir Profil</a>
                                            <a href=\" ";
                // line 322
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_reservation_detail", array("slug" => $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "slug", array()))), "html", null, true);
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
            // line 331
            echo "
                    </div>

                    ";
            // line 334
            $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "LGPCourseBundle:Course:search.html.twig", 334)->display($context);
            // line 335
            echo "
                    ";
        }
        // line 337
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
        return array (  475 => 337,  471 => 335,  469 => 334,  464 => 331,  449 => 322,  444 => 320,  439 => 319,  433 => 317,  431 => 316,  425 => 313,  422 => 312,  416 => 311,  410 => 308,  405 => 307,  400 => 305,  395 => 304,  392 => 303,  388 => 302,  383 => 299,  380 => 298,  377 => 297,  374 => 296,  371 => 295,  368 => 294,  362 => 293,  359 => 292,  354 => 291,  351 => 290,  349 => 289,  342 => 284,  328 => 283,  323 => 281,  318 => 280,  313 => 278,  308 => 277,  305 => 276,  288 => 275,  282 => 271,  278 => 269,  272 => 267,  270 => 266,  262 => 261,  253 => 255,  248 => 252,  242 => 250,  236 => 248,  234 => 247,  230 => 245,  226 => 244,  223 => 243,  221 => 242,  216 => 239,  211 => 236,  205 => 207,  202 => 206,  196 => 204,  190 => 202,  188 => 201,  180 => 195,  178 => 194,  168 => 186,  165 => 83,  160 => 74,  158 => 73,  129 => 46,  125 => 44,  117 => 40,  113 => 38,  107 => 35,  102 => 34,  94 => 31,  89 => 30,  87 => 29,  84 => 28,  81 => 27,  77 => 25,  70 => 22,  68 => 21,  58 => 14,  54 => 12,  51 => 11,  43 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
