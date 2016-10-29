<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_a7f36f685fef2fbbecd4614bec9eb3aa9e7ad4cd3e20ae675e5fd5c53f9d38aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_d7671df70c506430b147a34b99db415f871b4dfd537b4cfead27c7b4fa8dccf7 = $this->env->getExtension("native_profiler");
        $__internal_d7671df70c506430b147a34b99db415f871b4dfd537b4cfead27c7b4fa8dccf7->enter($__internal_d7671df70c506430b147a34b99db415f871b4dfd537b4cfead27c7b4fa8dccf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7671df70c506430b147a34b99db415f871b4dfd537b4cfead27c7b4fa8dccf7->leave($__internal_d7671df70c506430b147a34b99db415f871b4dfd537b4cfead27c7b4fa8dccf7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9955f9f1d57a8bb5886e2be5752e75f81c7602ef3b7bb8fc464abe3fc065c03 = $this->env->getExtension("native_profiler");
        $__internal_c9955f9f1d57a8bb5886e2be5752e75f81c7602ef3b7bb8fc464abe3fc065c03->enter($__internal_c9955f9f1d57a8bb5886e2be5752e75f81c7602ef3b7bb8fc464abe3fc065c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_c9955f9f1d57a8bb5886e2be5752e75f81c7602ef3b7bb8fc464abe3fc065c03->leave($__internal_c9955f9f1d57a8bb5886e2be5752e75f81c7602ef3b7bb8fc464abe3fc065c03_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
