<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_db14e56c91cba01ca8113b481797ac28913369168c358aeb920a6f3c5c96339e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_92c9e0bd0a6d6e8a67419a32021630a19c12d8db5e6ca4d9f0a6dacc4b401edd = $this->env->getExtension("native_profiler");
        $__internal_92c9e0bd0a6d6e8a67419a32021630a19c12d8db5e6ca4d9f0a6dacc4b401edd->enter($__internal_92c9e0bd0a6d6e8a67419a32021630a19c12d8db5e6ca4d9f0a6dacc4b401edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92c9e0bd0a6d6e8a67419a32021630a19c12d8db5e6ca4d9f0a6dacc4b401edd->leave($__internal_92c9e0bd0a6d6e8a67419a32021630a19c12d8db5e6ca4d9f0a6dacc4b401edd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15889a3e1c0a301a463aa0877e5f6628616e88607742060eaff819d5381f8fe2 = $this->env->getExtension("native_profiler");
        $__internal_15889a3e1c0a301a463aa0877e5f6628616e88607742060eaff819d5381f8fe2->enter($__internal_15889a3e1c0a301a463aa0877e5f6628616e88607742060eaff819d5381f8fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_15889a3e1c0a301a463aa0877e5f6628616e88607742060eaff819d5381f8fe2->leave($__internal_15889a3e1c0a301a463aa0877e5f6628616e88607742060eaff819d5381f8fe2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
