<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_323bc0e1c5352fcd3498af168dca275361d6d080a20090e981d064d31ff6fcc7 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d74fe7fd5149839ed703ca10f78fa2a54ab1c583d1158d0e49eff9eccda50a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d74fe7fd5149839ed703ca10f78fa2a54ab1c583d1158d0e49eff9eccda50a8->enter($__internal_9d74fe7fd5149839ed703ca10f78fa2a54ab1c583d1158d0e49eff9eccda50a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d74fe7fd5149839ed703ca10f78fa2a54ab1c583d1158d0e49eff9eccda50a8->leave($__internal_9d74fe7fd5149839ed703ca10f78fa2a54ab1c583d1158d0e49eff9eccda50a8_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_ac73d18396f2e13240765b5b7d631800eecb004785d8bdfed118a3e5a787e15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac73d18396f2e13240765b5b7d631800eecb004785d8bdfed118a3e5a787e15f->enter($__internal_ac73d18396f2e13240765b5b7d631800eecb004785d8bdfed118a3e5a787e15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_ac73d18396f2e13240765b5b7d631800eecb004785d8bdfed118a3e5a787e15f->leave($__internal_ac73d18396f2e13240765b5b7d631800eecb004785d8bdfed118a3e5a787e15f_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
";
    }
}
