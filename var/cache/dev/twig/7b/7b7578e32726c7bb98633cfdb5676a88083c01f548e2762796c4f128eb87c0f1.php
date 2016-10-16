<?php

/* LGPUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_ab7d8ab7690ad087adb8c2924316d3d8566ff3aee919ecf6938f4ce5e9d89669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_8f244357590c86be33ad7292a15509f115ae8fa6aeb742775241d536bafc36db = $this->env->getExtension("native_profiler");
        $__internal_8f244357590c86be33ad7292a15509f115ae8fa6aeb742775241d536bafc36db->enter($__internal_8f244357590c86be33ad7292a15509f115ae8fa6aeb742775241d536bafc36db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f244357590c86be33ad7292a15509f115ae8fa6aeb742775241d536bafc36db->leave($__internal_8f244357590c86be33ad7292a15509f115ae8fa6aeb742775241d536bafc36db_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1aee6c7cd67eef37d9b8585097b31d95ae1ad0a5834e08161432347ee2918a65 = $this->env->getExtension("native_profiler");
        $__internal_1aee6c7cd67eef37d9b8585097b31d95ae1ad0a5834e08161432347ee2918a65->enter($__internal_1aee6c7cd67eef37d9b8585097b31d95ae1ad0a5834e08161432347ee2918a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1aee6c7cd67eef37d9b8585097b31d95ae1ad0a5834e08161432347ee2918a65->leave($__internal_1aee6c7cd67eef37d9b8585097b31d95ae1ad0a5834e08161432347ee2918a65_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Registration:checkEmail.html.twig";
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
