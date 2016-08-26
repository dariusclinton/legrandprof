<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a68c2b58d2abb85a6ac70f5fda3b1ec34cd0ed57b34ee6d7df1118ef3eca3954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb828883b0dbdeb07f34c5ea7b990a3d00edd778545b354f99e10ccbdfe2c74a = $this->env->getExtension("native_profiler");
        $__internal_fb828883b0dbdeb07f34c5ea7b990a3d00edd778545b354f99e10ccbdfe2c74a->enter($__internal_fb828883b0dbdeb07f34c5ea7b990a3d00edd778545b354f99e10ccbdfe2c74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb828883b0dbdeb07f34c5ea7b990a3d00edd778545b354f99e10ccbdfe2c74a->leave($__internal_fb828883b0dbdeb07f34c5ea7b990a3d00edd778545b354f99e10ccbdfe2c74a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd1e7c1c9107aebc4939574f1950eb4f4a9782fd2a51fd1b3e727a91a037a5ab = $this->env->getExtension("native_profiler");
        $__internal_dd1e7c1c9107aebc4939574f1950eb4f4a9782fd2a51fd1b3e727a91a037a5ab->enter($__internal_dd1e7c1c9107aebc4939574f1950eb4f4a9782fd2a51fd1b3e727a91a037a5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_dd1e7c1c9107aebc4939574f1950eb4f4a9782fd2a51fd1b3e727a91a037a5ab->leave($__internal_dd1e7c1c9107aebc4939574f1950eb4f4a9782fd2a51fd1b3e727a91a037a5ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
