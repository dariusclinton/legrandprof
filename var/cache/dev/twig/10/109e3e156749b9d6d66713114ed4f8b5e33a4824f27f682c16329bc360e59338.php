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
        $__internal_087938d86504326886ca863181686c048c1a79aaa8bcf5bbe2881d1c588599df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087938d86504326886ca863181686c048c1a79aaa8bcf5bbe2881d1c588599df->enter($__internal_087938d86504326886ca863181686c048c1a79aaa8bcf5bbe2881d1c588599df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_087938d86504326886ca863181686c048c1a79aaa8bcf5bbe2881d1c588599df->leave($__internal_087938d86504326886ca863181686c048c1a79aaa8bcf5bbe2881d1c588599df_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_39c27994df620295acd19af016d6943dc3ebd3faa387313f22424fdfba3a017d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c27994df620295acd19af016d6943dc3ebd3faa387313f22424fdfba3a017d->enter($__internal_39c27994df620295acd19af016d6943dc3ebd3faa387313f22424fdfba3a017d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_39c27994df620295acd19af016d6943dc3ebd3faa387313f22424fdfba3a017d->leave($__internal_39c27994df620295acd19af016d6943dc3ebd3faa387313f22424fdfba3a017d_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_039f0cdd3f6332082a64a78070feb84a5939de022daf97cbb755f249b648e067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039f0cdd3f6332082a64a78070feb84a5939de022daf97cbb755f249b648e067->enter($__internal_039f0cdd3f6332082a64a78070feb84a5939de022daf97cbb755f249b648e067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_039f0cdd3f6332082a64a78070feb84a5939de022daf97cbb755f249b648e067->leave($__internal_039f0cdd3f6332082a64a78070feb84a5939de022daf97cbb755f249b648e067_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_d0075c138b33ca149f428661efd9fc5a6b0fe4bfd4470e7334841553d22094c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0075c138b33ca149f428661efd9fc5a6b0fe4bfd4470e7334841553d22094c1->enter($__internal_d0075c138b33ca149f428661efd9fc5a6b0fe4bfd4470e7334841553d22094c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_d0075c138b33ca149f428661efd9fc5a6b0fe4bfd4470e7334841553d22094c1->leave($__internal_d0075c138b33ca149f428661efd9fc5a6b0fe4bfd4470e7334841553d22094c1_prof);

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
