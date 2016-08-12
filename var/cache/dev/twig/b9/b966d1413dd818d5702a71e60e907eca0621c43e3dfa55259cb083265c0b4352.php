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
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7767eb5dff2e064b854a61d6060f5392b7f77c6f0de8aa3e1923aec4d98fa66a = $this->env->getExtension("native_profiler");
        $__internal_7767eb5dff2e064b854a61d6060f5392b7f77c6f0de8aa3e1923aec4d98fa66a->enter($__internal_7767eb5dff2e064b854a61d6060f5392b7f77c6f0de8aa3e1923aec4d98fa66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7767eb5dff2e064b854a61d6060f5392b7f77c6f0de8aa3e1923aec4d98fa66a->leave($__internal_7767eb5dff2e064b854a61d6060f5392b7f77c6f0de8aa3e1923aec4d98fa66a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3001a2566d1724a7fcead78d5b21ba72e19a0ae68a754884d5acad52e2f93a98 = $this->env->getExtension("native_profiler");
        $__internal_3001a2566d1724a7fcead78d5b21ba72e19a0ae68a754884d5acad52e2f93a98->enter($__internal_3001a2566d1724a7fcead78d5b21ba72e19a0ae68a754884d5acad52e2f93a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3001a2566d1724a7fcead78d5b21ba72e19a0ae68a754884d5acad52e2f93a98->leave($__internal_3001a2566d1724a7fcead78d5b21ba72e19a0ae68a754884d5acad52e2f93a98_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e205c8100a5e02550e9fe3389d6fc859593ed9cb44256989e8284770d1d74141 = $this->env->getExtension("native_profiler");
        $__internal_e205c8100a5e02550e9fe3389d6fc859593ed9cb44256989e8284770d1d74141->enter($__internal_e205c8100a5e02550e9fe3389d6fc859593ed9cb44256989e8284770d1d74141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_e205c8100a5e02550e9fe3389d6fc859593ed9cb44256989e8284770d1d74141->leave($__internal_e205c8100a5e02550e9fe3389d6fc859593ed9cb44256989e8284770d1d74141_prof);

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
        return array (  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     */
/*  */
/* {% endblock %}*/
