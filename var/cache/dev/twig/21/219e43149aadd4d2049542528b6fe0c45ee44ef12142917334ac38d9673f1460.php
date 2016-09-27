<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_ae2f86d2da7f3855688e35610dbdaab25b08d785d882ceb888e1270fb1462ab2 extends Twig_Template
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
        $__internal_7d5d22a1afec8c6a20d551668f8b9ef9b4e2fdb5dbac68f5beeda4740b25af66 = $this->env->getExtension("native_profiler");
        $__internal_7d5d22a1afec8c6a20d551668f8b9ef9b4e2fdb5dbac68f5beeda4740b25af66->enter($__internal_7d5d22a1afec8c6a20d551668f8b9ef9b4e2fdb5dbac68f5beeda4740b25af66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d5d22a1afec8c6a20d551668f8b9ef9b4e2fdb5dbac68f5beeda4740b25af66->leave($__internal_7d5d22a1afec8c6a20d551668f8b9ef9b4e2fdb5dbac68f5beeda4740b25af66_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_ef2147eafb351ca383dacae7e699cb26e70d3fc2e60a56599e342a8fe3af6b21 = $this->env->getExtension("native_profiler");
        $__internal_ef2147eafb351ca383dacae7e699cb26e70d3fc2e60a56599e342a8fe3af6b21->enter($__internal_ef2147eafb351ca383dacae7e699cb26e70d3fc2e60a56599e342a8fe3af6b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_ef2147eafb351ca383dacae7e699cb26e70d3fc2e60a56599e342a8fe3af6b21->leave($__internal_ef2147eafb351ca383dacae7e699cb26e70d3fc2e60a56599e342a8fe3af6b21_prof);

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
