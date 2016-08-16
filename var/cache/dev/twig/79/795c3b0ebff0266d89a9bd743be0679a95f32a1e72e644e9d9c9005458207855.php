<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e3b6f24e444bf886ec53293b4a63b53f11bd74ebb2cd59edae68a3b385d93fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_509fa8ddd522d520df2d4aa78d99054a24517a719338cb98222aedf37a121bdc = $this->env->getExtension("native_profiler");
        $__internal_509fa8ddd522d520df2d4aa78d99054a24517a719338cb98222aedf37a121bdc->enter($__internal_509fa8ddd522d520df2d4aa78d99054a24517a719338cb98222aedf37a121bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_509fa8ddd522d520df2d4aa78d99054a24517a719338cb98222aedf37a121bdc->leave($__internal_509fa8ddd522d520df2d4aa78d99054a24517a719338cb98222aedf37a121bdc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6fe7486ad5d22ff19e68840a32b483dbbafd4cc376d9e53b21582d241f6a306 = $this->env->getExtension("native_profiler");
        $__internal_c6fe7486ad5d22ff19e68840a32b483dbbafd4cc376d9e53b21582d241f6a306->enter($__internal_c6fe7486ad5d22ff19e68840a32b483dbbafd4cc376d9e53b21582d241f6a306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_c6fe7486ad5d22ff19e68840a32b483dbbafd4cc376d9e53b21582d241f6a306->leave($__internal_c6fe7486ad5d22ff19e68840a32b483dbbafd4cc376d9e53b21582d241f6a306_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
