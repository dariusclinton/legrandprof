<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2a00b1dac2c61a734ba3034bd7813c4ce86417a5f2788a98b4230a1dff6fda7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_e37182f3709bcdea8e2302308b82184fe287504ce644669bb751c0b4a0cefbfb = $this->env->getExtension("native_profiler");
        $__internal_e37182f3709bcdea8e2302308b82184fe287504ce644669bb751c0b4a0cefbfb->enter($__internal_e37182f3709bcdea8e2302308b82184fe287504ce644669bb751c0b4a0cefbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e37182f3709bcdea8e2302308b82184fe287504ce644669bb751c0b4a0cefbfb->leave($__internal_e37182f3709bcdea8e2302308b82184fe287504ce644669bb751c0b4a0cefbfb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99539cb488f22b34485afcc091035ba3d095033808a93cf56f3e829d2efd8fb9 = $this->env->getExtension("native_profiler");
        $__internal_99539cb488f22b34485afcc091035ba3d095033808a93cf56f3e829d2efd8fb9->enter($__internal_99539cb488f22b34485afcc091035ba3d095033808a93cf56f3e829d2efd8fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_99539cb488f22b34485afcc091035ba3d095033808a93cf56f3e829d2efd8fb9->leave($__internal_99539cb488f22b34485afcc091035ba3d095033808a93cf56f3e829d2efd8fb9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
