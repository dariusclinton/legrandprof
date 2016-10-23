<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_6851f87bb8023e8e6986416ce4b83207b783746e9904e8056affd92a05b17429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9201939a2aef4ac7279397d73f459866bc4b4cd2278d493064e4daaee7cb256 = $this->env->getExtension("native_profiler");
        $__internal_b9201939a2aef4ac7279397d73f459866bc4b4cd2278d493064e4daaee7cb256->enter($__internal_b9201939a2aef4ac7279397d73f459866bc4b4cd2278d493064e4daaee7cb256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9201939a2aef4ac7279397d73f459866bc4b4cd2278d493064e4daaee7cb256->leave($__internal_b9201939a2aef4ac7279397d73f459866bc4b4cd2278d493064e4daaee7cb256_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_20ddbab3ce2a6a50b884e26b2e5e58e98813ab18c1a7815bc60257e8a7c988c7 = $this->env->getExtension("native_profiler");
        $__internal_20ddbab3ce2a6a50b884e26b2e5e58e98813ab18c1a7815bc60257e8a7c988c7->enter($__internal_20ddbab3ce2a6a50b884e26b2e5e58e98813ab18c1a7815bc60257e8a7c988c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_20ddbab3ce2a6a50b884e26b2e5e58e98813ab18c1a7815bc60257e8a7c988c7->leave($__internal_20ddbab3ce2a6a50b884e26b2e5e58e98813ab18c1a7815bc60257e8a7c988c7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}
