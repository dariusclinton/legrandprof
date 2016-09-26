<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_aafef0b68f6f6e4fa5752c43768233781f60f8b4e8948f2993619b892c962eb1 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0d88f2e83f26c896c28dff40a722dd28ae4e4b8dd5368e5c5306e83e285966c = $this->env->getExtension("native_profiler");
        $__internal_a0d88f2e83f26c896c28dff40a722dd28ae4e4b8dd5368e5c5306e83e285966c->enter($__internal_a0d88f2e83f26c896c28dff40a722dd28ae4e4b8dd5368e5c5306e83e285966c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d88f2e83f26c896c28dff40a722dd28ae4e4b8dd5368e5c5306e83e285966c->leave($__internal_a0d88f2e83f26c896c28dff40a722dd28ae4e4b8dd5368e5c5306e83e285966c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_808a28f8012307fc1a4bc43f6be062479028daf2762f43749d507242f7d87844 = $this->env->getExtension("native_profiler");
        $__internal_808a28f8012307fc1a4bc43f6be062479028daf2762f43749d507242f7d87844->enter($__internal_808a28f8012307fc1a4bc43f6be062479028daf2762f43749d507242f7d87844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_808a28f8012307fc1a4bc43f6be062479028daf2762f43749d507242f7d87844->leave($__internal_808a28f8012307fc1a4bc43f6be062479028daf2762f43749d507242f7d87844_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
";
    }
}
