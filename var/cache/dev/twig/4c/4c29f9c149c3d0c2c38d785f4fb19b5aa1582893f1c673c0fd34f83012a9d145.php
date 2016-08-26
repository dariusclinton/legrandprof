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
        $__internal_acf5e5815cdc5eb21c23e412a51c000866d7b6538553505ec6ce1869f622ebfd = $this->env->getExtension("native_profiler");
        $__internal_acf5e5815cdc5eb21c23e412a51c000866d7b6538553505ec6ce1869f622ebfd->enter($__internal_acf5e5815cdc5eb21c23e412a51c000866d7b6538553505ec6ce1869f622ebfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acf5e5815cdc5eb21c23e412a51c000866d7b6538553505ec6ce1869f622ebfd->leave($__internal_acf5e5815cdc5eb21c23e412a51c000866d7b6538553505ec6ce1869f622ebfd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f60f40c2e35bb71d3c00084310a3201d057c13027e71f78afca3e55fe418009a = $this->env->getExtension("native_profiler");
        $__internal_f60f40c2e35bb71d3c00084310a3201d057c13027e71f78afca3e55fe418009a->enter($__internal_f60f40c2e35bb71d3c00084310a3201d057c13027e71f78afca3e55fe418009a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f60f40c2e35bb71d3c00084310a3201d057c13027e71f78afca3e55fe418009a->leave($__internal_f60f40c2e35bb71d3c00084310a3201d057c13027e71f78afca3e55fe418009a_prof);

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
