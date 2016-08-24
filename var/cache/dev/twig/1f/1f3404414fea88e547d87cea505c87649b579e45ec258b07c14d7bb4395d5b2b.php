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
        $__internal_a97e9913e570bcd8452e8af9614d4f34e79d7c77913877c82e9d6c9adc716566 = $this->env->getExtension("native_profiler");
        $__internal_a97e9913e570bcd8452e8af9614d4f34e79d7c77913877c82e9d6c9adc716566->enter($__internal_a97e9913e570bcd8452e8af9614d4f34e79d7c77913877c82e9d6c9adc716566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a97e9913e570bcd8452e8af9614d4f34e79d7c77913877c82e9d6c9adc716566->leave($__internal_a97e9913e570bcd8452e8af9614d4f34e79d7c77913877c82e9d6c9adc716566_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b87355cd23966006129abd5782bccec9d5dc9e5a332a93520d1f02ad14a41d2 = $this->env->getExtension("native_profiler");
        $__internal_6b87355cd23966006129abd5782bccec9d5dc9e5a332a93520d1f02ad14a41d2->enter($__internal_6b87355cd23966006129abd5782bccec9d5dc9e5a332a93520d1f02ad14a41d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_6b87355cd23966006129abd5782bccec9d5dc9e5a332a93520d1f02ad14a41d2->leave($__internal_6b87355cd23966006129abd5782bccec9d5dc9e5a332a93520d1f02ad14a41d2_prof);

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
