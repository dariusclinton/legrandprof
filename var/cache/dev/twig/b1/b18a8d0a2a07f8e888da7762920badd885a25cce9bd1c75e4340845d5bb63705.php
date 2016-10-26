<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_9878004539a57d10cdb09938de2b726af9b9b4ea6f088ecf0b675240d849537f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_784ae236cace50b4db2312bc073327c32a41b575e444870d09294d8c2e05dc8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784ae236cace50b4db2312bc073327c32a41b575e444870d09294d8c2e05dc8b->enter($__internal_784ae236cace50b4db2312bc073327c32a41b575e444870d09294d8c2e05dc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_784ae236cace50b4db2312bc073327c32a41b575e444870d09294d8c2e05dc8b->leave($__internal_784ae236cace50b4db2312bc073327c32a41b575e444870d09294d8c2e05dc8b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_3a795818ff6312ca7a16b040d7aaeab9c46ca9606a23a4a36b1a1adc4fc49c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a795818ff6312ca7a16b040d7aaeab9c46ca9606a23a4a36b1a1adc4fc49c48->enter($__internal_3a795818ff6312ca7a16b040d7aaeab9c46ca9606a23a4a36b1a1adc4fc49c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_3a795818ff6312ca7a16b040d7aaeab9c46ca9606a23a4a36b1a1adc4fc49c48->leave($__internal_3a795818ff6312ca7a16b040d7aaeab9c46ca9606a23a4a36b1a1adc4fc49c48_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    {{ content|raw }}
{% endblock %}
";
    }
}
