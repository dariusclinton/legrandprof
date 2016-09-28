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
        $__internal_2dd6204ce401618babb6b810118b2da461279cf133dd53ab14ccec032872102f = $this->env->getExtension("native_profiler");
        $__internal_2dd6204ce401618babb6b810118b2da461279cf133dd53ab14ccec032872102f->enter($__internal_2dd6204ce401618babb6b810118b2da461279cf133dd53ab14ccec032872102f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dd6204ce401618babb6b810118b2da461279cf133dd53ab14ccec032872102f->leave($__internal_2dd6204ce401618babb6b810118b2da461279cf133dd53ab14ccec032872102f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0f7fa8bd7b557817700852566f1b339b84fec4b42f32815f1976599b94f74ad = $this->env->getExtension("native_profiler");
        $__internal_b0f7fa8bd7b557817700852566f1b339b84fec4b42f32815f1976599b94f74ad->enter($__internal_b0f7fa8bd7b557817700852566f1b339b84fec4b42f32815f1976599b94f74ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b0f7fa8bd7b557817700852566f1b339b84fec4b42f32815f1976599b94f74ad->leave($__internal_b0f7fa8bd7b557817700852566f1b339b84fec4b42f32815f1976599b94f74ad_prof);

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
