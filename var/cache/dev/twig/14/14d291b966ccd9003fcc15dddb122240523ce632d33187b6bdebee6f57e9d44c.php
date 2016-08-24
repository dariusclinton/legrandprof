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
        $__internal_76990c63bf5e473ffdd408a9252ed5a81925b22c04aa0f1bd2bdf634a9219b3f = $this->env->getExtension("native_profiler");
        $__internal_76990c63bf5e473ffdd408a9252ed5a81925b22c04aa0f1bd2bdf634a9219b3f->enter($__internal_76990c63bf5e473ffdd408a9252ed5a81925b22c04aa0f1bd2bdf634a9219b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76990c63bf5e473ffdd408a9252ed5a81925b22c04aa0f1bd2bdf634a9219b3f->leave($__internal_76990c63bf5e473ffdd408a9252ed5a81925b22c04aa0f1bd2bdf634a9219b3f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f3a237484a7e23106bd27928daf8d552e961bed86313895bedd2b36edd94128 = $this->env->getExtension("native_profiler");
        $__internal_7f3a237484a7e23106bd27928daf8d552e961bed86313895bedd2b36edd94128->enter($__internal_7f3a237484a7e23106bd27928daf8d552e961bed86313895bedd2b36edd94128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_7f3a237484a7e23106bd27928daf8d552e961bed86313895bedd2b36edd94128->leave($__internal_7f3a237484a7e23106bd27928daf8d552e961bed86313895bedd2b36edd94128_prof);

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
