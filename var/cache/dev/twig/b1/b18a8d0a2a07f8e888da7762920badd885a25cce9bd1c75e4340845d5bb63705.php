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
        $__internal_31ca7816f33982a7b1688380dfcb4bb4f0dee3de0b3d2f1bce81d456079b74cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ca7816f33982a7b1688380dfcb4bb4f0dee3de0b3d2f1bce81d456079b74cc->enter($__internal_31ca7816f33982a7b1688380dfcb4bb4f0dee3de0b3d2f1bce81d456079b74cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31ca7816f33982a7b1688380dfcb4bb4f0dee3de0b3d2f1bce81d456079b74cc->leave($__internal_31ca7816f33982a7b1688380dfcb4bb4f0dee3de0b3d2f1bce81d456079b74cc_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_9df8a23715395f879b9a7c0b3d5d497493febf71390d7a2f4e8ddd2f611b7243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df8a23715395f879b9a7c0b3d5d497493febf71390d7a2f4e8ddd2f611b7243->enter($__internal_9df8a23715395f879b9a7c0b3d5d497493febf71390d7a2f4e8ddd2f611b7243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_9df8a23715395f879b9a7c0b3d5d497493febf71390d7a2f4e8ddd2f611b7243->leave($__internal_9df8a23715395f879b9a7c0b3d5d497493febf71390d7a2f4e8ddd2f611b7243_prof);

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
