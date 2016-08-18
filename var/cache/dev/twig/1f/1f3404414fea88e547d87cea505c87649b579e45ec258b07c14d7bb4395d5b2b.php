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
        $__internal_c5e0e4d5f9c3c7a06a1850d02bbdb1acff8ff16cf299165e6df10792fb1f227b = $this->env->getExtension("native_profiler");
        $__internal_c5e0e4d5f9c3c7a06a1850d02bbdb1acff8ff16cf299165e6df10792fb1f227b->enter($__internal_c5e0e4d5f9c3c7a06a1850d02bbdb1acff8ff16cf299165e6df10792fb1f227b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5e0e4d5f9c3c7a06a1850d02bbdb1acff8ff16cf299165e6df10792fb1f227b->leave($__internal_c5e0e4d5f9c3c7a06a1850d02bbdb1acff8ff16cf299165e6df10792fb1f227b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f0650c38fe1a4d529ec038328fef09aeadf7f5edda69299b25d134f697d4aeb = $this->env->getExtension("native_profiler");
        $__internal_0f0650c38fe1a4d529ec038328fef09aeadf7f5edda69299b25d134f697d4aeb->enter($__internal_0f0650c38fe1a4d529ec038328fef09aeadf7f5edda69299b25d134f697d4aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_0f0650c38fe1a4d529ec038328fef09aeadf7f5edda69299b25d134f697d4aeb->leave($__internal_0f0650c38fe1a4d529ec038328fef09aeadf7f5edda69299b25d134f697d4aeb_prof);

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
