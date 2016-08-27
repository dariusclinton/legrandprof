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
        $__internal_16d9ad6b8aa01f5d388eecbb87183e76dec523dabbc1832d8638a5b3d7154e6a = $this->env->getExtension("native_profiler");
        $__internal_16d9ad6b8aa01f5d388eecbb87183e76dec523dabbc1832d8638a5b3d7154e6a->enter($__internal_16d9ad6b8aa01f5d388eecbb87183e76dec523dabbc1832d8638a5b3d7154e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16d9ad6b8aa01f5d388eecbb87183e76dec523dabbc1832d8638a5b3d7154e6a->leave($__internal_16d9ad6b8aa01f5d388eecbb87183e76dec523dabbc1832d8638a5b3d7154e6a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20a26213d08fc02596624f46ce18d3e4a229bc55fdecc0b411cfb9668c81548a = $this->env->getExtension("native_profiler");
        $__internal_20a26213d08fc02596624f46ce18d3e4a229bc55fdecc0b411cfb9668c81548a->enter($__internal_20a26213d08fc02596624f46ce18d3e4a229bc55fdecc0b411cfb9668c81548a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_20a26213d08fc02596624f46ce18d3e4a229bc55fdecc0b411cfb9668c81548a->leave($__internal_20a26213d08fc02596624f46ce18d3e4a229bc55fdecc0b411cfb9668c81548a_prof);

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
