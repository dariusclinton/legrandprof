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
        $__internal_e5d651aa930a31874df0b7ea1ab095e5edb809ea0f0aba87f6dccd4f0096c62c = $this->env->getExtension("native_profiler");
        $__internal_e5d651aa930a31874df0b7ea1ab095e5edb809ea0f0aba87f6dccd4f0096c62c->enter($__internal_e5d651aa930a31874df0b7ea1ab095e5edb809ea0f0aba87f6dccd4f0096c62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5d651aa930a31874df0b7ea1ab095e5edb809ea0f0aba87f6dccd4f0096c62c->leave($__internal_e5d651aa930a31874df0b7ea1ab095e5edb809ea0f0aba87f6dccd4f0096c62c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e957b0b6599ffd3bd833f867ed3a6b5192b1b7966d1273883984284d9c47a431 = $this->env->getExtension("native_profiler");
        $__internal_e957b0b6599ffd3bd833f867ed3a6b5192b1b7966d1273883984284d9c47a431->enter($__internal_e957b0b6599ffd3bd833f867ed3a6b5192b1b7966d1273883984284d9c47a431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e957b0b6599ffd3bd833f867ed3a6b5192b1b7966d1273883984284d9c47a431->leave($__internal_e957b0b6599ffd3bd833f867ed3a6b5192b1b7966d1273883984284d9c47a431_prof);

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
