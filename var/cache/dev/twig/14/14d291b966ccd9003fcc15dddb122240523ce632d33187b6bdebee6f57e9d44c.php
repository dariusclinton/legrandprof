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
        $__internal_f87339cbafcf1e08cd32416679ad5b14f55e7b1643fbc9f1d027608a54f13393 = $this->env->getExtension("native_profiler");
        $__internal_f87339cbafcf1e08cd32416679ad5b14f55e7b1643fbc9f1d027608a54f13393->enter($__internal_f87339cbafcf1e08cd32416679ad5b14f55e7b1643fbc9f1d027608a54f13393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f87339cbafcf1e08cd32416679ad5b14f55e7b1643fbc9f1d027608a54f13393->leave($__internal_f87339cbafcf1e08cd32416679ad5b14f55e7b1643fbc9f1d027608a54f13393_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_faf86916de8d1ac2f154f0132b4d3ca124dd2d7b156c97856a4338db11cb45a5 = $this->env->getExtension("native_profiler");
        $__internal_faf86916de8d1ac2f154f0132b4d3ca124dd2d7b156c97856a4338db11cb45a5->enter($__internal_faf86916de8d1ac2f154f0132b4d3ca124dd2d7b156c97856a4338db11cb45a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_faf86916de8d1ac2f154f0132b4d3ca124dd2d7b156c97856a4338db11cb45a5->leave($__internal_faf86916de8d1ac2f154f0132b4d3ca124dd2d7b156c97856a4338db11cb45a5_prof);

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
