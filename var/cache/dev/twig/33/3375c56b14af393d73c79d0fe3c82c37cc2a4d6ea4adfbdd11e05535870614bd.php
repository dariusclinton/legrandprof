<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_57a580726f6f38382b614b6cee9b7d20d12470429cc0ae9d2ecf1aac06549105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_484026562171b9e00e8b8cee34598ab277a640e38f21f41810ba6ca119a840cc = $this->env->getExtension("native_profiler");
        $__internal_484026562171b9e00e8b8cee34598ab277a640e38f21f41810ba6ca119a840cc->enter($__internal_484026562171b9e00e8b8cee34598ab277a640e38f21f41810ba6ca119a840cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_484026562171b9e00e8b8cee34598ab277a640e38f21f41810ba6ca119a840cc->leave($__internal_484026562171b9e00e8b8cee34598ab277a640e38f21f41810ba6ca119a840cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5ee31d36a76e6d12a3414f14b98820da0a047f724a1e6ae129620c6cac48f12 = $this->env->getExtension("native_profiler");
        $__internal_b5ee31d36a76e6d12a3414f14b98820da0a047f724a1e6ae129620c6cac48f12->enter($__internal_b5ee31d36a76e6d12a3414f14b98820da0a047f724a1e6ae129620c6cac48f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_b5ee31d36a76e6d12a3414f14b98820da0a047f724a1e6ae129620c6cac48f12->leave($__internal_b5ee31d36a76e6d12a3414f14b98820da0a047f724a1e6ae129620c6cac48f12_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
