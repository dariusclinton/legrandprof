<?php

/* LGPCourseBundle:Enseignement:profile.html.twig */
class __TwigTemplate_a5e80ba1600f1299160e8941aecff4294bf921b81ac9129f71f06101fee99948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Enseignement:profile.html.twig", 1);
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
        $__internal_f40f107cb86f8eb62497d6e92f2357572bab5b06f8b19bd2599adf2cb61bde85 = $this->env->getExtension("native_profiler");
        $__internal_f40f107cb86f8eb62497d6e92f2357572bab5b06f8b19bd2599adf2cb61bde85->enter($__internal_f40f107cb86f8eb62497d6e92f2357572bab5b06f8b19bd2599adf2cb61bde85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Enseignement:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f40f107cb86f8eb62497d6e92f2357572bab5b06f8b19bd2599adf2cb61bde85->leave($__internal_f40f107cb86f8eb62497d6e92f2357572bab5b06f8b19bd2599adf2cb61bde85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a3a3e73beacce36fa6afa321aa361adb18c9f32fc04c3e38888a47a73a07bfb = $this->env->getExtension("native_profiler");
        $__internal_5a3a3e73beacce36fa6afa321aa361adb18c9f32fc04c3e38888a47a73a07bfb->enter($__internal_5a3a3e73beacce36fa6afa321aa361adb18c9f32fc04c3e38888a47a73a07bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Profil prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5a3a3e73beacce36fa6afa321aa361adb18c9f32fc04c3e38888a47a73a07bfb->leave($__internal_5a3a3e73beacce36fa6afa321aa361adb18c9f32fc04c3e38888a47a73a07bfb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9923dea022b771c385324e090790ad81fd43d00aa288e94d4f1183b06ad0761 = $this->env->getExtension("native_profiler");
        $__internal_e9923dea022b771c385324e090790ad81fd43d00aa288e94d4f1183b06ad0761->enter($__internal_e9923dea022b771c385324e090790ad81fd43d00aa288e94d4f1183b06ad0761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- start end Page title -->
    ";
        // line 9
        if ( !(null === $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "prof", array()))) {
            // line 10
            echo "        ";
            $context["prof"] = $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "prof", array());
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div class=\"page-title detail-page-title\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/detail/head.jpg"), "html", null, true);
        echo "');\">
        <div class=\"container\">

            <div class=\"flex-row\">

                <div class=\"flex-column flex-md-3 flex-sm-12\">
                    ";
        // line 18
        if ( !(null === $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "image", array()))) {
            // line 19
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\" image prof \"
                             class=\"profile-img\"/>
                    ";
        } else {
            // line 22
            echo "                        <i class=\"fa fa-user fa-5x profile-img\" style=\"color:#fff\"></i>
                        ";
            // line 24
            echo "                    ";
        }
        // line 25
        echo "                </div>
                <div class=\"flex-column flex-md-6 flex-align-bottom flex-sm-12\">
                    <div class=\"profile-infos\">
                        <h1 class=\"hero-title\"> ";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "prenoms", array()) . " ") . twig_upper_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "nom", array()))), "html", null, true);
        echo " </h1>
                        <p class=\"line18\"> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "profession", array()), "html", null, true);
        echo " </p>

                        <ul class=\"list-col clearfix\">
                            <li class=\"rating-box\">
                                <div class=\"rating-wrapper\">
                                    <div class=\"raty-wrapper\">
                                        ";
        // line 35
        $context["avisSum"] = 0;
        // line 36
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avis", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 37
            echo "                                            ";
            $context["avisSum"] = ((isset($context["avisSum"]) ? $context["avisSum"] : $this->getContext($context, "avisSum")) + $this->getAttribute($context["avis"], "note", array()));
            // line 38
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                        ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avis", array())) != 0)) {
            // line 40
            echo "                                            ";
            $context["avisRange"] = ((isset($context["avisSum"]) ? $context["avisSum"] : $this->getContext($context, "avisSum")) / twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avis", array())));
            // line 41
            echo "                                        ";
        } else {
            // line 42
            echo "                                            ";
            $context["avisRange"] = 0;
            // line 43
            echo "                                        ";
        }
        // line 44
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 45
            echo "                                            ";
            if ((twig_round((isset($context["avisRange"]) ? $context["avisRange"] : $this->getContext($context, "avisRange"))) >= $context["i"])) {
                // line 46
                echo "                                                <img alt=\" ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " \" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                echo "\">
                                            ";
            } else {
                // line 48
                echo "                                                <img alt=\" ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " \" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                echo "\"
                                                     title=\"\">
                                            ";
            }
            // line 51
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                        <span style=\"display: block;\"> / ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avis", array())), "html", null, true);
        echo " avis</span>
                                    </div>
                                </div>
                            </li>

                            <li class=\"fav-box\">
                                <div class=\"meta\">
                                    <span class=\"block\">Recommandé</span>
                                    ";
        // line 60
        if ( !(null === (isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")))) {
            // line 61
            echo "                                        ";
            if ($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "isRecommande", array())) {
                // line 62
                echo "                                            <span class=\"on\" style=\"color:#81c784\"><i class=\"fa fa-check\"></i></span>
                                        ";
            } else {
                // line 64
                echo "                                            <span class=\"off\" style=\"color:#e57373\"><i class=\"fa fa-remove\"></i></span>
                                        ";
            }
            // line 66
            echo "                                    ";
        }
        // line 67
        echo "                                </div>
                            </li>
                            <li class=\"price-box\">
                                <div class=\"meta\">
                                    ";
        // line 71
        ob_start();
        // line 72
        echo "                                        ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseignementRep", array()), "getPrixProf", array(0 => (isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof"))), "method"), "html", null, true);
        echo "
                                    ";
        $context["minPrice"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                                    <span class=\"block\">";
        echo twig_escape_filter($this->env, (isset($context["minPrice"]) ? $context["minPrice"] : $this->getContext($context, "minPrice")), "html", null, true);
        echo " Fcfa / mois</span>
                                    Prix minimal
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>


                <div class=\"flex-column flex-md-3 flex-align-bottom flex-sm-12 mt-20-sm\">
                    <div class=\"text-right text-left-sm\">
                        <a href=\" ";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_reservation_detail", array("id" => $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id", array()))), "html", null, true);
        echo " \" class=\"anchor btn btn-primary\">Réserver
                            un cours</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Page title -->

    <div class=\"breadcrumb-wrapper bg-light-2\">
        <div class=\"container\">
            <ol class=\"breadcrumb-list\">
                <li><a href=\" ";
        // line 98
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo " \">Accueil</a></li>
                <li><a href=\" ";
        // line 99
        echo $this->env->getExtension('routing')->getPath("lgp_course_find");
        echo " \">Profs</a></li>
                ";
        // line 102
        echo "                <li><span> ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "prenoms", array()) . " ") . twig_upper_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "nom", array()))), "html", null, true);
        echo " </span></li>
            </ol>
        </div>
    </div>

    <div class=\"content-wrapper\">

        <div class=\"container\">

            <div class=\"row\">
                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 113
            echo "                    <div id=\"confirmation-avis\" class=\"col-md-12 col-sm-12 alert alert-success\"
                         style=\"z-index: 1000; position: relative; display: none\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        ";
            // line 116
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 120
            echo "                    <div id=\"confirmation-avis\" class=\"col-md-12 col-sm-12 alert alert-danger\"
                         style=\"z-index: 1000; position: relative; display: none\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        ";
            // line 123
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                <div class=\"col-md-8\" role=\"main\">

                    <div class=\"detail-content-wrapper\">

                        <div id=\"section-0\" class=\"detail-content\">

                            <div class=\"section-title text-left\">
                                <h4>Je donne cours de</h4>
                            </div>
                            <ul class=\"list-group\">
                                ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseignementRep", array()), "getCoursByProf", array(0 => (isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof"))), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["ens_cours"]) {
            // line 137
            echo "                                    <li class=\"list-group-item\">
                                        <b>
                                            <a href=\" ";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
            echo " \"
                                               title=\"\">
                                                ";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
            echo "
                                            </a>
                                        </b>
                                        <span>Dans les classes ci-dessous : </span>
                                        <ul>
                                            ";
            // line 146
            $context["classes"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseignementRep", array()), "getClasseByCoursAndProf", array(0 => $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id", array()), 1 => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "id", array())), "method");
            // line 147
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
            foreach ($context['_seq'] as $context["_key"] => $context["enseignementClasse"]) {
                // line 148
                echo "                                                <li>
                                                    <dl class=\"dl-horizontal\">
                                                        <dt>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["enseignementClasse"], "classe", array()), "html", null, true);
                echo "</dt>
                                                        <dd>
                                                            ------ &nbsp;&nbsp;&nbsp;&nbsp;
                                                            <b>";
                // line 153
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["enseignementClasse"], "prix", array()), 2, ",", "."), "html", null, true);
                echo "</b>
                                                            FCFA / Mois
                                                        </dd>
                                                    </dl>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignementClasse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                                        </ul>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens_cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                            </ul>
                        </div>

                        <div id=\"section-1\" class=\"detail-content\">
                            <div class=\"section-title text-left\">
                                <h4>Je donne cours dans les quartiers</h4>
                            </div>
                            <ul class=\"list-group\">
                                <li class=\"list-group-item\">
                                    ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "quartierCibles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["quartiersProf"]) {
            // line 172
            echo "                                        <dl class=\"dl-horizontal\">
                                            <dt>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["quartiersProf"], "intitule", array()), "html", null, true);
            echo "</dt>
                                            <dd>
                                                de la ville de &nbsp;&nbsp;&nbsp;&nbsp;
                                                <b>
                                                    <a href=\" ";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("slugVille" => $this->getAttribute($context["quartiersProf"], "slugVille", array()))), "html", null, true);
            echo " \"
                                                       title=\"Profs de ";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["quartiersProf"], "ville", array()), "html", null, true);
            echo "\">
                                                        ";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["quartiersProf"], "ville", array()), "html", null, true);
            echo "
                                                    </a>
                                                </b>
                                            </dd>
                                        </dl>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quartiersProf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                                </li>
                            </ul>
                        </div>

                        <div id=\"section-2\" class=\"detail-content\">

                            <div class=\"section-title text-left\">
                                <h4>A Propos de moi</h4>
                            </div>
                            <p>
                                ";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "presentation", array()), "html", null, true);
        echo "
                            </p>

                        </div>

                        <div id=\"section-3\" class=\"detail-content\">

                            <div class=\"section-title text-left\">
                                <h4>Ma formation</h4>
                            </div>

                            <div class=\"detail-item\">

                                <div class=\"row\">


                                    <div class=\"col-sm-12 col-md-12\">

                                        <div class=\"itinerary-wrapper\">

                                            <div class=\"itinerary-item-wrapper\">

                                                <div class=\"panel-group bootstarp-toggle\">
                                                    ";
        // line 218
        if (twig_test_empty($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "diplomes", array()))) {
            // line 219
            echo "                                                        NON DEFINIE
                                                    ";
        }
        // line 221
        echo "                                                    ";
        $context["compt"] = 1;
        // line 222
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "diplomes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
            // line 223
            echo "                                                        <div class=\"panel itinerary-item\">
                                                            <div class=\"panel-heading\">
                                                                <h5 class=\"panel-title\">
                                                                    <a data-toggle=\"collapse\" data-parent=\"#\"><span
                                                                                class=\"absolute-day-number\"> ";
            // line 227
            echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : $this->getContext($context, "compt")), "html", null, true);
            echo " </span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
            echo "
                                                                    </a>
                                                                    ";
            // line 229
            $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : $this->getContext($context, "compt")) + 1);
            // line 230
            echo "                                                                </h5>
                                                            </div>
                                                        </div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <div id=\"section-4\" class=\"detail-content\">

                            <div class=\"section-title text-left\">
                                <h4>Avis</h4>
                            </div>

                            <div class=\"review-wrapper\">

                                <div class=\"review-content\">

                                    <div class=\"row gap-20\">

                                        <div class=\"col-sm-6\">
                                            <h5>";
        // line 261
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avis", array())), "html", null, true);
        echo " avis</h5>
                                        </div>

                                        <div class=\"col-sm-6 text-right text-left-xs\">
                                            <button id=\"btn-leave-avis\"
                                                    class=\"anchor btn btn-primary btn-inverse btn-sm\">
                                                <span id=\"leave-avis-text\">Laisser un avis</span>
                                            </button>
                                        </div>

                                        <div class=\"col-md-12 col-sm-12 test\" id=\"leave-avis\" style=\"display:none\">
                                            <div class=\"col-md-12\">
                                                ";
        // line 273
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPCourseBundle:Enseignement:profile.html.twig", 273)->display($context);
        // line 274
        echo "                                            </div>

                                        </div>

                                    </div>

                                    ";
        // line 280
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avis", array()))) {
            // line 281
            echo "                                        <ul class=\"review-list\">
                                            ";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avis", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                // line 283
                echo "                                                ";
                $context["user"] = $this->getAttribute($context["avis"], "user", array());
                // line 284
                echo "                                                <li class=\"clearfix\">
                                                    <div class=\"image img-circle\">
                                                        ";
                // line 286
                if ((null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()))) {
                    // line 287
                    echo "                                                            <img class=\"img-circle\"
                                                                 src=\"";
                    // line 288
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                    echo "\"
                                                                 alt=\"Tour Package\"/>
                                                        ";
                } else {
                    // line 291
                    echo "                                                            <img class=\"img-circle\"
                                                                 src=\"";
                    // line 292
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "webPath", array())), "html", null, true);
                    echo "\"
                                                                 alt=\" image utilisateur \"/>
                                                        ";
                }
                // line 295
                echo "                                                    </div>
                                                    <div class=\"content\">
                                                        <div class=\"row gap-20 mb-0\">
                                                            <div class=\"col-sm-9\">
                                                                <h6> ";
                // line 299
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenoms", array()) . "  ") . twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()))), "html", null, true);
                echo " ";
                echo "</h6>
                                                            </div>
                                                            <div class=\"col-sm-3\">
                                                                <p class=\"review-date\"> ";
                // line 302
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["avis"], "dateAvis", array()), "d/m/Y"), "html", null, true);
                echo " </p>
                                                            </div>
                                                        </div>

                                                        <div class=\"rating-wrapper\">
                                                            <div class=\"raty-wrapper\">
                                                                ";
                // line 309
                echo "                                                                ";
                $context["avisNote"] = $this->getAttribute($context["avis"], "note", array());
                // line 310
                echo "                                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 311
                    echo "                                                                    ";
                    if ((twig_round((isset($context["avisNote"]) ? $context["avisNote"] : $this->getContext($context, "avisNote"))) >= $context["i"])) {
                        // line 312
                        echo "                                                                        <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                             src=\"";
                        // line 313
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                        echo "\">
                                                                    ";
                    } else {
                        // line 315
                        echo "                                                                        <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                             src=\"";
                        // line 316
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                        echo "\"
                                                                             title=\"\">
                                                                    ";
                    }
                    // line 319
                    echo "                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 320
                echo "                                                            </div>
                                                        </div>

                                                        <div class=\"review-text\">

                                                            <p>
                                                                ";
                // line 326
                echo twig_escape_filter($this->env, $this->getAttribute($context["avis"], "commentaire", array()), "html", null, true);
                echo "
                                                            </p>

                                                        </div>

                                                    </div>
                                                </li>

                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "

                                        </ul>
                                        <div class=\"bt text-center pt-30\">
                                            <a href=\"#\" class=\"btn btn-primary\">Lire plus d'avis</a>
                                        </div>
                                    ";
        }
        // line 342
        echo "
                                </div>

                            </div>

                        </div>
                        <div id=\"section-5\" class=\"detail-content\">

                            <div class=\"section-title text-left\">
                                <h4>Profs similaires</h4>
                            </div>

                            <div class=\"GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller\">

                                <div class=\"GridLex-grid-noGutter-equalHeight\">
                                    ";
        // line 357
        if ( !twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "similarProfs", array()))) {
            // line 358
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "similarProfs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["enseignement"]) {
                // line 359
                echo "                                            <div class=\"GridLex-col-4_sm-4_xs-12 mb-20\">
                                                <div class=\"package-grid-item\">
                                                    <a href=\" ";
                // line 361
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_profile_prof", array("profId" => $this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "id", array()))), "html", null, true);
                echo " \">
                                                        <div class=\"image similar\">
                                                            ";
                // line 363
                if ( !(null === $this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "image", array()))) {
                    // line 364
                    echo "                                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "image", array()), "webPath", array())), "html", null, true);
                    echo "\"
                                                                     alt=\" image prof \"/>
                                                            ";
                } else {
                    // line 367
                    echo "                                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                    echo "\"
                                                                     alt=\"Tour Package\"/>
                                                            ";
                }
                // line 370
                echo "                                                            ";
                if ($this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "isRecommande", array())) {
                    // line 371
                    echo "                                                                <div class=\"absolute-in-image\">
                                                                    <div class=\"duration\">
                                                                        <span>
                                                                            Recommandé
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            ";
                }
                // line 379
                echo "                                                        </div>
                                                        <div class=\"content clearfix\">
                                                            <h6>
                                                                ";
                // line 382
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "prenoms", array()) . "  ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "nom", array()))), "html", null, true);
                echo "
                                                            </h6>
                                                            ";
                // line 384
                $context["avisSum"] = 0;
                // line 385
                echo "                                                            ";
                $context["allAvis"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avisRep", array()), "findBy", array(0 => array("prof" => $this->getAttribute($context["enseignement"], "prof", array()))), "method");
                // line 386
                echo "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis")));
                foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                    // line 387
                    echo "                                                                ";
                    $context["avisSum"] = ((isset($context["avisSum"]) ? $context["avisSum"] : $this->getContext($context, "avisSum")) + $this->getAttribute($context["avis"], "note", array()));
                    // line 388
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 389
                echo "                                                            ";
                if ((twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))) != 0)) {
                    // line 390
                    echo "                                                                ";
                    $context["avisRange"] = ((isset($context["avisSum"]) ? $context["avisSum"] : $this->getContext($context, "avisSum")) / twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))));
                    // line 391
                    echo "                                                            ";
                } else {
                    // line 392
                    echo "                                                                ";
                    $context["avisRange"] = 0;
                    // line 393
                    echo "                                                            ";
                }
                // line 394
                echo "                                                            <div class=\"rating-wrapper\">
                                                                <div class=\"raty-wrapper\">
                                                                    <div>
                                                                        ";
                // line 397
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 398
                    echo "                                                                            ";
                    if ((twig_round((isset($context["avisRange"]) ? $context["avisRange"] : $this->getContext($context, "avisRange"))) >= $context["i"])) {
                        // line 399
                        echo "                                                                                <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                                     src=\"";
                        // line 400
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                        echo "\">
                                                                            ";
                    } else {
                        // line 402
                        echo "                                                                                <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                                     src=\"";
                        // line 403
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                        echo "\"
                                                                                     title=\"\">
                                                                            ";
                    }
                    // line 406
                    echo "                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 407
                echo "                                                                    </div>
                                                                    <br>
                                                                    <span> / ";
                // line 409
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))), "html", null, true);
                echo " avis</span>
                                                                </div>
                                                            </div>
                                                            <div class=\"absolute-in-content\">
                                                                ";
                // line 413
                $context["minPrice"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseignementRep", array()), "getPrixProf", array(0 => $this->getAttribute($context["enseignement"], "prof", array())), "method");
                // line 414
                echo "                                                                <span class=\"btn\">
                                                                    <i class=\"fa fa-heart text-primary\"></i></span>
                                                                <div class=\"price\">";
                // line 416
                echo twig_escape_filter($this->env, (isset($context["minPrice"]) ? $context["minPrice"] : $this->getContext($context, "minPrice")), "html", null, true);
                echo " F/Mois <br> Prix
                                                                    minimal
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 425
            echo "                                    ";
        } else {
            // line 426
            echo "                                        <b>- Aucun prof similaire</b>
                                    ";
        }
        // line 428
        echo "
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <div class=\"col-md-4 hidden-sm hidden-xs\" style=\"\">

                    <div class=\"scrollspy-sidebar sidebar-detail\" role=\"complementary\">

                        <ul class=\"scrollspy-sidenav\">

                            <li>
                                <ul class=\"nav\">
                                    <li><a href=\"#section-0\" class=\"anchor\" style=\"\">MES COURS</a></li>
                                    <li><a href=\"#section-1\" class=\"anchor\">MES QUARTIERS CIBLES</a></li>
                                    <li><a href=\"#section-2\" class=\"anchor\">A PROPOS DE MOI</a></li>
                                    <li><a href=\"#section-3\" class=\"anchor\">MA FORMATION</a></li>
                                    <li><a href=\"#section-4\" class=\"anchor\">Avis</a></li>
                                    <li><a href=\"#section-5\" class=\"anchor\">PROFS MILAIRES</a></li>
                                </ul>
                            </li>
                        </ul>
                        <a href=\" ";
        // line 455
        echo $this->env->getExtension('routing')->getPath("lgp_course_find");
        echo " \" class=\"btn btn-primary\">
                            Faire une autre recherche
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


