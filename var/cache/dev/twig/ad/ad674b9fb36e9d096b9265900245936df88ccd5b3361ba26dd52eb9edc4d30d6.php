<?php

/* LGPCourseBundle:Course:search.html.twig */
class __TwigTemplate_117fc53bf5ef49541176fbdc83af3df030cd82109b2269c977cf6da20ba5c2ea extends Twig_Template
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
        $__internal_6ebb232eb2ddbcaa57fc463476832975b958a2544884b141480688b876eb1132 = $this->env->getExtension("native_profiler");
        $__internal_6ebb232eb2ddbcaa57fc463476832975b958a2544884b141480688b876eb1132->enter($__internal_6ebb232eb2ddbcaa57fc463476832975b958a2544884b141480688b876eb1132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Course:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ebb232eb2ddbcaa57fc463476832975b958a2544884b141480688b876eb1132->leave($__internal_6ebb232eb2ddbcaa57fc463476832975b958a2544884b141480688b876eb1132_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_45ac2fce9cc6d04f9036f466109ae2121a36f359fdd453133a640e98274684ca = $this->env->getExtension("native_profiler");
        $__internal_45ac2fce9cc6d04f9036f466109ae2121a36f359fdd453133a640e98274684ca->enter($__internal_45ac2fce9cc6d04f9036f466109ae2121a36f359fdd453133a640e98274684ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array(), "any", true, true)) {
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
        
        $__internal_45ac2fce9cc6d04f9036f466109ae2121a36f359fdd453133a640e98274684ca->leave($__internal_45ac2fce9cc6d04f9036f466109ae2121a36f359fdd453133a640e98274684ca_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_9805435b365118b0abf62330cc7c7e9cf4a59d4e8f49ec143588a1703d22ac46 = $this->env->getExtension("native_profiler");
        $__internal_9805435b365118b0abf62330cc7c7e9cf4a59d4e8f49ec143588a1703d22ac46->enter($__internal_9805435b365118b0abf62330cc7c7e9cf4a59d4e8f49ec143588a1703d22ac46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    ";
        // line 14
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array(), "any", true, true)) {
            // line 15
            echo "        <!-- start end Page title -->
        <div class=\"page-title\" style=\"background-image:url('";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
            echo "');\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                        <h1 class=\"hero-title\">Grands Profs en ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courseFound", array()), "intitule", array()), "html", null, true);
            echo " </h1>

                        <ol class=\"breadcrumb-list\">
                            <li><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
            echo " \">Accueil</a></li>
                                ";
            // line 29
            echo "                                ";
            if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ville", array(), "any", true, true)) {
                // line 30
                echo "                                <li><a href=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("ville" => $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()))), "html", null, true);
                echo " \"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()), "html", null, true);
                echo " </a></li>
                                ";
            }
            // line 32
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
        // line 44
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
        // line 65
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courses", array())) {
            // line 66
            echo "                                        <datalist id=\"cours\">
                                            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 68
                echo "                                                <option> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "intitule", array()), "html", null, true);
                echo " </option>}
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                                        </datalist>
                                    ";
        }
        // line 72
        echo "                                </div>

                                ";
        // line 74
        $this->loadTemplate("LGPCourseBundle:Form:course_form_search.html.twig", "LGPCourseBundle:Course:search.html.twig", 74)->display($context);
        // line 75
        echo "                            </div>

                        </div>

                        ";
        // line 85
        echo "
                        ";
        // line 188
        echo "
                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">

                    ";
        // line 196
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courseFound", array(), "any", true, true)) {
            // line 197
            echo "                        <div class=\"sorting-wrappper\">

                            <div class=\"sorting-header\">

                                <h3 class=\"sorting-title uppercase\">Des Grands profs en ";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "intitule_cours", array()), "html", null, true);
            echo "</h3>
                                <p class=\"sorting-lead\">";
            // line 202
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array())), "html", null, true);
            echo " Grands profs trouvés</p>
                            </div>

                            ";
            // line 232
            echo "
                        </div>
                    ";
        }
        // line 235
        echo "
                    <div class=\"package-list-item-wrapper on-page-result-page\">

                        ";
        // line 238
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array())) != 0)) {
            echo " 

                            ";
            // line 240
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["enseigne"]) {
                // line 241
                echo "                                <div class=\"package-list-item clearfix\">
                                    <div class=\"image\">
                                        ";
                // line 243
                if ( !$this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array())) {
                    // line 244
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                    echo "\" alt=\"Tour Package\" />

                                        ";
                } else {
                    // line 247
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array()), "webPath", array())), "html", null, true);
                    echo "\" alt=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "nom", array()), "html", null, true);
                    echo " \" />
                                        ";
                }
                // line 249
                echo "                                    </div>

                                    <div class=\"content\">
                                        <h5>";
                // line 252
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "prenoms", array()) . "  ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "nom", array()))), "html", null, true);
                echo " <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button></h5>
                                        <div class=\"row gap-10\">
                                            <div class=\"col-sm-12 col-md-9\">

                                                <p class=\"line18\"> ";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "presentation", array()), "html", null, true);
                echo " </p>
                                                <br>
                                                <ul class=\"list-info\">
                                                    <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> ";
                // line 259
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array())), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "quartier", array())), "html", null, true);
                echo "</li>

                                                    <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Cours :</span> 
                                                            ";
                // line 262
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseigneRep", array()), "getCoursByProf", array(0 => $this->getAttribute($context["enseigne"], "prof", array())), "method"));
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
                    // line 263
                    echo "                                                                ";
                    if (($this->getAttribute($context["loop"], "index", array()) != $this->getAttribute($context["loop"], "last", array()))) {
                        // line 264
                        echo "                                                                <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("intitule_cours" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()))), "html", null, true);
                        echo " \" title=\"\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a> -
                                                            ";
                    } else {
                        // line 266
                        echo "                                                                <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("intitule_cours" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()))), "html", null, true);
                        echo " \" title=\"\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a>
                                                            ";
                    }
                    // line 268
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

                                                <div class=\"rating-wrapper\">
                                                    <div class=\"raty-wrapper\">
                                                        <div><img alt=\"1\" src=\"";
                // line 277
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                echo "\" title=\"good\"><img alt=\"2\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                echo "\" title=\"good\"><img alt=\"3\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                echo "\" title=\"good\"><img alt=\"4\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                echo "\" title=\"good\"><img alt=\"5\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                echo "\" title=\"good\"><input name=\"score\" type=\"hidden\" value=\"4\" readonly=\"\"></div>
                                                        <span> / 7 avis</span>
                                                    </div>
                                                </div>

                                                <div class=\"price\">";
                // line 282
                echo twig_escape_filter($this->env, $this->getAttribute($context["enseigne"], "prix", array()), "html", null, true);
                echo " Fcfa</div>

                                                <a href=\"profil.html\" class=\"btn btn-primary btn-sm\">Voir Profil</a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseigne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            echo "
                        </div>

                        ";
            // line 295
            $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "LGPCourseBundle:Course:search.html.twig", 295)->display($context);
            // line 296
            echo "
                    ";
        }
        // line 298
        echo "
                </div>

            </div>

        </div>

    </div>
