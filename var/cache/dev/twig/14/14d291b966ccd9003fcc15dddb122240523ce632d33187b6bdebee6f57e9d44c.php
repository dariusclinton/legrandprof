<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_2bdbb70e2a1c877fa248404006573ab42dcbdadcf20918b56371727ae9018878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_15775c8787ee410b801b215eb044a44e40c77a5663b8cf3b73ab863ea6a6c8ac = $this->env->getExtension("native_profiler");
        $__internal_15775c8787ee410b801b215eb044a44e40c77a5663b8cf3b73ab863ea6a6c8ac->enter($__internal_15775c8787ee410b801b215eb044a44e40c77a5663b8cf3b73ab863ea6a6c8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15775c8787ee410b801b215eb044a44e40c77a5663b8cf3b73ab863ea6a6c8ac->leave($__internal_15775c8787ee410b801b215eb044a44e40c77a5663b8cf3b73ab863ea6a6c8ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9ecec78d989d9b5cdc2f8ef7b9874f8a6cf647a1e33a5b0add39d1f046ba208 = $this->env->getExtension("native_profiler");
        $__internal_e9ecec78d989d9b5cdc2f8ef7b9874f8a6cf647a1e33a5b0add39d1f046ba208->enter($__internal_e9ecec78d989d9b5cdc2f8ef7b9874f8a6cf647a1e33a5b0add39d1f046ba208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e9ecec78d989d9b5cdc2f8ef7b9874f8a6cf647a1e33a5b0add39d1f046ba208->leave($__internal_e9ecec78d989d9b5cdc2f8ef7b9874f8a6cf647a1e33a5b0add39d1f046ba208_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
