<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dbd5d53f0cc3680a412195cd06fb3539dffb4db7a587f89e1e87b780209aa671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_798b94827707f32a13024109abaf11622de5b5ac9d9415c45db325354a073cd5 = $this->env->getExtension("native_profiler");
        $__internal_798b94827707f32a13024109abaf11622de5b5ac9d9415c45db325354a073cd5->enter($__internal_798b94827707f32a13024109abaf11622de5b5ac9d9415c45db325354a073cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_798b94827707f32a13024109abaf11622de5b5ac9d9415c45db325354a073cd5->leave($__internal_798b94827707f32a13024109abaf11622de5b5ac9d9415c45db325354a073cd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6b83f730f6cee5e0b0aa0ecd11a4b74f37690e8adab56af01eecbc169772e09 = $this->env->getExtension("native_profiler");
        $__internal_f6b83f730f6cee5e0b0aa0ecd11a4b74f37690e8adab56af01eecbc169772e09->enter($__internal_f6b83f730f6cee5e0b0aa0ecd11a4b74f37690e8adab56af01eecbc169772e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_f6b83f730f6cee5e0b0aa0ecd11a4b74f37690e8adab56af01eecbc169772e09->leave($__internal_f6b83f730f6cee5e0b0aa0ecd11a4b74f37690e8adab56af01eecbc169772e09_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
