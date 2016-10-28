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
        $__internal_025ab67ca5e056d5ff83c4fd2bbb14b699e3dad8d8a7605aabd5f3be66291ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025ab67ca5e056d5ff83c4fd2bbb14b699e3dad8d8a7605aabd5f3be66291ffb->enter($__internal_025ab67ca5e056d5ff83c4fd2bbb14b699e3dad8d8a7605aabd5f3be66291ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_025ab67ca5e056d5ff83c4fd2bbb14b699e3dad8d8a7605aabd5f3be66291ffb->leave($__internal_025ab67ca5e056d5ff83c4fd2bbb14b699e3dad8d8a7605aabd5f3be66291ffb_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_acac9ffc1cc5c6ab36376b1e76c4fd52a2f98d69a218cf4a5f0223e440567f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acac9ffc1cc5c6ab36376b1e76c4fd52a2f98d69a218cf4a5f0223e440567f0e->enter($__internal_acac9ffc1cc5c6ab36376b1e76c4fd52a2f98d69a218cf4a5f0223e440567f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_acac9ffc1cc5c6ab36376b1e76c4fd52a2f98d69a218cf4a5f0223e440567f0e->leave($__internal_acac9ffc1cc5c6ab36376b1e76c4fd52a2f98d69a218cf4a5f0223e440567f0e_prof);

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
