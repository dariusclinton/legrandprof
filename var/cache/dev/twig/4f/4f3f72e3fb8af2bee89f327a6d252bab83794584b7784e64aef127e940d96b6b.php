<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_86a935adb1bdc7f5667babde57bac0c8d0799aa6e744917caae4b9314b8784ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_8b5049560ec958f0dd4da4b950de0c14e19da958d703832906e718340d37eee0 = $this->env->getExtension("native_profiler");
        $__internal_8b5049560ec958f0dd4da4b950de0c14e19da958d703832906e718340d37eee0->enter($__internal_8b5049560ec958f0dd4da4b950de0c14e19da958d703832906e718340d37eee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b5049560ec958f0dd4da4b950de0c14e19da958d703832906e718340d37eee0->leave($__internal_8b5049560ec958f0dd4da4b950de0c14e19da958d703832906e718340d37eee0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3230e56ae5d48023c50787438e7c8d4271fd4d8ba8a36e19066df23c2af2c363 = $this->env->getExtension("native_profiler");
        $__internal_3230e56ae5d48023c50787438e7c8d4271fd4d8ba8a36e19066df23c2af2c363->enter($__internal_3230e56ae5d48023c50787438e7c8d4271fd4d8ba8a36e19066df23c2af2c363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_3230e56ae5d48023c50787438e7c8d4271fd4d8ba8a36e19066df23c2af2c363->leave($__internal_3230e56ae5d48023c50787438e7c8d4271fd4d8ba8a36e19066df23c2af2c363_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
