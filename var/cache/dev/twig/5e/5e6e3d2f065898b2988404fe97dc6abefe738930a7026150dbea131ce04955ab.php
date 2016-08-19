<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_65bf60ec878b87bf7aa5bd6fc1e5adfda07d0a44e500f8e95091af386b0d1be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_44682af429cfd875434cd74cf8d32f1115f5949e24c6602666772bdb5a38397b = $this->env->getExtension("native_profiler");
        $__internal_44682af429cfd875434cd74cf8d32f1115f5949e24c6602666772bdb5a38397b->enter($__internal_44682af429cfd875434cd74cf8d32f1115f5949e24c6602666772bdb5a38397b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44682af429cfd875434cd74cf8d32f1115f5949e24c6602666772bdb5a38397b->leave($__internal_44682af429cfd875434cd74cf8d32f1115f5949e24c6602666772bdb5a38397b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_015ca5397c149b26bca8efc97b9003ce4a8b89f181ed54c1dd9ffb7594a6a1e8 = $this->env->getExtension("native_profiler");
        $__internal_015ca5397c149b26bca8efc97b9003ce4a8b89f181ed54c1dd9ffb7594a6a1e8->enter($__internal_015ca5397c149b26bca8efc97b9003ce4a8b89f181ed54c1dd9ffb7594a6a1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_015ca5397c149b26bca8efc97b9003ce4a8b89f181ed54c1dd9ffb7594a6a1e8->leave($__internal_015ca5397c149b26bca8efc97b9003ce4a8b89f181ed54c1dd9ffb7594a6a1e8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
