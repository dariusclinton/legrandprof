<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dbd5d53f0cc3680a412195cd06fb3539dffb4db7a587f89e1e87b780209aa671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_28782db6ad45ddb265e600c99e45d7fc5b35ac3942890a0d9d9630bd5f608049 = $this->env->getExtension("native_profiler");
        $__internal_28782db6ad45ddb265e600c99e45d7fc5b35ac3942890a0d9d9630bd5f608049->enter($__internal_28782db6ad45ddb265e600c99e45d7fc5b35ac3942890a0d9d9630bd5f608049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28782db6ad45ddb265e600c99e45d7fc5b35ac3942890a0d9d9630bd5f608049->leave($__internal_28782db6ad45ddb265e600c99e45d7fc5b35ac3942890a0d9d9630bd5f608049_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8478e2443b5f311260da958ca96e7f38347f0781a6fe5260129d0a089c34342c = $this->env->getExtension("native_profiler");
        $__internal_8478e2443b5f311260da958ca96e7f38347f0781a6fe5260129d0a089c34342c->enter($__internal_8478e2443b5f311260da958ca96e7f38347f0781a6fe5260129d0a089c34342c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_8478e2443b5f311260da958ca96e7f38347f0781a6fe5260129d0a089c34342c->leave($__internal_8478e2443b5f311260da958ca96e7f38347f0781a6fe5260129d0a089c34342c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
