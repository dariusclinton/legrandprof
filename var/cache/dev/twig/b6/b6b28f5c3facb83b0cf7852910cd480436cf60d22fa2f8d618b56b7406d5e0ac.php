<?php

/* LGPCourseBundle:Course:category.html.twig */
class __TwigTemplate_dc09b499106997516531a4257458f005abe189fe5d50bdd859aa5d2adf406aaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Course:category.html.twig", 2);
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
        $__internal_1083e9c968a0f7a77d0d0f2ce8b330be84cd9beeaf166b23357fdf8b5d935949 = $this->env->getExtension("native_profiler");
        $__internal_1083e9c968a0f7a77d0d0f2ce8b330be84cd9beeaf166b23357fdf8b5d935949->enter($__internal_1083e9c968a0f7a77d0d0f2ce8b330be84cd9beeaf166b23357fdf8b5d935949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Course:category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1083e9c968a0f7a77d0d0f2ce8b330be84cd9beeaf166b23357fdf8b5d935949->leave($__internal_1083e9c968a0f7a77d0d0f2ce8b330be84cd9beeaf166b23357fdf8b5d935949_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c59c0141753f4bed2530dda070f5e77325efe87a63c82e5690cacde5bb5a4a86 = $this->env->getExtension("native_profiler");
        $__internal_c59c0141753f4bed2530dda070f5e77325efe87a63c82e5690cacde5bb5a4a86->enter($__internal_c59c0141753f4bed2530dda070f5e77325efe87a63c82e5690cacde5bb5a4a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Categorie ";
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c59c0141753f4bed2530dda070f5e77325efe87a63c82e5690cacde5bb5a4a86->leave($__internal_c59c0141753f4bed2530dda070f5e77325efe87a63c82e5690cacde5bb5a4a86_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8caa7dea62796c4cc02f7710bc54314efd525f0f0d029b8dda0406c114817410 = $this->env->getExtension("native_profiler");
        $__internal_8caa7dea62796c4cc02f7710bc54314efd525f0f0d029b8dda0406c114817410->enter($__internal_8caa7dea62796c4cc02f7710bc54314efd525f0f0d029b8dda0406c114817410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                    <h1 class=\"hero-title\">Catégorie ";
        // line 19
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))), "html", null, true);
        echo "</h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\"index.html\">Accueil</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("lgp_course_category");
        echo "\">Categories</a></li>
                        <li><span>";
        // line 24
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))), "html", null, true);
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

                        <div class=\"sidebar-inner\">

                            <div class=\"sidebar-module\">
                                <h6 class=\"sidebar-title\" style=\"font-size:17px;margin-bottom:10px;\">Plus de catégories</h6>
                                <ul class=\"category\">
                                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 52
            echo "                                        ";
            if ((twig_lower_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))) != twig_lower_filter($this->env, $this->getAttribute($context["cat"], "intitule", array())))) {
                // line 53
                echo "                                            <li><a href=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_category", array("category" => $this->getAttribute($context["cat"], "intitule", array()))), "html", null, true);
                echo " \">
                                                    ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "intitule", array()), "html", null, true);
                echo "
                                                </a>
                                            </li>
                                        ";
            }
            // line 58
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                    <li></li>
                                    <li><a href=\" ";
        // line 60
        echo $this->env->getExtension('routing')->getPath("lgp_course_category");
        echo " \" title=\"\">voir toutes les categories</a></li>
                                </ul>
                            </div>


                        </div>

                    </aside>


                </div>

                ";
        // line 72
        if ((isset($context["categoryFound"]) ? $context["categoryFound"] : $this->getContext($context, "categoryFound"))) {
            // line 73
            echo "                    <div class=\"col-sm-8 col-md-9\">

                        <div class=\"sorting-wrappper\">

                            <div class=\"sorting-header\">
                                <h3 class=\"sorting-title uppercase\">Cours dans la catégorie ";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
            echo "</h3>
                                <p class=\"sorting-lead\">
                                    ";
            // line 80
            if ((isset($context["categoryFound"]) ? $context["categoryFound"] : $this->getContext($context, "categoryFound"))) {
                // line 81
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["categoryFound"]) ? $context["categoryFound"] : $this->getContext($context, "categoryFound")), "cours", array())), "html", null, true);
                echo " Cours
                                    ";
            }
            // line 83
            echo "                                </p>
                            </div>
                        </div>
                        <div class=\"GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller\">


                            <div class=\"GridLex-grid-noGutter-equalHeight\">


                                ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categoryFound"]) ? $context["categoryFound"] : $this->getContext($context, "categoryFound")), "cours", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 93
                echo "                                    <div class=\"GridLex-col-4_sm-6_xs-12 mb-20\">
                                        <div class=\"package-grid-item\"> 
                                            <a href=\"#\">
                                                <div class=\"image\">
                                                    <img src=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["course"], "url", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "alt", array()), "html", null, true);
                echo "\" />
                                                </div>
                                                <div class=\"content-category\">
                                                    <h6>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "intitule", array()), "html", null, true);
                echo "</h6>
                                                    <p> ";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "description", array()), "html", null, true);
                echo "  </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "

                            </div>

                        </div>

                        ";
            // line 113
            if ( !twig_test_empty($this->getAttribute((isset($context["categoryFound"]) ? $context["categoryFound"] : $this->getContext($context, "categoryFound")), "cours", array()))) {
                // line 114
                echo "                            <div class=\"pager-wrappper clearfix\">

                                <div class=\"pager-innner\">

                                    <div class=\"flex-row flex-align-middle\">

                                        <div class=\"flex-column flex-sm-12\">
                                            Resultats de 1 à 4 de 175 
                                        </div>  

                                        <div class=\"flex-column flex-sm-12\">
                                            <nav class=\"pager-right\">
                                                <ul class=\"pagination\">
                                                    <li>
                                                        <a href=\"#\" aria-label=\"Previous\">
                                                            <span aria-hidden=\"true\">&laquo;</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"active\"><a href=\"#\">1</a></li>
                                                    <li><a href=\"#\">2</a></li>
                                                    <li><a href=\"#\">3</a></li>
                                                    <li><span>...</span></li>
                                                    <li><a href=\"#\">11</a></li>
                                                    <li><a href=\"#\">12</a></li>
                                                    <li><a href=\"#\">13</a></li>
                                                    <li>
                                                        <a href=\"#\" aria-label=\"Next\">
                                                            <span aria-hidden=\"true\">&raquo;</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        ";
            }
            // line 154
            echo "

                    </div>
                ";
        }
        // line 158
        echo "
                ";
        // line 159
        if ( !(isset($context["categoryFound"]) ? $context["categoryFound"] : $this->getContext($context, "categoryFound"))) {
            // line 160
            echo "                    <div class=\"sorting-wrappper\">
                        <div class=\"sorting-header\">
                            <h3 class=\"sorting-title uppercase\">La catégorie <span style=\"color:#dd2c00\">";
            // line 162
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
            echo "</span> n'existe pas!!!</h3>
                        </div>
                    </div>
                ";
        }
        // line 166
        echo "
            </div>

        </div>

    </div>

