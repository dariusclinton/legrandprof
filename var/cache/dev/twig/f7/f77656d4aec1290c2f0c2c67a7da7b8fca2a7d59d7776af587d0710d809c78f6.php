<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_189311b2811e49ff004569d778ad1190a7b457ac2d49258255a74586baaba34a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd29ed49a1d391ef08152e6f676160a4d45b6ff19fc41162122118f7b187d671 = $this->env->getExtension("native_profiler");
        $__internal_cd29ed49a1d391ef08152e6f676160a4d45b6ff19fc41162122118f7b187d671->enter($__internal_cd29ed49a1d391ef08152e6f676160a4d45b6ff19fc41162122118f7b187d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_cd29ed49a1d391ef08152e6f676160a4d45b6ff19fc41162122118f7b187d671->leave($__internal_cd29ed49a1d391ef08152e6f676160a4d45b6ff19fc41162122118f7b187d671_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ac39793bc07796b59f5bbe9f3fdd4db3353e5cce739f8d4faa8435901ea5d685 = $this->env->getExtension("native_profiler");
        $__internal_ac39793bc07796b59f5bbe9f3fdd4db3353e5cce739f8d4faa8435901ea5d685->enter($__internal_ac39793bc07796b59f5bbe9f3fdd4db3353e5cce739f8d4faa8435901ea5d685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_ac39793bc07796b59f5bbe9f3fdd4db3353e5cce739f8d4faa8435901ea5d685->leave($__internal_ac39793bc07796b59f5bbe9f3fdd4db3353e5cce739f8d4faa8435901ea5d685_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_1e75c0967245ac0695d6808d1c1e310416782187f3065a4f340c55dd801ff28f = $this->env->getExtension("native_profiler");
        $__internal_1e75c0967245ac0695d6808d1c1e310416782187f3065a4f340c55dd801ff28f->enter($__internal_1e75c0967245ac0695d6808d1c1e310416782187f3065a4f340c55dd801ff28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_1e75c0967245ac0695d6808d1c1e310416782187f3065a4f340c55dd801ff28f->leave($__internal_1e75c0967245ac0695d6808d1c1e310416782187f3065a4f340c55dd801ff28f_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_7efaa3e3a3a488feef85baad58ae44d926a30f5baa446f31d73eefb29483463b = $this->env->getExtension("native_profiler");
        $__internal_7efaa3e3a3a488feef85baad58ae44d926a30f5baa446f31d73eefb29483463b->enter($__internal_7efaa3e3a3a488feef85baad58ae44d926a30f5baa446f31d73eefb29483463b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_7efaa3e3a3a488feef85baad58ae44d926a30f5baa446f31d73eefb29483463b->leave($__internal_7efaa3e3a3a488feef85baad58ae44d926a30f5baa446f31d73eefb29483463b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
";
    }
}
