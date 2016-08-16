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
        $__internal_a0b8e3942f451e1cfd4ed0aa3f1dd3deb66f8fdf79424eb817e0d5afaaddb4bb = $this->env->getExtension("native_profiler");
        $__internal_a0b8e3942f451e1cfd4ed0aa3f1dd3deb66f8fdf79424eb817e0d5afaaddb4bb->enter($__internal_a0b8e3942f451e1cfd4ed0aa3f1dd3deb66f8fdf79424eb817e0d5afaaddb4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0b8e3942f451e1cfd4ed0aa3f1dd3deb66f8fdf79424eb817e0d5afaaddb4bb->leave($__internal_a0b8e3942f451e1cfd4ed0aa3f1dd3deb66f8fdf79424eb817e0d5afaaddb4bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c046f22df4aa45fd72614c6adccc5c30a407791f54e9c6a75b38369ea666ef9e = $this->env->getExtension("native_profiler");
        $__internal_c046f22df4aa45fd72614c6adccc5c30a407791f54e9c6a75b38369ea666ef9e->enter($__internal_c046f22df4aa45fd72614c6adccc5c30a407791f54e9c6a75b38369ea666ef9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_c046f22df4aa45fd72614c6adccc5c30a407791f54e9c6a75b38369ea666ef9e->leave($__internal_c046f22df4aa45fd72614c6adccc5c30a407791f54e9c6a75b38369ea666ef9e_prof);

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
