<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_e3adfdd2f3a9ba5a90da52e8902ca490918eececbb525a5062cb2bb0e6da76d1 extends Twig_Template
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
        $__internal_17bbde45c2f10e6a8510b9d4047c9c2d0edfc89c36b3ab7cddaa42c515c36f42 = $this->env->getExtension("native_profiler");
        $__internal_17bbde45c2f10e6a8510b9d4047c9c2d0edfc89c36b3ab7cddaa42c515c36f42->enter($__internal_17bbde45c2f10e6a8510b9d4047c9c2d0edfc89c36b3ab7cddaa42c515c36f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17bbde45c2f10e6a8510b9d4047c9c2d0edfc89c36b3ab7cddaa42c515c36f42->leave($__internal_17bbde45c2f10e6a8510b9d4047c9c2d0edfc89c36b3ab7cddaa42c515c36f42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_107a9da6325864885fd325574a108a6e581c1e53e8f3817b2c06d903179fdd66 = $this->env->getExtension("native_profiler");
        $__internal_107a9da6325864885fd325574a108a6e581c1e53e8f3817b2c06d903179fdd66->enter($__internal_107a9da6325864885fd325574a108a6e581c1e53e8f3817b2c06d903179fdd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_107a9da6325864885fd325574a108a6e581c1e53e8f3817b2c06d903179fdd66->leave($__internal_107a9da6325864885fd325574a108a6e581c1e53e8f3817b2c06d903179fdd66_prof);

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
