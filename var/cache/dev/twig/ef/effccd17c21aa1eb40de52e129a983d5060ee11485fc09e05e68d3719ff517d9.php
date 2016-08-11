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
        $__internal_29ccae4406075453af6201bf50cf5f5e6cf116d84779486d0866ec4a74dfefa8 = $this->env->getExtension("native_profiler");
        $__internal_29ccae4406075453af6201bf50cf5f5e6cf116d84779486d0866ec4a74dfefa8->enter($__internal_29ccae4406075453af6201bf50cf5f5e6cf116d84779486d0866ec4a74dfefa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29ccae4406075453af6201bf50cf5f5e6cf116d84779486d0866ec4a74dfefa8->leave($__internal_29ccae4406075453af6201bf50cf5f5e6cf116d84779486d0866ec4a74dfefa8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1d706b7cbee472b0ed110bc493204e7f46853f3d935ba6858ab8a0a012d3980 = $this->env->getExtension("native_profiler");
        $__internal_a1d706b7cbee472b0ed110bc493204e7f46853f3d935ba6858ab8a0a012d3980->enter($__internal_a1d706b7cbee472b0ed110bc493204e7f46853f3d935ba6858ab8a0a012d3980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a1d706b7cbee472b0ed110bc493204e7f46853f3d935ba6858ab8a0a012d3980->leave($__internal_a1d706b7cbee472b0ed110bc493204e7f46853f3d935ba6858ab8a0a012d3980_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_02eb6e3b2a7beba56e6a0a1595843304d31fe7a7786a238380e58c2998a222d1 = $this->env->getExtension("native_profiler");
        $__internal_02eb6e3b2a7beba56e6a0a1595843304d31fe7a7786a238380e58c2998a222d1->enter($__internal_02eb6e3b2a7beba56e6a0a1595843304d31fe7a7786a238380e58c2998a222d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_02eb6e3b2a7beba56e6a0a1595843304d31fe7a7786a238380e58c2998a222d1->leave($__internal_02eb6e3b2a7beba56e6a0a1595843304d31fe7a7786a238380e58c2998a222d1_prof);

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
