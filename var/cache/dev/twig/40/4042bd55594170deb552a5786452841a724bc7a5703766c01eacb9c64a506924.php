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
        $__internal_8d8f903ba5e95e3160a77fa3a646d0d527030449ae6d55f00b7345317a4d6a85 = $this->env->getExtension("native_profiler");
        $__internal_8d8f903ba5e95e3160a77fa3a646d0d527030449ae6d55f00b7345317a4d6a85->enter($__internal_8d8f903ba5e95e3160a77fa3a646d0d527030449ae6d55f00b7345317a4d6a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d8f903ba5e95e3160a77fa3a646d0d527030449ae6d55f00b7345317a4d6a85->leave($__internal_8d8f903ba5e95e3160a77fa3a646d0d527030449ae6d55f00b7345317a4d6a85_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24cf71810cfbcb6dce498821843c799b665ca2e3c44301593ee5a64fdd2281f5 = $this->env->getExtension("native_profiler");
        $__internal_24cf71810cfbcb6dce498821843c799b665ca2e3c44301593ee5a64fdd2281f5->enter($__internal_24cf71810cfbcb6dce498821843c799b665ca2e3c44301593ee5a64fdd2281f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_24cf71810cfbcb6dce498821843c799b665ca2e3c44301593ee5a64fdd2281f5->leave($__internal_24cf71810cfbcb6dce498821843c799b665ca2e3c44301593ee5a64fdd2281f5_prof);

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
