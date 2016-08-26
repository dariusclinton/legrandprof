<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_80464fbf5868c0c8865ff25d806c3d60bd8e2ff3da8e6d052d8dd565e21d7503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_b182bb9fbcb62218fcd5fc5bd9e5f36c93bf930d2d1cc3bec3573da00d3923b0 = $this->env->getExtension("native_profiler");
        $__internal_b182bb9fbcb62218fcd5fc5bd9e5f36c93bf930d2d1cc3bec3573da00d3923b0->enter($__internal_b182bb9fbcb62218fcd5fc5bd9e5f36c93bf930d2d1cc3bec3573da00d3923b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b182bb9fbcb62218fcd5fc5bd9e5f36c93bf930d2d1cc3bec3573da00d3923b0->leave($__internal_b182bb9fbcb62218fcd5fc5bd9e5f36c93bf930d2d1cc3bec3573da00d3923b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8425ca0ce58b9be98da6873fbb662bdfd36166584c700f972ebfd4cc3403ae89 = $this->env->getExtension("native_profiler");
        $__internal_8425ca0ce58b9be98da6873fbb662bdfd36166584c700f972ebfd4cc3403ae89->enter($__internal_8425ca0ce58b9be98da6873fbb662bdfd36166584c700f972ebfd4cc3403ae89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_8425ca0ce58b9be98da6873fbb662bdfd36166584c700f972ebfd4cc3403ae89->leave($__internal_8425ca0ce58b9be98da6873fbb662bdfd36166584c700f972ebfd4cc3403ae89_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
