<?php

/* LGPCourseBundle:Course:search.html.twig */
class __TwigTemplate_939b0f71d5a41e75740998fff652716b4788f79023b9dc9c62a122384844165b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Course:search.html.twig", 2);
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
        $__internal_d684be27809a9c55a86a2ad80359488ede6e5f9a07c47f796cb0c95dacf06118 = $this->env->getExtension("native_profiler");
        $__internal_d684be27809a9c55a86a2ad80359488ede6e5f9a07c47f796cb0c95dacf06118->enter($__internal_d684be27809a9c55a86a2ad80359488ede6e5f9a07c47f796cb0c95dacf06118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Course:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d684be27809a9c55a86a2ad80359488ede6e5f9a07c47f796cb0c95dacf06118->leave($__internal_d684be27809a9c55a86a2ad80359488ede6e5f9a07c47f796cb0c95dacf06118_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd5a222aef9f4afc69b9de8dc6ca13beb202b11dc0e8003cf736513b42c662e0 = $this->env->getExtension("native_profiler");
        $__internal_cd5a222aef9f4afc69b9de8dc6ca13beb202b11dc0e8003cf736513b42c662e0->enter($__internal_cd5a222aef9f4afc69b9de8dc6ca13beb202b11dc0e8003cf736513b42c662e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array(), "any", true, true) && ($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courseFound", array()) != null))) {
            // line 6
            echo "        Profs de ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courseFound", array()), "intitule", array()), "html", null, true);
            echo " - ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
    ";
        } else {
            // line 8
            echo "        Profs - ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_cd5a222aef9f4afc69b9de8dc6ca13beb202b11dc0e8003cf736513b42c662e0->leave($__internal_cd5a222aef9f4afc69b9de8dc6ca13beb202b11dc0e8003cf736513b42c662e0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_a159e7296213532c0310b6b05eebbf7580e252862aa9026d7da3db426e37ede6 = $this->env->getExtension("native_profiler");
        $__internal_a159e7296213532c0310b6b05eebbf7580e252862aa9026d7da3db426e37ede6->enter($__internal_a159e7296213532c0310b6b05eebbf7580e252862aa9026d7da3db426e37ede6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array(), "any", true, true) && ($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courseFound", array()) != null))) {
            // line 14
            echo "        <!-- start end Page title -->
        <div class=\"page-title\" style=\"background-image:url('";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
            echo "');\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                        <h1 class=\"hero-title\">Grands Profs en ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courseFound", array()), "intitule", array()), "html", null, true);
            echo " </h1>

                        <ol class=\"breadcrumb-list\">
                            <li><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
            echo " \">Accueil</a></li>
                                ";
            // line 28
            echo "                                ";
            if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ville", array(), "any", true, true)) {
                // line 29
                echo "                                <li><a href=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("ville" => $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()))), "html", null, true);
                echo " \"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()), "html", null, true);
                echo " </a></li>
                                ";
            }
            // line 31
            echo "                            <li><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courseFound", array()), "intitule", array()), "html", null, true);
            echo "</span></li>
                        </ol>

                    </div>

                </div>

            </div>

        </div>
        <!-- end Page title -->
    ";
        }
        // line 43
        echo "
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
        // line 61
        $this->loadTemplate("LGPCourseBundle:Form:course_form_search.html.twig", "LGPCourseBundle:Course:search.html.twig", 61)->display($context);
        // line 62
        echo "                            </div>

                        </div>

                        ";
        // line 72
        echo "
                        ";
        // line 175
        echo "
                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">

                    ";
        // line 183
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array(), "any", true, true)) {
            // line 184
            echo "                        <div class=\"sorting-wrappper\">

                            <div class=\"sorting-header\">

                                <h3 class=\"sorting-title uppercase\">Des Grands profs en ";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courseFound", array()), "intitule", array()), "html", null, true);
            echo "</h3>
                                <p class=\"sorting-lead\">";
            // line 189
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array())), "html", null, true);
            echo " Grands profs trouvés</p>
                            </div>

                            ";
            // line 218
            echo "
                        </div>
                    ";
        }
        // line 221
        echo "
                    <div class=\"package-list-item-wrapper on-page-result-page\">

                        ";
        // line 224
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array())) != 0)) {
            echo " 

                            ";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["enseigne"]) {
                // line 227
                echo "                                <div class=\"package-list-item clearfix\">
                                    <div class=\"image\">
                                        ";
                // line 229
                if ( !$this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array())) {
                    // line 230
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                    echo "\" alt=\"Tour Package\" />

                                        ";
                } else {
                    // line 233
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array()), "webPath", array())), "html", null, true);
                    echo "\" alt=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "nom", array()), "html", null, true);
                    echo " \" />
                                        ";
                }
                // line 235
                echo "                                    </div>

                                    <div class=\"content\">
                                        <h5>";
                // line 238
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "prenoms", array()) . "  ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "nom", array()))), "html", null, true);
                echo " <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button></h5>
                                        <div class=\"row gap-10\">
                                            <div class=\"col-sm-12 col-md-9\">

                                                <p class=\"line18\"> ";
                // line 242
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "presentation", array()), "html", null, true);
                echo " </p>
                                                <br>
                                                <ul class=\"list-info\">
                                                    <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> 
                                                            ";
                // line 246
                if ( !(null === $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array()))) {
                    // line 247
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array())), "html", null, true);
                    echo "
                                                            ";
                } else {
                    // line 249
                    echo "                                                            NON DEFINIE
                                                        ";
                }
                // line 251
                echo "                                                    </li>

                                                    <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Cours :</span> 
                                                            ";
                // line 254
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseignementRep", array()), "getCoursByProf", array(0 => $this->getAttribute($context["enseigne"], "prof", array())), "method"));
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
                    // line 255
                    echo "                                                                ";
                    if (($this->getAttribute($context["loop"], "index", array()) != $this->getAttribute($context["loop"], "last", array()))) {
                        // line 256
                        echo "                                                                <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
                        echo " \" title=\"\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a> -
                                                            ";
                    } else {
                        // line 258
                        echo "                                                                <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
                        echo " \" title=\"\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a>
                                                            ";
                    }
                    // line 260
                    echo "                                                        ";
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
                echo " 
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class=\"col-sm-12 col-md-3 text-right text-left-sm\">
                                                ";
                // line 266
                $context["avisSum"] = 0;
                // line 267
                echo "                                                ";
                $context["allAvis"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avisRep", array()), "findBy", array(0 => array("prof" => $this->getAttribute($context["enseigne"], "prof", array()))), "method");
                // line 268
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis")));
                foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                    // line 269
                    echo "                                                    ";
                    $context["avisSum"] = ((isset($context["avisSum"]) ? $context["avisSum"] : $this->getContext($context, "avisSum")) + $this->getAttribute($context["avis"], "note", array()));
                    // line 270
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 271
                echo "                                                ";
                if ((twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))) != 0)) {
                    // line 272
                    echo "                                                    ";
                    $context["avisRange"] = ((isset($context["avisSum"]) ? $context["avisSum"] : $this->getContext($context, "avisSum")) / twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))));
                    // line 273
                    echo "                                                ";
                } else {
                    // line 274
                    echo "                                                    ";
                    $context["avisRange"] = 0;
                    // line 275
                    echo "                                                ";
                }
                // line 276
                echo "                                                <div class=\"rating-wrapper\">
                                                    <div class=\"raty-wrapper\">
                                                        <div>  
                                                            ";
                // line 279
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 280
                    echo "                                                                ";
                    if ((twig_round((isset($context["avisRange"]) ? $context["avisRange"] : $this->getContext($context, "avisRange"))) >= $context["i"])) {
                        // line 281
                        echo "                                                                    <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                        echo "\">
                                                                ";
                    } else {
                        // line 283
                        echo "                                                                    <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                        echo "\" title=\"\"> 
                                                                ";
                    }
                    // line 285
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 286
                echo "                                                        </div>
                                                        <span> / ";
                // line 287
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))), "html", null, true);
                echo " avis</span>
                                                    </div>
                                                </div>
                                                ";
                // line 290
                ob_start();
                // line 291
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseignementRep", array()), "getPrixProf", array(0 => $this->getAttribute($context["enseigne"], "prof", array())), "method"), "html", null, true);
                echo "
                                                ";
                $context["minPrice"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 293
                echo "                                                <div class=\"price\">";
                echo twig_escape_filter($this->env, (isset($context["minPrice"]) ? $context["minPrice"] : $this->getContext($context, "minPrice")), "html", null, true);
                echo " Fcfa / Mois <br> Prix minimal</div>
                                                <a href=\" ";
                // line 294
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_profile_prof", array("profId" => $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "id", array()))), "html", null, true);
                echo " \" class=\"btn btn-primary btn-sm\">Voir Profil</a>
                                                <a href=\" ";
                // line 295
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_reservation_detail", array("id" => $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "id", array()))), "html", null, true);
                echo " \" class=\"anchor btn btn-primary btn-sm\" style=\"margin-top: 10px;\">Réserver un cours</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseigne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 302
            echo "
                        </div>

                        ";
            // line 305
            $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "LGPCourseBundle:Course:search.html.twig", 305)->display($context);
            // line 306
            echo "
                    ";
        }
        // line 308
        echo "
                </div>

            </div>

        </div>

    </div>
