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
        $__internal_55e49c7ab27bce185b65aad54faf199122fd4c9024a45748ed2f01f527eede70 = $this->env->getExtension("native_profiler");
        $__internal_55e49c7ab27bce185b65aad54faf199122fd4c9024a45748ed2f01f527eede70->enter($__internal_55e49c7ab27bce185b65aad54faf199122fd4c9024a45748ed2f01f527eede70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55e49c7ab27bce185b65aad54faf199122fd4c9024a45748ed2f01f527eede70->leave($__internal_55e49c7ab27bce185b65aad54faf199122fd4c9024a45748ed2f01f527eede70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ed333a4fbf7b3cd6597c4558497d44e1733d83ca8c0e4b1f59b5639962ebf42 = $this->env->getExtension("native_profiler");
        $__internal_5ed333a4fbf7b3cd6597c4558497d44e1733d83ca8c0e4b1f59b5639962ebf42->enter($__internal_5ed333a4fbf7b3cd6597c4558497d44e1733d83ca8c0e4b1f59b5639962ebf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_5ed333a4fbf7b3cd6597c4558497d44e1733d83ca8c0e4b1f59b5639962ebf42->leave($__internal_5ed333a4fbf7b3cd6597c4558497d44e1733d83ca8c0e4b1f59b5639962ebf42_prof);

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
