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
        $__internal_2430e280469bf734cff7de5aad7722cd6f88f5a46ab1649b939140a8057868cc = $this->env->getExtension("native_profiler");
        $__internal_2430e280469bf734cff7de5aad7722cd6f88f5a46ab1649b939140a8057868cc->enter($__internal_2430e280469bf734cff7de5aad7722cd6f88f5a46ab1649b939140a8057868cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2430e280469bf734cff7de5aad7722cd6f88f5a46ab1649b939140a8057868cc->leave($__internal_2430e280469bf734cff7de5aad7722cd6f88f5a46ab1649b939140a8057868cc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c73c4036e43f39f49748a6dce1fbefdab683bbc0ce14326073793594ef0ee01b = $this->env->getExtension("native_profiler");
        $__internal_c73c4036e43f39f49748a6dce1fbefdab683bbc0ce14326073793594ef0ee01b->enter($__internal_c73c4036e43f39f49748a6dce1fbefdab683bbc0ce14326073793594ef0ee01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_c73c4036e43f39f49748a6dce1fbefdab683bbc0ce14326073793594ef0ee01b->leave($__internal_c73c4036e43f39f49748a6dce1fbefdab683bbc0ce14326073793594ef0ee01b_prof);

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
