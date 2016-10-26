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
        $__internal_1ae1518fb2c8e1e42cb173cf59957af944c270dcca19317917f03d92da3c2bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae1518fb2c8e1e42cb173cf59957af944c270dcca19317917f03d92da3c2bdf->enter($__internal_1ae1518fb2c8e1e42cb173cf59957af944c270dcca19317917f03d92da3c2bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ae1518fb2c8e1e42cb173cf59957af944c270dcca19317917f03d92da3c2bdf->leave($__internal_1ae1518fb2c8e1e42cb173cf59957af944c270dcca19317917f03d92da3c2bdf_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_d98873fe9d0d94103d6e9fb63b69641177726c23b3cebb9de39e932601b8dfc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98873fe9d0d94103d6e9fb63b69641177726c23b3cebb9de39e932601b8dfc3->enter($__internal_d98873fe9d0d94103d6e9fb63b69641177726c23b3cebb9de39e932601b8dfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_d98873fe9d0d94103d6e9fb63b69641177726c23b3cebb9de39e932601b8dfc3->leave($__internal_d98873fe9d0d94103d6e9fb63b69641177726c23b3cebb9de39e932601b8dfc3_prof);

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
