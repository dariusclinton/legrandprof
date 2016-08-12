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
        $__internal_b949e3d8e89c99463f335d8e8459bbd1d5399a3f3b1e1c7a81cf90c3a89c1a47 = $this->env->getExtension("native_profiler");
        $__internal_b949e3d8e89c99463f335d8e8459bbd1d5399a3f3b1e1c7a81cf90c3a89c1a47->enter($__internal_b949e3d8e89c99463f335d8e8459bbd1d5399a3f3b1e1c7a81cf90c3a89c1a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b949e3d8e89c99463f335d8e8459bbd1d5399a3f3b1e1c7a81cf90c3a89c1a47->leave($__internal_b949e3d8e89c99463f335d8e8459bbd1d5399a3f3b1e1c7a81cf90c3a89c1a47_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f77dbd3be4f4781d0dda4a1aced5df146ae48d304f3f8aa6cb55ad8ed2d77cb = $this->env->getExtension("native_profiler");
        $__internal_5f77dbd3be4f4781d0dda4a1aced5df146ae48d304f3f8aa6cb55ad8ed2d77cb->enter($__internal_5f77dbd3be4f4781d0dda4a1aced5df146ae48d304f3f8aa6cb55ad8ed2d77cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5f77dbd3be4f4781d0dda4a1aced5df146ae48d304f3f8aa6cb55ad8ed2d77cb->leave($__internal_5f77dbd3be4f4781d0dda4a1aced5df146ae48d304f3f8aa6cb55ad8ed2d77cb_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_46d6e5c540b168afe8c4b844457300dc6c72eb8bf52f97b5a93aeba92c88e9fb = $this->env->getExtension("native_profiler");
        $__internal_46d6e5c540b168afe8c4b844457300dc6c72eb8bf52f97b5a93aeba92c88e9fb->enter($__internal_46d6e5c540b168afe8c4b844457300dc6c72eb8bf52f97b5a93aeba92c88e9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_46d6e5c540b168afe8c4b844457300dc6c72eb8bf52f97b5a93aeba92c88e9fb->leave($__internal_46d6e5c540b168afe8c4b844457300dc6c72eb8bf52f97b5a93aeba92c88e9fb_prof);

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
