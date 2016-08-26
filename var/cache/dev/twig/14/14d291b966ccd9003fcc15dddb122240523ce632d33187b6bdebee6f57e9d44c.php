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
        $__internal_aa601067617fac47bc60d1c6d93411d3bcf6fef640b58d00694c0e5e720dd5e6 = $this->env->getExtension("native_profiler");
        $__internal_aa601067617fac47bc60d1c6d93411d3bcf6fef640b58d00694c0e5e720dd5e6->enter($__internal_aa601067617fac47bc60d1c6d93411d3bcf6fef640b58d00694c0e5e720dd5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa601067617fac47bc60d1c6d93411d3bcf6fef640b58d00694c0e5e720dd5e6->leave($__internal_aa601067617fac47bc60d1c6d93411d3bcf6fef640b58d00694c0e5e720dd5e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_234f54dc58606b346c70fd482f1708e7e6ea24f89d824ac16041fca87f6231bb = $this->env->getExtension("native_profiler");
        $__internal_234f54dc58606b346c70fd482f1708e7e6ea24f89d824ac16041fca87f6231bb->enter($__internal_234f54dc58606b346c70fd482f1708e7e6ea24f89d824ac16041fca87f6231bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_234f54dc58606b346c70fd482f1708e7e6ea24f89d824ac16041fca87f6231bb->leave($__internal_234f54dc58606b346c70fd482f1708e7e6ea24f89d824ac16041fca87f6231bb_prof);

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
