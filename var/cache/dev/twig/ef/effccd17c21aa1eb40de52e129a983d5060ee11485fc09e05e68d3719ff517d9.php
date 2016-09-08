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
        $__internal_757af65cad7c5f25c437e33db7808ef6971f2ba0945fbbd4f9031f41a070a15a = $this->env->getExtension("native_profiler");
        $__internal_757af65cad7c5f25c437e33db7808ef6971f2ba0945fbbd4f9031f41a070a15a->enter($__internal_757af65cad7c5f25c437e33db7808ef6971f2ba0945fbbd4f9031f41a070a15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_757af65cad7c5f25c437e33db7808ef6971f2ba0945fbbd4f9031f41a070a15a->leave($__internal_757af65cad7c5f25c437e33db7808ef6971f2ba0945fbbd4f9031f41a070a15a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cdd93ae877372f632cff83964152db94a7bd68d167ccbb1679d26d5b6001e5c = $this->env->getExtension("native_profiler");
        $__internal_0cdd93ae877372f632cff83964152db94a7bd68d167ccbb1679d26d5b6001e5c->enter($__internal_0cdd93ae877372f632cff83964152db94a7bd68d167ccbb1679d26d5b6001e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_0cdd93ae877372f632cff83964152db94a7bd68d167ccbb1679d26d5b6001e5c->leave($__internal_0cdd93ae877372f632cff83964152db94a7bd68d167ccbb1679d26d5b6001e5c_prof);

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
