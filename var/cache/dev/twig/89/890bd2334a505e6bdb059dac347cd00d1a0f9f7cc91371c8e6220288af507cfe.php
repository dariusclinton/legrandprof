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
        $__internal_b9245721e6806f8a0cad1a3a41cdb44d777bde7989a117a24f86afe597c2aed0 = $this->env->getExtension("native_profiler");
        $__internal_b9245721e6806f8a0cad1a3a41cdb44d777bde7989a117a24f86afe597c2aed0->enter($__internal_b9245721e6806f8a0cad1a3a41cdb44d777bde7989a117a24f86afe597c2aed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Categorie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9245721e6806f8a0cad1a3a41cdb44d777bde7989a117a24f86afe597c2aed0->leave($__internal_b9245721e6806f8a0cad1a3a41cdb44d777bde7989a117a24f86afe597c2aed0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2c04148eb3bf6c6865e6032c3d2945187eb28d07fc595af8083194b596f1329 = $this->env->getExtension("native_profiler");
        $__internal_d2c04148eb3bf6c6865e6032c3d2945187eb28d07fc595af8083194b596f1329->enter($__internal_d2c04148eb3bf6c6865e6032c3d2945187eb28d07fc595af8083194b596f1329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    categories - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d2c04148eb3bf6c6865e6032c3d2945187eb28d07fc595af8083194b596f1329->leave($__internal_d2c04148eb3bf6c6865e6032c3d2945187eb28d07fc595af8083194b596f1329_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1878595c15609bcaa2eaa01cc244f3789729ca380ba9c7b4ebf88a42151bd2f3 = $this->env->getExtension("native_profiler");
        $__internal_1878595c15609bcaa2eaa01cc244f3789729ca380ba9c7b4ebf88a42151bd2f3->enter($__internal_1878595c15609bcaa2eaa01cc244f3789729ca380ba9c7b4ebf88a42151bd2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($this->getAttribute($context["category"], "image", array()), "imageFile"), "html", null, true);
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
        
        $__internal_1878595c15609bcaa2eaa01cc244f3789729ca380ba9c7b4ebf88a42151bd2f3->leave($__internal_1878595c15609bcaa2eaa01cc244f3789729ca380ba9c7b4ebf88a42151bd2f3_prof);

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
