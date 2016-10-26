<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_2245b8b752cfc1e664ce7110f896b7b5aede970d877238b053c551c7aca569a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_f8ade23e3ffd747602ee87fbf1a678d7fe9a60e9316051e00e6fb401d32d731f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ade23e3ffd747602ee87fbf1a678d7fe9a60e9316051e00e6fb401d32d731f->enter($__internal_f8ade23e3ffd747602ee87fbf1a678d7fe9a60e9316051e00e6fb401d32d731f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8ade23e3ffd747602ee87fbf1a678d7fe9a60e9316051e00e6fb401d32d731f->leave($__internal_f8ade23e3ffd747602ee87fbf1a678d7fe9a60e9316051e00e6fb401d32d731f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_253d5991adb6f49aded91d86329c37bde377b4216d30ed2a9aa67623e1a7c803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253d5991adb6f49aded91d86329c37bde377b4216d30ed2a9aa67623e1a7c803->enter($__internal_253d5991adb6f49aded91d86329c37bde377b4216d30ed2a9aa67623e1a7c803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_253d5991adb6f49aded91d86329c37bde377b4216d30ed2a9aa67623e1a7c803->leave($__internal_253d5991adb6f49aded91d86329c37bde377b4216d30ed2a9aa67623e1a7c803_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
