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
        $__internal_a6d067e6e0faf4bfad47ac7539dd4f391a35e32417ba7b3ec5050bc254ad0f29 = $this->env->getExtension("native_profiler");
        $__internal_a6d067e6e0faf4bfad47ac7539dd4f391a35e32417ba7b3ec5050bc254ad0f29->enter($__internal_a6d067e6e0faf4bfad47ac7539dd4f391a35e32417ba7b3ec5050bc254ad0f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6d067e6e0faf4bfad47ac7539dd4f391a35e32417ba7b3ec5050bc254ad0f29->leave($__internal_a6d067e6e0faf4bfad47ac7539dd4f391a35e32417ba7b3ec5050bc254ad0f29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d31353ae0a36afb54c9dc9b358f789aa06122c2d68f117f2a4244fbe9b1bac3f = $this->env->getExtension("native_profiler");
        $__internal_d31353ae0a36afb54c9dc9b358f789aa06122c2d68f117f2a4244fbe9b1bac3f->enter($__internal_d31353ae0a36afb54c9dc9b358f789aa06122c2d68f117f2a4244fbe9b1bac3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d31353ae0a36afb54c9dc9b358f789aa06122c2d68f117f2a4244fbe9b1bac3f->leave($__internal_d31353ae0a36afb54c9dc9b358f789aa06122c2d68f117f2a4244fbe9b1bac3f_prof);

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
