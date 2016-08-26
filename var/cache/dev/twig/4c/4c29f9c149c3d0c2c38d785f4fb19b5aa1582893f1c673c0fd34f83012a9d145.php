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
        $__internal_a43438cba48300ac5c77284a1f7a6a38343b47f479c442454c616c90b2061170 = $this->env->getExtension("native_profiler");
        $__internal_a43438cba48300ac5c77284a1f7a6a38343b47f479c442454c616c90b2061170->enter($__internal_a43438cba48300ac5c77284a1f7a6a38343b47f479c442454c616c90b2061170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a43438cba48300ac5c77284a1f7a6a38343b47f479c442454c616c90b2061170->leave($__internal_a43438cba48300ac5c77284a1f7a6a38343b47f479c442454c616c90b2061170_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d2964b205719b0e75cbf4c394b9f2d3ed41302a568a64f2df85c362eb8fed16 = $this->env->getExtension("native_profiler");
        $__internal_2d2964b205719b0e75cbf4c394b9f2d3ed41302a568a64f2df85c362eb8fed16->enter($__internal_2d2964b205719b0e75cbf4c394b9f2d3ed41302a568a64f2df85c362eb8fed16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_2d2964b205719b0e75cbf4c394b9f2d3ed41302a568a64f2df85c362eb8fed16->leave($__internal_2d2964b205719b0e75cbf4c394b9f2d3ed41302a568a64f2df85c362eb8fed16_prof);

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
