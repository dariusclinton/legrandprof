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
        $__internal_a6f2859b6f723981b5d6d9124fe3c7c32eff438fdb3f5a246680228a1640237a = $this->env->getExtension("native_profiler");
        $__internal_a6f2859b6f723981b5d6d9124fe3c7c32eff438fdb3f5a246680228a1640237a->enter($__internal_a6f2859b6f723981b5d6d9124fe3c7c32eff438fdb3f5a246680228a1640237a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6f2859b6f723981b5d6d9124fe3c7c32eff438fdb3f5a246680228a1640237a->leave($__internal_a6f2859b6f723981b5d6d9124fe3c7c32eff438fdb3f5a246680228a1640237a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fcc67bf4cd2a4866dc42cf75c4589107edac57b8f75737e9c4bfc876c13f685 = $this->env->getExtension("native_profiler");
        $__internal_6fcc67bf4cd2a4866dc42cf75c4589107edac57b8f75737e9c4bfc876c13f685->enter($__internal_6fcc67bf4cd2a4866dc42cf75c4589107edac57b8f75737e9c4bfc876c13f685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_6fcc67bf4cd2a4866dc42cf75c4589107edac57b8f75737e9c4bfc876c13f685->leave($__internal_6fcc67bf4cd2a4866dc42cf75c4589107edac57b8f75737e9c4bfc876c13f685_prof);

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
