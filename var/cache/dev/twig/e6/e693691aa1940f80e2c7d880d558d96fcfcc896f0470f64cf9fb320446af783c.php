<?php

/* LGPCourseBundle:Course:search_city.html.twig */
class __TwigTemplate_31765102fcf3c4990c59ad7cb00b08fcab22586ae654c50c8a221f5b06016a50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Course:search_city.html.twig", 2);
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
        $__internal_1a9a59dee2e5f60e1743624944f6b17c1f554300a8f350d9b907429e2de75c2e = $this->env->getExtension("native_profiler");
        $__internal_1a9a59dee2e5f60e1743624944f6b17c1f554300a8f350d9b907429e2de75c2e->enter($__internal_1a9a59dee2e5f60e1743624944f6b17c1f554300a8f350d9b907429e2de75c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Course:search_city.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a9a59dee2e5f60e1743624944f6b17c1f554300a8f350d9b907429e2de75c2e->leave($__internal_1a9a59dee2e5f60e1743624944f6b17c1f554300a8f350d9b907429e2de75c2e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d739e3374b93a8d41c15e4920b6c8ed8ffc211326db459f11369d1f0b90251f5 = $this->env->getExtension("native_profiler");
        $__internal_d739e3374b93a8d41c15e4920b6c8ed8ffc211326db459f11369d1f0b90251f5->enter($__internal_d739e3374b93a8d41c15e4920b6c8ed8ffc211326db459f11369d1f0b90251f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d739e3374b93a8d41c15e4920b6c8ed8ffc211326db459f11369d1f0b90251f5->leave($__internal_d739e3374b93a8d41c15e4920b6c8ed8ffc211326db459f11369d1f0b90251f5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e13c24e3045ebe28236becfca10b9e69ff862a09de01d1600ba4a02736868777 = $this->env->getExtension("native_profiler");
        $__internal_e13c24e3045ebe28236becfca10b9e69ff862a09de01d1600ba4a02736868777->enter($__internal_e13c24e3045ebe28236becfca10b9e69ff862a09de01d1600ba4a02736868777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    ";
        // line 10
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array())) != 0)) {
            // line 11
            echo "        <!-- start end Page title -->
        <div class=\"page-title\" style=\"background-image:url('";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
            echo "');\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                        <h1 class=\"hero-title\">Grands Profs dans la ville de  ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()), "html", null, true);
            echo " </h1>

                        <ol class=\"breadcrumb-list\">
                            <li><a href=\" ";
            // line 23
            echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
            echo " \">Accueil</a></li>
                                ";
            // line 25
            echo "                                ";
            if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ville", array(), "any", true, true)) {
                // line 26
                echo "                                <li><span> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()), "html", null, true);
                echo " </span></li>
                                ";
            }
            // line 28
            echo "                        </ol>
                    </div>

                </div>

            </div>

        </div>
        <!-- end Page title -->
    ";
        }
        // line 38
        echo "
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
        // line 58
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courses", array())) {
            // line 59
            echo "                                        <datalist id=\"cours\">
                                            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 61
                echo "                                                <option> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "intitule", array()), "html", null, true);
                echo " </option>}
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                                        </datalist>
                                    ";
        }
        // line 65
        echo "                                </div>

                                ";
        // line 67
        $this->loadTemplate("LGPCourseBundle:Form:course_form_search.html.twig", "LGPCourseBundle:Course:search_city.html.twig", 67)->display($context);
        // line 68
        echo "                            </div>

                        </div>

                        ";
        // line 78
        echo "
                        ";
        // line 181
        echo "
                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">

                    <div class=\"sorting-wrappper\">

                        <div class=\"sorting-header\">
                            <h3 class=\"sorting-title uppercase\">Des Grands dans la ville de ";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()), "html", null, true);
        echo "</h3>
                            <p class=\"sorting-lead\">";
        // line 193
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array())), "html", null, true);
        echo " Grands profs trouvés</p>
                        </div>

                        ";
        // line 223
        echo "
                    </div>

                    <div class=\"package-list-item-wrapper on-page-result-page\">

                        ";
        // line 228
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array())) != 0)) {
            echo " 

                            ";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["enseigne"]) {
                // line 231
                echo "                                <div class=\"package-list-item clearfix\">
                                    <div class=\"image\">
                                        ";
                // line 233
                if ( !$this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array())) {
                    // line 234
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                    echo "\" alt=\"Tour Package\" />

                                        ";
                } else {
                    // line 237
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array()), "webPath", array())), "html", null, true);
                    echo "\" alt=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "nom", array()), "html", null, true);
                    echo " \" />
                                        ";
                }
                // line 239
                echo "                                    </div>

                                    <div class=\"content\">
                                        <h5>";
                // line 242
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "prenoms", array()) . "  ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "nom", array()))), "html", null, true);
                echo " <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button></h5>
                                        <div class=\"row gap-10\">
                                            <div class=\"col-sm-12 col-md-9\">

                                                <p class=\"line18\"> ";
                // line 246
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "presentation", array()), "html", null, true);
                echo " </p>
                                                <br>
                                                <ul class=\"list-info\">
                                                    <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> 
                                                            ";
                // line 250
                if ( !(null === $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array()))) {
                    // line 251
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array())), "html", null, true);
                    echo "
                                                            ";
                } else {
                    // line 253
                    echo "                                                            NON DEFINIE
                                                        ";
                }
                // line 255
                echo "                                                    </li>

                                                    <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Cours :</span> 
                                                            ";
                // line 258
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
                    // line 259
                    echo "                                                                ";
                    if (($this->getAttribute($context["loop"], "index", array()) != $this->getAttribute($context["loop"], "last", array()))) {
                        // line 260
                        echo "                                                                <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
                        echo " \" title=\"\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a> -
                                                            ";
                    } else {
                        // line 262
                        echo "                                                                <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
                        echo " \" title=\"\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a>
                                                            ";
                    }
                    // line 264
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
                // line 270
                $context["avisSum"] = 0;
                $context["allAvis"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avisRep", array()), "findBy", array(0 => array("prof" => $this->getAttribute($context["enseigne"], "prof", array()))), "method");
                // line 271
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis")));
                foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                    // line 272
                    echo "                                                    ";
                    $context["avisSum"] = ((isset($context["avisSum"]) ? $context["avisSum"] : $this->getContext($context, "avisSum")) + $this->getAttribute($context["avis"], "note", array()));
                    // line 273
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 274
                echo "                                                ";
                if ((twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))) != 0)) {
                    // line 275
                    echo "                                                    ";
                    $context["avisRange"] = ((isset($context["avisSum"]) ? $context["avisSum"] : $this->getContext($context, "avisSum")) / twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))));
                    // line 276
                    echo "                                                ";
                } else {
                    // line 277
                    echo "                                                    ";
                    $context["avisRange"] = 0;
                    // line 278
                    echo "                                                ";
                }
                // line 279
                echo "                                                <div class=\"rating-wrapper\">
                                                    <div class=\"raty-wrapper\">
                                                        <div>
                                                            ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 283
                    echo "                                                                ";
                    if ((twig_round((isset($context["avisRange"]) ? $context["avisRange"] : $this->getContext($context, "avisRange"))) >= $context["i"])) {
                        // line 284
                        echo "                                                                    <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                        echo "\">
                                                                ";
                    } else {
                        // line 286
                        echo "                                                                    <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                        echo "\" title=\"\"> 
                                                                ";
                    }
                    // line 288
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 289
                echo "                                                        </div>
                                                        <span> / ";
                // line 290
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))), "html", null, true);
                echo " avis</span>
                                                    </div>
                                                </div>
                                                ";
                // line 293
                ob_start();
                // line 294
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseignementRep", array()), "getPrixProf", array(0 => $this->getAttribute($context["enseigne"], "prof", array())), "method"), "html", null, true);
                echo "
                                                ";
                $context["minPrice"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 296
                echo "                                                <div class=\"price\">";
                echo twig_escape_filter($this->env, (isset($context["minPrice"]) ? $context["minPrice"] : $this->getContext($context, "minPrice")), "html", null, true);
                echo " Fcfa / Mois <br> Prix minimal</div>
                                                <a href=\" ";
                // line 297
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_profile_prof", array("profId" => $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "id", array()))), "html", null, true);
                echo " \" class=\"btn btn-primary btn-sm\">Voir Profil</a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseigne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "                        </div>

                        ";
            // line 307
            $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "LGPCourseBundle:Course:search_city.html.twig", 307)->display($context);
            // line 308
            echo "
                    ";
        }
        // line 310
        echo "
                </div>

            </div>

        </div>

    </div>
