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
        $__internal_ad7adc8b086091964d5bc5b7f6ea3f5fc357919db371f7a6cde00e71d4c5607b = $this->env->getExtension("native_profiler");
        $__internal_ad7adc8b086091964d5bc5b7f6ea3f5fc357919db371f7a6cde00e71d4c5607b->enter($__internal_ad7adc8b086091964d5bc5b7f6ea3f5fc357919db371f7a6cde00e71d4c5607b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad7adc8b086091964d5bc5b7f6ea3f5fc357919db371f7a6cde00e71d4c5607b->leave($__internal_ad7adc8b086091964d5bc5b7f6ea3f5fc357919db371f7a6cde00e71d4c5607b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9756a3ff4e3ff72216b20a9f431c7cd1eff743b6c53e719378c12eaa1e70b631 = $this->env->getExtension("native_profiler");
        $__internal_9756a3ff4e3ff72216b20a9f431c7cd1eff743b6c53e719378c12eaa1e70b631->enter($__internal_9756a3ff4e3ff72216b20a9f431c7cd1eff743b6c53e719378c12eaa1e70b631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_9756a3ff4e3ff72216b20a9f431c7cd1eff743b6c53e719378c12eaa1e70b631->leave($__internal_9756a3ff4e3ff72216b20a9f431c7cd1eff743b6c53e719378c12eaa1e70b631_prof);

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
