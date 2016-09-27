<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_74c7be5d57db606590f4cd98a29732ed9a362f9fd685cd18d898ca2ad852985c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e8469d7caeb5aaad4ea2d4127398fcee60f303f65a4bb772a44ccb307c6321cb = $this->env->getExtension("native_profiler");
        $__internal_e8469d7caeb5aaad4ea2d4127398fcee60f303f65a4bb772a44ccb307c6321cb->enter($__internal_e8469d7caeb5aaad4ea2d4127398fcee60f303f65a4bb772a44ccb307c6321cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8469d7caeb5aaad4ea2d4127398fcee60f303f65a4bb772a44ccb307c6321cb->leave($__internal_e8469d7caeb5aaad4ea2d4127398fcee60f303f65a4bb772a44ccb307c6321cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7562a9825673dddb1ef9b7359c287df28bf7ddb76968ccf2aa959e00a0551bbe = $this->env->getExtension("native_profiler");
        $__internal_7562a9825673dddb1ef9b7359c287df28bf7ddb76968ccf2aa959e00a0551bbe->enter($__internal_7562a9825673dddb1ef9b7359c287df28bf7ddb76968ccf2aa959e00a0551bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7562a9825673dddb1ef9b7359c287df28bf7ddb76968ccf2aa959e00a0551bbe->leave($__internal_7562a9825673dddb1ef9b7359c287df28bf7ddb76968ccf2aa959e00a0551bbe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
