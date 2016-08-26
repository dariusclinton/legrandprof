<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_be1e132bae8340ed2a0182bfd29fdc26ce89f6f4aa09f54257e84ea80981a725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_89d37b1f31cfb7e2a25cfec5478a45bf9d35cfab80c2b85827fab524b09d1f81 = $this->env->getExtension("native_profiler");
        $__internal_89d37b1f31cfb7e2a25cfec5478a45bf9d35cfab80c2b85827fab524b09d1f81->enter($__internal_89d37b1f31cfb7e2a25cfec5478a45bf9d35cfab80c2b85827fab524b09d1f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89d37b1f31cfb7e2a25cfec5478a45bf9d35cfab80c2b85827fab524b09d1f81->leave($__internal_89d37b1f31cfb7e2a25cfec5478a45bf9d35cfab80c2b85827fab524b09d1f81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb13d46f1ed5ccdc4bf7610e2a52d7518469d92879ebde3fdfad2615d065f0c3 = $this->env->getExtension("native_profiler");
        $__internal_eb13d46f1ed5ccdc4bf7610e2a52d7518469d92879ebde3fdfad2615d065f0c3->enter($__internal_eb13d46f1ed5ccdc4bf7610e2a52d7518469d92879ebde3fdfad2615d065f0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_eb13d46f1ed5ccdc4bf7610e2a52d7518469d92879ebde3fdfad2615d065f0c3->leave($__internal_eb13d46f1ed5ccdc4bf7610e2a52d7518469d92879ebde3fdfad2615d065f0c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
