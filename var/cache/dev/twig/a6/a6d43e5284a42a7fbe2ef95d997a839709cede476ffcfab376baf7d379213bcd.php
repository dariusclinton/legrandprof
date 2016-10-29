<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_de88acfb74f1f212c134e77e93c17be7afa03b0dd0c3a26e869c63643d89bdb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_7459171367dd53065738040a4455af607b813978ae8206eca149db1f0d05cd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7459171367dd53065738040a4455af607b813978ae8206eca149db1f0d05cd6b->enter($__internal_7459171367dd53065738040a4455af607b813978ae8206eca149db1f0d05cd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7459171367dd53065738040a4455af607b813978ae8206eca149db1f0d05cd6b->leave($__internal_7459171367dd53065738040a4455af607b813978ae8206eca149db1f0d05cd6b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4259967b7018b94b5f14da29b82c888e2bc7de15d76661400c71a88261eb52d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4259967b7018b94b5f14da29b82c888e2bc7de15d76661400c71a88261eb52d9->enter($__internal_4259967b7018b94b5f14da29b82c888e2bc7de15d76661400c71a88261eb52d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"bg-grey\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\"><div style=\"padding-bottom:100px;padding-top:100px\"><p class=\"text-center alert-success\" style=\"padding:20px;\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p></div></div>
        </div>
      </div>
    </div>
    </div>
";
        
        $__internal_4259967b7018b94b5f14da29b82c888e2bc7de15d76661400c71a88261eb52d9->leave($__internal_4259967b7018b94b5f14da29b82c888e2bc7de15d76661400c71a88261eb52d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <div class=\"bg-grey\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\"><div style=\"padding-bottom:100px;padding-top:100px\"><p class=\"text-center alert-success\" style=\"padding:20px;\">{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p></div></div>
        </div>
      </div>
    </div>
    </div>
{% endblock fos_user_content %}
";
    }
}
