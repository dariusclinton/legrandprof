<?php

/* ::base.html.twig */
class __TwigTemplate_8fa811fc65623047773a627e091d7f138fe251551514b074c0f87dfe051c38a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c95fdf0e14197c543b066223346d6e35a537671ec897618974e5b1bc16418535 = $this->env->getExtension("native_profiler");
        $__internal_c95fdf0e14197c543b066223346d6e35a537671ec897618974e5b1bc16418535->enter($__internal_c95fdf0e14197c543b066223346d6e35a537671ec897618974e5b1bc16418535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c95fdf0e14197c543b066223346d6e35a537671ec897618974e5b1bc16418535->leave($__internal_c95fdf0e14197c543b066223346d6e35a537671ec897618974e5b1bc16418535_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f3b433834a13f1bec90b1341624a4a89f7b23bb3026ae476e6251f9dd9921a4 = $this->env->getExtension("native_profiler");
        $__internal_2f3b433834a13f1bec90b1341624a4a89f7b23bb3026ae476e6251f9dd9921a4->enter($__internal_2f3b433834a13f1bec90b1341624a4a89f7b23bb3026ae476e6251f9dd9921a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2f3b433834a13f1bec90b1341624a4a89f7b23bb3026ae476e6251f9dd9921a4->leave($__internal_2f3b433834a13f1bec90b1341624a4a89f7b23bb3026ae476e6251f9dd9921a4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b5a07ed94f828e6b7a1e1f19528efb106449c5f592350e64fc594ba4b221699 = $this->env->getExtension("native_profiler");
        $__internal_4b5a07ed94f828e6b7a1e1f19528efb106449c5f592350e64fc594ba4b221699->enter($__internal_4b5a07ed94f828e6b7a1e1f19528efb106449c5f592350e64fc594ba4b221699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4b5a07ed94f828e6b7a1e1f19528efb106449c5f592350e64fc594ba4b221699->leave($__internal_4b5a07ed94f828e6b7a1e1f19528efb106449c5f592350e64fc594ba4b221699_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_30053080a92b9aaea059e879cc38dd4117ee82cab68df2f34efc1fbd3bfd19c5 = $this->env->getExtension("native_profiler");
        $__internal_30053080a92b9aaea059e879cc38dd4117ee82cab68df2f34efc1fbd3bfd19c5->enter($__internal_30053080a92b9aaea059e879cc38dd4117ee82cab68df2f34efc1fbd3bfd19c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30053080a92b9aaea059e879cc38dd4117ee82cab68df2f34efc1fbd3bfd19c5->leave($__internal_30053080a92b9aaea059e879cc38dd4117ee82cab68df2f34efc1fbd3bfd19c5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_775ff8df23d3fa10174afdb9754240482e5204643e5750ca52c1e247a58cc677 = $this->env->getExtension("native_profiler");
        $__internal_775ff8df23d3fa10174afdb9754240482e5204643e5750ca52c1e247a58cc677->enter($__internal_775ff8df23d3fa10174afdb9754240482e5204643e5750ca52c1e247a58cc677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_775ff8df23d3fa10174afdb9754240482e5204643e5750ca52c1e247a58cc677->leave($__internal_775ff8df23d3fa10174afdb9754240482e5204643e5750ca52c1e247a58cc677_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
