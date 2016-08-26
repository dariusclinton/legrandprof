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
        $__internal_f6e799706b5cd294e9eac5df917dcdabeb33250628e8f97d4c85f9aa4724a539 = $this->env->getExtension("native_profiler");
        $__internal_f6e799706b5cd294e9eac5df917dcdabeb33250628e8f97d4c85f9aa4724a539->enter($__internal_f6e799706b5cd294e9eac5df917dcdabeb33250628e8f97d4c85f9aa4724a539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e799706b5cd294e9eac5df917dcdabeb33250628e8f97d4c85f9aa4724a539->leave($__internal_f6e799706b5cd294e9eac5df917dcdabeb33250628e8f97d4c85f9aa4724a539_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74ff45a2a35b8c6a2236644d08f71821ea9466f60e344dff6b225f1ef7b00e68 = $this->env->getExtension("native_profiler");
        $__internal_74ff45a2a35b8c6a2236644d08f71821ea9466f60e344dff6b225f1ef7b00e68->enter($__internal_74ff45a2a35b8c6a2236644d08f71821ea9466f60e344dff6b225f1ef7b00e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_74ff45a2a35b8c6a2236644d08f71821ea9466f60e344dff6b225f1ef7b00e68->leave($__internal_74ff45a2a35b8c6a2236644d08f71821ea9466f60e344dff6b225f1ef7b00e68_prof);

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
