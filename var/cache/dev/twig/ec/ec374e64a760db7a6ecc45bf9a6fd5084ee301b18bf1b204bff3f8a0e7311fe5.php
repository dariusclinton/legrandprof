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
        $__internal_599cd98ec89cbcfe4146b84715e94b0a050f7fde21ed764d3af7ccc2492df327 = $this->env->getExtension("native_profiler");
        $__internal_599cd98ec89cbcfe4146b84715e94b0a050f7fde21ed764d3af7ccc2492df327->enter($__internal_599cd98ec89cbcfe4146b84715e94b0a050f7fde21ed764d3af7ccc2492df327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_599cd98ec89cbcfe4146b84715e94b0a050f7fde21ed764d3af7ccc2492df327->leave($__internal_599cd98ec89cbcfe4146b84715e94b0a050f7fde21ed764d3af7ccc2492df327_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_0c9365b761a346346d4775fa8168790ef41b862eb9a897ce2c08ad2d4cad8467 = $this->env->getExtension("native_profiler");
        $__internal_0c9365b761a346346d4775fa8168790ef41b862eb9a897ce2c08ad2d4cad8467->enter($__internal_0c9365b761a346346d4775fa8168790ef41b862eb9a897ce2c08ad2d4cad8467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_0c9365b761a346346d4775fa8168790ef41b862eb9a897ce2c08ad2d4cad8467->leave($__internal_0c9365b761a346346d4775fa8168790ef41b862eb9a897ce2c08ad2d4cad8467_prof);

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
