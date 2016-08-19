<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_76f956740670e1d0c7cf76e1e38e59ae9e7cd737e87007a415e8dc0b23580121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_36fdbd504c3da694eb1e8308a90d4b0333256fbad0c0b9952c7871589605813d = $this->env->getExtension("native_profiler");
        $__internal_36fdbd504c3da694eb1e8308a90d4b0333256fbad0c0b9952c7871589605813d->enter($__internal_36fdbd504c3da694eb1e8308a90d4b0333256fbad0c0b9952c7871589605813d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36fdbd504c3da694eb1e8308a90d4b0333256fbad0c0b9952c7871589605813d->leave($__internal_36fdbd504c3da694eb1e8308a90d4b0333256fbad0c0b9952c7871589605813d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c26ccbc2be1c4a5dc13aa048cc6c6767ed793b258352eb30094653f36f385c37 = $this->env->getExtension("native_profiler");
        $__internal_c26ccbc2be1c4a5dc13aa048cc6c6767ed793b258352eb30094653f36f385c37->enter($__internal_c26ccbc2be1c4a5dc13aa048cc6c6767ed793b258352eb30094653f36f385c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c26ccbc2be1c4a5dc13aa048cc6c6767ed793b258352eb30094653f36f385c37->leave($__internal_c26ccbc2be1c4a5dc13aa048cc6c6767ed793b258352eb30094653f36f385c37_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
