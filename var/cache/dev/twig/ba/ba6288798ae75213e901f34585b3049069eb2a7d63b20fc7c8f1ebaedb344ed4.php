<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_44dfe22a17e6d814661e7475c75febe514bedd8016f6ce0e5db0687cfa6dad37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9161a12e3d01d50e7dd839cb6d656bf4a72ddfbaeca0e87c07657141d5349bc = $this->env->getExtension("native_profiler");
        $__internal_d9161a12e3d01d50e7dd839cb6d656bf4a72ddfbaeca0e87c07657141d5349bc->enter($__internal_d9161a12e3d01d50e7dd839cb6d656bf4a72ddfbaeca0e87c07657141d5349bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_d9161a12e3d01d50e7dd839cb6d656bf4a72ddfbaeca0e87c07657141d5349bc->leave($__internal_d9161a12e3d01d50e7dd839cb6d656bf4a72ddfbaeca0e87c07657141d5349bc_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_e3067f95a203b6da60c22013ddcca8eb2ad7bf50575771ebb14739782f536ecc = $this->env->getExtension("native_profiler");
        $__internal_e3067f95a203b6da60c22013ddcca8eb2ad7bf50575771ebb14739782f536ecc->enter($__internal_e3067f95a203b6da60c22013ddcca8eb2ad7bf50575771ebb14739782f536ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = trim($this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim($this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "


    ";
        // line 24
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 25
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 31
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 32
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 34
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                            </div>
                        ";
            }
            // line 38
            echo "
                        ";
            // line 39
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 40
                echo "                            ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                        ";
            }
            // line 42
            echo "
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 48
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 49
                echo "             <div class=\"row\">
                 ";
                // line 50
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
             </div>
        ";
            }
            // line 53
            echo "
        <div class=\"row\">
            ";
            // line 55
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
        </div>
    </div>
     ";
        }
        // line 59
        echo "
";
        
        $__internal_e3067f95a203b6da60c22013ddcca8eb2ad7bf50575771ebb14739782f536ecc->leave($__internal_e3067f95a203b6da60c22013ddcca8eb2ad7bf50575771ebb14739782f536ecc_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_b9e3a0d5db4618bed438a128199379e6fb8ee1952873f5900c1447f10f388b65 = $this->env->getExtension("native_profiler");
        $__internal_b9e3a0d5db4618bed438a128199379e6fb8ee1952873f5900c1447f10f388b65->enter($__internal_b9e3a0d5db4618bed438a128199379e6fb8ee1952873f5900c1447f10f388b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_b9e3a0d5db4618bed438a128199379e6fb8ee1952873f5900c1447f10f388b65->leave($__internal_b9e3a0d5db4618bed438a128199379e6fb8ee1952873f5900c1447f10f388b65_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_54a1c1ad4ed7383b1fba48abd986af17e3d4cebfa3b8007b118b9f05c3f1b8a9 = $this->env->getExtension("native_profiler");
        $__internal_54a1c1ad4ed7383b1fba48abd986af17e3d4cebfa3b8007b118b9f05c3f1b8a9->enter($__internal_54a1c1ad4ed7383b1fba48abd986af17e3d4cebfa3b8007b118b9f05c3f1b8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_54a1c1ad4ed7383b1fba48abd986af17e3d4cebfa3b8007b118b9f05c3f1b8a9->leave($__internal_54a1c1ad4ed7383b1fba48abd986af17e3d4cebfa3b8007b118b9f05c3f1b8a9_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_394679fe365c4619a3a377cbe3aebc9ad66a4eb7135e53ec9c24130deacdb2d7 = $this->env->getExtension("native_profiler");
        $__internal_394679fe365c4619a3a377cbe3aebc9ad66a4eb7135e53ec9c24130deacdb2d7->enter($__internal_394679fe365c4619a3a377cbe3aebc9ad66a4eb7135e53ec9c24130deacdb2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_394679fe365c4619a3a377cbe3aebc9ad66a4eb7135e53ec9c24130deacdb2d7->leave($__internal_394679fe365c4619a3a377cbe3aebc9ad66a4eb7135e53ec9c24130deacdb2d7_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_a74bfb917c3c11aff76c429d3c2006986a8842bdfe9abdb5e00ce1d8ab649176 = $this->env->getExtension("native_profiler");
        $__internal_a74bfb917c3c11aff76c429d3c2006986a8842bdfe9abdb5e00ce1d8ab649176->enter($__internal_a74bfb917c3c11aff76c429d3c2006986a8842bdfe9abdb5e00ce1d8ab649176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_a74bfb917c3c11aff76c429d3c2006986a8842bdfe9abdb5e00ce1d8ab649176->leave($__internal_a74bfb917c3c11aff76c429d3c2006986a8842bdfe9abdb5e00ce1d8ab649176_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 20,  179 => 19,  168 => 18,  157 => 17,  149 => 59,  142 => 55,  138 => 53,  132 => 50,  129 => 49,  127 => 48,  119 => 42,  113 => 40,  111 => 39,  108 => 38,  104 => 36,  89 => 34,  85 => 33,  82 => 32,  80 => 31,  72 => 25,  70 => 24,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  54 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  30 => 12,  27 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block content %}
    {% set _list_table           = block('list_table')|trim %}
    {% set _list_filters         = block('list_filters')|trim %}
    {% set _list_filters_actions = block('list_filters_actions') %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}



    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}

                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
             <div class=\"row\">
                 {{ _list_filters|raw }}
             </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
     {% endif %}

{% endblock %}
";
    }
}
