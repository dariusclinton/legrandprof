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
        $__internal_7435a4eb5360356a60f22305916d45c21d1f8847baf251f0d75cde2d65b0cabf = $this->env->getExtension("native_profiler");
        $__internal_7435a4eb5360356a60f22305916d45c21d1f8847baf251f0d75cde2d65b0cabf->enter($__internal_7435a4eb5360356a60f22305916d45c21d1f8847baf251f0d75cde2d65b0cabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

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
        
        $__internal_7435a4eb5360356a60f22305916d45c21d1f8847baf251f0d75cde2d65b0cabf->leave($__internal_7435a4eb5360356a60f22305916d45c21d1f8847baf251f0d75cde2d65b0cabf_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_aa107a77ab17358e75958e3cd816bb756b2d1dc0f686af2eca8918abda2a6558 = $this->env->getExtension("native_profiler");
        $__internal_aa107a77ab17358e75958e3cd816bb756b2d1dc0f686af2eca8918abda2a6558->enter($__internal_aa107a77ab17358e75958e3cd816bb756b2d1dc0f686af2eca8918abda2a6558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_aa107a77ab17358e75958e3cd816bb756b2d1dc0f686af2eca8918abda2a6558->leave($__internal_aa107a77ab17358e75958e3cd816bb756b2d1dc0f686af2eca8918abda2a6558_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_7188855dd4ed778fea7d2749c9248fc63fe109df2b7d70d7241c989e8176f369 = $this->env->getExtension("native_profiler");
        $__internal_7188855dd4ed778fea7d2749c9248fc63fe109df2b7d70d7241c989e8176f369->enter($__internal_7188855dd4ed778fea7d2749c9248fc63fe109df2b7d70d7241c989e8176f369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_7188855dd4ed778fea7d2749c9248fc63fe109df2b7d70d7241c989e8176f369->leave($__internal_7188855dd4ed778fea7d2749c9248fc63fe109df2b7d70d7241c989e8176f369_prof);

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
