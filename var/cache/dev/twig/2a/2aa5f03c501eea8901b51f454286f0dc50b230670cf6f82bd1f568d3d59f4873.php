<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4d7378bbf6b1ae594a260ee0ca57afbaea467696fdaf24151374392056a69f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_feaafb19b87d3c0e008bee06909687f8001fe77dfd0cbf80e6342f8020a615a8 = $this->env->getExtension("native_profiler");
        $__internal_feaafb19b87d3c0e008bee06909687f8001fe77dfd0cbf80e6342f8020a615a8->enter($__internal_feaafb19b87d3c0e008bee06909687f8001fe77dfd0cbf80e6342f8020a615a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feaafb19b87d3c0e008bee06909687f8001fe77dfd0cbf80e6342f8020a615a8->leave($__internal_feaafb19b87d3c0e008bee06909687f8001fe77dfd0cbf80e6342f8020a615a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e091da333ccc2fc71aa56bc07c6df800e811d452d2e70d9d1d696017dcf026ef = $this->env->getExtension("native_profiler");
        $__internal_e091da333ccc2fc71aa56bc07c6df800e811d452d2e70d9d1d696017dcf026ef->enter($__internal_e091da333ccc2fc71aa56bc07c6df800e811d452d2e70d9d1d696017dcf026ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e091da333ccc2fc71aa56bc07c6df800e811d452d2e70d9d1d696017dcf026ef->leave($__internal_e091da333ccc2fc71aa56bc07c6df800e811d452d2e70d9d1d696017dcf026ef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
