<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_42cfbfb6741769ca2075c566da8f902c19e3935fe0db0961b599b2c0c81605e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_66838961f748aba772e0a6553c6265fedbf9f63d5a59f4689b3babb9a2926abc = $this->env->getExtension("native_profiler");
        $__internal_66838961f748aba772e0a6553c6265fedbf9f63d5a59f4689b3babb9a2926abc->enter($__internal_66838961f748aba772e0a6553c6265fedbf9f63d5a59f4689b3babb9a2926abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66838961f748aba772e0a6553c6265fedbf9f63d5a59f4689b3babb9a2926abc->leave($__internal_66838961f748aba772e0a6553c6265fedbf9f63d5a59f4689b3babb9a2926abc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50580fa64c862ffeb9ea05d8df621ce3cb76577cda23d870680060af4dd754e7 = $this->env->getExtension("native_profiler");
        $__internal_50580fa64c862ffeb9ea05d8df621ce3cb76577cda23d870680060af4dd754e7->enter($__internal_50580fa64c862ffeb9ea05d8df621ce3cb76577cda23d870680060af4dd754e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_50580fa64c862ffeb9ea05d8df621ce3cb76577cda23d870680060af4dd754e7->leave($__internal_50580fa64c862ffeb9ea05d8df621ce3cb76577cda23d870680060af4dd754e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
