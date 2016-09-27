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
        $__internal_d2adf146afc5a74b2d2754636c20f6fd36c82ae3d63daf8baf9dca8824ee330e = $this->env->getExtension("native_profiler");
        $__internal_d2adf146afc5a74b2d2754636c20f6fd36c82ae3d63daf8baf9dca8824ee330e->enter($__internal_d2adf146afc5a74b2d2754636c20f6fd36c82ae3d63daf8baf9dca8824ee330e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2adf146afc5a74b2d2754636c20f6fd36c82ae3d63daf8baf9dca8824ee330e->leave($__internal_d2adf146afc5a74b2d2754636c20f6fd36c82ae3d63daf8baf9dca8824ee330e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_baa7f8f51b05b5e2ff2a7338539f9f0fc5b52de0c4335a418451ba6cc13886a0 = $this->env->getExtension("native_profiler");
        $__internal_baa7f8f51b05b5e2ff2a7338539f9f0fc5b52de0c4335a418451ba6cc13886a0->enter($__internal_baa7f8f51b05b5e2ff2a7338539f9f0fc5b52de0c4335a418451ba6cc13886a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_baa7f8f51b05b5e2ff2a7338539f9f0fc5b52de0c4335a418451ba6cc13886a0->leave($__internal_baa7f8f51b05b5e2ff2a7338539f9f0fc5b52de0c4335a418451ba6cc13886a0_prof);

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
