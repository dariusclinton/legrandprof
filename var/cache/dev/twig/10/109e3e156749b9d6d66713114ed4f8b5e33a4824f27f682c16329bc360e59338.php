<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_4c6cbcc6d22838621021c07e311fb2be9aa1181702e3bf67e7d7a882f090e10c extends Twig_Template
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
        $__internal_e1f5d648f3ae92c7340b01c97a2af267bc4714ff8f577e50957726ebfe3b2148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f5d648f3ae92c7340b01c97a2af267bc4714ff8f577e50957726ebfe3b2148->enter($__internal_e1f5d648f3ae92c7340b01c97a2af267bc4714ff8f577e50957726ebfe3b2148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_e1f5d648f3ae92c7340b01c97a2af267bc4714ff8f577e50957726ebfe3b2148->leave($__internal_e1f5d648f3ae92c7340b01c97a2af267bc4714ff8f577e50957726ebfe3b2148_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2f7ea0f2a0ee86b7ba63b1b6da0f701746d91459174de9dc3345dc23a99c995f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7ea0f2a0ee86b7ba63b1b6da0f701746d91459174de9dc3345dc23a99c995f->enter($__internal_2f7ea0f2a0ee86b7ba63b1b6da0f701746d91459174de9dc3345dc23a99c995f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_2f7ea0f2a0ee86b7ba63b1b6da0f701746d91459174de9dc3345dc23a99c995f->leave($__internal_2f7ea0f2a0ee86b7ba63b1b6da0f701746d91459174de9dc3345dc23a99c995f_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_1a48ea82684ddbe8a0938f58b2c4f201649914397db647195490a12003688957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a48ea82684ddbe8a0938f58b2c4f201649914397db647195490a12003688957->enter($__internal_1a48ea82684ddbe8a0938f58b2c4f201649914397db647195490a12003688957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_1a48ea82684ddbe8a0938f58b2c4f201649914397db647195490a12003688957->leave($__internal_1a48ea82684ddbe8a0938f58b2c4f201649914397db647195490a12003688957_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_8039facf43576a12b344037fa64399c00dd0584faa0943b1c376aaca1c169d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8039facf43576a12b344037fa64399c00dd0584faa0943b1c376aaca1c169d1c->enter($__internal_8039facf43576a12b344037fa64399c00dd0584faa0943b1c376aaca1c169d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_8039facf43576a12b344037fa64399c00dd0584faa0943b1c376aaca1c169d1c->leave($__internal_8039facf43576a12b344037fa64399c00dd0584faa0943b1c376aaca1c169d1c_prof);

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
