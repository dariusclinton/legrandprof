<?php

/* LGPCourseBundle:Enseignement:profile.html.twig */
class __TwigTemplate_a5e80ba1600f1299160e8941aecff4294bf921b81ac9129f71f06101fee99948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Enseignement:profile.html.twig", 2);
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
        $__internal_e4f11fe70cd5d1533056938878bf11b7ca3bfeb63bf2cf3a34ca14b393b35111 = $this->env->getExtension("native_profiler");
        $__internal_e4f11fe70cd5d1533056938878bf11b7ca3bfeb63bf2cf3a34ca14b393b35111->enter($__internal_e4f11fe70cd5d1533056938878bf11b7ca3bfeb63bf2cf3a34ca14b393b35111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Enseignement:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4f11fe70cd5d1533056938878bf11b7ca3bfeb63bf2cf3a34ca14b393b35111->leave($__internal_e4f11fe70cd5d1533056938878bf11b7ca3bfeb63bf2cf3a34ca14b393b35111_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_09c1dbbcf38f7ecd7d81d58deb6ac49b4765ab6d4c60ebc02718381948cd8223 = $this->env->getExtension("native_profiler");
        $__internal_09c1dbbcf38f7ecd7d81d58deb6ac49b4765ab6d4c60ebc02718381948cd8223->enter($__internal_09c1dbbcf38f7ecd7d81d58deb6ac49b4765ab6d4c60ebc02718381948cd8223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Profil prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_09c1dbbcf38f7ecd7d81d58deb6ac49b4765ab6d4c60ebc02718381948cd8223->leave($__internal_09c1dbbcf38f7ecd7d81d58deb6ac49b4765ab6d4c60ebc02718381948cd8223_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3aae57b44a660ac01fa3e9f532b6a1291871edeb45a9643fbad7d50f4e64060b = $this->env->getExtension("native_profiler");
        $__internal_3aae57b44a660ac01fa3e9f532b6a1291871edeb45a9643fbad7d50f4e64060b->enter($__internal_3aae57b44a660ac01fa3e9f532b6a1291871edeb45a9643fbad7d50f4e64060b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <!-- start end Page title -->
    ";
        // line 10
        if ( !(null === $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "prof", array()))) {
            // line 11
            echo "        ";
            $context["prof"] = $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "prof", array());
            // line 12
            echo "    ";
        }
        // line 13
        echo "    <div class=\"page-title detail-page-title\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/detail/head.jpg"), "html", null, true);
        echo "');\">
        <div class=\"container\">

            <div class=\"flex-row\">

                <div class=\"flex-column flex-md-3 flex-sm-12\">
                    ";
        // line 19
        if ( !(null === $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "image", array()))) {
            // line 20
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "nom", array()), "html", null, true);
            echo " \"  class=\"profile-img\" />

                        ";
        } else {
            // line 23
            echo "                            <i class=\"fa fa-user fa-5x profile-img\" style=\"color:#fff\"></i>
                    ";
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
                echo "\" title=\"\"> 
                                            ";
            }
            // line 50
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        // line 59
        if ( !(null === (isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")))) {
            // line 60
            echo "                                        ";
            if ($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "isRecommande", array())) {
                // line 61
                echo "                                            <span class=\"on\" style=\"color:#81c784\"><i class=\"fa fa-check\"></i></span>
                                            ";
            } else {
                // line 63
                echo "                                            <span class=\"off\" style=\"color:#e57373\"><i class=\"fa fa-remove\"></i></span>
                                            ";
            }
            // line 65
            echo "                                        ";
        }
        // line 66
        echo "                                </div>
                            </li>
                            <li class=\"price-box\">
                                <div class=\"meta\">
                                    ";
        // line 70
        ob_start();
        // line 71
        echo "                                        ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseignementRep", array()), "getPrixProf", array(0 => (isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof"))), "method"), "html", null, true);
        echo "
                                    ";
        $context["minPrice"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 73
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
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_reservation_detail", array("id" => $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id", array()))), "html", null, true);
        echo " \" class=\"anchor btn btn-primary\">Réserver un cours</a>
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
        // line 96
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo " \">Accueil</a></li>
                <li><a href=\" ";
        // line 97
        echo $this->env->getExtension('routing')->getPath("lgp_course_find");
        echo " \">Profs</a></li>
                    ";
        // line 100
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
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 111
            echo "                    <div id=\"confirmation-avis\" class=\"col-md-12 col-sm-12 alert alert-success\" style=\"z-index: 1000; position: relative; display: none\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        ";
            // line 113
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 117
            echo "                    <div id=\"confirmation-avis\" class=\"col-md-12 col-sm-12 alert alert-danger\" style=\"z-index: 1000; position: relative; display: none\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        ";
            // line 119
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                <div class=\"col-md-8\" role=\"main\">

                    <div class=\"detail-content-wrapper\">

                        <div id=\"section-0\" class=\"detail-content\">

                            <div class=\"section-title text-left\">
                                <h4>Je donne cours de</h4>
                            </div>
                            <ul class=\"list-group\">
                                ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseignementRep", array()), "getCoursByProf", array(0 => (isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof"))), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["ens_cours"]) {
            // line 133
            echo "                                    <li class=\"list-group-item\">
                                        <b>
                                            <a href=\" ";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
            echo " \" title=\"\">
                                                ";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
            echo "
                                            </a>
                                        </b>
                                        <span>Dans les classes ci-dessous : </span>
                                        <ul>
                                            ";
            // line 141
            $context["classes"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseignementRep", array()), "getClasseByCoursAndProf", array(0 => $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id", array()), 1 => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "id", array())), "method");
            // line 142
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
            foreach ($context['_seq'] as $context["_key"] => $context["enseignementClasse"]) {
                // line 143
                echo "                                                <li>
                                                    <dl class=\"dl-horizontal\">
                                                        <dt>";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["enseignementClasse"], "classe", array()), "html", null, true);
                echo "</dt>
                                                        <dd> 
                                                            ------ &nbsp;&nbsp;&nbsp;&nbsp; 
                                                            <b>";
                // line 148
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["enseignementClasse"], "prix", array()), 2, ",", "."), "html", null, true);
                echo "</b> FCFA / Mois
                                                        </dd>
                                                    </dl>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignementClasse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "                                        </ul>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens_cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                            </ul>
                        </div>

                        <div id=\"section-1\" class=\"detail-content\">
                            <div class=\"section-title text-left\">
                                <h4>Je donne cours dans les quartiers</h4>
                            </div>
                            <ul class=\"list-group\">
                                <li class=\"list-group-item\">
                                    ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "quartierCibles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["quartiersProf"]) {
            // line 166
            echo "                                        <dl class=\"dl-horizontal\">
                                            <dt>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["quartiersProf"], "intitule", array()), "html", null, true);
            echo "</dt>
                                            <dd> 
                                                de la ville de  &nbsp;&nbsp;&nbsp;&nbsp; 
                                                <b>
                                                    <a href=\" ";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("slugVille" => $this->getAttribute($context["quartiersProf"], "slugVille", array()))), "html", null, true);
            echo " \" title=\"Profs de ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quartiersProf"], "ville", array()), "html", null, true);
            echo "\">
                                                        ";
            // line 172
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
        // line 178
        echo "                                </li>
                            </ul>
                        </div>

                        <div id=\"section-2\" class=\"detail-content\">

                            <div class=\"section-title text-left\">
                                <h4>A Propos de moi</h4>
                            </div>
                            <p>
                                ";
        // line 188
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
        // line 211
        if (twig_test_empty($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "diplomes", array()))) {
            // line 212
            echo "                                                    NON DEFINIE
                                                  ";
        }
        // line 214
        echo "                                                    ";
        $context["compt"] = 1;
        echo "     
                                                    ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "diplomes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
            // line 216
            echo "                                                        <div class=\"panel itinerary-item\">
                                                            <div class=\"panel-heading\">
                                                                <h5 class=\"panel-title\">
                                                                    <a data-toggle=\"collapse\" data-parent=\"#\"><span class=\"absolute-day-number\"> ";
            // line 219
            echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : $this->getContext($context, "compt")), "html", null, true);
            echo " </span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
            echo " </a>
                                                                    ";
            // line 220
            $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : $this->getContext($context, "compt")) + 1);
            // line 221
            echo "                                                                </h5>
                                                            </div>
                                                        </div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
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
        // line 253
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avis", array())), "html", null, true);
        echo " avis</h5>
                                        </div>

                                        <div class=\"col-sm-6 text-right text-left-xs\">
                                            <button id=\"btn-leave-avis\" class=\"anchor btn btn-primary btn-inverse btn-sm\">
                                                <span id=\"leave-avis-text\">Laisser un avis</span>
                                            </button>
                                        </div>

                                        <div class=\"col-md-12 col-sm-12 test\" id=\"leave-avis\" style=\"display:none\">
                                            <div class=\"col-md-12\">
                                                ";
        // line 264
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPCourseBundle:Enseignement:profile.html.twig", 264)->display($context);
        // line 265
        echo "                                            </div>

                                        </div>

                                    </div>

                                    ";
        // line 271
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avis", array()))) {
            // line 272
            echo "                                        <ul class=\"review-list\">
                                            ";
            // line 273
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avis", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                // line 274
                echo "                                                ";
                $context["user"] = $this->getAttribute($context["avis"], "user", array());
                // line 275
                echo "                                                <li class=\"clearfix\">
                                                    <div class=\"image img-circle\">
                                                        ";
                // line 277
                if ( !(null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()))) {
                    // line 278
                    echo "                                                            <img class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "webPath", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenoms", array()), "html", null, true);
                    echo "\" />
                                                        ";
                } else {
                    // line 280
                    echo "                                                            <i class=\"fa fa-user fa-5x img-circle\"></i>
                                                        ";
                }
                // line 282
                echo "                                                    </div>
                                                    <div class=\"content\">
                                                        <div class=\"row gap-20 mb-0\">
                                                            <div class=\"col-sm-9\">
                                                                <h6> ";
                // line 286
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenoms", array()) . "  ") . twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()))), "html", null, true);
                echo " ";
                echo "</h6>
                                                            </div>
                                                            <div class=\"col-sm-3\">
                                                                <p class=\"review-date\"> ";
                // line 289
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["avis"], "dateAvis", array()), "d/m/Y"), "html", null, true);
                echo " </p>
                                                            </div>
                                                        </div>

                                                        <div class=\"rating-wrapper\">
                                                            <div class=\"raty-wrapper\">
                                                                ";
                // line 296
                echo "                                                                ";
                $context["avisNote"] = $this->getAttribute($context["avis"], "note", array());
                // line 297
                echo "                                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 298
                    echo "                                                                    ";
                    if ((twig_round((isset($context["avisNote"]) ? $context["avisNote"] : $this->getContext($context, "avisNote"))) >= $context["i"])) {
                        // line 299
                        echo "                                                                        <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                        echo "\">
                                                                    ";
                    } else {
                        // line 301
                        echo "                                                                        <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                        echo "\" title=\"\"> 
                                                                    ";
                    }
                    // line 303
                    echo "                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 304
                echo "                                                            </div>
                                                        </div>

                                                        <div class=\"review-text\">

                                                            <p>
                                                                ";
                // line 310
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
            // line 319
            echo "

                                        </ul>
                                        <div class=\"bt text-center pt-30\">
                                            <a href=\"#\" class=\"btn btn-primary\">Lire plus d'avis</a>
                                        </div>
                                    ";
        }
        // line 326
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
        // line 341
        if ( !twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "similarProfs", array()))) {
            // line 342
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "similarProfs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["enseignement"]) {
                // line 343
                echo "                                            <div class=\"GridLex-col-4_sm-4_xs-12 mb-20\">
                                                <div class=\"package-grid-item\"> 
                                                    <a href=\" ";
                // line 345
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_profile_prof", array("profId" => $this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "id", array()))), "html", null, true);
                echo " \">
                                                        <div class=\"image similar\">
                                                            ";
                // line 347
                if ( !(null === $this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "image", array()))) {
                    // line 348
                    echo "                                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "image", array()), "webPath", array())), "html", null, true);
                    echo "\"/>
                                                            ";
                }
                // line 350
                echo "                                                            ";
                if ($this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "isRecommande", array())) {
                    // line 351
                    echo "                                                                <div class=\"absolute-in-image\">
                                                                    <div class=\"duration\">
                                                                        <span>
                                                                            Recommandé
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            ";
                }
                // line 358
                echo " 
                                                        </div>
                                                        <div class=\"content clearfix\">
                                                            <h6> 
                                                                ";
                // line 362
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "prenoms", array()) . "  ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "nom", array()))), "html", null, true);
                echo " 
                                                            </h6>
                                                            ";
                // line 364
                $context["avisSum"] = 0;
                // line 365
                echo "                                                            ";
                $context["allAvis"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avisRep", array()), "findBy", array(0 => array("prof" => $this->getAttribute($context["enseignement"], "prof", array()))), "method");
                // line 366
                echo "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis")));
                foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                    // line 367
                    echo "                                                                ";
                    $context["avisSum"] = ((isset($context["avisSum"]) ? $context["avisSum"] : $this->getContext($context, "avisSum")) + $this->getAttribute($context["avis"], "note", array()));
                    // line 368
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 369
                echo "                                                            ";
                if ((twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))) != 0)) {
                    // line 370
                    echo "                                                                ";
                    $context["avisRange"] = ((isset($context["avisSum"]) ? $context["avisSum"] : $this->getContext($context, "avisSum")) / twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))));
                    // line 371
                    echo "                                                            ";
                } else {
                    // line 372
                    echo "                                                                ";
                    $context["avisRange"] = 0;
                    // line 373
                    echo "                                                            ";
                }
                // line 374
                echo "                                                            <div class=\"rating-wrapper\">
                                                                <div class=\"raty-wrapper\">
                                                                    <div>
                                                                        ";
                // line 377
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 378
                    echo "                                                                            ";
                    if ((twig_round((isset($context["avisRange"]) ? $context["avisRange"] : $this->getContext($context, "avisRange"))) >= $context["i"])) {
                        // line 379
                        echo "                                                                                <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                        echo "\">
                                                                            ";
                    } else {
                        // line 381
                        echo "                                                                                <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                        echo "\" title=\"\"> 
                                                                            ";
                    }
                    // line 383
                    echo "                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 384
                echo "                                                                    </div><br>
                                                                    <span> / ";
                // line 385
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))), "html", null, true);
                echo " avis</span>
                                                                </div>
                                                            </div>
                                                            <div class=\"absolute-in-content\">
                                                                ";
                // line 389
                $context["minPrice"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseignementRep", array()), "getPrixProf", array(0 => $this->getAttribute($context["enseignement"], "prof", array())), "method");
                // line 390
                echo "                                                                <span class=\"btn\"><i class=\"fa fa-heart text-primary\"></i></span>
                                                                <div class=\"price\">";
                // line 391
                echo twig_escape_filter($this->env, (isset($context["minPrice"]) ? $context["minPrice"] : $this->getContext($context, "minPrice")), "html", null, true);
                echo " F/Mois <br> Prix minimal</div>
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
            // line 398
            echo "                                    ";
        }
        // line 399
        echo "
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <div class=\"col-md-4 hidden-sm hidden-xs\">

                    <div class=\"scrollspy-sidebar sidebar-detail\" role=\"complementary\">

                        <ul class=\"scrollspy-sidenav\">

                            <li>
                                <ul class=\"nav\">
                                    <li><a href=\"#section-0\" class=\"anchor\">Je donne cours de</a></li>
                                    <li><a href=\"#section-1\" class=\"anchor\">A Propos de moi</a></li>
                                    <li><a href=\"#section-2\" class=\"anchor\">Ma formation</a></li>
                                        ";
        // line 421
        echo "                                    <li><a href=\"#section-3\" class=\"anchor\">Avis</a></li>
                                </ul>
                            </li>

                        </ul>
                        <a href=\" ";
        // line 426
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
        
        $__internal_3aae57b44a660ac01fa3e9f532b6a1291871edeb45a9643fbad7d50f4e64060b->leave($__internal_3aae57b44a660ac01fa3e9f532b6a1291871edeb45a9643fbad7d50f4e64060b_prof);

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
        return array (  852 => 426,  845 => 421,  822 => 399,  819 => 398,  806 => 391,  803 => 390,  801 => 389,  794 => 385,  791 => 384,  785 => 383,  777 => 381,  769 => 379,  766 => 378,  762 => 377,  757 => 374,  754 => 373,  751 => 372,  748 => 371,  745 => 370,  742 => 369,  736 => 368,  733 => 367,  728 => 366,  725 => 365,  723 => 364,  718 => 362,  712 => 358,  702 => 351,  699 => 350,  693 => 348,  691 => 347,  686 => 345,  682 => 343,  677 => 342,  675 => 341,  658 => 326,  649 => 319,  634 => 310,  626 => 304,  620 => 303,  612 => 301,  604 => 299,  601 => 298,  596 => 297,  593 => 296,  584 => 289,  577 => 286,  571 => 282,  567 => 280,  559 => 278,  557 => 277,  553 => 275,  550 => 274,  546 => 273,  543 => 272,  541 => 271,  533 => 265,  531 => 264,  517 => 253,  487 => 225,  478 => 221,  476 => 220,  470 => 219,  465 => 216,  461 => 215,  456 => 214,  452 => 212,  450 => 211,  424 => 188,  412 => 178,  400 => 172,  394 => 171,  387 => 167,  384 => 166,  380 => 165,  369 => 156,  361 => 153,  350 => 148,  344 => 145,  340 => 143,  335 => 142,  333 => 141,  325 => 136,  321 => 135,  317 => 133,  313 => 132,  301 => 122,  292 => 119,  288 => 117,  283 => 116,  274 => 113,  270 => 111,  266 => 110,  252 => 100,  248 => 97,  244 => 96,  230 => 85,  214 => 73,  208 => 71,  206 => 70,  200 => 66,  197 => 65,  193 => 63,  189 => 61,  186 => 60,  184 => 59,  172 => 51,  166 => 50,  158 => 48,  150 => 46,  147 => 45,  142 => 44,  139 => 43,  136 => 42,  133 => 41,  130 => 40,  127 => 39,  121 => 38,  118 => 37,  113 => 36,  111 => 35,  102 => 29,  98 => 28,  93 => 25,  89 => 23,  80 => 20,  78 => 19,  68 => 13,  65 => 12,  62 => 11,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"LGPCoreBundle::layout.html.twig\" %}

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
                        <img src=\"{{ asset(prof.image.webPath) }}\" alt=\" {{prof.nom}} \"  class=\"profile-img\" />

                        {% else %}
                            <i class=\"fa fa-user fa-5x profile-img\" style=\"color:#fff\"></i>
                    {% endif %}
                </div>
                <div class=\"flex-column flex-md-6 flex-align-bottom flex-sm-12\">
                    <div class=\"profile-infos\">
                        <h1 class=\"hero-title\"> {{prof.prenoms ~\" \"~ prof.nom | upper}} </h1>
                        <p class=\"line18\"> {{prof.profession}} </p>

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
                                                <img alt=\" {{i}} \" src=\"{{ asset('images/raty/star-on-sm.png') }}\">
                                            {% else %}
                                                <img alt=\" {{i}} \" src=\"{{ asset('images/raty/star-off-sm.png') }}\" title=\"\"> 
                                            {% endif %}
                                        {% endfor %}
                                        <span style=\"display: block;\"> / {{params.avis | length}} avis</span>
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
                                        {{params.enseignementRep.getPrixProf(prof) }}
                                    {% endset %}
                                    <span class=\"block\">{{minPrice}} Fcfa / mois</span>
                                    Prix minimal
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>


                <div class=\"flex-column flex-md-3 flex-align-bottom flex-sm-12 mt-20-sm\">
                    <div class=\"text-right text-left-sm\">
                        <a href=\" {{ path('lgp_reservation_detail',{'id': prof.id})}} \" class=\"anchor btn btn-primary\">Réserver un cours</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Page title -->

    <div class=\"breadcrumb-wrapper bg-light-2\">
        <div class=\"container\">
            <ol class=\"breadcrumb-list\">
                <li><a href=\" {{path('lgp_core_homepage')}} \">Accueil</a></li>
                <li><a href=\" {{path('lgp_course_find')}} \">Profs</a></li>
                    {#  <li><a href=\"#\">Douala</a></li>
                     <li><a href=\"#\">Informatique</a></li> #}
                <li><span> {{prof.prenoms ~\" \"~ prof.nom | upper}} </span></li>
            </ol>
        </div>
    </div>

    <div class=\"content-wrapper\">

        <div class=\"container\">

            <div class=\"row\">
                {% for message in app.session.flashbag.get('info') %}
                    <div id=\"confirmation-avis\" class=\"col-md-12 col-sm-12 alert alert-success\" style=\"z-index: 1000; position: relative; display: none\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        {{message}}
                    </div>
                {% endfor %}
                {% for message in app.session.flashbag.get('warning') %}
                    <div id=\"confirmation-avis\" class=\"col-md-12 col-sm-12 alert alert-danger\" style=\"z-index: 1000; position: relative; display: none\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        {{message}}
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
                                            <a href=\" {{path('lgp_course_find_prof',{'slug':ens_cours.cours.slug})}} \" title=\"\">
                                                {{ens_cours.cours.intitule}}
                                            </a>
                                        </b>
                                        <span>Dans les classes ci-dessous : </span>
                                        <ul>
                                            {% set classes = params.enseignementRep.getClasseByCoursAndProf(prof.id, ens_cours.cours.id) %}
                                            {% for enseignementClasse in classes %}
                                                <li>
                                                    <dl class=\"dl-horizontal\">
                                                        <dt>{{enseignementClasse.classe}}</dt>
                                                        <dd> 
                                                            ------ &nbsp;&nbsp;&nbsp;&nbsp; 
                                                            <b>{{enseignementClasse.prix | number_format(2,',','.')}}</b> FCFA / Mois
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
                                            <dt>{{quartiersProf.intitule}}</dt>
                                            <dd> 
                                                de la ville de  &nbsp;&nbsp;&nbsp;&nbsp; 
                                                <b>
                                                    <a href=\" {{path('lgp_course_find_prof_city', {'slugVille':quartiersProf.slugVille})}} \" title=\"Profs de {{quartiersProf.ville}}\">
                                                        {{quartiersProf.ville}}
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
                                {{prof.presentation}}
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
                                                                    <a data-toggle=\"collapse\" data-parent=\"#\"><span class=\"absolute-day-number\"> {{compt}} </span> {{diplome.intitule}} </a>
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
                                            <h5>{{params.avis | length}} avis</h5>
                                        </div>

                                        <div class=\"col-sm-6 text-right text-left-xs\">
                                            <button id=\"btn-leave-avis\" class=\"anchor btn btn-primary btn-inverse btn-sm\">
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
                                                        {% if user.image is not null %}
                                                            <img class=\"img-circle\" src=\"{{ asset(user.image.webPath) }}\" alt=\"{{user.prenoms}}\" />
                                                        {% else %}
                                                            <i class=\"fa fa-user fa-5x img-circle\"></i>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"content\">
                                                        <div class=\"row gap-20 mb-0\">
                                                            <div class=\"col-sm-9\">
                                                                <h6> {{user.prenoms~\"  \"~user.nom | upper}} {# <span>/ de Yaoundé-Bastos</span> #}</h6>
                                                            </div>
                                                            <div class=\"col-sm-3\">
                                                                <p class=\"review-date\"> {{avis.dateAvis | date('d/m/Y')}} </p>
                                                            </div>
                                                        </div>

                                                        <div class=\"rating-wrapper\">
                                                            <div class=\"raty-wrapper\">
                                                                {#  <div class=\"star-rating-12px\" data-rating-score=\"4.0\"></div> #}
                                                                {% set avisNote = avis.note %}
                                                                {% for i in range(1,5) %}
                                                                    {% if (avisNote | round) >= i %}
                                                                        <img alt=\" {{i}} \" src=\"{{ asset('images/raty/star-on-sm.png') }}\">
                                                                    {% else %}
                                                                        <img alt=\" {{i}} \" src=\"{{ asset('images/raty/star-off-sm.png') }}\" title=\"\"> 
                                                                    {% endif %}
                                                                {% endfor %}
                                                            </div>
                                                        </div>

                                                        <div class=\"review-text\">

                                                            <p>
                                                                {{avis.commentaire}}
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
                                    {% if not params.similarProfs is empty %}
                                        {% for enseignement in params.similarProfs %}
                                            <div class=\"GridLex-col-4_sm-4_xs-12 mb-20\">
                                                <div class=\"package-grid-item\"> 
                                                    <a href=\" {{ path('lgp_course_profile_prof',{'profId':enseignement.prof.id}) }} \">
                                                        <div class=\"image similar\">
                                                            {% if enseignement.prof.image is not null %}
                                                                <img src=\"{{ asset(enseignement.prof.image.webPath) }}\"/>
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
                                                                                <img alt=\" {{i}} \" src=\"{{ asset('images/raty/star-on-sm.png') }}\">
                                                                            {% else %}
                                                                                <img alt=\" {{i}} \" src=\"{{ asset('images/raty/star-off-sm.png') }}\" title=\"\"> 
                                                                            {% endif %}
                                                                        {% endfor %}
                                                                    </div><br>
                                                                    <span> / {{allAvis | length}} avis</span>
                                                                </div>
                                                            </div>
                                                            <div class=\"absolute-in-content\">
                                                                {% set minPrice = params.enseignementRep.getPrixProf(enseignement.prof) %}
                                                                <span class=\"btn\"><i class=\"fa fa-heart text-primary\"></i></span>
                                                                <div class=\"price\">{{minPrice}} F/Mois <br> Prix minimal</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    {% endif %}

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <div class=\"col-md-4 hidden-sm hidden-xs\">

                    <div class=\"scrollspy-sidebar sidebar-detail\" role=\"complementary\">

                        <ul class=\"scrollspy-sidenav\">

                            <li>
                                <ul class=\"nav\">
                                    <li><a href=\"#section-0\" class=\"anchor\">Je donne cours de</a></li>
                                    <li><a href=\"#section-1\" class=\"anchor\">A Propos de moi</a></li>
                                    <li><a href=\"#section-2\" class=\"anchor\">Ma formation</a></li>
                                        {# <li><a href=\"#section-3\" class=\"anchor\">Disponibilités</a></li> #}
                                    <li><a href=\"#section-3\" class=\"anchor\">Avis</a></li>
                                </ul>
                            </li>

                        </ul>
                        <a href=\" {{path('lgp_course_find')}} \" class=\"btn btn-primary\">
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
