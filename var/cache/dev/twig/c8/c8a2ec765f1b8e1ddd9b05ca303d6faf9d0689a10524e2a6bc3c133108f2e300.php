<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_79ea177a4101e9774a6c3251f91353cbdc41aa67861dbaad2dd5c921a1bcba5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_43bc5c31a9773f4975694df83ac36c615c032bcc4a7abd536b907af846f761ec = $this->env->getExtension("native_profiler");
        $__internal_43bc5c31a9773f4975694df83ac36c615c032bcc4a7abd536b907af846f761ec->enter($__internal_43bc5c31a9773f4975694df83ac36c615c032bcc4a7abd536b907af846f761ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43bc5c31a9773f4975694df83ac36c615c032bcc4a7abd536b907af846f761ec->leave($__internal_43bc5c31a9773f4975694df83ac36c615c032bcc4a7abd536b907af846f761ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f38fe6c97ac6e5877c5f9de4745e9f7c643a682cbf51094490bf69f359237c55 = $this->env->getExtension("native_profiler");
        $__internal_f38fe6c97ac6e5877c5f9de4745e9f7c643a682cbf51094490bf69f359237c55->enter($__internal_f38fe6c97ac6e5877c5f9de4745e9f7c643a682cbf51094490bf69f359237c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f38fe6c97ac6e5877c5f9de4745e9f7c643a682cbf51094490bf69f359237c55->leave($__internal_f38fe6c97ac6e5877c5f9de4745e9f7c643a682cbf51094490bf69f359237c55_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
