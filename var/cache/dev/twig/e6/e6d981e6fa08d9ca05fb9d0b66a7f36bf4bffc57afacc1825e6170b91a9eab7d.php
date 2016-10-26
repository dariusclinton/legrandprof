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
        $__internal_41918784bad69a012fe7cf3e12b42ba9e404da319326f82d3dc4df5e3136c8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41918784bad69a012fe7cf3e12b42ba9e404da319326f82d3dc4df5e3136c8dc->enter($__internal_41918784bad69a012fe7cf3e12b42ba9e404da319326f82d3dc4df5e3136c8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_41918784bad69a012fe7cf3e12b42ba9e404da319326f82d3dc4df5e3136c8dc->leave($__internal_41918784bad69a012fe7cf3e12b42ba9e404da319326f82d3dc4df5e3136c8dc_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_e7ed0dffe9d9d9ec64955e7333496a5fcefb116d4d535904c613b643b5c26d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ed0dffe9d9d9ec64955e7333496a5fcefb116d4d535904c613b643b5c26d44->enter($__internal_e7ed0dffe9d9d9ec64955e7333496a5fcefb116d4d535904c613b643b5c26d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_e7ed0dffe9d9d9ec64955e7333496a5fcefb116d4d535904c613b643b5c26d44->leave($__internal_e7ed0dffe9d9d9ec64955e7333496a5fcefb116d4d535904c613b643b5c26d44_prof);

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
