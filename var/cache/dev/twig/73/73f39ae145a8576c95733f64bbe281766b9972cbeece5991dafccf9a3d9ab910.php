<?php

/* @LGPCourse/Course/category.html.twig */
class __TwigTemplate_b551f1ad3fa038638e963a0d7886741a157646ea17421586a152eb9a46fbd15c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPCourse/Course/category.html.twig", 2);
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
        $__internal_1b7ed619555b9bc9e982ac14fbad38e505c7de3df0aa96644f5afd1fa1c33fd6 = $this->env->getExtension("native_profiler");
        $__internal_1b7ed619555b9bc9e982ac14fbad38e505c7de3df0aa96644f5afd1fa1c33fd6->enter($__internal_1b7ed619555b9bc9e982ac14fbad38e505c7de3df0aa96644f5afd1fa1c33fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCourse/Course/category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b7ed619555b9bc9e982ac14fbad38e505c7de3df0aa96644f5afd1fa1c33fd6->leave($__internal_1b7ed619555b9bc9e982ac14fbad38e505c7de3df0aa96644f5afd1fa1c33fd6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_766cbe77b333c1949ff53944de235fa28c8da3638e374a5275a4c2acf2ad1d9e = $this->env->getExtension("native_profiler");
        $__internal_766cbe77b333c1949ff53944de235fa28c8da3638e374a5275a4c2acf2ad1d9e->enter($__internal_766cbe77b333c1949ff53944de235fa28c8da3638e374a5275a4c2acf2ad1d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Categorie ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "category", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_766cbe77b333c1949ff53944de235fa28c8da3638e374a5275a4c2acf2ad1d9e->leave($__internal_766cbe77b333c1949ff53944de235fa28c8da3638e374a5275a4c2acf2ad1d9e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac4aacdad30edb1128219b6d01773b0b6878197de8a46ed26c46f7bae3c77fc5 = $this->env->getExtension("native_profiler");
        $__internal_ac4aacdad30edb1128219b6d01773b0b6878197de8a46ed26c46f7bae3c77fc5->enter($__internal_ac4aacdad30edb1128219b6d01773b0b6878197de8a46ed26c46f7bae3c77fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "category", array())), "html", null, true);
        echo "</h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\" ";
        // line 22
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo " \">Accueil</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("lgp_course_category");
        echo "\">Categories</a></li>
                        <li><span>";
        // line 24
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "category", array())), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 52
            echo "                                        ";
            if ((twig_lower_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "category", array())) != twig_lower_filter($this->env, $this->getAttribute($context["cat"], "intitule", array())))) {
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

                    <div class=\"col-sm-8 col-md-9\">

                        <div class=\"sorting-wrappper\">

                            <div class=\"sorting-header\">
                                <h3 class=\"sorting-title uppercase\">Cours dans la catégorie ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "category", array()), "html", null, true);
        echo "</h3>
                                <p class=\"sorting-lead\">
                                        ";
        // line 79
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courses", array())), "html", null, true);
        echo " Cours
                                </p>
                            </div>
                        </div>
                        <div class=\"GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller\">


                            <div class=\"GridLex-grid-noGutter-equalHeight\">


                                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "courses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 90
            echo "                                    <div class=\"GridLex-col-4_sm-6_xs-12 mb-20\">
                                        <div class=\"package-grid-item\"> 
                                            <a href=\" ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("intitule_cours" => $this->getAttribute($context["course"], "intitule", array()))), "html", null, true);
            echo " \">
                                                <div class=\"image\">
                                                    <img src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["course"], "url", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "alt", array()), "html", null, true);
            echo "\" />
                                                </div>
                                                <div class=\"content-category\">
                                                    <h6>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "intitule", array()), "html", null, true);
            echo "</h6>
                                                    <p> ";
            // line 98
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
        // line 104
        echo "

                            </div>

                        </div>

                       ";
        // line 110
        $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "@LGPCourse/Course/category.html.twig", 110)->display($context);
        // line 111
        echo "

                    </div>

               ";
        // line 122
        echo "
            </div>

        </div>

    </div>

";
        
        $__internal_ac4aacdad30edb1128219b6d01773b0b6878197de8a46ed26c46f7bae3c77fc5->leave($__internal_ac4aacdad30edb1128219b6d01773b0b6878197de8a46ed26c46f7bae3c77fc5_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCourse/Course/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 122,  231 => 111,  229 => 110,  221 => 104,  209 => 98,  205 => 97,  197 => 94,  192 => 92,  188 => 90,  184 => 89,  171 => 79,  166 => 77,  146 => 60,  143 => 59,  137 => 58,  130 => 54,  125 => 53,  122 => 52,  118 => 51,  88 => 24,  84 => 23,  80 => 22,  74 => 19,  63 => 11,  59 => 9,  53 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Categorie {{ params.category }} - {{ parent() }}*/
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
/*                     <h1 class="hero-title">Catégorie {{ params.category | lower }}</h1>*/
/* */
/*                     <ol class="breadcrumb-list">*/
/*                         <li><a href=" {{path('lgp_core_homepage')}} ">Accueil</a></li>*/
/*                         <li><a href="{{path('lgp_course_category')}}">Categories</a></li>*/
/*                         <li><span>{{ params.category | lower }}</span></li>*/
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
/*                                     {% for cat in params.categories %}*/
/*                                         {% if params.category | lower != cat.intitule | lower %}*/
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
/*                     <div class="col-sm-8 col-md-9">*/
/* */
/*                         <div class="sorting-wrappper">*/
/* */
/*                             <div class="sorting-header">*/
/*                                 <h3 class="sorting-title uppercase">Cours dans la catégorie {{ params.category }}</h3>*/
/*                                 <p class="sorting-lead">*/
/*                                         {{params.courses | length}} Cours*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller">*/
/* */
/* */
/*                             <div class="GridLex-grid-noGutter-equalHeight">*/
/* */
/* */
/*                                 {% for course in params.courses %}*/
/*                                     <div class="GridLex-col-4_sm-6_xs-12 mb-20">*/
/*                                         <div class="package-grid-item"> */
/*                                             <a href=" {{path('lgp_course_find_prof',{'intitule_cours' : course.intitule})}} ">*/
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
/*                        {% include 'LGPCourseBundle:Pagination:pagination.html.twig' %}*/
/* */
/* */
/*                     </div>*/
/* */
/*                {#  {% if not categoryFound %}*/
/*                     <div class="sorting-wrappper">*/
/*                         <div class="sorting-header">*/
/*                             <h3 class="sorting-title uppercase">La catégorie <span style="color:#dd2c00">{{ category }}</span> n'existe pas!!!</h3>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %} #}*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
