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
        $__internal_e3f3c2dcaaa1bd03cb28247f1df3c388e50e4cc2826d013718a5b518b443f936 = $this->env->getExtension("native_profiler");
        $__internal_e3f3c2dcaaa1bd03cb28247f1df3c388e50e4cc2826d013718a5b518b443f936->enter($__internal_e3f3c2dcaaa1bd03cb28247f1df3c388e50e4cc2826d013718a5b518b443f936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_e3f3c2dcaaa1bd03cb28247f1df3c388e50e4cc2826d013718a5b518b443f936->leave($__internal_e3f3c2dcaaa1bd03cb28247f1df3c388e50e4cc2826d013718a5b518b443f936_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_e8a5e2dbefd0549debd140983abf475411516c524b44edf8cd5f88822adcb16a = $this->env->getExtension("native_profiler");
        $__internal_e8a5e2dbefd0549debd140983abf475411516c524b44edf8cd5f88822adcb16a->enter($__internal_e8a5e2dbefd0549debd140983abf475411516c524b44edf8cd5f88822adcb16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_e8a5e2dbefd0549debd140983abf475411516c524b44edf8cd5f88822adcb16a->leave($__internal_e8a5e2dbefd0549debd140983abf475411516c524b44edf8cd5f88822adcb16a_prof);

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