";
        
        $__internal_e9923dea022b771c385324e090790ad81fd43d00aa288e94d4f1183b06ad0761->leave($__internal_e9923dea022b771c385324e090790ad81fd43d00aa288e94d4f1183b06ad0761_prof);

    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Enseignement:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  891 => 455,  862 => 428,  858 => 426,  855 => 425,  840 => 416,  836 => 414,  834 => 413,  827 => 409,  823 => 407,  817 => 406,  811 => 403,  806 => 402,  801 => 400,  796 => 399,  793 => 398,  789 => 397,  784 => 394,  781 => 393,  778 => 392,  775 => 391,  772 => 390,  769 => 389,  763 => 388,  760 => 387,  755 => 386,  752 => 385,  750 => 384,  745 => 382,  740 => 379,  730 => 371,  727 => 370,  720 => 367,  713 => 364,  711 => 363,  706 => 361,  702 => 359,  697 => 358,  695 => 357,  678 => 342,  669 => 335,  654 => 326,  646 => 320,  640 => 319,  634 => 316,  629 => 315,  624 => 313,  619 => 312,  616 => 311,  611 => 310,  608 => 309,  599 => 302,  592 => 299,  586 => 295,  580 => 292,  577 => 291,  571 => 288,  568 => 287,  566 => 286,  562 => 284,  559 => 283,  555 => 282,  552 => 281,  550 => 280,  542 => 274,  540 => 273,  525 => 261,  496 => 234,  487 => 230,  485 => 229,  478 => 227,  472 => 223,  467 => 222,  464 => 221,  460 => 219,  458 => 218,  432 => 195,  420 => 185,  408 => 179,  404 => 178,  400 => 177,  393 => 173,  390 => 172,  386 => 171,  375 => 162,  367 => 159,  355 => 153,  349 => 150,  345 => 148,  340 => 147,  338 => 146,  330 => 141,  325 => 139,  321 => 137,  317 => 136,  305 => 126,  296 => 123,  291 => 120,  286 => 119,  277 => 116,  272 => 113,  268 => 112,  254 => 102,  250 => 99,  246 => 98,  231 => 86,  215 => 74,  209 => 72,  207 => 71,  201 => 67,  198 => 66,  194 => 64,  190 => 62,  187 => 61,  185 => 60,  173 => 52,  167 => 51,  158 => 48,  150 => 46,  147 => 45,  142 => 44,  139 => 43,  136 => 42,  133 => 41,  130 => 40,  127 => 39,  121 => 38,  118 => 37,  113 => 36,  111 => 35,  102 => 29,  98 => 28,  93 => 25,  90 => 24,  87 => 22,  80 => 19,  78 => 18,  68 => 12,  65 => 11,  62 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    Profil prof - {{ parent() }}
{% endblock %}

