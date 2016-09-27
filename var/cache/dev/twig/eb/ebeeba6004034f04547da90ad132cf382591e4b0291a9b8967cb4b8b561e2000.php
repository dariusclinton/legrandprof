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
        $__internal_14531399f63be5e68a10dcfc025430fc2bbe5ab197455366e088c0ae68f2ca18 = $this->env->getExtension("native_profiler");
        $__internal_14531399f63be5e68a10dcfc025430fc2bbe5ab197455366e088c0ae68f2ca18->enter($__internal_14531399f63be5e68a10dcfc025430fc2bbe5ab197455366e088c0ae68f2ca18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14531399f63be5e68a10dcfc025430fc2bbe5ab197455366e088c0ae68f2ca18->leave($__internal_14531399f63be5e68a10dcfc025430fc2bbe5ab197455366e088c0ae68f2ca18_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5f627c62c996a8618c1eec6e65c4d323cb41c311ba1852873e8693f6536cbbfa = $this->env->getExtension("native_profiler");
        $__internal_5f627c62c996a8618c1eec6e65c4d323cb41c311ba1852873e8693f6536cbbfa->enter($__internal_5f627c62c996a8618c1eec6e65c4d323cb41c311ba1852873e8693f6536cbbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_5f627c62c996a8618c1eec6e65c4d323cb41c311ba1852873e8693f6536cbbfa->leave($__internal_5f627c62c996a8618c1eec6e65c4d323cb41c311ba1852873e8693f6536cbbfa_prof);

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
