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
        $__internal_84f1f7053ab339ed0b21cd92ea54f00a54ca4820218d669be630deea8b929efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f1f7053ab339ed0b21cd92ea54f00a54ca4820218d669be630deea8b929efb->enter($__internal_84f1f7053ab339ed0b21cd92ea54f00a54ca4820218d669be630deea8b929efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84f1f7053ab339ed0b21cd92ea54f00a54ca4820218d669be630deea8b929efb->leave($__internal_84f1f7053ab339ed0b21cd92ea54f00a54ca4820218d669be630deea8b929efb_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7be7df7101b21b43c78a62577165d8443eac11e3be68bb05ba3e91f85bf6e20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be7df7101b21b43c78a62577165d8443eac11e3be68bb05ba3e91f85bf6e20a->enter($__internal_7be7df7101b21b43c78a62577165d8443eac11e3be68bb05ba3e91f85bf6e20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_7be7df7101b21b43c78a62577165d8443eac11e3be68bb05ba3e91f85bf6e20a->leave($__internal_7be7df7101b21b43c78a62577165d8443eac11e3be68bb05ba3e91f85bf6e20a_prof);

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