{% block body %}
    <!-- start end Page title -->
    {% if params.prof is not null %}
        {% set prof = params.prof %}
    {% endif %}
    <div class=\"page-title detail-page-title\" style=\"background-image:url('{{ asset('images/detail/head.jpg') }}');\">
        <div class=\"container\">

            <div class=\"flex-row\">

                <div class=\"flex-column flex-md-3 flex-sm-12\">
                    {% if prof.image is not null %}
                        <img src=\"{{ asset(prof.image.webPath) }}\" alt=\" image prof \"
                             class=\"profile-img\"/>
                    {% else %}
                        <i class=\"fa fa-user fa-5x profile-img\" style=\"color:#fff\"></i>
                        {#<img src=\"{{ asset('uploads/profils/default.jpg') }}\" alt=\"Tour Package\"/>#}
                    {% endif %}
                </div>
                <div class=\"flex-column flex-md-6 flex-align-bottom flex-sm-12\">
                    <div class=\"profile-infos\">
                        <h1 class=\"hero-title\"> {{ prof.prenoms ~\" \"~ prof.nom | upper }} </h1>
                        <p class=\"line18\"> {{ prof.profession }} </p>

                        <ul class=\"list-col clearfix\">
                            <li class=\"rating-box\">
                                <div class=\"rating-wrapper\">
                                    <div class=\"raty-wrapper\">
                                        {% set avisSum = 0 %}
                                        {% for avis in params.avis %}
                                            {% set avisSum = avisSum + avis.note %}
                                        {% endfor %}
                                        {% if params.avis | length != 0 %}
                                            {% set avisRange = avisSum / params.avis | length %}
                                        {% else %}
                                            {% set avisRange = 0 %}
                                        {% endif %}
                                        {% for i in range(1,5) %}
                                            {% if (avisRange | round) >= i %}
                                                <img alt=\" {{ i }} \" src=\"{{ asset('images/raty/star-on-sm.png') }}\">
                                            {% else %}
                                                <img alt=\" {{ i }} \" src=\"{{ asset('images/raty/star-off-sm.png') }}\"
                                                     title=\"\">
                                            {% endif %}
                                        {% endfor %}
                                        <span style=\"display: block;\"> / {{ params.avis | length }} avis</span>
                                    </div>
                                </div>
                            </li>

                            <li class=\"fav-box\">
                                <div class=\"meta\">
                                    <span class=\"block\">Recommandé</span>
                                    {% if prof is not null %}
                                        {% if prof.isRecommande %}
                                            <span class=\"on\" style=\"color:#81c784\"><i class=\"fa fa-check\"></i></span>
                                        {% else %}
                                            <span class=\"off\" style=\"color:#e57373\"><i class=\"fa fa-remove\"></i></span>
                                        {% endif %}
                                    {% endif %}
                                </div>
                            </li>
                            <li class=\"price-box\">
                                <div class=\"meta\">
                                    {% set minPrice %}
                                        {{ params.enseignementRep.getPrixProf(prof) }}
                                    {% endset %}
                                    <span class=\"block\">{{ minPrice }} Fcfa / mois</span>
                                    Prix minimal
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>


                <div class=\"flex-column flex-md-3 flex-align-bottom flex-sm-12 mt-20-sm\">
                    <div class=\"text-right text-left-sm\">
                        <a href=\" {{ path('lgp_reservation_detail',{'id': prof.id}) }} \" class=\"anchor btn btn-primary\">Réserver
                            un cours</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Page title -->

    <div class=\"breadcrumb-wrapper bg-light-2\">
        <div class=\"container\">
            <ol class=\"breadcrumb-list\">
                <li><a href=\" {{ path('lgp_core_homepage') }} \">Accueil</a></li>
                <li><a href=\" {{ path('lgp_course_find') }} \">Profs</a></li>
                {#  <li><a href=\"#\">Douala</a></li>
                 <li><a href=\"#\">Informatique</a></li> #}
                <li><span> {{ prof.prenoms ~\" \"~ prof.nom | upper }} </span></li>
            </ol>
        </div>
    </div>

    <div class=\"content-wrapper\">

        <div class=\"container\">

            <div class=\"row\">
                {% for message in app.session.flashbag.get('info') %}
                    <div id=\"confirmation-avis\" class=\"col-md-12 col-sm-12 alert alert-success\"
                         style=\"z-index: 1000; position: relative; display: none\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        {{ message }}
                    </div>
                {% endfor %}
                {% for message in app.session.flashbag.get('warning') %}
                    <div id=\"confirmation-avis\" class=\"col-md-12 col-sm-12 alert alert-danger\"
                         style=\"z-index: 1000; position: relative; display: none\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        {{ message }}
                    </div>
                {% endfor %}
                <div class=\"col-md-8\" role=\"main\">

                    <div class=\"detail-content-wrapper\">

                        <div id=\"section-0\" class=\"detail-content\">

                            <div class=\"section-title text-left\">
                                <h4>Je donne cours de</h4>
                            </div>
                            <ul class=\"list-group\">
                                {% for ens_cours in params.enseignementRep.getCoursByProf(prof) %}
                                    <li class=\"list-group-item\">
                                        <b>
                                            <a href=\" {{ path('lgp_course_find_prof',{'slug':ens_cours.cours.slug}) }} \"
                                               title=\"\">
                                                {{ ens_cours.cours.intitule }}
                                            </a>
                                        </b>
                                        <span>Dans les classes ci-dessous : </span>
                                        <ul>
                                            {% set classes = params.enseignementRep.getClasseByCoursAndProf(prof.id, ens_cours.cours.id) %}
                                            {% for enseignementClasse in classes %}
                                                <li>
                                                    <dl class=\"dl-horizontal\">
                                                        <dt>{{ enseignementClasse.classe }}</dt>
                                                        <dd>
                                                            ------ &nbsp;&nbsp;&nbsp;&nbsp;
                                                            <b>{{ enseignementClasse.prix | number_format(2,',','.') }}</b>
                                                            FCFA / Mois
                                                        </dd>
                                                    </dl>
                                                </li>
                                            {% endfor %}
                                        </ul>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>

                        <div id=\"section-1\" class=\"detail-content\">
                            <div class=\"section-title text-left\">
                                <h4>Je donne cours dans les quartiers</h4>
                            </div>
                            <ul class=\"list-group\">
                                <li class=\"list-group-item\">
                                    {% for quartiersProf in prof.quartierCibles %}
                                        <dl class=\"dl-horizontal\">
                                            <dt>{{ quartiersProf.intitule }}</dt>
                                            <dd>
                                                de la ville de &nbsp;&nbsp;&nbsp;&nbsp;
                                                <b>
                                                    <a href=\" {{ path('lgp_course_find_prof_city', {'slugVille':quartiersProf.slugVille}) }} \"
                                                       title=\"Profs de {{ quartiersProf.ville }}\">
                                                        {{ quartiersProf.ville }}
                                                    </a>
                                                </b>
                                            </dd>
                                        </dl>
                                    {% endfor %}
                                </li>
                            </ul>
                        </div>

                        <div id=\"section-2\" class=\"detail-content\">

                            <div class=\"section-title text-left\">
                                <h4>A Propos de moi</h4>
                            </div>
                            <p>
                                {{ prof.presentation }}
                            </p>

                        </div>

                        <div id=\"section-3\" class=\"detail-content\">

                            <div class=\"section-title text-left\">
                                <h4>Ma formation</h4>
                            </div>

                            <div class=\"detail-item\">

                                <div class=\"row\">


                                    <div class=\"col-sm-12 col-md-12\">

                                        <div class=\"itinerary-wrapper\">

                                            <div class=\"itinerary-item-wrapper\">

                                                <div class=\"panel-group bootstarp-toggle\">
                                                    {% if prof.diplomes is empty %}
                                                        NON DEFINIE
                                                    {% endif %}
                                                    {% set compt = 1 %}
                                                    {% for diplome in prof.diplomes %}
                                                        <div class=\"panel itinerary-item\">
                                                            <div class=\"panel-heading\">
                                                                <h5 class=\"panel-title\">
                                                                    <a data-toggle=\"collapse\" data-parent=\"#\"><span
                                                                                class=\"absolute-day-number\"> {{ compt }} </span> {{ diplome.intitule }}
                                                                    </a>
                                                                    {% set compt = compt + 1 %}
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    {% endfor %}
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <div id=\"section-4\" class=\"detail-content\">

                            <div class=\"section-title text-left\">
                                <h4>Avis</h4>
                            </div>

                            <div class=\"review-wrapper\">

                                <div class=\"review-content\">

                                    <div class=\"row gap-20\">

                                        <div class=\"col-sm-6\">
                                            <h5>{{ params.avis | length }} avis</h5>
                                        </div>

                                        <div class=\"col-sm-6 text-right text-left-xs\">
                                            <button id=\"btn-leave-avis\"
                                                    class=\"anchor btn btn-primary btn-inverse btn-sm\">
                                                <span id=\"leave-avis-text\">Laisser un avis</span>
                                            </button>
                                        </div>

                                        <div class=\"col-md-12 col-sm-12 test\" id=\"leave-avis\" style=\"display:none\">
                                            <div class=\"col-md-12\">
                                                {% include 'LGPUserBundle:Avis:formulaire.html.twig' %}
                                            </div>

                                        </div>

                                    </div>

                                    {% if params.avis | length %}
                                        <ul class=\"review-list\">
                                            {% for avis in params.avis %}
                                                {% set user = avis.user %}
                                                <li class=\"clearfix\">
                                                    <div class=\"image img-circle\">
                                                        {% if user.image is null %}
                                                            <img class=\"img-circle\"
                                                                 src=\"{{ asset('uploads/profils/default.jpg') }}\"
                                                                 alt=\"Tour Package\"/>
                                                        {% else %}
                                                            <img class=\"img-circle\"
                                                                 src=\"{{ asset(user.image.webPath) }}\"
                                                                 alt=\" image utilisateur \"/>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"content\">
                                                        <div class=\"row gap-20 mb-0\">
                                                            <div class=\"col-sm-9\">
                                                                <h6> {{ user.prenoms~\"  \"~user.nom | upper }} {# <span>/ de Yaoundé-Bastos</span> #}</h6>
                                                            </div>
                                                            <div class=\"col-sm-3\">
                                                                <p class=\"review-date\"> {{ avis.dateAvis | date('d/m/Y') }} </p>
                                                            </div>
                                                        </div>

                                                        <div class=\"rating-wrapper\">
                                                            <div class=\"raty-wrapper\">
                                                                {#  <div class=\"star-rating-12px\" data-rating-score=\"4.0\"></div> #}
                                                                {% set avisNote = avis.note %}
                                                                {% for i in range(1,5) %}
                                                                    {% if (avisNote | round) >= i %}
                                                                        <img alt=\" {{ i }} \"
                                                                             src=\"{{ asset('images/raty/star-on-sm.png') }}\">
                                                                    {% else %}
                                                                        <img alt=\" {{ i }} \"
                                                                             src=\"{{ asset('images/raty/star-off-sm.png') }}\"
                                                                             title=\"\">
                                                                    {% endif %}
                                                                {% endfor %}
                                                            </div>
                                                        </div>

                                                        <div class=\"review-text\">

                                                            <p>
                                                                {{ avis.commentaire }}
                                                            </p>

                                                        </div>

                                                    </div>
                                                </li>

                                            {% endfor %}


                                        </ul>
                                        <div class=\"bt text-center pt-30\">
                                            <a href=\"#\" class=\"btn btn-primary\">Lire plus d'avis</a>
                                        </div>
                                    {% endif %}

                                </div>

                            </div>

                        </div>
                        <div id=\"section-5\" class=\"detail-content\">

                            <div class=\"section-title text-left\">
                                <h4>Profs similaires</h4>
                            </div>

                            <div class=\"GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller\">

                                <div class=\"GridLex-grid-noGutter-equalHeight\">
                                    {% if params.similarProfs is not empty %}
                                        {% for enseignement in params.similarProfs %}
                                            <div class=\"GridLex-col-4_sm-4_xs-12 mb-20\">
                                                <div class=\"package-grid-item\">
                                                    <a href=\" {{ path('lgp_course_profile_prof',{'profId':enseignement.prof.id}) }} \">
                                                        <div class=\"image similar\">
                                                            {% if enseignement.prof.image is not null %}
                                                                <img src=\"{{ asset(enseignement.prof.image.webPath) }}\"
                                                                     alt=\" image prof \"/>
                                                            {% else %}
                                                                <img src=\"{{ asset('uploads/profils/default.jpg') }}\"
                                                                     alt=\"Tour Package\"/>
                                                            {% endif %}
                                                            {% if enseignement.prof.isRecommande %}
                                                                <div class=\"absolute-in-image\">
                                                                    <div class=\"duration\">
                                                                        <span>
                                                                            Recommandé
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            {% endif %}
                                                        </div>
                                                        <div class=\"content clearfix\">
                                                            <h6>
                                                                {{ enseignement.prof.prenoms ~\"  \"~ enseignement.prof.nom | upper }}
                                                            </h6>
                                                            {% set avisSum = 0 %}
                                                            {% set allAvis = params.avisRep.findBy({'prof':enseignement.prof}) %}
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
                                                                    <br>
                                                                    <span> / {{ allAvis | length }} avis</span>
                                                                </div>
                                                            </div>
                                                            <div class=\"absolute-in-content\">
                                                                {% set minPrice = params.enseignementRep.getPrixProf(enseignement.prof) %}
                                                                <span class=\"btn\">
                                                                    <i class=\"fa fa-heart text-primary\"></i></span>
                                                                <div class=\"price\">{{ minPrice }} F/Mois <br> Prix
                                                                    minimal
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    {% else %}
                                        <b>- Aucun prof similaire</b>
                                    {% endif %}

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <div class=\"col-md-4 hidden-sm hidden-xs\" style=\"\">

                    <div class=\"scrollspy-sidebar sidebar-detail\" role=\"complementary\">

                        <ul class=\"scrollspy-sidenav\">

                            <li>
                                <ul class=\"nav\">
                                    <li><a href=\"#section-0\" class=\"anchor\" style=\"\">MES COURS</a></li>
                                    <li><a href=\"#section-1\" class=\"anchor\">MES QUARTIERS CIBLES</a></li>
                                    <li><a href=\"#section-2\" class=\"anchor\">A PROPOS DE MOI</a></li>
                                    <li><a href=\"#section-3\" class=\"anchor\">MA FORMATION</a></li>
                                    <li><a href=\"#section-4\" class=\"anchor\">Avis</a></li>
                                    <li><a href=\"#section-5\" class=\"anchor\">PROFS MILAIRES</a></li>
                                </ul>
                            </li>
                        </ul>
                        <a href=\" {{ path('lgp_course_find') }} \" class=\"btn btn-primary\">
                            Faire une autre recherche
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


{% endblock %}
";
    }
}