";
        
        $__internal_8caa7dea62796c4cc02f7710bc54314efd525f0f0d029b8dda0406c114817410->leave($__internal_8caa7dea62796c4cc02f7710bc54314efd525f0f0d029b8dda0406c114817410_prof);

    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Course:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 166,  292 => 162,  288 => 160,  286 => 159,  283 => 158,  277 => 154,  235 => 114,  233 => 113,  225 => 107,  213 => 101,  209 => 100,  201 => 97,  195 => 93,  191 => 92,  180 => 83,  174 => 81,  172 => 80,  167 => 78,  160 => 73,  158 => 72,  143 => 60,  140 => 59,  134 => 58,  127 => 54,  122 => 53,  119 => 52,  115 => 51,  85 => 24,  81 => 23,  74 => 19,  63 => 11,  59 => 9,  53 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Categorie {{ category }} - {{ parent() }}*/
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
/*                     <h1 class="hero-title">Catégorie {{ category | lower }}</h1>*/
/* */
/*                     <ol class="breadcrumb-list">*/
/*                         <li><a href="index.html">Accueil</a></li>*/
/*                         <li><a href="{{path('lgp_course_category')}}">Categories</a></li>*/
/*                         <li><span>{{ category | lower }}</span></li>*/
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
/*                         <div class="sidebar-inner">*/
/* */
/*                             <div class="sidebar-module">*/
/*                                 <h6 class="sidebar-title" style="font-size:17px;margin-bottom:10px;">Plus de catégories</h6>*/
/*                                 <ul class="category">*/
/*                                     {% for cat in categories %}*/
/*                                         {% if category | lower != cat.intitule | lower %}*/
/*                                             <li><a href=" {{path('lgp_course_find_category' , {'category':cat.intitule}) }} ">*/
/*                                                     {{cat.intitule}}*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                     <li></li>*/
/*                                     <li><a href=" {{path('lgp_course_category')}} " title="">voir toutes les categories</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/* */
/*                     </aside>*/
/* */
/* */
/*                 </div>*/
/* */
/*                 {% if categoryFound %}*/
/*                     <div class="col-sm-8 col-md-9">*/
/* */
/*                         <div class="sorting-wrappper">*/
/* */
/*                             <div class="sorting-header">*/
/*                                 <h3 class="sorting-title uppercase">Cours dans la catégorie {{ category }}</h3>*/
/*                                 <p class="sorting-lead">*/
/*                                     {% if categoryFound %}*/
/*                                         {{categoryFound.cours | length}} Cours*/
/*                                     {% endif %}*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller">*/
/* */
/* */
/*                             <div class="GridLex-grid-noGutter-equalHeight">*/
/* */
/* */
/*                                 {% for course in categoryFound.cours %}*/
/*                                     <div class="GridLex-col-4_sm-6_xs-12 mb-20">*/
/*                                         <div class="package-grid-item"> */
/*                                             <a href="#">*/
/*                                                 <div class="image">*/
/*                                                     <img src="{{ asset(course.url) }}" alt="{{course.alt}}" />*/
/*                                                 </div>*/
/*                                                 <div class="content-category">*/
/*                                                     <h6>{{course.intitule}}</h6>*/
/*                                                     <p> {{course.description}}  </p>*/
/*                                                 </div>*/
/*                                             </a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/* */
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                         {% if not categoryFound.cours is empty %}*/
/*                             <div class="pager-wrappper clearfix">*/
/* */
/*                                 <div class="pager-innner">*/
/* */
/*                                     <div class="flex-row flex-align-middle">*/
/* */
/*                                         <div class="flex-column flex-sm-12">*/
/*                                             Resultats de 1 à 4 de 175 */
/*                                         </div>  */
/* */
/*                                         <div class="flex-column flex-sm-12">*/
/*                                             <nav class="pager-right">*/
/*                                                 <ul class="pagination">*/
/*                                                     <li>*/
/*                                                         <a href="#" aria-label="Previous">*/
/*                                                             <span aria-hidden="true">&laquo;</span>*/
/*                                                         </a>*/
/*                                                     </li>*/
/*                                                     <li class="active"><a href="#">1</a></li>*/
/*                                                     <li><a href="#">2</a></li>*/
/*                                                     <li><a href="#">3</a></li>*/
/*                                                     <li><span>...</span></li>*/
/*                                                     <li><a href="#">11</a></li>*/
/*                                                     <li><a href="#">12</a></li>*/
/*                                                     <li><a href="#">13</a></li>*/
/*                                                     <li>*/
/*                                                         <a href="#" aria-label="Next">*/
/*                                                             <span aria-hidden="true">&raquo;</span>*/
/*                                                         </a>*/
/*                                                     </li>*/
/*                                                 </ul>*/
/*                                             </nav>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/* */
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         {% endif %}*/
/* */
/* */
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if not categoryFound %}*/
/*                     <div class="sorting-wrappper">*/
/*                         <div class="sorting-header">*/
/*                             <h3 class="sorting-title uppercase">La catégorie <span style="color:#dd2c00">{{ category }}</span> n'existe pas!!!</h3>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
