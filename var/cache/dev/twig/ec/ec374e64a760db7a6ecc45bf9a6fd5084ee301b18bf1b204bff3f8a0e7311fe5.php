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
        $__internal_c05bc090c06d18758a52e8a843db3274790464cd7fc02df5ddfac4acbd8fcf2f = $this->env->getExtension("native_profiler");
        $__internal_c05bc090c06d18758a52e8a843db3274790464cd7fc02df5ddfac4acbd8fcf2f->enter($__internal_c05bc090c06d18758a52e8a843db3274790464cd7fc02df5ddfac4acbd8fcf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_c05bc090c06d18758a52e8a843db3274790464cd7fc02df5ddfac4acbd8fcf2f->leave($__internal_c05bc090c06d18758a52e8a843db3274790464cd7fc02df5ddfac4acbd8fcf2f_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_415ef74a88646efae0ef6fc21411e770eb35d7dea206e07fe8f542678e7ac06f = $this->env->getExtension("native_profiler");
        $__internal_415ef74a88646efae0ef6fc21411e770eb35d7dea206e07fe8f542678e7ac06f->enter($__internal_415ef74a88646efae0ef6fc21411e770eb35d7dea206e07fe8f542678e7ac06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_415ef74a88646efae0ef6fc21411e770eb35d7dea206e07fe8f542678e7ac06f->leave($__internal_415ef74a88646efae0ef6fc21411e770eb35d7dea206e07fe8f542678e7ac06f_prof);

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
