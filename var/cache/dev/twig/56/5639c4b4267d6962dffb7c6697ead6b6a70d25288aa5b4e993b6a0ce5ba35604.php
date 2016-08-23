<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_80464fbf5868c0c8865ff25d806c3d60bd8e2ff3da8e6d052d8dd565e21d7503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_ff362243e36bc0cdfbfb16c9e35a35b80ea4173b9efc0e5790aa803d165f3bc4 = $this->env->getExtension("native_profiler");
        $__internal_ff362243e36bc0cdfbfb16c9e35a35b80ea4173b9efc0e5790aa803d165f3bc4->enter($__internal_ff362243e36bc0cdfbfb16c9e35a35b80ea4173b9efc0e5790aa803d165f3bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff362243e36bc0cdfbfb16c9e35a35b80ea4173b9efc0e5790aa803d165f3bc4->leave($__internal_ff362243e36bc0cdfbfb16c9e35a35b80ea4173b9efc0e5790aa803d165f3bc4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4a6e137e04919d504dbc992d05a5a7627ac8eae9c7ec550c28c04748c79d76f = $this->env->getExtension("native_profiler");
        $__internal_b4a6e137e04919d504dbc992d05a5a7627ac8eae9c7ec550c28c04748c79d76f->enter($__internal_b4a6e137e04919d504dbc992d05a5a7627ac8eae9c7ec550c28c04748c79d76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_b4a6e137e04919d504dbc992d05a5a7627ac8eae9c7ec550c28c04748c79d76f->leave($__internal_b4a6e137e04919d504dbc992d05a5a7627ac8eae9c7ec550c28c04748c79d76f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
