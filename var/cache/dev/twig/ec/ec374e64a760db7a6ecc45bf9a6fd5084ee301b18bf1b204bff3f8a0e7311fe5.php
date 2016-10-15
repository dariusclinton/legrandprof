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
        $__internal_d62d8f64b733c31b6f9f27078f8ebde70529c422ca4f5da53aeb20ee9ee64bb1 = $this->env->getExtension("native_profiler");
        $__internal_d62d8f64b733c31b6f9f27078f8ebde70529c422ca4f5da53aeb20ee9ee64bb1->enter($__internal_d62d8f64b733c31b6f9f27078f8ebde70529c422ca4f5da53aeb20ee9ee64bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_d62d8f64b733c31b6f9f27078f8ebde70529c422ca4f5da53aeb20ee9ee64bb1->leave($__internal_d62d8f64b733c31b6f9f27078f8ebde70529c422ca4f5da53aeb20ee9ee64bb1_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_fe9a224aa51557d26c1771c74c15cfb790ddcaa747de414627d0dcc395928ea9 = $this->env->getExtension("native_profiler");
        $__internal_fe9a224aa51557d26c1771c74c15cfb790ddcaa747de414627d0dcc395928ea9->enter($__internal_fe9a224aa51557d26c1771c74c15cfb790ddcaa747de414627d0dcc395928ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_fe9a224aa51557d26c1771c74c15cfb790ddcaa747de414627d0dcc395928ea9->leave($__internal_fe9a224aa51557d26c1771c74c15cfb790ddcaa747de414627d0dcc395928ea9_prof);

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
