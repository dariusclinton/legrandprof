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
        $__internal_f8dc93a13631d19ed443108ccc7777fd5e621e044e7723ae2bd6fe969aafb7ce = $this->env->getExtension("native_profiler");
        $__internal_f8dc93a13631d19ed443108ccc7777fd5e621e044e7723ae2bd6fe969aafb7ce->enter($__internal_f8dc93a13631d19ed443108ccc7777fd5e621e044e7723ae2bd6fe969aafb7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8dc93a13631d19ed443108ccc7777fd5e621e044e7723ae2bd6fe969aafb7ce->leave($__internal_f8dc93a13631d19ed443108ccc7777fd5e621e044e7723ae2bd6fe969aafb7ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60c802102c60ceabeb99fd15bff61c9da688e99ad8e471b6fe3399904a813214 = $this->env->getExtension("native_profiler");
        $__internal_60c802102c60ceabeb99fd15bff61c9da688e99ad8e471b6fe3399904a813214->enter($__internal_60c802102c60ceabeb99fd15bff61c9da688e99ad8e471b6fe3399904a813214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_60c802102c60ceabeb99fd15bff61c9da688e99ad8e471b6fe3399904a813214->leave($__internal_60c802102c60ceabeb99fd15bff61c9da688e99ad8e471b6fe3399904a813214_prof);

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
