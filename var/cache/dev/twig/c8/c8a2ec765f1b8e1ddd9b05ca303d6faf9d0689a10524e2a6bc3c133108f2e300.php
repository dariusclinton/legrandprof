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
        $__internal_0918874b266514f3e2309e6720e89fb4022e263baf88d84cc661d94132d18552 = $this->env->getExtension("native_profiler");
        $__internal_0918874b266514f3e2309e6720e89fb4022e263baf88d84cc661d94132d18552->enter($__internal_0918874b266514f3e2309e6720e89fb4022e263baf88d84cc661d94132d18552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0918874b266514f3e2309e6720e89fb4022e263baf88d84cc661d94132d18552->leave($__internal_0918874b266514f3e2309e6720e89fb4022e263baf88d84cc661d94132d18552_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_474d6ade9629a92a2e3881fb167a36a1f8392124cce2ea43fab1b69f46f44cd9 = $this->env->getExtension("native_profiler");
        $__internal_474d6ade9629a92a2e3881fb167a36a1f8392124cce2ea43fab1b69f46f44cd9->enter($__internal_474d6ade9629a92a2e3881fb167a36a1f8392124cce2ea43fab1b69f46f44cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_474d6ade9629a92a2e3881fb167a36a1f8392124cce2ea43fab1b69f46f44cd9->leave($__internal_474d6ade9629a92a2e3881fb167a36a1f8392124cce2ea43fab1b69f46f44cd9_prof);

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
