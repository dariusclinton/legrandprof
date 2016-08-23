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
        $__internal_c1697cbffe808eed00b46be54f84ecb64a845605f22ef2f019789b2e61e344ef = $this->env->getExtension("native_profiler");
        $__internal_c1697cbffe808eed00b46be54f84ecb64a845605f22ef2f019789b2e61e344ef->enter($__internal_c1697cbffe808eed00b46be54f84ecb64a845605f22ef2f019789b2e61e344ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1697cbffe808eed00b46be54f84ecb64a845605f22ef2f019789b2e61e344ef->leave($__internal_c1697cbffe808eed00b46be54f84ecb64a845605f22ef2f019789b2e61e344ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94a96717a71c2b50db1329f11ae5b3a5de8c48b0133d0ae79ea7531572d90b46 = $this->env->getExtension("native_profiler");
        $__internal_94a96717a71c2b50db1329f11ae5b3a5de8c48b0133d0ae79ea7531572d90b46->enter($__internal_94a96717a71c2b50db1329f11ae5b3a5de8c48b0133d0ae79ea7531572d90b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_94a96717a71c2b50db1329f11ae5b3a5de8c48b0133d0ae79ea7531572d90b46->leave($__internal_94a96717a71c2b50db1329f11ae5b3a5de8c48b0133d0ae79ea7531572d90b46_prof);

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
