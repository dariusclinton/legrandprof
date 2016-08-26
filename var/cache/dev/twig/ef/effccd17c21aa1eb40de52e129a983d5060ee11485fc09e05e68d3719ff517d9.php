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
        $__internal_367210a1375c8e869859e066cf028b729c69d365fc563eff9aea51d6c164e8aa = $this->env->getExtension("native_profiler");
        $__internal_367210a1375c8e869859e066cf028b729c69d365fc563eff9aea51d6c164e8aa->enter($__internal_367210a1375c8e869859e066cf028b729c69d365fc563eff9aea51d6c164e8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_367210a1375c8e869859e066cf028b729c69d365fc563eff9aea51d6c164e8aa->leave($__internal_367210a1375c8e869859e066cf028b729c69d365fc563eff9aea51d6c164e8aa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad6f48b34bbbc88127828f4947b9c7bf77babf041e43f4a4781530f3f3ede4d7 = $this->env->getExtension("native_profiler");
        $__internal_ad6f48b34bbbc88127828f4947b9c7bf77babf041e43f4a4781530f3f3ede4d7->enter($__internal_ad6f48b34bbbc88127828f4947b9c7bf77babf041e43f4a4781530f3f3ede4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_ad6f48b34bbbc88127828f4947b9c7bf77babf041e43f4a4781530f3f3ede4d7->leave($__internal_ad6f48b34bbbc88127828f4947b9c7bf77babf041e43f4a4781530f3f3ede4d7_prof);

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
