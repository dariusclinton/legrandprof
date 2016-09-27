<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_1469c304f6a2810cf5ea812b0633d8244f83c5fd7fd293b4ad249627f7b5d93b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1216cb196601f8a14a78ef4560f1c6f9df7fe8f76f4d33e4c0b5df1499ac3f7 = $this->env->getExtension("native_profiler");
        $__internal_c1216cb196601f8a14a78ef4560f1c6f9df7fe8f76f4d33e4c0b5df1499ac3f7->enter($__internal_c1216cb196601f8a14a78ef4560f1c6f9df7fe8f76f4d33e4c0b5df1499ac3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_c1216cb196601f8a14a78ef4560f1c6f9df7fe8f76f4d33e4c0b5df1499ac3f7->leave($__internal_c1216cb196601f8a14a78ef4560f1c6f9df7fe8f76f4d33e4c0b5df1499ac3f7_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_0319792fd7e12180278551a6aee413e9a372dda12d66a605f0d3097e02691b5f = $this->env->getExtension("native_profiler");
        $__internal_0319792fd7e12180278551a6aee413e9a372dda12d66a605f0d3097e02691b5f->enter($__internal_0319792fd7e12180278551a6aee413e9a372dda12d66a605f0d3097e02691b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_0319792fd7e12180278551a6aee413e9a372dda12d66a605f0d3097e02691b5f->leave($__internal_0319792fd7e12180278551a6aee413e9a372dda12d66a605f0d3097e02691b5f_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_44740a0e4d861dade17d0ab7553b44b67383912b510c01c92da1afef231ed034 = $this->env->getExtension("native_profiler");
        $__internal_44740a0e4d861dade17d0ab7553b44b67383912b510c01c92da1afef231ed034->enter($__internal_44740a0e4d861dade17d0ab7553b44b67383912b510c01c92da1afef231ed034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_44740a0e4d861dade17d0ab7553b44b67383912b510c01c92da1afef231ed034->leave($__internal_44740a0e4d861dade17d0ab7553b44b67383912b510c01c92da1afef231ed034_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
";
    }
}
