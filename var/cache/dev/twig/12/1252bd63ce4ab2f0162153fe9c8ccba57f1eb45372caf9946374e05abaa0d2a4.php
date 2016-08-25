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
        $__internal_22462dd51309759b96139fc6296384e362447cd6cc732a1e84c9913486e4f733 = $this->env->getExtension("native_profiler");
        $__internal_22462dd51309759b96139fc6296384e362447cd6cc732a1e84c9913486e4f733->enter($__internal_22462dd51309759b96139fc6296384e362447cd6cc732a1e84c9913486e4f733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22462dd51309759b96139fc6296384e362447cd6cc732a1e84c9913486e4f733->leave($__internal_22462dd51309759b96139fc6296384e362447cd6cc732a1e84c9913486e4f733_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_687c6ea1c493ae8da9f5632826797fa659e7f4096b9450da6b21b09c281fa363 = $this->env->getExtension("native_profiler");
        $__internal_687c6ea1c493ae8da9f5632826797fa659e7f4096b9450da6b21b09c281fa363->enter($__internal_687c6ea1c493ae8da9f5632826797fa659e7f4096b9450da6b21b09c281fa363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_687c6ea1c493ae8da9f5632826797fa659e7f4096b9450da6b21b09c281fa363->leave($__internal_687c6ea1c493ae8da9f5632826797fa659e7f4096b9450da6b21b09c281fa363_prof);

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