";
        
        $__internal_a159e7296213532c0310b6b05eebbf7580e252862aa9026d7da3db426e37ede6->leave($__internal_a159e7296213532c0310b6b05eebbf7580e252862aa9026d7da3db426e37ede6_prof);

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
        return array (  433 => 308,  429 => 306,  427 => 305,  422 => 302,  409 => 295,  405 => 294,  400 => 293,  394 => 291,  392 => 290,  386 => 287,  383 => 286,  377 => 285,  369 => 283,  361 => 281,  358 => 280,  354 => 279,  349 => 276,  346 => 275,  343 => 274,  340 => 273,  337 => 272,  334 => 271,  328 => 270,  325 => 269,  320 => 268,  317 => 267,  315 => 266,  294 => 260,  286 => 258,  278 => 256,  275 => 255,  258 => 254,  253 => 251,  249 => 249,  243 => 247,  241 => 246,  234 => 242,  227 => 238,  222 => 235,  214 => 233,  207 => 230,  205 => 229,  201 => 227,  197 => 226,  192 => 224,  187 => 221,  182 => 218,  176 => 189,  172 => 188,  166 => 184,  164 => 183,  154 => 175,  151 => 72,  145 => 62,  143 => 61,  123 => 43,  107 => 31,  99 => 29,  96 => 28,  92 => 26,  86 => 23,  75 => 15,  72 => 14,  69 => 13,  63 => 12,  52 => 8,  44 => 6,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    {% if params.courseFound is defined and params.courseFound != null %}
        Profs de {{ params.courseFound.intitule }} - {{ parent() }}
    {% else %}
        Profs - {{ parent() }}
    {% endif %}
{% endblock %}

{% block body %}
    {% if params.courseFound is defined and params.courseFound != null %}
        <!-- start end Page title -->
        <div class=\"page-title\" style=\"background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                        <h1 class=\"hero-title\">Grands Profs en {{ params.courseFound.intitule }} </h1>

                        <ol class=\"breadcrumb-list\">
                            <li><a href=\"{{path('lgp_core_homepage')}} \">Accueil</a></li>
                                {#  <li><a href=\"#\">Profs</a></li> #}
                                {% if params.ville is defined %}
                                <li><a href=\" {{path('lgp_course_find_prof_city', {'ville' : params.ville})}} \"> {{params.ville}} </a></li>
                                {% endif %}
                            <li><span>{{ params.courseFound.intitule }}</span></li>
                        </ol>

                    </div>

                </div>

            </div>

        </div>
        <!-- end Page title -->
    {% endif %}

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

                                <h3 class=\"sorting-title uppercase\">Des Grands profs en {{ params.courseFound.intitule }}</h3>
                                <p class=\"sorting-lead\">{{params.matieres_profs | length}} Grands profs trouvés</p>
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
                                        {% if not enseigne.prof.image %}
                                            <img src=\"{{ asset('uploads/profils/default.jpg') }}\" alt=\"Tour Package\" />

                                        {% else %}
                                            <img src=\"{{ asset(enseigne.prof.image.webPath) }}\" alt=\" {{enseigne.prof.nom}} \" />
                                        {% endif %}
                                    </div>

                                    <div class=\"content\">
                                        <h5>{{enseigne.prof.prenoms ~\"  \"~ enseigne.prof.nom | upper}} <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button></h5>
                                        <div class=\"row gap-10\">
                                            <div class=\"col-sm-12 col-md-9\">

                                                <p class=\"line18\"> {{enseigne.prof.presentation}} </p>
                                                <br>
                                                <ul class=\"list-info\">
                                                    <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> 
                                                            {% if enseigne.prof.ville is not null %}
                                                                {{enseigne.prof.ville | upper}}
                                                            {% else %}
                                                            NON DEFINIE
                                                        {% endif %}
                                                    </li>

                                                    <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Cours :</span> 
                                                            {% for ens_cours in params.enseignementRep.getCoursByProf(enseigne.prof) %}
                                                                {% if loop.index != loop.last %}
                                                                <a href=\" {{path('lgp_course_find_prof',{'slug':ens_cours.cours.slug,})}} \" title=\"\">{{ens_cours.cours.intitule}}</a> -
                                                            {% else %}
                                                                <a href=\" {{path('lgp_course_find_prof',{'slug':ens_cours.cours.slug})}} \" title=\"\">{{ens_cours.cours.intitule}}</a>
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
                                                                    <img alt=\" {{i}} \" src=\"{{ asset('images/raty/star-on-sm.png') }}\">
                                                                {% else %}
                                                                    <img alt=\" {{i}} \" src=\"{{ asset('images/raty/star-off-sm.png') }}\" title=\"\"> 
                                                                {% endif %}
                                                            {% endfor %}
                                                        </div>
                                                        <span> / {{allAvis | length}} avis</span>
                                                    </div>
                                                </div>
                                                {% set minPrice %}
                                                    {{params.enseignementRep.getPrixProf(enseigne.prof)}}
                                                {% endset %}
                                                <div class=\"price\">{{minPrice}} Fcfa / Mois <br> Prix minimal</div>
                                                <a href=\" {{path('lgp_course_profile_prof',{'profId' : enseigne.prof.id})}} \" class=\"btn btn-primary btn-sm\">Voir Profil</a>
                                                <a href=\" {{ path('lgp_reservation_detail',{'id': enseigne.prof.id})}} \" class=\"anchor btn btn-primary btn-sm\" style=\"margin-top: 10px;\">Réserver un cours</a>
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
