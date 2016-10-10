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
        $__internal_15fb4d17b276d971038716c17ad52e9e108c6295fbdaf559d9cde1d96d305ccc = $this->env->getExtension("native_profiler");
        $__internal_15fb4d17b276d971038716c17ad52e9e108c6295fbdaf559d9cde1d96d305ccc->enter($__internal_15fb4d17b276d971038716c17ad52e9e108c6295fbdaf559d9cde1d96d305ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15fb4d17b276d971038716c17ad52e9e108c6295fbdaf559d9cde1d96d305ccc->leave($__internal_15fb4d17b276d971038716c17ad52e9e108c6295fbdaf559d9cde1d96d305ccc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96793248a9a0afce3aef6a24955465ecd115415ea42cbee8b057cffc3172658e = $this->env->getExtension("native_profiler");
        $__internal_96793248a9a0afce3aef6a24955465ecd115415ea42cbee8b057cffc3172658e->enter($__internal_96793248a9a0afce3aef6a24955465ecd115415ea42cbee8b057cffc3172658e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_96793248a9a0afce3aef6a24955465ecd115415ea42cbee8b057cffc3172658e->leave($__internal_96793248a9a0afce3aef6a24955465ecd115415ea42cbee8b057cffc3172658e_prof);

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
