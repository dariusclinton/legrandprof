<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_d4ddbaf6f8f76633aa573a316d372f477e4637e2c373c2f7921cd8e31f768f28 extends Twig_Template
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
        $__internal_24a1d7fcff280bc51cb0b231c2b1013de908dbebb5e88dc829eaf325ba334afb = $this->env->getExtension("native_profiler");
        $__internal_24a1d7fcff280bc51cb0b231c2b1013de908dbebb5e88dc829eaf325ba334afb->enter($__internal_24a1d7fcff280bc51cb0b231c2b1013de908dbebb5e88dc829eaf325ba334afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24a1d7fcff280bc51cb0b231c2b1013de908dbebb5e88dc829eaf325ba334afb->leave($__internal_24a1d7fcff280bc51cb0b231c2b1013de908dbebb5e88dc829eaf325ba334afb_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8f7c930417705b333c24ec9869aa515b1bbe349dc8ffd7d156d14864437ae4ad = $this->env->getExtension("native_profiler");
        $__internal_8f7c930417705b333c24ec9869aa515b1bbe349dc8ffd7d156d14864437ae4ad->enter($__internal_8f7c930417705b333c24ec9869aa515b1bbe349dc8ffd7d156d14864437ae4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_8f7c930417705b333c24ec9869aa515b1bbe349dc8ffd7d156d14864437ae4ad->leave($__internal_8f7c930417705b333c24ec9869aa515b1bbe349dc8ffd7d156d14864437ae4ad_prof);

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
