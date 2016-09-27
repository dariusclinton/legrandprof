<?php

/* LGPCourseBundle:Categorie:course_list.html.twig */
class __TwigTemplate_99f912b5856255cddeea7c2a89e2a764ede41373132952874ae3bd705b0af1ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Categorie:course_list.html.twig", 2);
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
        $__internal_78a47785622a063c643fc1f153ccdff44258228189c551862683225c9c77f540 = $this->env->getExtension("native_profiler");
        $__internal_78a47785622a063c643fc1f153ccdff44258228189c551862683225c9c77f540->enter($__internal_78a47785622a063c643fc1f153ccdff44258228189c551862683225c9c77f540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Categorie:course_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78a47785622a063c643fc1f153ccdff44258228189c551862683225c9c77f540->leave($__internal_78a47785622a063c643fc1f153ccdff44258228189c551862683225c9c77f540_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a071c8e29707f8828b2747c3dedbd714556242da5e9fc3977bce173b8c2cded = $this->env->getExtension("native_profiler");
        $__internal_2a071c8e29707f8828b2747c3dedbd714556242da5e9fc3977bce173b8c2cded->enter($__internal_2a071c8e29707f8828b2747c3dedbd714556242da5e9fc3977bce173b8c2cded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Categorie-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "category", array()), "slug", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2a071c8e29707f8828b2747c3dedbd714556242da5e9fc3977bce173b8c2cded->leave($__internal_2a071c8e29707f8828b2747c3dedbd714556242da5e9fc3977bce173b8c2cded_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_df0166e53651392ddfa7e415620d5242c88d11e74385f188a4a83d70720f0674 = $this->env->getExtension("native_profiler");
        $__internal_df0166e53651392ddfa7e415620d5242c88d11e74385f188a4a83d70720f0674->enter($__internal_df0166e53651392ddfa7e415620d5242c88d11e74385f188a4a83d70720f0674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "category", array()), "intitule", array())), "html", null, true);
        echo "</h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\" ";
        // line 22
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo " \">Accueil</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("lgp_course_categories");
        echo "\">Categories</a></li>
                        <li><span>";
        // line 24
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "category", array()), "intitule", array())), "html", null, true);
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
            if ((twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "category", array()), "intitule", array())) != twig_lower_filter($this->env, $this->getAttribute($context["cat"], "intitule", array())))) {
                // line 53
                echo "                                            <li><a href=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_category", array("slug" => $this->getAttribute($context["cat"], "slug", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("lgp_course_categories");
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "category", array()), "intitule", array()), "html", null, true);
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
            echo "                                <div class=\"GridLex-col-4_sm-6_xs-12 mb-20\">
                                    <div class=\"package-grid-item\"> 
                                        <a href=\" ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($context["course"], "slug", array()))), "html", null, true);
            echo " \">
                                            <div class=\"image\">
                                                ";
            // line 94
            if ( !(null === $this->getAttribute($context["course"], "image", array()))) {
                // line 95
                echo "                                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["course"], "image", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["course"], "image", array()), "imageName", array()), "html", null, true);
                echo "\" />
                                                ";
            }
            // line 97
            echo "                                            </div>
                                            <div class=\"content-category\">
                                                <h6>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "intitule", array()), "html", null, true);
            echo "</h6>
                                                <p> ";
            // line 100
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
        // line 106
        echo "

                        </div>

                    </div>

                    ";
        // line 112
        $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "LGPCourseBundle:Categorie:course_list.html.twig", 112)->display($context);
        // line 113
        echo "

                </div>

                ";
        // line 124
        echo "
            </div>

        </div>

    </div>

";
        
        $__internal_df0166e53651392ddfa7e415620d5242c88d11e74385f188a4a83d70720f0674->leave($__internal_df0166e53651392ddfa7e415620d5242c88d11e74385f188a4a83d70720f0674_prof);

    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Categorie:course_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 124,  237 => 113,  235 => 112,  227 => 106,  215 => 100,  211 => 99,  207 => 97,  199 => 95,  197 => 94,  192 => 92,  188 => 90,  184 => 89,  171 => 79,  166 => 77,  146 => 60,  143 => 59,  137 => 58,  130 => 54,  125 => 53,  122 => 52,  118 => 51,  88 => 24,  84 => 23,  80 => 22,  74 => 19,  63 => 11,  59 => 9,  53 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    Categorie-{{ params.category.slug }} - {{ parent() }}
{% endblock %}

{% block body %}

    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                    <h1 class=\"hero-title\">Catégorie {{ params.category.intitule | lower }}</h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\" {{path('lgp_core_homepage')}} \">Accueil</a></li>
                        <li><a href=\"{{path('lgp_course_categories')}}\">Categories</a></li>
                        <li><span>{{ params.category.intitule | lower }}</span></li>
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
                                    {% for cat in params.categories %}
                                        {% if params.category.intitule | lower != cat.intitule | lower %}
                                            <li><a href=\" {{path('lgp_course_find_category' , {'slug':cat.slug}) }} \">
                                                    {{cat.intitule}}
                                                </a>
                                            </li>
                                        {% endif %}
                                    {% endfor %}
                                    <li></li>
                                    <li><a href=\" {{path('lgp_course_categories')}} \" title=\"\">voir toutes les categories</a></li>
                                </ul>
                            </div>


                        </div>

                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">

                    <div class=\"sorting-wrappper\">

                        <div class=\"sorting-header\">
                            <h3 class=\"sorting-title uppercase\">Cours dans la catégorie {{ params.category.intitule }}</h3>
                            <p class=\"sorting-lead\">
                                {{params.courses | length}} Cours
                            </p>
                        </div>
                    </div>
                    <div class=\"GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller\">


                        <div class=\"GridLex-grid-noGutter-equalHeight\">


                            {% for course in params.courses %}
                                <div class=\"GridLex-col-4_sm-6_xs-12 mb-20\">
                                    <div class=\"package-grid-item\"> 
                                        <a href=\" {{path('lgp_course_find_prof',{'slug' : course.slug})}} \">
                                            <div class=\"image\">
                                                {% if course.image is not null %}
                                                    <img src=\"{{ asset(course.image.webPath) }}\" alt=\"{{course.image.imageName}}\" />
                                                {% endif %}
                                            </div>
                                            <div class=\"content-category\">
                                                <h6>{{course.intitule}}</h6>
                                                <p> {{course.description}}  </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            {% endfor %}


                        </div>

                    </div>

                    {% include 'LGPCourseBundle:Pagination:pagination.html.twig' %}


                </div>

                {#  {% if not categoryFound %}
                     <div class=\"sorting-wrappper\">
                         <div class=\"sorting-header\">
                             <h3 class=\"sorting-title uppercase\">La catégorie <span style=\"color:#dd2c00\">{{ category }}</span> n'existe pas!!!</h3>
                         </div>
                     </div>
                 {% endif %} #}

            </div>

        </div>

    </div>

{% endblock %}";
    }
}
