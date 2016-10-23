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
        $__internal_c6a17e6142e912af1dd911dbd7151a377127aa1c4554c5594dfe6e470ecd0856 = $this->env->getExtension("native_profiler");
        $__internal_c6a17e6142e912af1dd911dbd7151a377127aa1c4554c5594dfe6e470ecd0856->enter($__internal_c6a17e6142e912af1dd911dbd7151a377127aa1c4554c5594dfe6e470ecd0856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6a17e6142e912af1dd911dbd7151a377127aa1c4554c5594dfe6e470ecd0856->leave($__internal_c6a17e6142e912af1dd911dbd7151a377127aa1c4554c5594dfe6e470ecd0856_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9df883ec83e855615c47d478c69926a8ac8d4e61c7a9fd693a07d69d94455a14 = $this->env->getExtension("native_profiler");
        $__internal_9df883ec83e855615c47d478c69926a8ac8d4e61c7a9fd693a07d69d94455a14->enter($__internal_9df883ec83e855615c47d478c69926a8ac8d4e61c7a9fd693a07d69d94455a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_9df883ec83e855615c47d478c69926a8ac8d4e61c7a9fd693a07d69d94455a14->leave($__internal_9df883ec83e855615c47d478c69926a8ac8d4e61c7a9fd693a07d69d94455a14_prof);

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
