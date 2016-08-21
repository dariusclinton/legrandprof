<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_76424bd045e9bf1a54203252e1f6641525ea7cb92f51655ae854943cac288d79 extends Twig_Template
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
        $__internal_fb9b07cc9a2624a5825ac5adc04a244eb5e2d9f413864b10881a3e23949cbed2 = $this->env->getExtension("native_profiler");
        $__internal_fb9b07cc9a2624a5825ac5adc04a244eb5e2d9f413864b10881a3e23949cbed2->enter($__internal_fb9b07cc9a2624a5825ac5adc04a244eb5e2d9f413864b10881a3e23949cbed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb9b07cc9a2624a5825ac5adc04a244eb5e2d9f413864b10881a3e23949cbed2->leave($__internal_fb9b07cc9a2624a5825ac5adc04a244eb5e2d9f413864b10881a3e23949cbed2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0a91090f9db2086ee8679096c2e7305a7bd0074c208e25996df874f7da8a577 = $this->env->getExtension("native_profiler");
        $__internal_b0a91090f9db2086ee8679096c2e7305a7bd0074c208e25996df874f7da8a577->enter($__internal_b0a91090f9db2086ee8679096c2e7305a7bd0074c208e25996df874f7da8a577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_b0a91090f9db2086ee8679096c2e7305a7bd0074c208e25996df874f7da8a577->leave($__internal_b0a91090f9db2086ee8679096c2e7305a7bd0074c208e25996df874f7da8a577_prof);

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
