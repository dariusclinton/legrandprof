<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_4317058054554dc25637b3a61123efdc0181248e61b833c017b7480298c2652c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c58ae1c8fd4cd1b1bbcb07e4cb554f165a90d2d7a7518042931b3edac85b280 = $this->env->getExtension("native_profiler");
        $__internal_1c58ae1c8fd4cd1b1bbcb07e4cb554f165a90d2d7a7518042931b3edac85b280->enter($__internal_1c58ae1c8fd4cd1b1bbcb07e4cb554f165a90d2d7a7518042931b3edac85b280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_1c58ae1c8fd4cd1b1bbcb07e4cb554f165a90d2d7a7518042931b3edac85b280->leave($__internal_1c58ae1c8fd4cd1b1bbcb07e4cb554f165a90d2d7a7518042931b3edac85b280_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_a0ed2f8d126dd0db61169cc66b44c1e5c107adab31d122aa746ac011dc342b4e = $this->env->getExtension("native_profiler");
        $__internal_a0ed2f8d126dd0db61169cc66b44c1e5c107adab31d122aa746ac011dc342b4e->enter($__internal_a0ed2f8d126dd0db61169cc66b44c1e5c107adab31d122aa746ac011dc342b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_a0ed2f8d126dd0db61169cc66b44c1e5c107adab31d122aa746ac011dc342b4e->leave($__internal_a0ed2f8d126dd0db61169cc66b44c1e5c107adab31d122aa746ac011dc342b4e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block user_block %}{# Customize this value #}{% endblock %}
";
    }
}
