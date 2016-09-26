<?php

/* LGPCourseBundle:Categorie:index.html.twig */
class __TwigTemplate_48e6f113271474f1a6194e50226305bf089906b1f7a57452bfa89837ea4ed49e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Categorie:index.html.twig", 2);
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
        $__internal_5785b099fff4c27954ff822f4437b8d77426e22ff35c20ee702f0afa8f18690d = $this->env->getExtension("native_profiler");
        $__internal_5785b099fff4c27954ff822f4437b8d77426e22ff35c20ee702f0afa8f18690d->enter($__internal_5785b099fff4c27954ff822f4437b8d77426e22ff35c20ee702f0afa8f18690d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Categorie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5785b099fff4c27954ff822f4437b8d77426e22ff35c20ee702f0afa8f18690d->leave($__internal_5785b099fff4c27954ff822f4437b8d77426e22ff35c20ee702f0afa8f18690d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c34d3aa1ed56e21bce234d996d7689ef312216627d1747e3539f3c889a4009a = $this->env->getExtension("native_profiler");
        $__internal_8c34d3aa1ed56e21bce234d996d7689ef312216627d1747e3539f3c889a4009a->enter($__internal_8c34d3aa1ed56e21bce234d996d7689ef312216627d1747e3539f3c889a4009a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    categories - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8c34d3aa1ed56e21bce234d996d7689ef312216627d1747e3539f3c889a4009a->leave($__internal_8c34d3aa1ed56e21bce234d996d7689ef312216627d1747e3539f3c889a4009a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3d969d8a6e2542d44dc73c7c467e97150efe573d451f714e6ee5e0847a3dae5 = $this->env->getExtension("native_profiler");
        $__internal_d3d969d8a6e2542d44dc73c7c467e97150efe573d451f714e6ee5e0847a3dae5->enter($__internal_d3d969d8a6e2542d44dc73c7c467e97150efe573d451f714e6ee5e0847a3dae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                            ";
            // line 50
            if ( !(null === $this->getAttribute($context["category"], "image", array()))) {
                // line 51
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["category"], "image", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["category"], "image", array()), "imageName", array()), "html", null, true);
                echo "\" />
                                            ";
            }
            // line 53
            echo "                                            <div class=\"absolute-in-image\">
                                                <div class=\"duration\"><span>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "categoryRep", array()), "getcountProfsByCategory", array(0 => $this->getAttribute($context["category"], "intitule", array())), "method"), "html", null, true);
            echo " Grands profs</span></div>
                                            </div>
                                        </div>
                                        <div class=\"content clearfix\">
                                            <h5>";
            // line 58
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
        // line 65
        echo "
                    </div>
                </div>
                ";
        // line 68
        $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "LGPCourseBundle:Categorie:index.html.twig", 68)->display($context);
        // line 69
        echo "            </div>
        </div>
    </section>

";
        
        $__internal_d3d969d8a6e2542d44dc73c7c467e97150efe573d451f714e6ee5e0847a3dae5->leave($__internal_d3d969d8a6e2542d44dc73c7c467e97150efe573d451f714e6ee5e0847a3dae5_prof);

    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 69,  152 => 68,  147 => 65,  134 => 58,  127 => 54,  124 => 53,  116 => 51,  114 => 50,  109 => 48,  104 => 45,  100 => 44,  75 => 22,  61 => 11,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    categories - {{ parent() }}
{% endblock %}

{% block body %}

    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                    <h1 class=\"hero-title\">Catégories</h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\"{{path('lgp_core_homepage')}}\">Accueil</a></li>
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

                        {% for category in params.categories %}

                            <div class=\"GridLex-col-3_sm-6_xs-12 mb-30\">
                                <div class=\"package-grid-item\"> 
                                    <a href=\"{{ path('lgp_course_find_category', {'category': category.intitule}) }}\">
                                        <div class=\"image\">
                                            {% if category.image is not null %}
                                                <img src=\"{{ asset(category.image.webPath) }}\" alt=\"{{category.image.imageName}}\" />
                                            {% endif %}
                                            <div class=\"absolute-in-image\">
                                                <div class=\"duration\"><span>{{params.categoryRep.getcountProfsByCategory(category.intitule)}} Grands profs</span></div>
                                            </div>
                                        </div>
                                        <div class=\"content clearfix\">
                                            <h5>{{ category.intitule }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        {% endfor %}

                    </div>
                </div>
                {% include 'LGPCourseBundle:Pagination:pagination.html.twig' %}
            </div>
        </div>
    </section>

{% endblock %}";
    }
}
