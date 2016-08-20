<?php

/* @LGPCourse/Course/search.html.twig */
class __TwigTemplate_1f1c4970ec399f31dacd58113d80ff21b932c2a8858c2c0bd278d0f315d6067b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPCourse/Course/search.html.twig", 2);
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
        $__internal_4c13104b8be6b2d5b5243088e18fe0d92b9033c7063d13760ce6c898896150a7 = $this->env->getExtension("native_profiler");
        $__internal_4c13104b8be6b2d5b5243088e18fe0d92b9033c7063d13760ce6c898896150a7->enter($__internal_4c13104b8be6b2d5b5243088e18fe0d92b9033c7063d13760ce6c898896150a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCourse/Course/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c13104b8be6b2d5b5243088e18fe0d92b9033c7063d13760ce6c898896150a7->leave($__internal_4c13104b8be6b2d5b5243088e18fe0d92b9033c7063d13760ce6c898896150a7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad3d222c3bdf6d6f69de0e812086f95c30a4afb6e166ddf63a79dae26c08a7f8 = $this->env->getExtension("native_profiler");
        $__internal_ad3d222c3bdf6d6f69de0e812086f95c30a4afb6e166ddf63a79dae26c08a7f8->enter($__internal_ad3d222c3bdf6d6f69de0e812086f95c30a4afb6e166ddf63a79dae26c08a7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Profs de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "cours", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ad3d222c3bdf6d6f69de0e812086f95c30a4afb6e166ddf63a79dae26c08a7f8->leave($__internal_ad3d222c3bdf6d6f69de0e812086f95c30a4afb6e166ddf63a79dae26c08a7f8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcab9d3a01e2a9562d22c70a975d065ecd1dfd97bc4b780abf28abb8b9fae20b = $this->env->getExtension("native_profiler");
        $__internal_bcab9d3a01e2a9562d22c70a975d065ecd1dfd97bc4b780abf28abb8b9fae20b->enter($__internal_bcab9d3a01e2a9562d22c70a975d065ecd1dfd97bc4b780abf28abb8b9fae20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
        echo "');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                    <h1 class=\"hero-title\">Grands Profs en ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "cours", array()), "html", null, true);
        echo " </h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo " \">Accueil</a></li>
                            ";
        // line 24
        echo "                            ";
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ville", array(), "any", true, true)) {
            // line 25
            echo "                            <li><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("ville" => $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()))), "html", null, true);
            echo " \"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()), "html", null, true);
            echo " </a></li>
                            ";
        }
        // line 27
        echo "                        <li><span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "cours", array()), "html", null, true);
        echo "</span></li>
                    </ol>

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
        $this->loadTemplate("LGPCourseBundle:Form:course_form_search.html.twig", "@LGPCourse/Course/search.html.twig", 67)->display($context);
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
                            <h3 class=\"sorting-title uppercase\">Des Grands profs en ";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "cours", array()), "html", null, true);
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
                if ( !$this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "photo", array())) {
                    // line 234
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                    echo "\" alt=\"Tour Package\" />

                                        ";
                } else {
                    // line 237
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "photo", array())), "html", null, true);
                    echo "\" alt=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "nom", array()), "html", null, true);
                    echo " \" />
                                        ";
                }
                // line 239
                echo "                                    </div>

                                    <div class=\"content\">
                                        <h5>";
                // line 242
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "prenoms", array()) . "  ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "nom", array()))), "html", null, true);
                echo " <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button></h5>
                                        <div class=\"row gap-10\">
                                            <div class=\"col-sm-12 col-md-9\">

                                                <p class=\"line18\"> ";
                // line 246
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "presentation", array()), "html", null, true);
                echo " </p>
                                                <br>
                                                <ul class=\"list-info\">
                                                    <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> ";
                // line 249
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array())), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "quartier", array())), "html", null, true);
                echo "</li>

                                                    <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Cours :</span> 
                                                            ";
                // line 252
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
                    // line 253
                    echo "                                                                ";
                    if (($this->getAttribute($context["loop"], "index", array()) != $this->getAttribute($context["loop"], "last", array()))) {
                        // line 254
                        echo "                                                                <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("cours" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()))), "html", null, true);
                        echo " \" title=\"\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a> -
                                                            ";
                    } else {
                        // line 256
                        echo "                                                                <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("cours" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()))), "html", null, true);
                        echo " \" title=\"\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a>
                                                            ";
                    }
                    // line 258
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
                // line 267
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
                // line 272
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
            // line 282
            echo "
                        </div>

                        ";
            // line 285
            $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "@LGPCourse/Course/search.html.twig", 285)->display($context);
            // line 286
            echo "
                    ";
        }
        // line 288
        echo "
                </div>

            </div>

        </div>

    </div>
