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
        $__internal_36a9f6f2063a8301b14a7603de07c75ab44a41ac35c67e0b7ac92ab57875a766 = $this->env->getExtension("native_profiler");
        $__internal_36a9f6f2063a8301b14a7603de07c75ab44a41ac35c67e0b7ac92ab57875a766->enter($__internal_36a9f6f2063a8301b14a7603de07c75ab44a41ac35c67e0b7ac92ab57875a766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_36a9f6f2063a8301b14a7603de07c75ab44a41ac35c67e0b7ac92ab57875a766->leave($__internal_36a9f6f2063a8301b14a7603de07c75ab44a41ac35c67e0b7ac92ab57875a766_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_96ffed0db15cda5f9895587470fe7ad5a1eccc5aedf2459f69c96e20e355144f = $this->env->getExtension("native_profiler");
        $__internal_96ffed0db15cda5f9895587470fe7ad5a1eccc5aedf2459f69c96e20e355144f->enter($__internal_96ffed0db15cda5f9895587470fe7ad5a1eccc5aedf2459f69c96e20e355144f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_96ffed0db15cda5f9895587470fe7ad5a1eccc5aedf2459f69c96e20e355144f->leave($__internal_96ffed0db15cda5f9895587470fe7ad5a1eccc5aedf2459f69c96e20e355144f_prof);

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
