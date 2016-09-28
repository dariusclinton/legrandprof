<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_935bb69d4c3920eca93e1967010f81cea7f6ca902e035245c3dc26eb7978ca3a extends Twig_Template
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
        $__internal_738df5aaf08ca124f47bd2fd200a7dd3cc1ae679b2a6b57179d36caad2229841 = $this->env->getExtension("native_profiler");
        $__internal_738df5aaf08ca124f47bd2fd200a7dd3cc1ae679b2a6b57179d36caad2229841->enter($__internal_738df5aaf08ca124f47bd2fd200a7dd3cc1ae679b2a6b57179d36caad2229841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_738df5aaf08ca124f47bd2fd200a7dd3cc1ae679b2a6b57179d36caad2229841->leave($__internal_738df5aaf08ca124f47bd2fd200a7dd3cc1ae679b2a6b57179d36caad2229841_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_1bfa001e49e2604bb0d88aa02af6f229f74b28eda8865b7b10fd4704f336b9d4 = $this->env->getExtension("native_profiler");
        $__internal_1bfa001e49e2604bb0d88aa02af6f229f74b28eda8865b7b10fd4704f336b9d4->enter($__internal_1bfa001e49e2604bb0d88aa02af6f229f74b28eda8865b7b10fd4704f336b9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_1bfa001e49e2604bb0d88aa02af6f229f74b28eda8865b7b10fd4704f336b9d4->leave($__internal_1bfa001e49e2604bb0d88aa02af6f229f74b28eda8865b7b10fd4704f336b9d4_prof);

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
