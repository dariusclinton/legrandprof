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
        $__internal_d828d348382814912d6e1667d71dfe9852fea033df38d077c1e22e09b06f7d82 = $this->env->getExtension("native_profiler");
        $__internal_d828d348382814912d6e1667d71dfe9852fea033df38d077c1e22e09b06f7d82->enter($__internal_d828d348382814912d6e1667d71dfe9852fea033df38d077c1e22e09b06f7d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCourse/Course/all_categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d828d348382814912d6e1667d71dfe9852fea033df38d077c1e22e09b06f7d82->leave($__internal_d828d348382814912d6e1667d71dfe9852fea033df38d077c1e22e09b06f7d82_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bf8e2c321e713df0f2688c3fe8985396040d1e1a277d79fcc24a62e6efe4856 = $this->env->getExtension("native_profiler");
        $__internal_4bf8e2c321e713df0f2688c3fe8985396040d1e1a277d79fcc24a62e6efe4856->enter($__internal_4bf8e2c321e713df0f2688c3fe8985396040d1e1a277d79fcc24a62e6efe4856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    categories - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4bf8e2c321e713df0f2688c3fe8985396040d1e1a277d79fcc24a62e6efe4856->leave($__internal_4bf8e2c321e713df0f2688c3fe8985396040d1e1a277d79fcc24a62e6efe4856_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_82547ebf16ae3eafc13f55adbefb133b2f57980f461fcbe9c52c5498069979da = $this->env->getExtension("native_profiler");
        $__internal_82547ebf16ae3eafc13f55adbefb133b2f57980f461fcbe9c52c5498069979da->enter($__internal_82547ebf16ae3eafc13f55adbefb133b2f57980f461fcbe9c52c5498069979da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"))) == 0)) {
            // line 67
            echo "                    <div class=\"pager-wrappper clearfix\" style=\"margin-top:40px\">

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
                    ";
        }
        // line 104
        echo "                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_82547ebf16ae3eafc13f55adbefb133b2f57980f461fcbe9c52c5498069979da->leave($__internal_82547ebf16ae3eafc13f55adbefb133b2f57980f461fcbe9c52c5498069979da_prof);

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
        return array (  184 => 104,  145 => 67,  143 => 66,  138 => 63,  125 => 56,  114 => 50,  109 => 48,  104 => 45,  100 => 44,  75 => 22,  61 => 11,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
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
/*                         {% for category in categories %}*/
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
/*                 {% if categories | length == 0 %}*/
/*                     <div class="pager-wrappper clearfix" style="margin-top:40px">*/
/* */
/*                         <div class="pager-innner">*/
/* */
/*                             <div class="flex-row flex-align-middle">*/
/* */
/*                                 <div class="flex-column flex-sm-12">*/
/*                                     Resultats de 1 à 4 de 175 */
/*                                 </div>  */
/* */
/*                                 <div class="flex-column flex-sm-12">*/
/*                                     <nav class="pager-right">*/
/*                                         <ul class="pagination">*/
/*                                             <li>*/
/*                                                 <a href="#" aria-label="Previous">*/
/*                                                     <span aria-hidden="true">&laquo;</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li class="active"><a href="#">1</a></li>*/
/*                                             <li><a href="#">2</a></li>*/
/*                                             <li><a href="#">3</a></li>*/
/*                                             <li><span>...</span></li>*/
/*                                             <li><a href="#">11</a></li>*/
/*                                             <li><a href="#">12</a></li>*/
/*                                             <li><a href="#">13</a></li>*/
/*                                             <li>*/
/*                                                 <a href="#" aria-label="Next">*/
/*                                                     <span aria-hidden="true">&raquo;</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                         </ul>*/
/*                                     </nav>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
