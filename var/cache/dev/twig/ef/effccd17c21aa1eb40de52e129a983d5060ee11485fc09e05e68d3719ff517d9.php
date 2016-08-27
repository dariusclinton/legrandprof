<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f32e765ccf136cb3343384490dd8aefee9b0cf180039ffefc2bf389dbcfa304e = $this->env->getExtension("native_profiler");
        $__internal_f32e765ccf136cb3343384490dd8aefee9b0cf180039ffefc2bf389dbcfa304e->enter($__internal_f32e765ccf136cb3343384490dd8aefee9b0cf180039ffefc2bf389dbcfa304e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f32e765ccf136cb3343384490dd8aefee9b0cf180039ffefc2bf389dbcfa304e->leave($__internal_f32e765ccf136cb3343384490dd8aefee9b0cf180039ffefc2bf389dbcfa304e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e0cf645f4799284630484051cd8029a879ac7c861f3eb0218f8df6870b45112 = $this->env->getExtension("native_profiler");
        $__internal_7e0cf645f4799284630484051cd8029a879ac7c861f3eb0218f8df6870b45112->enter($__internal_7e0cf645f4799284630484051cd8029a879ac7c861f3eb0218f8df6870b45112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_7e0cf645f4799284630484051cd8029a879ac7c861f3eb0218f8df6870b45112->leave($__internal_7e0cf645f4799284630484051cd8029a879ac7c861f3eb0218f8df6870b45112_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
