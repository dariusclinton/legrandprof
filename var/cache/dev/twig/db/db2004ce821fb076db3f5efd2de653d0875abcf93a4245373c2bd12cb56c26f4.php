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
        $__internal_74d94747e8487e05702108b281413e735c54e0e46efe212f8fd0fc7359db135f = $this->env->getExtension("native_profiler");
        $__internal_74d94747e8487e05702108b281413e735c54e0e46efe212f8fd0fc7359db135f->enter($__internal_74d94747e8487e05702108b281413e735c54e0e46efe212f8fd0fc7359db135f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74d94747e8487e05702108b281413e735c54e0e46efe212f8fd0fc7359db135f->leave($__internal_74d94747e8487e05702108b281413e735c54e0e46efe212f8fd0fc7359db135f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21a0b667654c5f4071ac70f96c3d9c01842da05a3d91c747617dfc396beb82e0 = $this->env->getExtension("native_profiler");
        $__internal_21a0b667654c5f4071ac70f96c3d9c01842da05a3d91c747617dfc396beb82e0->enter($__internal_21a0b667654c5f4071ac70f96c3d9c01842da05a3d91c747617dfc396beb82e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_21a0b667654c5f4071ac70f96c3d9c01842da05a3d91c747617dfc396beb82e0->leave($__internal_21a0b667654c5f4071ac70f96c3d9c01842da05a3d91c747617dfc396beb82e0_prof);

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
