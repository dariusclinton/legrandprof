<?php

/* @LGPUser/Registration/register.html.twig */
class __TwigTemplate_7fee79d169dc4609d180808d7c2a6cdfc7cb7aed15a819309c1b79c098c137b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a03beac3940fae43dd556c41e642957d89973ba4330f2d3a8c2c6895c7654357 = $this->env->getExtension("native_profiler");
        $__internal_a03beac3940fae43dd556c41e642957d89973ba4330f2d3a8c2c6895c7654357->enter($__internal_a03beac3940fae43dd556c41e642957d89973ba4330f2d3a8c2c6895c7654357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03beac3940fae43dd556c41e642957d89973ba4330f2d3a8c2c6895c7654357->leave($__internal_a03beac3940fae43dd556c41e642957d89973ba4330f2d3a8c2c6895c7654357_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2eee49dcd0050dbc08b550e1804a05b93aeb4c780b11ef127e5c93d5de2a9532 = $this->env->getExtension("native_profiler");
        $__internal_2eee49dcd0050dbc08b550e1804a05b93aeb4c780b11ef127e5c93d5de2a9532->enter($__internal_2eee49dcd0050dbc08b550e1804a05b93aeb4c780b11ef127e5c93d5de2a9532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_2eee49dcd0050dbc08b550e1804a05b93aeb4c780b11ef127e5c93d5de2a9532->leave($__internal_2eee49dcd0050dbc08b550e1804a05b93aeb4c780b11ef127e5c93d5de2a9532_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*   {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
