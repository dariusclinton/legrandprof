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
        $__internal_a425546ec42b7f006685b1352bbfb85ad481dfca502a1acafc5a98d1aa52f1ba = $this->env->getExtension("native_profiler");
        $__internal_a425546ec42b7f006685b1352bbfb85ad481dfca502a1acafc5a98d1aa52f1ba->enter($__internal_a425546ec42b7f006685b1352bbfb85ad481dfca502a1acafc5a98d1aa52f1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a425546ec42b7f006685b1352bbfb85ad481dfca502a1acafc5a98d1aa52f1ba->leave($__internal_a425546ec42b7f006685b1352bbfb85ad481dfca502a1acafc5a98d1aa52f1ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_928a3bb5df945289745df9f385eade6f31bda52b78157b35bcf1acaabc1785cd = $this->env->getExtension("native_profiler");
        $__internal_928a3bb5df945289745df9f385eade6f31bda52b78157b35bcf1acaabc1785cd->enter($__internal_928a3bb5df945289745df9f385eade6f31bda52b78157b35bcf1acaabc1785cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_928a3bb5df945289745df9f385eade6f31bda52b78157b35bcf1acaabc1785cd->leave($__internal_928a3bb5df945289745df9f385eade6f31bda52b78157b35bcf1acaabc1785cd_prof);

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
