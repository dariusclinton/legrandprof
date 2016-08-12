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
        $__internal_0eb6cb8008f8b4cce36fb6fb7fc901dec03b0448a7d1c58530604aa520555261 = $this->env->getExtension("native_profiler");
        $__internal_0eb6cb8008f8b4cce36fb6fb7fc901dec03b0448a7d1c58530604aa520555261->enter($__internal_0eb6cb8008f8b4cce36fb6fb7fc901dec03b0448a7d1c58530604aa520555261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eb6cb8008f8b4cce36fb6fb7fc901dec03b0448a7d1c58530604aa520555261->leave($__internal_0eb6cb8008f8b4cce36fb6fb7fc901dec03b0448a7d1c58530604aa520555261_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7265a09a3e56738f4d14b7e2e3c6267bf4632d11200527707c456a66b2462b5 = $this->env->getExtension("native_profiler");
        $__internal_b7265a09a3e56738f4d14b7e2e3c6267bf4632d11200527707c456a66b2462b5->enter($__internal_b7265a09a3e56738f4d14b7e2e3c6267bf4632d11200527707c456a66b2462b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b7265a09a3e56738f4d14b7e2e3c6267bf4632d11200527707c456a66b2462b5->leave($__internal_b7265a09a3e56738f4d14b7e2e3c6267bf4632d11200527707c456a66b2462b5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9576a576195dc1f1d538cd54cd251728bebc46a4bf332482d6acaf7c03398a6 = $this->env->getExtension("native_profiler");
        $__internal_f9576a576195dc1f1d538cd54cd251728bebc46a4bf332482d6acaf7c03398a6->enter($__internal_f9576a576195dc1f1d538cd54cd251728bebc46a4bf332482d6acaf7c03398a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_f9576a576195dc1f1d538cd54cd251728bebc46a4bf332482d6acaf7c03398a6->leave($__internal_f9576a576195dc1f1d538cd54cd251728bebc46a4bf332482d6acaf7c03398a6_prof);

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
