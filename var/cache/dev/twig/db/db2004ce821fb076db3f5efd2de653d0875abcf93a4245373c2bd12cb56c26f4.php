<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_fd4abe4e58b39b59a1c53c0d1d9dc0ec81ab125cd4b88e060c60dfbf71072d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_403a09b649c219addc94a06e1372398c32d92b5ba4178eaea70da3aa5c5f2078 = $this->env->getExtension("native_profiler");
        $__internal_403a09b649c219addc94a06e1372398c32d92b5ba4178eaea70da3aa5c5f2078->enter($__internal_403a09b649c219addc94a06e1372398c32d92b5ba4178eaea70da3aa5c5f2078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_403a09b649c219addc94a06e1372398c32d92b5ba4178eaea70da3aa5c5f2078->leave($__internal_403a09b649c219addc94a06e1372398c32d92b5ba4178eaea70da3aa5c5f2078_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35fb5e8479e7371da48c8b62ae86ec8c87adb1daf12391bf57b3196277b3cf92 = $this->env->getExtension("native_profiler");
        $__internal_35fb5e8479e7371da48c8b62ae86ec8c87adb1daf12391bf57b3196277b3cf92->enter($__internal_35fb5e8479e7371da48c8b62ae86ec8c87adb1daf12391bf57b3196277b3cf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_35fb5e8479e7371da48c8b62ae86ec8c87adb1daf12391bf57b3196277b3cf92->leave($__internal_35fb5e8479e7371da48c8b62ae86ec8c87adb1daf12391bf57b3196277b3cf92_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
