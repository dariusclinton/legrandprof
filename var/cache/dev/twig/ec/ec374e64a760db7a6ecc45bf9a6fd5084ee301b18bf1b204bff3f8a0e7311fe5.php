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
        $__internal_ef539e666aefac704238fe9f41c81e552b4825a1dec927904582a1a2f0c3c0cb = $this->env->getExtension("native_profiler");
        $__internal_ef539e666aefac704238fe9f41c81e552b4825a1dec927904582a1a2f0c3c0cb->enter($__internal_ef539e666aefac704238fe9f41c81e552b4825a1dec927904582a1a2f0c3c0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_ef539e666aefac704238fe9f41c81e552b4825a1dec927904582a1a2f0c3c0cb->leave($__internal_ef539e666aefac704238fe9f41c81e552b4825a1dec927904582a1a2f0c3c0cb_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_434258ce1b2c0fc68703c7a96ac482f69476f599dc1d2eb3f0a56847f968afc8 = $this->env->getExtension("native_profiler");
        $__internal_434258ce1b2c0fc68703c7a96ac482f69476f599dc1d2eb3f0a56847f968afc8->enter($__internal_434258ce1b2c0fc68703c7a96ac482f69476f599dc1d2eb3f0a56847f968afc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_434258ce1b2c0fc68703c7a96ac482f69476f599dc1d2eb3f0a56847f968afc8->leave($__internal_434258ce1b2c0fc68703c7a96ac482f69476f599dc1d2eb3f0a56847f968afc8_prof);

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
