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
        $__internal_501e3b162eeed93d5638b992fde1193ff465460a396fb8ff762917fe0dc4ebf7 = $this->env->getExtension("native_profiler");
        $__internal_501e3b162eeed93d5638b992fde1193ff465460a396fb8ff762917fe0dc4ebf7->enter($__internal_501e3b162eeed93d5638b992fde1193ff465460a396fb8ff762917fe0dc4ebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_501e3b162eeed93d5638b992fde1193ff465460a396fb8ff762917fe0dc4ebf7->leave($__internal_501e3b162eeed93d5638b992fde1193ff465460a396fb8ff762917fe0dc4ebf7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea6f9b094ede9dcd5347c7388ff843a6aeaee73f05423f2ae96717c796074506 = $this->env->getExtension("native_profiler");
        $__internal_ea6f9b094ede9dcd5347c7388ff843a6aeaee73f05423f2ae96717c796074506->enter($__internal_ea6f9b094ede9dcd5347c7388ff843a6aeaee73f05423f2ae96717c796074506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_ea6f9b094ede9dcd5347c7388ff843a6aeaee73f05423f2ae96717c796074506->leave($__internal_ea6f9b094ede9dcd5347c7388ff843a6aeaee73f05423f2ae96717c796074506_prof);

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
