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
        $__internal_b0adc8d5e2ae77f1cb8c504802dc50b33aa56e80a0379a834c1c256b07b6f8b4 = $this->env->getExtension("native_profiler");
        $__internal_b0adc8d5e2ae77f1cb8c504802dc50b33aa56e80a0379a834c1c256b07b6f8b4->enter($__internal_b0adc8d5e2ae77f1cb8c504802dc50b33aa56e80a0379a834c1c256b07b6f8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0adc8d5e2ae77f1cb8c504802dc50b33aa56e80a0379a834c1c256b07b6f8b4->leave($__internal_b0adc8d5e2ae77f1cb8c504802dc50b33aa56e80a0379a834c1c256b07b6f8b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_645713bffdf318cf95be51919f2ed6b696bf8604a063318460fb1a5bebe09417 = $this->env->getExtension("native_profiler");
        $__internal_645713bffdf318cf95be51919f2ed6b696bf8604a063318460fb1a5bebe09417->enter($__internal_645713bffdf318cf95be51919f2ed6b696bf8604a063318460fb1a5bebe09417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_645713bffdf318cf95be51919f2ed6b696bf8604a063318460fb1a5bebe09417->leave($__internal_645713bffdf318cf95be51919f2ed6b696bf8604a063318460fb1a5bebe09417_prof);

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
