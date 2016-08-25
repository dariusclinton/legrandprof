<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_225c0888c8d9bd7f5f76296f77ed0a56a0831e7eb5b1398311b8df0a873451e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_77df4ad3e744704099dd1bdca8c8a72520c27f0365f5a78baff0899e0b8da803 = $this->env->getExtension("native_profiler");
        $__internal_77df4ad3e744704099dd1bdca8c8a72520c27f0365f5a78baff0899e0b8da803->enter($__internal_77df4ad3e744704099dd1bdca8c8a72520c27f0365f5a78baff0899e0b8da803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77df4ad3e744704099dd1bdca8c8a72520c27f0365f5a78baff0899e0b8da803->leave($__internal_77df4ad3e744704099dd1bdca8c8a72520c27f0365f5a78baff0899e0b8da803_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_409e1277b52f4a1ec5ce2ca0bd738493f96e64546c148c495cee7ec572ab8ed3 = $this->env->getExtension("native_profiler");
        $__internal_409e1277b52f4a1ec5ce2ca0bd738493f96e64546c148c495cee7ec572ab8ed3->enter($__internal_409e1277b52f4a1ec5ce2ca0bd738493f96e64546c148c495cee7ec572ab8ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_409e1277b52f4a1ec5ce2ca0bd738493f96e64546c148c495cee7ec572ab8ed3->leave($__internal_409e1277b52f4a1ec5ce2ca0bd738493f96e64546c148c495cee7ec572ab8ed3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
