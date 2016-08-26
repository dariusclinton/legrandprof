<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_9cd6a0d2c1a177223ec53ea3e095ff68876204abb4f4b4298a3f8729427d6f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_332874c164eb7d7b6df7498278e851f6bcb81a87e5cd30f26af2412e550c0006 = $this->env->getExtension("native_profiler");
        $__internal_332874c164eb7d7b6df7498278e851f6bcb81a87e5cd30f26af2412e550c0006->enter($__internal_332874c164eb7d7b6df7498278e851f6bcb81a87e5cd30f26af2412e550c0006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332874c164eb7d7b6df7498278e851f6bcb81a87e5cd30f26af2412e550c0006->leave($__internal_332874c164eb7d7b6df7498278e851f6bcb81a87e5cd30f26af2412e550c0006_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2893d8f3a431479cbd94abb5066049467c9fd78ab64b76c8648f6828190312ac = $this->env->getExtension("native_profiler");
        $__internal_2893d8f3a431479cbd94abb5066049467c9fd78ab64b76c8648f6828190312ac->enter($__internal_2893d8f3a431479cbd94abb5066049467c9fd78ab64b76c8648f6828190312ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2893d8f3a431479cbd94abb5066049467c9fd78ab64b76c8648f6828190312ac->leave($__internal_2893d8f3a431479cbd94abb5066049467c9fd78ab64b76c8648f6828190312ac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
