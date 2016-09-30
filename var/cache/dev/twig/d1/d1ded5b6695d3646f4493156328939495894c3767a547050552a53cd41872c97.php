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
        $__internal_4ec540b681a189cd60d827d1f1d536effb845bffc4337ba903d6c7f2a51a79bc = $this->env->getExtension("native_profiler");
        $__internal_4ec540b681a189cd60d827d1f1d536effb845bffc4337ba903d6c7f2a51a79bc->enter($__internal_4ec540b681a189cd60d827d1f1d536effb845bffc4337ba903d6c7f2a51a79bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ec540b681a189cd60d827d1f1d536effb845bffc4337ba903d6c7f2a51a79bc->leave($__internal_4ec540b681a189cd60d827d1f1d536effb845bffc4337ba903d6c7f2a51a79bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_618c5cfce913c26d884b4681997da624a9eaef9aed7eb913e3e4d225ffedd2b2 = $this->env->getExtension("native_profiler");
        $__internal_618c5cfce913c26d884b4681997da624a9eaef9aed7eb913e3e4d225ffedd2b2->enter($__internal_618c5cfce913c26d884b4681997da624a9eaef9aed7eb913e3e4d225ffedd2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_618c5cfce913c26d884b4681997da624a9eaef9aed7eb913e3e4d225ffedd2b2->leave($__internal_618c5cfce913c26d884b4681997da624a9eaef9aed7eb913e3e4d225ffedd2b2_prof);

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
