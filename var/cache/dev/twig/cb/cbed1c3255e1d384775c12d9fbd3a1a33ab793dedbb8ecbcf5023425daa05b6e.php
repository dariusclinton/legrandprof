<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_a281406d97f717162354d8fbcb4f4b4648bd9f47eee5f4185a902159f8479d6e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d827e31e1791196003b03e867dbdb0b522655a0a0a8dde4ab80fe57ffd3a1ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d827e31e1791196003b03e867dbdb0b522655a0a0a8dde4ab80fe57ffd3a1ca9->enter($__internal_d827e31e1791196003b03e867dbdb0b522655a0a0a8dde4ab80fe57ffd3a1ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d827e31e1791196003b03e867dbdb0b522655a0a0a8dde4ab80fe57ffd3a1ca9->leave($__internal_d827e31e1791196003b03e867dbdb0b522655a0a0a8dde4ab80fe57ffd3a1ca9_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_62670cf91e497672df2b69d27d2323b655f7aafcb19b6c0707af9d7e5e934fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62670cf91e497672df2b69d27d2323b655f7aafcb19b6c0707af9d7e5e934fae->enter($__internal_62670cf91e497672df2b69d27d2323b655f7aafcb19b6c0707af9d7e5e934fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_62670cf91e497672df2b69d27d2323b655f7aafcb19b6c0707af9d7e5e934fae->leave($__internal_62670cf91e497672df2b69d27d2323b655f7aafcb19b6c0707af9d7e5e934fae_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
";
    }
}
