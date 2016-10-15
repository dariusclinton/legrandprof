<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_a7f36f685fef2fbbecd4614bec9eb3aa9e7ad4cd3e20ae675e5fd5c53f9d38aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_19c0e98afd9c35efbf21e3da0eccf060b3d3e5eafb2082caa705f79b29b47850 = $this->env->getExtension("native_profiler");
        $__internal_19c0e98afd9c35efbf21e3da0eccf060b3d3e5eafb2082caa705f79b29b47850->enter($__internal_19c0e98afd9c35efbf21e3da0eccf060b3d3e5eafb2082caa705f79b29b47850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19c0e98afd9c35efbf21e3da0eccf060b3d3e5eafb2082caa705f79b29b47850->leave($__internal_19c0e98afd9c35efbf21e3da0eccf060b3d3e5eafb2082caa705f79b29b47850_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8a8cae6d6ae8a18f3e0437d2e7590f5610c9dcc3c5c29b36270ffdb664a1666 = $this->env->getExtension("native_profiler");
        $__internal_c8a8cae6d6ae8a18f3e0437d2e7590f5610c9dcc3c5c29b36270ffdb664a1666->enter($__internal_c8a8cae6d6ae8a18f3e0437d2e7590f5610c9dcc3c5c29b36270ffdb664a1666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c8a8cae6d6ae8a18f3e0437d2e7590f5610c9dcc3c5c29b36270ffdb664a1666->leave($__internal_c8a8cae6d6ae8a18f3e0437d2e7590f5610c9dcc3c5c29b36270ffdb664a1666_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
