<?php

/* LGPCourseBundle:Enseignement:profile.html.twig */
class __TwigTemplate_1b970e90f5006390ddf9ecf168834267e648a8358cfbf72524f1ced565472d15 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Profil prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <!-- start end Page title -->
    ";
        // line 9
        if ( !(null === $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "prof", array()))) {
            // line 10
            echo "        ";
            $context["prof"] = $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "prof", array());
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
        if ( !(null === $this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "image", array()))) {
            // line 19
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "image", array()), "webPath", array())), "html", null, true);
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
        echo twig_escape_filter($this->env, ((twig_upper_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "prenoms", array())) . " ") . twig_upper_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "nom", array()))), "html", null, true);
        echo " </h1>
                        <p class=\"line18\"> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "profession", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "avis", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 37
            echo "                                            ";
            $context["avisSum"] = ((isset($context["avisSum"]) ? $context["avisSum"] : null) + $this->getAttribute($context["avis"], "note", array()));
            // line 38
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                        ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "avis", array())) != 0)) {
            // line 40
            echo "                                            ";
            $context["avisRange"] = ((isset($context["avisSum"]) ? $context["avisSum"] : null) / twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "avis", array())));
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
            if ((twig_round((isset($context["avisRange"]) ? $context["avisRange"] : null)) >= $context["i"])) {
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "avis", array())), "html", null, true);
        echo " avis</span>
                                    </div>
                                </div>
                            </li>

                            <li class=\"fav-box\">
                                <div class=\"meta\">
                                    <span class=\"block\">Recommandé</span>
                                    ";
        // line 60
        if ( !(null === (isset($context["prof"]) ? $context["prof"] : null))) {
            // line 61
            echo "                                        ";
            if ($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "isRecommande", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "enseignementRep", array()), "getPrixProf", array(0 => (isset($context["prof"]) ? $context["prof"] : null)), "method"), "html", null, true);
        echo "
                                    ";
        $context["minPrice"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                                    <span class=\"block\">";
        echo twig_escape_filter($this->env, (isset($context["minPrice"]) ? $context["minPrice"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_reservation_detail", array("slug" => $this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "slug", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "prenoms", array()) . " ") . twig_upper_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "nom", array()))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "enseignementRep", array()), "getCoursByProf", array(0 => (isset($context["prof"]) ? $context["prof"] : null)), "method"));
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
            $context["classes"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "enseignementRep", array()), "getClasseByCoursAndProf", array(0 => $this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "id", array()), 1 => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "id", array())), "method");
            // line 147
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : null));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "quartierCibles", array()));
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "presentation", array()), "html", null, true);
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
        if (twig_test_empty($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "diplomes", array()))) {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "diplomes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
            // line 223
            echo "                                                        <div class=\"panel itinerary-item\">
                                                            <div class=\"panel-heading\">
                                                                <h5 class=\"panel-title\">
                                                                    <a data-toggle=\"collapse\" data-parent=\"#\"><span
                                                                                class=\"absolute-day-number\"> ";
            // line 227
            echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : null), "html", null, true);
            echo " </span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
            echo "
                                                                    </a>
                                                                    ";
            // line 229
            $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "avis", array())), "html", null, true);
        echo " avis</h5>
                                        </div>

                                        <div class=\"col-sm-6 text-right text-left-xs\">
                                            <button id=\"btn-leave-avis\"
                                                    class=\"anchor btn btn-primary btn-inverse btn-sm\">
                                                <span id=\"leave-avis-text\">Laisser un avis</span>
                                            </button>
                                        </div>

                                        <div class=\"col-md-12 col-sm-12 test\" id=\"leave-avis\" style=\"display:none\">
                                            ";
        // line 272
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 273
            echo "                                                <div class=\"col-md-12\" style=\"margin-top: 10px;\">
                                                    <div class=\"alert alert-info\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                        <strong><i class=\"fa fa-info-circle fa-2x\"></i></strong> &nbsp;&nbsp;&nbsp; Vous devez vous connecter pour que votre avis soit envoyé.
                                                    </div>
                                                </div>
                                            ";
        }
        // line 280
        echo "                                            <div class=\"col-md-12\">
                                                ";
        // line 281
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPCourseBundle:Enseignement:profile.html.twig", 281)->display($context);
        // line 282
        echo "                                            </div>

                                        </div>

                                    </div>

                                    ";
        // line 288
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "avis", array()))) {
            // line 289
            echo "                                        <ul class=\"review-list\">
                                            ";
            // line 290
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "avis", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                // line 291
                echo "                                                ";
                $context["user"] = $this->getAttribute($context["avis"], "user", array());
                // line 292
                echo "                                                <li class=\"clearfix\">
                                                    <div class=\"image img-circle\">
                                                        ";
                // line 294
                if ((null === $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "image", array()))) {
                    // line 295
                    echo "                                                            <img class=\"img-circle\"
                                                                 src=\"";
                    // line 296
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
                    echo "\"
                                                                 alt=\"Tour Package\"/>
                                                        ";
                } else {
                    // line 299
                    echo "                                                            <img class=\"img-circle\"
                                                                 src=\"";
                    // line 300
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "image", array()), "webPath", array())), "html", null, true);
                    echo "\"
                                                                 alt=\" image utilisateur \"/>
                                                        ";
                }
                // line 303
                echo "                                                    </div>
                                                    <div class=\"content\">
                                                        <div class=\"row gap-20 mb-0\">
                                                            <div class=\"col-sm-9\">
                                                                <h6> ";
                // line 307
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "prenoms", array()) . "  ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nom", array()))), "html", null, true);
                echo " ";
                echo "</h6>
                                                            </div>
                                                            <div class=\"col-sm-3\">
                                                                <p class=\"review-date\"> ";
                // line 310
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["avis"], "dateAvis", array()), "d/m/Y"), "html", null, true);
                echo " </p>
                                                            </div>
                                                        </div>

                                                        <div class=\"rating-wrapper\">
                                                            <div class=\"raty-wrapper\">
                                                                ";
                // line 317
                echo "                                                                ";
                $context["avisNote"] = $this->getAttribute($context["avis"], "note", array());
                // line 318
                echo "                                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 319
                    echo "                                                                    ";
                    if ((twig_round((isset($context["avisNote"]) ? $context["avisNote"] : null)) >= $context["i"])) {
                        // line 320
                        echo "                                                                        <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                             src=\"";
                        // line 321
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                        echo "\">
                                                                    ";
                    } else {
                        // line 323
                        echo "                                                                        <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                             src=\"";
                        // line 324
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                        echo "\"
                                                                             title=\"\">
                                                                    ";
                    }
                    // line 327
                    echo "                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 328
                echo "                                                            </div>
                                                        </div>

                                                        <div class=\"review-text\">

                                                            <p>
                                                                ";
                // line 334
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
            // line 343
            echo "

                                        </ul>
                                        <div class=\"bt text-center pt-30\">
                                            <a href=\"#\" class=\"btn btn-primary\">Lire plus d'avis</a>
                                        </div>
                                    ";
        }
        // line 350
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
        // line 365
        if ( !twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "similarProfs", array()))) {
            // line 366
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "similarProfs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["enseignement"]) {
                // line 367
                echo "                                            <div class=\"GridLex-col-4_sm-4_xs-12 mb-20\">
                                                <div class=\"package-grid-item\">
                                                    <a href=\" ";
                // line 369
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_profile_prof", array("profId" => $this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "id", array()))), "html", null, true);
                echo " \">
                                                        <div class=\"image similar\">
                                                            ";
                // line 371
                if ( !(null === $this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "image", array()))) {
                    // line 372
                    echo "                                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "image", array()), "webPath", array())), "html", null, true);
                    // line 373
                    echo "\"
                                                                     alt=\" image prof \"/>
                                                            ";
                } else {
                    // line 376
                    echo "                                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
                    echo "\"
                                                                     alt=\"Tour Package\"/>
                                                            ";
                }
                // line 379
                echo "                                                            ";
                if ($this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "isRecommande", array())) {
                    // line 380
                    echo "                                                                <div class=\"absolute-in-image\">
                                                                    <div class=\"duration\">
                                                                        <span>
                                                                            Recommandé
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            ";
                }
                // line 388
                echo "                                                        </div>
                                                        <div class=\"content clearfix\">
                                                            <h6>
                                                                ";
                // line 391
                echo twig_escape_filter($this->env, ((twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "prenoms", array())) . "  ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseignement"], "prof", array()), "nom", array()))), "html", null, true);
                echo "
                                                            </h6>
                                                            ";
                // line 393
                $context["avisSum"] = 0;
                // line 394
                echo "                                                            ";
                $context["allAvis"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "avisRep", array()), "findBy", array(0 => array("prof" => $this->getAttribute($context["enseignement"], "prof", array()))), "method");
                // line 395
                echo "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["allAvis"]) ? $context["allAvis"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                    // line 396
                    echo "                                                                ";
                    $context["avisSum"] = ((isset($context["avisSum"]) ? $context["avisSum"] : null) + $this->getAttribute($context["avis"], "note", array()));
                    // line 397
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 398
                echo "                                                            ";
                if ((twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : null)) != 0)) {
                    // line 399
                    echo "                                                                ";
                    $context["avisRange"] = ((isset($context["avisSum"]) ? $context["avisSum"] : null) / twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : null)));
                    // line 400
                    echo "                                                            ";
                } else {
                    // line 401
                    echo "                                                                ";
                    $context["avisRange"] = 0;
                    // line 402
                    echo "                                                            ";
                }
                // line 403
                echo "                                                            <div class=\"rating-wrapper\">
                                                                <div class=\"raty-wrapper\">
                                                                    <div>
                                                                        ";
                // line 406
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 407
                    echo "                                                                            ";
                    if ((twig_round((isset($context["avisRange"]) ? $context["avisRange"] : null)) >= $context["i"])) {
                        // line 408
                        echo "                                                                                <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                                     src=\"";
                        // line 409
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                        echo "\">
                                                                            ";
                    } else {
                        // line 411
                        echo "                                                                                <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                                                     src=\"";
                        // line 412
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                        echo "\"
                                                                                     title=\"\">
                                                                            ";
                    }
                    // line 415
                    echo "                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 416
                echo "                                                                    </div>
                                                                    <br>
                                                                    <span> / ";
                // line 418
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : null)), "html", null, true);
                echo " avis</span>
                                                                </div>
                                                            </div>
                                                            <div class=\"absolute-in-content\">
                                                                ";
                // line 422
                $context["minPrice"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "enseignementRep", array()), "getPrixProf", array(0 => $this->getAttribute($context["enseignement"], "prof", array())), "method");
                // line 423
                echo "                                                                <span class=\"btn\">
                                                                    <i class=\"fa fa-heart text-primary\"></i></span>
                                                                <div class=\"price\">";
                // line 425
                echo twig_escape_filter($this->env, (isset($context["minPrice"]) ? $context["minPrice"] : null), "html", null, true);
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
            // line 434
            echo "                                    ";
        } else {
            // line 435
            echo "                                        <b>- Aucun prof similaire</b>
                                    ";
        }
        // line 437
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
        // line 464
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
        return array (  890 => 464,  861 => 437,  857 => 435,  854 => 434,  839 => 425,  835 => 423,  833 => 422,  826 => 418,  822 => 416,  816 => 415,  810 => 412,  805 => 411,  800 => 409,  795 => 408,  792 => 407,  788 => 406,  783 => 403,  780 => 402,  777 => 401,  774 => 400,  771 => 399,  768 => 398,  762 => 397,  759 => 396,  754 => 395,  751 => 394,  749 => 393,  744 => 391,  739 => 388,  729 => 380,  726 => 379,  719 => 376,  714 => 373,  711 => 372,  709 => 371,  704 => 369,  700 => 367,  695 => 366,  693 => 365,  676 => 350,  667 => 343,  652 => 334,  644 => 328,  638 => 327,  632 => 324,  627 => 323,  622 => 321,  617 => 320,  614 => 319,  609 => 318,  606 => 317,  597 => 310,  590 => 307,  584 => 303,  578 => 300,  575 => 299,  569 => 296,  566 => 295,  564 => 294,  560 => 292,  557 => 291,  553 => 290,  550 => 289,  548 => 288,  540 => 282,  538 => 281,  535 => 280,  526 => 273,  524 => 272,  510 => 261,  481 => 234,  472 => 230,  470 => 229,  463 => 227,  457 => 223,  452 => 222,  449 => 221,  445 => 219,  443 => 218,  417 => 195,  405 => 185,  393 => 179,  389 => 178,  385 => 177,  378 => 173,  375 => 172,  371 => 171,  360 => 162,  352 => 159,  340 => 153,  334 => 150,  330 => 148,  325 => 147,  323 => 146,  315 => 141,  310 => 139,  306 => 137,  302 => 136,  290 => 126,  281 => 123,  276 => 120,  271 => 119,  262 => 116,  257 => 113,  253 => 112,  239 => 102,  235 => 99,  231 => 98,  216 => 86,  200 => 74,  194 => 72,  192 => 71,  186 => 67,  183 => 66,  179 => 64,  175 => 62,  172 => 61,  170 => 60,  158 => 52,  152 => 51,  143 => 48,  135 => 46,  132 => 45,  127 => 44,  124 => 43,  121 => 42,  118 => 41,  115 => 40,  112 => 39,  106 => 38,  103 => 37,  98 => 36,  96 => 35,  87 => 29,  83 => 28,  78 => 25,  75 => 24,  72 => 22,  65 => 19,  63 => 18,  53 => 12,  50 => 11,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
                        {#<img src=\"{{ asset('uploads/profils/default.png') }}\" alt=\"Tour Package\"/>#}
                    {% endif %}
                </div>
                <div class=\"flex-column flex-md-6 flex-align-bottom flex-sm-12\">
                    <div class=\"profile-infos\">
                        <h1 class=\"hero-title\"> {{ prof.prenoms | upper ~\" \"~ prof.nom | upper }} </h1>
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
                        <a href=\" {{ path('lgp_reservation_detail',{'slug': prof.slug}) }} \" class=\"anchor btn btn-primary\">Réserver
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
                                            {% if app.user is null %}
                                                <div class=\"col-md-12\" style=\"margin-top: 10px;\">
                                                    <div class=\"alert alert-info\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                        <strong><i class=\"fa fa-info-circle fa-2x\"></i></strong> &nbsp;&nbsp;&nbsp; Vous devez vous connecter pour que votre avis soit envoyé.
                                                    </div>
                                                </div>
                                            {% endif %}
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
                                                                 src=\"{{ asset('uploads/profils/default.png') }}\"
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
                                                                <h6> {{ (user.prenoms~\"  \"~user.nom) | upper }} {# <span>/ de Yaoundé-Bastos</span> #}</h6>
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
                                                                <img src=\"{{ asset(enseignement.prof.image.webPath
                                                                ) }}\"
                                                                     alt=\" image prof \"/>
                                                            {% else %}
                                                                <img src=\"{{ asset('uploads/profils/default.png') }}\"
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
                                                                {{ enseignement.prof.prenoms | upper ~\"  \"~ enseignement.prof.nom | upper }}
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
