<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_57d3219d6778f9a74b528e467d98a9bdf2a0f06d84e7ae65bdda4191fa1c3c3c extends Twig_Template
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
        $__internal_f78821450f9ff3f3d4e5d1d20aa93ff2d7d2ea56254cf3fe674767e018cb736d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78821450f9ff3f3d4e5d1d20aa93ff2d7d2ea56254cf3fe674767e018cb736d->enter($__internal_f78821450f9ff3f3d4e5d1d20aa93ff2d7d2ea56254cf3fe674767e018cb736d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_f78821450f9ff3f3d4e5d1d20aa93ff2d7d2ea56254cf3fe674767e018cb736d->leave($__internal_f78821450f9ff3f3d4e5d1d20aa93ff2d7d2ea56254cf3fe674767e018cb736d_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_724a317d6f0765f01519644565d6c40ff570a99f77d59d4d9933b85f393f3161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724a317d6f0765f01519644565d6c40ff570a99f77d59d4d9933b85f393f3161->enter($__internal_724a317d6f0765f01519644565d6c40ff570a99f77d59d4d9933b85f393f3161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_724a317d6f0765f01519644565d6c40ff570a99f77d59d4d9933b85f393f3161->leave($__internal_724a317d6f0765f01519644565d6c40ff570a99f77d59d4d9933b85f393f3161_prof);

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
