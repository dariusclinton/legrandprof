<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_4b6c7f70f34bdbc43a35498a01b56bdac5cee468d3075ef9da27f94122a0a63f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9c813aa41b9f1fee0a2a049a354cb4bc25a685383be263deab959756636f944 = $this->env->getExtension("native_profiler");
        $__internal_e9c813aa41b9f1fee0a2a049a354cb4bc25a685383be263deab959756636f944->enter($__internal_e9c813aa41b9f1fee0a2a049a354cb4bc25a685383be263deab959756636f944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9c813aa41b9f1fee0a2a049a354cb4bc25a685383be263deab959756636f944->leave($__internal_e9c813aa41b9f1fee0a2a049a354cb4bc25a685383be263deab959756636f944_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_47c2079124249ce5aae7c151199468b84ad8ae961d1ff68088193a0b212b9a8e = $this->env->getExtension("native_profiler");
        $__internal_47c2079124249ce5aae7c151199468b84ad8ae961d1ff68088193a0b212b9a8e->enter($__internal_47c2079124249ce5aae7c151199468b84ad8ae961d1ff68088193a0b212b9a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_47c2079124249ce5aae7c151199468b84ad8ae961d1ff68088193a0b212b9a8e->leave($__internal_47c2079124249ce5aae7c151199468b84ad8ae961d1ff68088193a0b212b9a8e_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_1ddc57413e9687d5d4ad839f2504c6a376f87cf7d2ab32809f5b14fd1e5453fd = $this->env->getExtension("native_profiler");
        $__internal_1ddc57413e9687d5d4ad839f2504c6a376f87cf7d2ab32809f5b14fd1e5453fd->enter($__internal_1ddc57413e9687d5d4ad839f2504c6a376f87cf7d2ab32809f5b14fd1e5453fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_1ddc57413e9687d5d4ad839f2504c6a376f87cf7d2ab32809f5b14fd1e5453fd->leave($__internal_1ddc57413e9687d5d4ad839f2504c6a376f87cf7d2ab32809f5b14fd1e5453fd_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_4bd065b95eff0d40635b2944734c2649e665a6a03c8ed243d32ac4802d73202f = $this->env->getExtension("native_profiler");
        $__internal_4bd065b95eff0d40635b2944734c2649e665a6a03c8ed243d32ac4802d73202f->enter($__internal_4bd065b95eff0d40635b2944734c2649e665a6a03c8ed243d32ac4802d73202f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_4bd065b95eff0d40635b2944734c2649e665a6a03c8ed243d32ac4802d73202f->leave($__internal_4bd065b95eff0d40635b2944734c2649e665a6a03c8ed243d32ac4802d73202f_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_a34c3fccd3984ecc83f59430c6567bad3b3f2b5377e2bff7730347a6918847c7 = $this->env->getExtension("native_profiler");
        $__internal_a34c3fccd3984ecc83f59430c6567bad3b3f2b5377e2bff7730347a6918847c7->enter($__internal_a34c3fccd3984ecc83f59430c6567bad3b3f2b5377e2bff7730347a6918847c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"]), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_a34c3fccd3984ecc83f59430c6567bad3b3f2b5377e2bff7730347a6918847c7->leave($__internal_a34c3fccd3984ecc83f59430c6567bad3b3f2b5377e2bff7730347a6918847c7_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_3439fa4caa10c60c3cfc9fd57c7319a8fc14841d646e6376e3a2b5a94992e2b1 = $this->env->getExtension("native_profiler");
        $__internal_3439fa4caa10c60c3cfc9fd57c7319a8fc14841d646e6376e3a2b5a94992e2b1->enter($__internal_3439fa4caa10c60c3cfc9fd57c7319a8fc14841d646e6376e3a2b5a94992e2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_3439fa4caa10c60c3cfc9fd57c7319a8fc14841d646e6376e3a2b5a94992e2b1->leave($__internal_3439fa4caa10c60c3cfc9fd57c7319a8fc14841d646e6376e3a2b5a94992e2b1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ admin.trans(name) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
";
    }
}
