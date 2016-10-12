<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8536f341ff3076cf2ceaab09e7329f7e4ae6a5d54a03520aa948c5d0ace2f058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_e982cda9819528b259c3b390198d1b242f30418b148de2fa4039e3446f696a0d = $this->env->getExtension("native_profiler");
        $__internal_e982cda9819528b259c3b390198d1b242f30418b148de2fa4039e3446f696a0d->enter($__internal_e982cda9819528b259c3b390198d1b242f30418b148de2fa4039e3446f696a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e982cda9819528b259c3b390198d1b242f30418b148de2fa4039e3446f696a0d->leave($__internal_e982cda9819528b259c3b390198d1b242f30418b148de2fa4039e3446f696a0d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4168d36d4a9c5e5eccb26ab6645fff3f1978342a4c1c902f936e3d2fbae8eef = $this->env->getExtension("native_profiler");
        $__internal_b4168d36d4a9c5e5eccb26ab6645fff3f1978342a4c1c902f936e3d2fbae8eef->enter($__internal_b4168d36d4a9c5e5eccb26ab6645fff3f1978342a4c1c902f936e3d2fbae8eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_b4168d36d4a9c5e5eccb26ab6645fff3f1978342a4c1c902f936e3d2fbae8eef->leave($__internal_b4168d36d4a9c5e5eccb26ab6645fff3f1978342a4c1c902f936e3d2fbae8eef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
