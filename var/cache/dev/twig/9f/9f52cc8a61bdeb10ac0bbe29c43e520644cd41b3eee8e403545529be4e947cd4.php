<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_225c0888c8d9bd7f5f76296f77ed0a56a0831e7eb5b1398311b8df0a873451e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_95e3e6ddd5adcef3f6b022671fd8a1f1dd8f861707d21d5bad3697521f3ae387 = $this->env->getExtension("native_profiler");
        $__internal_95e3e6ddd5adcef3f6b022671fd8a1f1dd8f861707d21d5bad3697521f3ae387->enter($__internal_95e3e6ddd5adcef3f6b022671fd8a1f1dd8f861707d21d5bad3697521f3ae387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e3e6ddd5adcef3f6b022671fd8a1f1dd8f861707d21d5bad3697521f3ae387->leave($__internal_95e3e6ddd5adcef3f6b022671fd8a1f1dd8f861707d21d5bad3697521f3ae387_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0991464589f712e15ff48b2e8b20dd976e26431c0d438490f955df37487d8b94 = $this->env->getExtension("native_profiler");
        $__internal_0991464589f712e15ff48b2e8b20dd976e26431c0d438490f955df37487d8b94->enter($__internal_0991464589f712e15ff48b2e8b20dd976e26431c0d438490f955df37487d8b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_0991464589f712e15ff48b2e8b20dd976e26431c0d438490f955df37487d8b94->leave($__internal_0991464589f712e15ff48b2e8b20dd976e26431c0d438490f955df37487d8b94_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
