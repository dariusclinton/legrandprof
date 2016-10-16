<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_aee0adb452f4ca037c48c800836f5e195b7f07cf4d7a1e9376be1a705ad2abb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_48ade921d68993a232ab7c06536d092a829369ae13110cc375f5eb8263924aef = $this->env->getExtension("native_profiler");
        $__internal_48ade921d68993a232ab7c06536d092a829369ae13110cc375f5eb8263924aef->enter($__internal_48ade921d68993a232ab7c06536d092a829369ae13110cc375f5eb8263924aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48ade921d68993a232ab7c06536d092a829369ae13110cc375f5eb8263924aef->leave($__internal_48ade921d68993a232ab7c06536d092a829369ae13110cc375f5eb8263924aef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6452e33c4a79957751b2b32bcef0de22f4a1fc30e838dc6321504bc591512d29 = $this->env->getExtension("native_profiler");
        $__internal_6452e33c4a79957751b2b32bcef0de22f4a1fc30e838dc6321504bc591512d29->enter($__internal_6452e33c4a79957751b2b32bcef0de22f4a1fc30e838dc6321504bc591512d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_6452e33c4a79957751b2b32bcef0de22f4a1fc30e838dc6321504bc591512d29->leave($__internal_6452e33c4a79957751b2b32bcef0de22f4a1fc30e838dc6321504bc591512d29_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
