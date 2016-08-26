<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f9aef295c967d1ddf5e2df7b04c8b8833814a8e3b8c395bf8630cc6369c32ffe extends Twig_Template
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
        $__internal_e247c9a77d67fbd2f1e2902cba8ad62a76668a9c226dc6f0643224d966336ab5 = $this->env->getExtension("native_profiler");
        $__internal_e247c9a77d67fbd2f1e2902cba8ad62a76668a9c226dc6f0643224d966336ab5->enter($__internal_e247c9a77d67fbd2f1e2902cba8ad62a76668a9c226dc6f0643224d966336ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e247c9a77d67fbd2f1e2902cba8ad62a76668a9c226dc6f0643224d966336ab5->leave($__internal_e247c9a77d67fbd2f1e2902cba8ad62a76668a9c226dc6f0643224d966336ab5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96edcec02c67e78ff014be40b0965a41da4e3bc8caa2cd37d4cdc18f5676c65c = $this->env->getExtension("native_profiler");
        $__internal_96edcec02c67e78ff014be40b0965a41da4e3bc8caa2cd37d4cdc18f5676c65c->enter($__internal_96edcec02c67e78ff014be40b0965a41da4e3bc8caa2cd37d4cdc18f5676c65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_96edcec02c67e78ff014be40b0965a41da4e3bc8caa2cd37d4cdc18f5676c65c->leave($__internal_96edcec02c67e78ff014be40b0965a41da4e3bc8caa2cd37d4cdc18f5676c65c_prof);

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
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*   {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
