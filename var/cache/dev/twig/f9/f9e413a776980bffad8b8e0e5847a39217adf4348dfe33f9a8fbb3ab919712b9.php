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
        $__internal_632fbb19e5559543e63ce3039a8ade7364b2a2236b137d43c08b19fbab976acd = $this->env->getExtension("native_profiler");
        $__internal_632fbb19e5559543e63ce3039a8ade7364b2a2236b137d43c08b19fbab976acd->enter($__internal_632fbb19e5559543e63ce3039a8ade7364b2a2236b137d43c08b19fbab976acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_632fbb19e5559543e63ce3039a8ade7364b2a2236b137d43c08b19fbab976acd->leave($__internal_632fbb19e5559543e63ce3039a8ade7364b2a2236b137d43c08b19fbab976acd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c71556a1a84d3440bf92ef58d1071dd0bce753f25a71bd468c4d310b0a53d95 = $this->env->getExtension("native_profiler");
        $__internal_7c71556a1a84d3440bf92ef58d1071dd0bce753f25a71bd468c4d310b0a53d95->enter($__internal_7c71556a1a84d3440bf92ef58d1071dd0bce753f25a71bd468c4d310b0a53d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7c71556a1a84d3440bf92ef58d1071dd0bce753f25a71bd468c4d310b0a53d95->leave($__internal_7c71556a1a84d3440bf92ef58d1071dd0bce753f25a71bd468c4d310b0a53d95_prof);

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
