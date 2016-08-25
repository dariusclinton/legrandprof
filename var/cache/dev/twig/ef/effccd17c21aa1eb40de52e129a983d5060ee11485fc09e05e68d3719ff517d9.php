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
        $__internal_d27fd10e981f7882ac56f168a6d06e98495990f4ed5753eff23896a2959eecd8 = $this->env->getExtension("native_profiler");
        $__internal_d27fd10e981f7882ac56f168a6d06e98495990f4ed5753eff23896a2959eecd8->enter($__internal_d27fd10e981f7882ac56f168a6d06e98495990f4ed5753eff23896a2959eecd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d27fd10e981f7882ac56f168a6d06e98495990f4ed5753eff23896a2959eecd8->leave($__internal_d27fd10e981f7882ac56f168a6d06e98495990f4ed5753eff23896a2959eecd8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_21221771c2ba33aa17294fb351ed54e4ca1b9770e7c6b78377fd6cad50c3ac0c = $this->env->getExtension("native_profiler");
        $__internal_21221771c2ba33aa17294fb351ed54e4ca1b9770e7c6b78377fd6cad50c3ac0c->enter($__internal_21221771c2ba33aa17294fb351ed54e4ca1b9770e7c6b78377fd6cad50c3ac0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_21221771c2ba33aa17294fb351ed54e4ca1b9770e7c6b78377fd6cad50c3ac0c->leave($__internal_21221771c2ba33aa17294fb351ed54e4ca1b9770e7c6b78377fd6cad50c3ac0c_prof);

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
