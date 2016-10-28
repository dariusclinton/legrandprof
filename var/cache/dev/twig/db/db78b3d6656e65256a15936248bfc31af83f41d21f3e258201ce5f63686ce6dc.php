<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_e7baf136cd0446bd38488a41cd219a7c7e71ac2bf3e7c2e78bfa86ac5d9943c1 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbb870593a3d117c74514c92ae592c3195a321d5a18efa4a3598ca9260effd2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb870593a3d117c74514c92ae592c3195a321d5a18efa4a3598ca9260effd2a->enter($__internal_bbb870593a3d117c74514c92ae592c3195a321d5a18efa4a3598ca9260effd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbb870593a3d117c74514c92ae592c3195a321d5a18efa4a3598ca9260effd2a->leave($__internal_bbb870593a3d117c74514c92ae592c3195a321d5a18efa4a3598ca9260effd2a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ebf172e1685d640053a4e71005be52f0ff3e2cbfde1927e15f546f2b6d9e9ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf172e1685d640053a4e71005be52f0ff3e2cbfde1927e15f546f2b6d9e9ed8->enter($__internal_ebf172e1685d640053a4e71005be52f0ff3e2cbfde1927e15f546f2b6d9e9ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ebf172e1685d640053a4e71005be52f0ff3e2cbfde1927e15f546f2b6d9e9ed8->leave($__internal_ebf172e1685d640053a4e71005be52f0ff3e2cbfde1927e15f546f2b6d9e9ed8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
