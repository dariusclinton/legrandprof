<?php

/* LGPCourseBundle:Form:all_search.html.twig */
class __TwigTemplate_9c2c0131373489d07c0153b79b09fe3556ad7e2c545a1ee53ac281145c88775d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a995c352137c459c2e16895c27c81f966590f22448aa11544e60a94528fdb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a995c352137c459c2e16895c27c81f966590f22448aa11544e60a94528fdb21->enter($__internal_4a995c352137c459c2e16895c27c81f966590f22448aa11544e60a94528fdb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Form:all_search.html.twig"));

        // line 1
        echo "<div id=\"accordion\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse1\">Par cours et quartier</a>
            </h4>
        </div>
        <div id=\"collapse1\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
        // line 11
        $this->loadTemplate("LGPCourseBundle:Form:course_quarter_form_search.html.twig", "LGPCourseBundle:Form:all_search.html.twig", 11)->display($context);
        // line 12
        echo "            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse2\">Par nom du prof</a>
            </h4>
        </div>
        <div id=\"collapse2\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
        // line 24
        $this->loadTemplate("LGPCourseBundle:Form:prof_name_form_search.html.twig", "LGPCourseBundle:Form:all_search.html.twig", 24)->display($context);
        // line 25
        echo "            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse3\">Par ville</a>
            </h4>
        </div>
        <div id=\"collapse3\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
        // line 37
        $this->loadTemplate("LGPCourseBundle:Form:city_form_search.html.twig", "LGPCourseBundle:Form:all_search.html.twig", 37)->display($context);
        // line 38
        echo "            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse4\">Par categorie de cours</a>
            </h4>
        </div>
        <div id=\"collapse4\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
        // line 50
        $this->loadTemplate("LGPCourseBundle:Form:category_form_search.html.twig", "LGPCourseBundle:Form:all_search.html.twig", 50)->display($context);
        // line 51
        echo "            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse5\">Par quartier</a>
            </h4>
        </div>
        <div id=\"collapse5\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
        // line 63
        $this->loadTemplate("LGPCourseBundle:Form:quarter_form_search.html.twig", "LGPCourseBundle:Form:all_search.html.twig", 63)->display($context);
        // line 64
        echo "            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse6\">Par cours et ville</a>
            </h4>
        </div>
        <div id=\"collapse6\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
        // line 76
        $this->loadTemplate("LGPCourseBundle:Form:course_city_form_search.html.twig", "LGPCourseBundle:Form:all_search.html.twig", 76)->display($context);
        // line 77
        echo "            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse7\">Par cours</a>
            </h4>
        </div>
        <div id=\"collapse7\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
        // line 89
        $this->loadTemplate("LGPCourseBundle:Form:course_form_search.html.twig", "LGPCourseBundle:Form:all_search.html.twig", 89)->display($context);
        // line 90
        echo "            </div>
        </div>
    </div>
</div>";
        
        $__internal_4a995c352137c459c2e16895c27c81f966590f22448aa11544e60a94528fdb21->leave($__internal_4a995c352137c459c2e16895c27c81f966590f22448aa11544e60a94528fdb21_prof);

    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Form:all_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 90,  130 => 89,  116 => 77,  114 => 76,  100 => 64,  98 => 63,  84 => 51,  82 => 50,  68 => 38,  66 => 37,  52 => 25,  50 => 24,  36 => 12,  34 => 11,  22 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"accordion\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse1\">Par cours et quartier</a>
            </h4>
        </div>
        <div id=\"collapse1\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                {% include 'LGPCourseBundle:Form:course_quarter_form_search.html.twig' %}
            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse2\">Par nom du prof</a>
            </h4>
        </div>
        <div id=\"collapse2\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                {% include 'LGPCourseBundle:Form:prof_name_form_search.html.twig' %}
            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse3\">Par ville</a>
            </h4>
        </div>
        <div id=\"collapse3\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                {% include 'LGPCourseBundle:Form:city_form_search.html.twig' %}
            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse4\">Par categorie de cours</a>
            </h4>
        </div>
        <div id=\"collapse4\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                {% include 'LGPCourseBundle:Form:category_form_search.html.twig' %}
            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse5\">Par quartier</a>
            </h4>
        </div>
        <div id=\"collapse5\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                {% include 'LGPCourseBundle:Form:quarter_form_search.html.twig' %}
            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse6\">Par cours et ville</a>
            </h4>
        </div>
        <div id=\"collapse6\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                {% include 'LGPCourseBundle:Form:course_city_form_search.html.twig' %}
            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                   href=\"#collapse7\">Par cours</a>
            </h4>
        </div>
        <div id=\"collapse7\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                {% include 'LGPCourseBundle:Form:course_form_search.html.twig' %}
            </div>
        </div>
    </div>
</div>";
    }
}
