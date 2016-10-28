<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_81b8dbb66b628ad5ac45dacc48deaba909881c7e17fd4e6b7d18f46429addaf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1372db91c83e43f12de18ef25a73cfc74c7dfe5f27e656c3aff5f9b71917c5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1372db91c83e43f12de18ef25a73cfc74c7dfe5f27e656c3aff5f9b71917c5b4->enter($__internal_1372db91c83e43f12de18ef25a73cfc74c7dfe5f27e656c3aff5f9b71917c5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1372db91c83e43f12de18ef25a73cfc74c7dfe5f27e656c3aff5f9b71917c5b4->leave($__internal_1372db91c83e43f12de18ef25a73cfc74c7dfe5f27e656c3aff5f9b71917c5b4_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_6b6373934472f81c4da90126cc90e9a11a6bcf9d98ce0898aed9c6ce05ce0fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6373934472f81c4da90126cc90e9a11a6bcf9d98ce0898aed9c6ce05ce0fe1->enter($__internal_6b6373934472f81c4da90126cc90e9a11a6bcf9d98ce0898aed9c6ce05ce0fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_6b6373934472f81c4da90126cc90e9a11a6bcf9d98ce0898aed9c6ce05ce0fe1->leave($__internal_6b6373934472f81c4da90126cc90e9a11a6bcf9d98ce0898aed9c6ce05ce0fe1_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
";
    }
}
