<?php

/* @LGPCourse/Course/search_city.html.twig */
class __TwigTemplate_abf5d94300201a612433aad38a0837c859b0b1b6841eef326d45c91f2f945f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPCourse/Course/search_city.html.twig", 2);
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
        $__internal_32e35f99a7017d178ab05e7b5fdc99fefef53449ceb0454905de0917f3cd1ca1 = $this->env->getExtension("native_profiler");
        $__internal_32e35f99a7017d178ab05e7b5fdc99fefef53449ceb0454905de0917f3cd1ca1->enter($__internal_32e35f99a7017d178ab05e7b5fdc99fefef53449ceb0454905de0917f3cd1ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCourse/Course/search_city.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32e35f99a7017d178ab05e7b5fdc99fefef53449ceb0454905de0917f3cd1ca1->leave($__internal_32e35f99a7017d178ab05e7b5fdc99fefef53449ceb0454905de0917f3cd1ca1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_539b1faea53892700f2747206527a85bb5c534c5c5dc54a07dc4d963b3ea5931 = $this->env->getExtension("native_profiler");
        $__internal_539b1faea53892700f2747206527a85bb5c534c5c5dc54a07dc4d963b3ea5931->enter($__internal_539b1faea53892700f2747206527a85bb5c534c5c5dc54a07dc4d963b3ea5931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_539b1faea53892700f2747206527a85bb5c534c5c5dc54a07dc4d963b3ea5931->leave($__internal_539b1faea53892700f2747206527a85bb5c534c5c5dc54a07dc4d963b3ea5931_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_070f47dec3c7a81546f39e538a2b5e5db636f5792abe016adb1782024d468739 = $this->env->getExtension("native_profiler");
        $__internal_070f47dec3c7a81546f39e538a2b5e5db636f5792abe016adb1782024d468739->enter($__internal_070f47dec3c7a81546f39e538a2b5e5db636f5792abe016adb1782024d468739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                    <h1 class=\"hero-title\">Grands Profs dans la ville de  ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()), "html", null, true);
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
            echo "                            <li><span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()), "html", null, true);
            echo " </span></li>
                            ";
        }
        // line 27
        echo "                    </ol>

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
        // line 57
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courses", array())) {
            // line 58
            echo "                                        <datalist id=\"cours\">
                                            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 60
                echo "                                                <option> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "intitule", array()), "html", null, true);
                echo " </option>}
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                                        </datalist>
                                    ";
        }
        // line 64
        echo "                                </div>

                                ";
        // line 66
        $this->loadTemplate("LGPCourseBundle:Form:course_form_search.html.twig", "@LGPCourse/Course/search_city.html.twig", 66)->display($context);
        // line 67
        echo "                            </div>

                        </div>

                        ";
        // line 77
        echo "
                        ";
        // line 180
        echo "
                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">

                    <div class=\"sorting-wrappper\">

                        <div class=\"sorting-header\">
                            <h3 class=\"sorting-title uppercase\">Des Grands dans la ville de ";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()), "html", null, true);
        echo "</h3>
                            <p class=\"sorting-lead\">";
        // line 192
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array())), "html", null, true);
        echo " Grands profs trouvés</p>
                        </div>

                        ";
        // line 222
        echo "
                    </div>

                    <div class=\"package-list-item-wrapper on-page-result-page\">

                        ";
        // line 227
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array())) != 0)) {
            echo " 

                            ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["enseigne"]) {
                // line 230
                echo "                                <div class=\"package-list-item clearfix\">
                                    <div class=\"image\">
                                        ";
                // line 232
                if ( !$this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "photo", array())) {
                    // line 233
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                    echo "\" alt=\"Tour Package\" />

                                        ";
                } else {
                    // line 236
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "photo", array())), "html", null, true);
                    echo "\" alt=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "nom", array()), "html", null, true);
                    echo " \" />
                                        ";
                }
                // line 238
                echo "                                    </div>

                                    <div class=\"content\">
                                        <h5>";
                // line 241
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "prenoms", array()) . "  ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "nom", array()))), "html", null, true);
                echo " <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button></h5>
                                        <div class=\"row gap-10\">
                                            <div class=\"col-sm-12 col-md-9\">

                                                <p class=\"line18\"> ";
                // line 245
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "presentation", array()), "html", null, true);
                echo " </p>
                                                <br>
                                                <ul class=\"list-info\">
                                                    <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> ";
                // line 248
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array())), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "quartier", array())), "html", null, true);
                echo "</li>

                                                    <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Cours :</span> 
                                                            ";
                // line 251
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
                    // line 252
                    echo "                                                                ";
                    if (($this->getAttribute($context["loop"], "index", array()) != $this->getAttribute($context["loop"], "last", array()))) {
                        // line 253
                        echo "                                                                <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("cours" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()))), "html", null, true);
                        echo " \" title=\"\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a> -
                                                            ";
                    } else {
                        // line 255
                        echo "                                                                <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("cours" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()))), "html", null, true);
                        echo " \" title=\"\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a>
                                                            ";
                    }
                    // line 257
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
                // line 266
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
                // line 271
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
            // line 281
            echo "                        </div>

                        ";
            // line 283
            $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "@LGPCourse/Course/search_city.html.twig", 283)->display($context);
            // line 284
            echo "
                    ";
        }
        // line 286
        echo "
                </div>

            </div>

        </div>

    </div>
";
        
        $__internal_070f47dec3c7a81546f39e538a2b5e5db636f5792abe016adb1782024d468739->leave($__internal_070f47dec3c7a81546f39e538a2b5e5db636f5792abe016adb1782024d468739_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCourse/Course/search_city.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 286,  346 => 284,  344 => 283,  340 => 281,  324 => 271,  308 => 266,  284 => 257,  276 => 255,  268 => 253,  265 => 252,  248 => 251,  240 => 248,  234 => 245,  227 => 241,  222 => 238,  214 => 236,  207 => 233,  205 => 232,  201 => 230,  197 => 229,  192 => 227,  185 => 222,  179 => 192,  175 => 191,  162 => 180,  159 => 77,  153 => 67,  151 => 66,  147 => 64,  143 => 62,  134 => 60,  130 => 59,  127 => 58,  125 => 57,  93 => 27,  87 => 25,  84 => 24,  80 => 22,  74 => 19,  63 => 11,  59 => 9,  53 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ params.ville }} - {{ parent() }}*/
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
/*                     <h1 class="hero-title">Grands Profs dans la ville de  {{ params.ville }} </h1>*/
/* */
/*                     <ol class="breadcrumb-list">*/
/*                         <li><a href=" {{path('lgp_core_homepage')}} ">Accueil</a></li>*/
/*                             {#  <li><a href="#">Profs</a></li> #}*/
/*                             {% if params.ville is defined %}*/
/*                             <li><span> {{params.ville}} </span></li>*/
/*                             {% endif %}*/
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
/*                             <h3 class="sorting-title uppercase">Des Grands dans la ville de {{ params.ville }}</h3>*/
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