";
        
        $__internal_bcab9d3a01e2a9562d22c70a975d065ecd1dfd97bc4b780abf28abb8b9fae20b->leave($__internal_bcab9d3a01e2a9562d22c70a975d065ecd1dfd97bc4b780abf28abb8b9fae20b_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCourse/Course/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 288,  352 => 286,  350 => 285,  345 => 282,  329 => 272,  313 => 267,  289 => 258,  281 => 256,  273 => 254,  270 => 253,  253 => 252,  245 => 249,  239 => 246,  232 => 242,  227 => 239,  219 => 237,  212 => 234,  210 => 233,  206 => 231,  202 => 230,  197 => 228,  190 => 223,  184 => 193,  180 => 192,  167 => 181,  164 => 78,  158 => 68,  156 => 67,  152 => 65,  148 => 63,  139 => 61,  135 => 60,  132 => 59,  130 => 58,  95 => 27,  87 => 25,  84 => 24,  80 => 22,  74 => 19,  63 => 11,  59 => 9,  53 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Profs de {{ params.cours }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <!-- start end Page title -->*/
/*     <div class="page-title" style="background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');">*/
/* */
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">*/
/* */
/*                     <h1 class="hero-title">Grands Profs en {{ params.cours }} </h1>*/
/* */
/*                     <ol class="breadcrumb-list">*/
/*                         <li><a href="{{path('lgp_core_homepage')}} ">Accueil</a></li>*/
/*                             {#  <li><a href="#">Profs</a></li> #}*/
/*                             {% if params.ville is defined %}*/
/*                             <li><a href=" {{path('lgp_course_find_prof_city', {'ville' : params.ville})}} "> {{params.ville}} </a></li>*/
/*                             {% endif %}*/
/*                         <li><span>{{ params.cours }}</span></li>*/
/*                     </ol>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/*     <!-- end Page title -->*/
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
/*                     <div class="sorting-wrappper">*/
/* */
/*                         <div class="sorting-header">*/
/*                             <h3 class="sorting-title uppercase">Des Grands profs en {{ params.cours }}</h3>*/
/*                             <p class="sorting-lead">{{params.matieres_profs | length}} Grands profs trouvés</p>*/
/*                         </div>*/
/* */
/*                         {#   <div class="sorting-content">*/
/*   */
/*                               <div class="row">*/
/*   */
/*                                   <div class="col-sm-12 col-md-8">*/
/*                                       <div class="sort-by-wrapper">*/
/*                                           <label class="sorting-label">Sort by: </label> */
/*                                           <div class="sorting-middle-holder">*/
/*                                               <ul class="sort-by">*/
/*                                                   <li class="active up"><a href="#">Note <i class="fa fa-long-arrow-down"></i></a></li>*/
/*                                               </ul>*/
/*                                           </div>*/
/*                                       </div>*/
/*                                   </div>*/
/*   */
/*                                   <div class="col-sm-12 col-md-4">*/
/*                                       <div class="sort-by-wrapper mt pull-right pull-left-sm mt-10-sm">*/
/*                                           <label class="sorting-label">Voir : </label> */
/*                                           <div class="sorting-middle-holder">*/
/*                                               <a href="#" class="btn btn-sorting active"><i class="fa fa-th-list"></i></a>*/
/*                                           </div>*/
/*                                       </div>*/
/*                                   </div>*/
/*   */
/*                               </div>*/
/*   */
/*                           </div> #}*/
/* */
/*                     </div>*/
/* */
/*                     <div class="package-list-item-wrapper on-page-result-page">*/
/* */
/*                         {% if params.matieres_profs | length != 0 %} */
/* */
/*                             {% for enseigne in params.matieres_profs %}*/
/*                                 <div class="package-list-item clearfix">*/
/*                                     <div class="image">*/
/*                                         {% if not enseigne.prof.user.photo %}*/
/*                                             <img src="{{ asset('uploads/profils/default.jpg') }}" alt="Tour Package" />*/
/* */
/*                                         {% else %}*/
/*                                             <img src="{{ asset(enseigne.prof.user.photo) }}" alt=" {{enseigne.prof.user.nom}} " />*/
/*                                         {% endif %}*/
/*                                     </div>*/
/* */
/*                                     <div class="content">*/
/*                                         <h5>{{enseigne.prof.user.prenoms ~"  "~ enseigne.prof.user.nom | upper}} <button class="btn"><i class="fa fa-heart-o"></i></button></h5>*/
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
/*                                                                 <a href=" {{path('lgp_course_find_prof',{'cours':ens_cours.cours.intitule})}} " title="">{{ens_cours.cours.intitule}}</a> -*/
/*                                                             {% else %}*/
/*                                                                 <a href=" {{path('lgp_course_find_prof',{'cours':ens_cours.cours.intitule})}} " title="">{{ens_cours.cours.intitule}}</a>*/
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
/* {% endblock %}*/
