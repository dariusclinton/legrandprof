<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f9aef295c967d1ddf5e2df7b04c8b8833814a8e3b8c395bf8630cc6369c32ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_66036694667df68c7d3a1371fc8f1285f9420322a45a674ba180c514d956a3e0 = $this->env->getExtension("native_profiler");
        $__internal_66036694667df68c7d3a1371fc8f1285f9420322a45a674ba180c514d956a3e0->enter($__internal_66036694667df68c7d3a1371fc8f1285f9420322a45a674ba180c514d956a3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66036694667df68c7d3a1371fc8f1285f9420322a45a674ba180c514d956a3e0->leave($__internal_66036694667df68c7d3a1371fc8f1285f9420322a45a674ba180c514d956a3e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2dd56931398c1e16464dd3e755a22ae5a0deb812dc63609b8c5ec281d76078a = $this->env->getExtension("native_profiler");
        $__internal_e2dd56931398c1e16464dd3e755a22ae5a0deb812dc63609b8c5ec281d76078a->enter($__internal_e2dd56931398c1e16464dd3e755a22ae5a0deb812dc63609b8c5ec281d76078a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e2dd56931398c1e16464dd3e755a22ae5a0deb812dc63609b8c5ec281d76078a->leave($__internal_e2dd56931398c1e16464dd3e755a22ae5a0deb812dc63609b8c5ec281d76078a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/*   {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
