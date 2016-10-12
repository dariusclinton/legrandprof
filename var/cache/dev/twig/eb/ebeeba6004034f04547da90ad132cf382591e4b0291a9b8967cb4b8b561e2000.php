<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_3039b44ce4e886149e84b1413af9fd873b0600b0d21c706d6a06adf0e88a6546 extends Twig_Template
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
        $__internal_4ba71852810c414cf694dd25b0799aae42d5ec50a484b60cd6cffa0afbcc261b = $this->env->getExtension("native_profiler");
        $__internal_4ba71852810c414cf694dd25b0799aae42d5ec50a484b60cd6cffa0afbcc261b->enter($__internal_4ba71852810c414cf694dd25b0799aae42d5ec50a484b60cd6cffa0afbcc261b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba71852810c414cf694dd25b0799aae42d5ec50a484b60cd6cffa0afbcc261b->leave($__internal_4ba71852810c414cf694dd25b0799aae42d5ec50a484b60cd6cffa0afbcc261b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2be024edfc04eed395a2563a71f73f40c28f666f4d6a1fbca8b7be231f519a38 = $this->env->getExtension("native_profiler");
        $__internal_2be024edfc04eed395a2563a71f73f40c28f666f4d6a1fbca8b7be231f519a38->enter($__internal_2be024edfc04eed395a2563a71f73f40c28f666f4d6a1fbca8b7be231f519a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_2be024edfc04eed395a2563a71f73f40c28f666f4d6a1fbca8b7be231f519a38->leave($__internal_2be024edfc04eed395a2563a71f73f40c28f666f4d6a1fbca8b7be231f519a38_prof);

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
