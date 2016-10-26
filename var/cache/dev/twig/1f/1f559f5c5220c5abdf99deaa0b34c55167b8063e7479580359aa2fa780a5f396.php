<?php

/* LGPCourseBundle:Categorie:index.html.twig */
class __TwigTemplate_70acae53df5e1beaec3267452d4abb22bfdcebd1b6cd483290ff891a9836549e extends Twig_Template
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
        $__internal_6b3587e4ac3097f6cefc404ee57b7030c8099766650211ba7e2f520ba7460db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3587e4ac3097f6cefc404ee57b7030c8099766650211ba7e2f520ba7460db9->enter($__internal_6b3587e4ac3097f6cefc404ee57b7030c8099766650211ba7e2f520ba7460db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Categorie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b3587e4ac3097f6cefc404ee57b7030c8099766650211ba7e2f520ba7460db9->leave($__internal_6b3587e4ac3097f6cefc404ee57b7030c8099766650211ba7e2f520ba7460db9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d9bcc9f81b4889c8fbb9aed9d3f6c5cface4d3569896cd5383969a54ad8efe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9bcc9f81b4889c8fbb9aed9d3f6c5cface4d3569896cd5383969a54ad8efe8->enter($__internal_6d9bcc9f81b4889c8fbb9aed9d3f6c5cface4d3569896cd5383969a54ad8efe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    categories - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6d9bcc9f81b4889c8fbb9aed9d3f6c5cface4d3569896cd5383969a54ad8efe8->leave($__internal_6d9bcc9f81b4889c8fbb9aed9d3f6c5cface4d3569896cd5383969a54ad8efe8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a75bdc57be5aa87ce47321c1501eb44c40c1cff482e452193463d61879c8bdf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75bdc57be5aa87ce47321c1501eb44c40c1cff482e452193463d61879c8bdf3->enter($__internal_a75bdc57be5aa87ce47321c1501eb44c40c1cff482e452193463d61879c8bdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
        echo "');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                    <h1 class=\"hero-title\">Catégories</h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_homepage");
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find_category", array("category" => $this->getAttribute($context["category"], "intitule", array()))), "html", null, true);
            echo "\">
                                        <div class=\"image\">
                                            ";
            // line 50
            if ( !(null === $this->getAttribute($context["category"], "image", array()))) {
                // line 51
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($this->getAttribute($context["category"], "image", array()), "imageFile"), "html", null, true);
                echo "\" alt=\" image categorie \" />
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
        
        $__internal_a75bdc57be5aa87ce47321c1501eb44c40c1cff482e452193463d61879c8bdf3->leave($__internal_a75bdc57be5aa87ce47321c1501eb44c40c1cff482e452193463d61879c8bdf3_prof);

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
        return array (  152 => 69,  150 => 68,  145 => 65,  132 => 58,  125 => 54,  122 => 53,  116 => 51,  114 => 50,  109 => 48,  104 => 45,  100 => 44,  75 => 22,  61 => 11,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
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
                                                <img src=\"{{ vich_uploader_asset(category.image, 'imageFile') }}\" alt=\" image categorie \" />
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
