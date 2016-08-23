<?php

/* @LGPCourse/Course/all_categories.html.twig */
class __TwigTemplate_10181ccf4364d54d2e83c7de6a478b7ca6379f65fba0ff5672035467c9b591b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPCourse/Course/all_categories.html.twig", 2);
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
        $__internal_788817837545606c66b8b7e3112c07e30768bc70f05331e281615a8f11f9739d = $this->env->getExtension("native_profiler");
        $__internal_788817837545606c66b8b7e3112c07e30768bc70f05331e281615a8f11f9739d->enter($__internal_788817837545606c66b8b7e3112c07e30768bc70f05331e281615a8f11f9739d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCourse/Course/all_categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_788817837545606c66b8b7e3112c07e30768bc70f05331e281615a8f11f9739d->leave($__internal_788817837545606c66b8b7e3112c07e30768bc70f05331e281615a8f11f9739d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f112e2cf57e3cc340da350268d81268db5ea37f934814029db15b092eab44b2 = $this->env->getExtension("native_profiler");
        $__internal_1f112e2cf57e3cc340da350268d81268db5ea37f934814029db15b092eab44b2->enter($__internal_1f112e2cf57e3cc340da350268d81268db5ea37f934814029db15b092eab44b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    categories - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1f112e2cf57e3cc340da350268d81268db5ea37f934814029db15b092eab44b2->leave($__internal_1f112e2cf57e3cc340da350268d81268db5ea37f934814029db15b092eab44b2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_95e48c13627d346cb73014e18b1ed8ca3891b59718eb1ba0455d7660c303613b = $this->env->getExtension("native_profiler");
        $__internal_95e48c13627d346cb73014e18b1ed8ca3891b59718eb1ba0455d7660c303613b->enter($__internal_95e48c13627d346cb73014e18b1ed8ca3891b59718eb1ba0455d7660c303613b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                    <h1 class=\"hero-title\">Catégories</h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo "\">Accueil</a></li>
                        <li><span>Catégories</span></li>
                    </ol>

                </div>

            </div>

        </div>

    </div>
    <!-- end Page title -->

    <section class=\"bg-light\">
        <div class=\"content-wrapper\">

            <div class=\"container\">

                <div class=\"GridLex-gap-30-wrappper package-grid-item-wrapper\">

                    <div class=\"GridLex-grid-noGutter-equalHeight\">

                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 45
            echo "
                            <div class=\"GridLex-col-3_sm-6_xs-12 mb-30\">
                                <div class=\"package-grid-item\"> 
                                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_category", array("category" => $this->getAttribute($context["category"], "intitule", array()))), "html", null, true);
            echo "\">
                                        <div class=\"image\">
                                            <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["category"], "url", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "alt", array()), "html", null, true);
            echo "\" />
                                            <div class=\"absolute-in-image\">
                                                <div class=\"duration\"><span>300 Grands profs</span></div>
                                            </div>
                                        </div>
                                        <div class=\"content clearfix\">
                                            <h5>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "intitule", array()), "html", null, true);
            echo "</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
                    </div>
                </div>
               ";
        // line 66
        $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "@LGPCourse/Course/all_categories.html.twig", 66)->display($context);
        // line 67
        echo "            </div>
        </div>
    </section>

";
        
        $__internal_95e48c13627d346cb73014e18b1ed8ca3891b59718eb1ba0455d7660c303613b->leave($__internal_95e48c13627d346cb73014e18b1ed8ca3891b59718eb1ba0455d7660c303613b_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCourse/Course/all_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 67,  143 => 66,  138 => 63,  125 => 56,  114 => 50,  109 => 48,  104 => 45,  100 => 44,  75 => 22,  61 => 11,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     categories - {{ parent() }}*/
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
/*                     <h1 class="hero-title">Catégories</h1>*/
/* */
/*                     <ol class="breadcrumb-list">*/
/*                         <li><a href="{{path('lgp_core_homepage')}}">Accueil</a></li>*/
/*                         <li><span>Catégories</span></li>*/
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
/*     <section class="bg-light">*/
/*         <div class="content-wrapper">*/
/* */
/*             <div class="container">*/
/* */
/*                 <div class="GridLex-gap-30-wrappper package-grid-item-wrapper">*/
/* */
/*                     <div class="GridLex-grid-noGutter-equalHeight">*/
/* */
/*                         {% for category in params.categories %}*/
/* */
/*                             <div class="GridLex-col-3_sm-6_xs-12 mb-30">*/
/*                                 <div class="package-grid-item"> */
/*                                     <a href="{{ path('lgp_course_find_category', {'category': category.intitule}) }}">*/
/*                                         <div class="image">*/
/*                                             <img src="{{ asset(category.url) }}" alt="{{category.alt}}" />*/
/*                                             <div class="absolute-in-image">*/
/*                                                 <div class="duration"><span>300 Grands profs</span></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="content clearfix">*/
/*                                             <h5>{{ category.intitule }}</h5>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         {% endfor %}*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                {% include 'LGPCourseBundle:Pagination:pagination.html.twig' %}*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
