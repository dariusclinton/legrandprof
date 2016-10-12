<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_80a7730cacec30effed7e81faca6284b070ad7a7ccd0ac2f3fb7e58b437c93d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_33217e72ec248a9bc2343e60f9f28f135adc07fe217a3ca538fadae95d2fa613 = $this->env->getExtension("native_profiler");
        $__internal_33217e72ec248a9bc2343e60f9f28f135adc07fe217a3ca538fadae95d2fa613->enter($__internal_33217e72ec248a9bc2343e60f9f28f135adc07fe217a3ca538fadae95d2fa613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33217e72ec248a9bc2343e60f9f28f135adc07fe217a3ca538fadae95d2fa613->leave($__internal_33217e72ec248a9bc2343e60f9f28f135adc07fe217a3ca538fadae95d2fa613_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_630a83cf58904807265d52b36306a4bccdfdb5af979e1140fe4888c1a49825b2 = $this->env->getExtension("native_profiler");
        $__internal_630a83cf58904807265d52b36306a4bccdfdb5af979e1140fe4888c1a49825b2->enter($__internal_630a83cf58904807265d52b36306a4bccdfdb5af979e1140fe4888c1a49825b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_630a83cf58904807265d52b36306a4bccdfdb5af979e1140fe4888c1a49825b2->leave($__internal_630a83cf58904807265d52b36306a4bccdfdb5af979e1140fe4888c1a49825b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
