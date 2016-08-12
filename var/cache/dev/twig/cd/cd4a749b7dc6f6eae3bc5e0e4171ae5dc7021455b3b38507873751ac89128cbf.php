<?php

/* @LGPCore/layout.html.twig */
class __TwigTemplate_129db1a7c18cdf2c8efd1b285948969fd5157eb8c89b733fd29a1b46cfa64f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LGPCore/layout.html.twig", 2);
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
        $__internal_70d9264e1e91a940bd476846d6462271287c812cf1cbddba48c10ff4deeb1b49 = $this->env->getExtension("native_profiler");
        $__internal_70d9264e1e91a940bd476846d6462271287c812cf1cbddba48c10ff4deeb1b49->enter($__internal_70d9264e1e91a940bd476846d6462271287c812cf1cbddba48c10ff4deeb1b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70d9264e1e91a940bd476846d6462271287c812cf1cbddba48c10ff4deeb1b49->leave($__internal_70d9264e1e91a940bd476846d6462271287c812cf1cbddba48c10ff4deeb1b49_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5841cc2335462e07814c6048667f79d9dd815f9710145542982d9aedf6170d81 = $this->env->getExtension("native_profiler");
        $__internal_5841cc2335462e07814c6048667f79d9dd815f9710145542982d9aedf6170d81->enter($__internal_5841cc2335462e07814c6048667f79d9dd815f9710145542982d9aedf6170d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5841cc2335462e07814c6048667f79d9dd815f9710145542982d9aedf6170d81->leave($__internal_5841cc2335462e07814c6048667f79d9dd815f9710145542982d9aedf6170d81_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_035eaf6d101c8aeeafae42739d38163996877adb93862fee34fadf66be97c2e5 = $this->env->getExtension("native_profiler");
        $__internal_035eaf6d101c8aeeafae42739d38163996877adb93862fee34fadf66be97c2e5->enter($__internal_035eaf6d101c8aeeafae42739d38163996877adb93862fee34fadf66be97c2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_035eaf6d101c8aeeafae42739d38163996877adb93862fee34fadf66be97c2e5->leave($__internal_035eaf6d101c8aeeafae42739d38163996877adb93862fee34fadf66be97c2e5_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCore/layout.html.twig";
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