";
        
        $__internal_e13c24e3045ebe28236becfca10b9e69ff862a09de01d1600ba4a02736868777->leave($__internal_e13c24e3045ebe28236becfca10b9e69ff862a09de01d1600ba4a02736868777_prof);

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
        return array (  433 => 310,  429 => 308,  427 => 307,  423 => 305,  409 => 297,  404 => 296,  398 => 294,  396 => 293,  390 => 290,  387 => 289,  381 => 288,  373 => 286,  365 => 284,  362 => 283,  358 => 282,  353 => 279,  350 => 278,  347 => 277,  344 => 276,  341 => 275,  338 => 274,  332 => 273,  329 => 272,  324 => 271,  321 => 270,  300 => 264,  292 => 262,  284 => 260,  281 => 259,  264 => 258,  259 => 255,  255 => 253,  249 => 251,  247 => 250,  240 => 246,  233 => 242,  228 => 239,  220 => 237,  213 => 234,  211 => 233,  207 => 231,  203 => 230,  198 => 228,  191 => 223,  185 => 193,  181 => 192,  168 => 181,  165 => 78,  159 => 68,  157 => 67,  153 => 65,  149 => 63,  140 => 61,  136 => 60,  133 => 59,  131 => 58,  109 => 38,  97 => 28,  91 => 26,  88 => 25,  84 => 23,  78 => 20,  67 => 12,  64 => 11,  62 => 10,  59 => 9,  53 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    {{ params.ville }} - {{ parent() }}
{% endblock %}

{% block body %}

    {% if params.matieres_profs | length != 0 %}
        <!-- start end Page title -->
        <div class=\"page-title\" style=\"background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                        <h1 class=\"hero-title\">Grands Profs dans la ville de  {{ params.ville }} </h1>

                        <ol class=\"breadcrumb-list\">
                            <li><a href=\" {{path('lgp_core_homepage')}} \">Accueil</a></li>
                                {#  <li><a href=\"#\">Profs</a></li> #}
                                {% if params.ville is defined %}
                                <li><span> {{params.ville}} </span></li>
                                {% endif %}
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
                                <h4>Affinez votre recherche </h4>
                            </div>

                            <div class=\"sidebar-search-content\">

                                <div class=\"form-group\">
                                    {% if params.courses %}
                                        <datalist id=\"cours\">
                                            {% for course in params.courses %}
                                                <option> {{course.intitule}} </option>}
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
                                                                <a href=\" {{path('lgp_course_find_prof',{'slug':ens_cours.cours.slug})}} \" title=\"\">{{ens_cours.cours.intitule}}</a> -
                                                            {% else %}
                                                                <a href=\" {{path('lgp_course_find_prof',{'slug':ens_cours.cours.slug})}} \" title=\"\">{{ens_cours.cours.intitule}}</a>
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
                                                <a href=\" {{path('lgp_course_profile_prof', {'profId':enseigne.prof.id})}} \" class=\"btn btn-primary btn-sm\">Voir Profil</a>

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