";
        
        $__internal_9805435b365118b0abf62330cc7c7e9cf4a59d4e8f49ec143588a1703d22ac46->leave($__internal_9805435b365118b0abf62330cc7c7e9cf4a59d4e8f49ec143588a1703d22ac46_prof);

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
        return array (  382 => 298,  378 => 296,  376 => 295,  371 => 292,  355 => 282,  339 => 277,  315 => 268,  307 => 266,  299 => 264,  296 => 263,  279 => 262,  271 => 259,  265 => 256,  258 => 252,  253 => 249,  245 => 247,  238 => 244,  236 => 243,  232 => 241,  228 => 240,  223 => 238,  218 => 235,  213 => 232,  207 => 202,  203 => 201,  197 => 197,  195 => 196,  185 => 188,  182 => 85,  176 => 75,  174 => 74,  170 => 72,  166 => 70,  157 => 68,  153 => 67,  150 => 66,  148 => 65,  125 => 44,  109 => 32,  101 => 30,  98 => 29,  94 => 27,  88 => 24,  77 => 16,  74 => 15,  72 => 14,  69 => 13,  63 => 12,  52 => 8,  44 => 6,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {% if params.courseFound is defined %}*/
/*         Profs de {{ params.courseFound.intitule }} - {{ parent() }}*/
/*     {% else %}*/
/*         Profs - {{ parent() }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {% if params.courseFound is defined %}*/
/*         <!-- start end Page title -->*/
/*         <div class="page-title" style="background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');">*/
/* */
/*             <div class="container">*/
/* */
/*                 <div class="row">*/
/* */
/*                     <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">*/
/* */
/*                         <h1 class="hero-title">Grands Profs en {{ params.courseFound.intitule }} </h1>*/
/* */
/*                         <ol class="breadcrumb-list">*/
/*                             <li><a href="{{path('lgp_core_homepage')}} ">Accueil</a></li>*/
/*                                 {#  <li><a href="#">Profs</a></li> #}*/
/*                                 {% if params.ville is defined %}*/
/*                                 <li><a href=" {{path('lgp_course_find_prof_city', {'ville' : params.ville})}} "> {{params.ville}} </a></li>*/
/*                                 {% endif %}*/
/*                             <li><span>{{ params.courseFound.intitule }}</span></li>*/
/*                         </ol>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <!-- end Page title -->*/
/*     {% endif %}*/
/* */
/*     <div class="content-wrapper">*/
/* */
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-sm-4 col-md-3">*/
/* */
/*                     <aside class="sidebar with-filter">*/
/* */
/*                         <div class="sidebar-search-wrapper bg-light-2">*/
/* */
/*                             <div class="">*/
/*                                 <h4>Affinez votre recherche </h4>*/
/*                             </div>*/
/* */
/*                             <div class="sidebar-search-content">*/
/* */
/*                                 <div class="form-group">*/
/* */
/*                                     {% if params.courses %}*/
/*                                         <datalist id="cours">*/
/*                                             {% for course in params.courses %}*/
/*                                                 <option> {{course.intitule}} </option>}*/
/*                                             {% endfor %}*/
/*                                         </datalist>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/* */
/*                                 {% include 'LGPCourseBundle:Form:course_form_search.html.twig' %}*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                         {#*/
/*                              BLOCK  AFFINEZ RECHERCHE*/
/*                           <div class="sidebar-header clearfix">*/
/*                              <h4>Affinez</h4>*/
/*                              <a href="#" class="sidebar-reset-filter"><i class="fa fa-times"></i> Annuler</a>*/
/*                          </div> #}*/
/* */
/*                         {#  <div class="sidebar-inner">*/
/*  */
/*                              <div class="sidebar-module">*/
/*                                  <h6 class="sidebar-title">Entrez un nom</h6>*/
/*                                  <div class="sidebar-module-inner">*/
/*                                      <div class="sidebar-mini-search">*/
/*                                          <div class="input-group">*/
/*                                              <input type="text" class="form-control" placeholder="Qui ?...">*/
/*                                              <span class="input-group-btn">*/
/*                                                  <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>*/
/*                                              </span>*/
/*                                          </div>*/
/*                                      </div>*/
/*                                  </div>*/
/*                              </div>*/
/*  */
/*  */
/*                              <div class="clear"></div>*/
/*  */
/*                              <div class="sidebar-module">*/
/*                                  <h6 class="sidebar-title">Affinez par note</h6>*/
/*                                  <div class="sidebar-module-inner">*/
/*                                      <input id="star_range" />*/
/*                                  </div>*/
/*                              </div>*/
/*  */
/*                              <div class="clear"></div>*/
/*  */
/*                              <div class="sidebar-module">*/
/*  */
/*                                  <h6 class="sidebar-title">Affinez par quartier</h6>*/
/*                                  <div class="sidebar-module-inner">*/
/*                                      <div class="checkbox-block">*/
/*                                          <input id="ville-1" name="ville" type="checkbox" class="checkbox"/>*/
/*                                          <label class="" for="ville-1">Akwa <span class="checkbox-count">(90)</span></label>*/
/*                                      </div>*/
/*                                      <div class="checkbox-block">*/
/*                                          <input id="ville-2" name="ville" type="checkbox" class="checkbox"/>*/
/*                                          <label class="" for="ville-2">Bonapriso <span class="checkbox-count">(25)</span></label>*/
/*                                      </div>*/
/*                                      <div class="checkbox-block">*/
/*                                          <input id="ville-3" name="ville" type="checkbox" class="checkbox"/>*/
/*                                          <label class="" for="ville-3">Logpom <span class="checkbox-count">(15)</span></label>*/
/*                                      </div>*/
/*                                      <div class="ville-block">*/
/*                                          <input id="property_type-4" name="ville" type="checkbox" class="checkbox"/>*/
/*                                          <label class="" for="property_type-4">Bonamoussadi<span class="checkbox-count">(20)</span></label>*/
/*                                      </div>*/
/*                                      <div class="more-less-wrapper">*/
/*  */
/*                                          <div id="property_type_more_less" class="collapse"> */
/*                                              <div class="more-less-inner">*/
/*  */
/*                                                  <div class="checkbox-block">*/
/*                                                      <input id="ville-6" name="ville" type="checkbox" class="checkbox"/>*/
/*                                                      <label class="" for="ville-6">Bonaberi <span class="checkbox-count">(25)</span></label>*/
/*                                                  </div>*/
/*  */
/*                                              </div>*/
/*                                          </div>*/
/*                                          <button class="btn btn-more-less collapsed" data-toggle="collapse" data-target="#property_type_more_less">Montrer plus</button>*/
/*  */
/*                                      </div>*/
/*  */
/*                                  </div>*/
/*                              </div>*/
/*  */
/*                              <div class="clear"></div>*/
/*  */
/*                              <div class="sidebar-module">*/
/*                                  <h6 class="sidebar-title">Affinez par niveau</h6>*/
/*                                  <div class="sidebar-module-inner">*/
/*                                      <div class="checkbox-block">*/
/*                                          <input id="niveau-1" name="niveau" type="checkbox" class="checkbox"/>*/
/*                                          <label class="" for="niveau-1">Primaire</label>*/
/*                                      </div>*/
/*                                      <div class="checkbox-block">*/
/*                                          <input id="niveau-2" name="niveau" type="checkbox" class="checkbox"/>*/
/*                                          <label class="" for="niveau-2">Collège</label>*/
/*                                      </div>*/
/*                                      <div class="checkbox-block">*/
/*                                          <input id="niveau-3" name="niveau" type="checkbox" class="checkbox"/>*/
/*                                          <label class="" for="niveau-3">Seconde</label>*/
/*                                      </div>*/
/*                                      <div class="checkbox-block">*/
/*                                          <input id="niveau-4" name="niveau" type="checkbox" class="checkbox"/>*/
/*                                          <label class="" for="niveau-4">Première</label>*/
/*                                      </div>*/
/*                                      <div class="checkbox-block">*/
/*                                          <input id="niveau-5" name="niveau" type="checkbox" class="checkbox"/>*/
/*                                          <label class="" for="niveau-5">Terminale</label>*/
/*                                      </div>*/
/*                                      <div class="checkbox-block">*/
/*                                          <input id="niveau-6" name="niveau" type="checkbox" class="checkbox"/>*/
/*                                          <label class="" for="niveau-6">Supérieur</label>*/
/*                                      </div>*/
/*  */
/*                                  </div>*/
/*                              </div>*/
/*  */
/*  */
/*                          </div> #}*/
/* */
/*                     </aside>*/
/* */
/* */
/*                 </div>*/
/* */
/*                 <div class="col-sm-8 col-md-9">*/
/* */
/*                     {% if params.courseFound is defined %}*/
/*                         <div class="sorting-wrappper">*/
/* */
/*                             <div class="sorting-header">*/
/* */
/*                                 <h3 class="sorting-title uppercase">Des Grands profs en {{ params.intitule_cours }}</h3>*/
/*                                 <p class="sorting-lead">{{params.matieres_profs | length}} Grands profs trouvés</p>*/
/*                             </div>*/
/* */
/*                             {#   <div class="sorting-content">*/
/*       */
/*                                   <div class="row">*/
/*       */
/*                                       <div class="col-sm-12 col-md-8">*/
/*                                           <div class="sort-by-wrapper">*/
/*                                               <label class="sorting-label">Sort by: </label> */
/*                                               <div class="sorting-middle-holder">*/
/*                                                   <ul class="sort-by">*/
/*                                                       <li class="active up"><a href="#">Note <i class="fa fa-long-arrow-down"></i></a></li>*/
/*                                                   </ul>*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </div>*/
/*       */
/*                                       <div class="col-sm-12 col-md-4">*/
/*                                           <div class="sort-by-wrapper mt pull-right pull-left-sm mt-10-sm">*/
/*                                               <label class="sorting-label">Voir : </label> */
/*                                               <div class="sorting-middle-holder">*/
/*                                                   <a href="#" class="btn btn-sorting active"><i class="fa fa-th-list"></i></a>*/
/*                                               </div>*/
/*                                           </div>*/
/*                                       </div>*/
/*       */
/*                                   </div>*/
/*       */
/*                               </div> #}*/
/* */
/*                         </div>*/
/*                     {% endif %}*/
/* */
/*                     <div class="package-list-item-wrapper on-page-result-page">*/
/* */
/*                         {% if params.matieres_profs | length != 0 %} */
/* */
/*                             {% for enseigne in params.matieres_profs %}*/
/*                                 <div class="package-list-item clearfix">*/
/*                                     <div class="image">*/
/*                                         {% if not enseigne.prof.image %}*/
/*                                             <img src="{{ asset('uploads/profils/default.jpg') }}" alt="Tour Package" />*/
/* */
/*                                         {% else %}*/
/*                                             <img src="{{ asset(enseigne.prof.image.webPath) }}" alt=" {{enseigne.prof.nom}} " />*/
/*                                         {% endif %}*/
/*                                     </div>*/
/* */
/*                                     <div class="content">*/
/*                                         <h5>{{enseigne.prof.prenoms ~"  "~ enseigne.prof.nom | upper}} <button class="btn"><i class="fa fa-heart-o"></i></button></h5>*/
/*                                         <div class="row gap-10">*/
/*                                             <div class="col-sm-12 col-md-9">*/
/* */
/*                                                 <p class="line18"> {{enseigne.prof.presentation}} </p>*/
/*                                                 <br>*/
/*                                                 <ul class="list-info">*/
/*                                                     <li><span class="icon"><i class="fa fa-map-marker"></i></span> <span class="font600">Position: </span> {{enseigne.prof.ville | upper}} - {{enseigne.prof.quartier | lower}}</li>*/
/* */
/*                                                     <li><span class="icon"><i class="fa fa-book"></i></span> <span class="font600">Cours :</span> */
/*                                                             {% for ens_cours in params.enseigneRep.getCoursByProf(enseigne.prof) %}*/
/*                                                                 {% if loop.index != loop.last %}*/
/*                                                                 <a href=" {{path('lgp_course_find_prof',{'intitule_cours':ens_cours.cours.intitule})}} " title="">{{ens_cours.cours.intitule}}</a> -*/
/*                                                             {% else %}*/
/*                                                                 <a href=" {{path('lgp_course_find_prof',{'intitule_cours':ens_cours.cours.intitule})}} " title="">{{ens_cours.cours.intitule}}</a>*/
/*                                                             {% endif %}*/
/*                                                         {% endfor %} */
/*                                                     </li>*/
/*                                                 </ul>*/
/* */
/*                                             </div>*/
/*                                             <div class="col-sm-12 col-md-3 text-right text-left-sm">*/
/* */
/*                                                 <div class="rating-wrapper">*/
/*                                                     <div class="raty-wrapper">*/
/*                                                         <div><img alt="1" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="2" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="3" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="4" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="5" src="{{ asset('images/raty/star-off-sm.png') }}" title="good"><input name="score" type="hidden" value="4" readonly=""></div>*/
/*                                                         <span> / 7 avis</span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/* */
/*                                                 <div class="price">{{enseigne.prix}} Fcfa</div>*/
/* */
/*                                                 <a href="profil.html" class="btn btn-primary btn-sm">Voir Profil</a>*/
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                             {% endfor %}*/
/* */
/*                         </div>*/
/* */
/*                         {% include('LGPCourseBundle:Pagination:pagination.html.twig') %}*/
/* */
/*                     {% endif %}*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %} */
/* */
