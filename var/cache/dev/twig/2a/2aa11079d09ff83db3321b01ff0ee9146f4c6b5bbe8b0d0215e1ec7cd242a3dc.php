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
        $__internal_faf5514778aa5ddef0a6655859020c23115268bbce507ee2319abfdb8167969f = $this->env->getExtension("native_profiler");
        $__internal_faf5514778aa5ddef0a6655859020c23115268bbce507ee2319abfdb8167969f->enter($__internal_faf5514778aa5ddef0a6655859020c23115268bbce507ee2319abfdb8167969f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_faf5514778aa5ddef0a6655859020c23115268bbce507ee2319abfdb8167969f->leave($__internal_faf5514778aa5ddef0a6655859020c23115268bbce507ee2319abfdb8167969f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da5a24e57306d3d3f4ac588343ecf1441547267a5168c2901d5675aa07a34ada = $this->env->getExtension("native_profiler");
        $__internal_da5a24e57306d3d3f4ac588343ecf1441547267a5168c2901d5675aa07a34ada->enter($__internal_da5a24e57306d3d3f4ac588343ecf1441547267a5168c2901d5675aa07a34ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_da5a24e57306d3d3f4ac588343ecf1441547267a5168c2901d5675aa07a34ada->leave($__internal_da5a24e57306d3d3f4ac588343ecf1441547267a5168c2901d5675aa07a34ada_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82bed9ea61eb77aee86092cc79d34f9449bd269276642aa06fedfbb2d2a6bf0e = $this->env->getExtension("native_profiler");
        $__internal_82bed9ea61eb77aee86092cc79d34f9449bd269276642aa06fedfbb2d2a6bf0e->enter($__internal_82bed9ea61eb77aee86092cc79d34f9449bd269276642aa06fedfbb2d2a6bf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_82bed9ea61eb77aee86092cc79d34f9449bd269276642aa06fedfbb2d2a6bf0e->leave($__internal_82bed9ea61eb77aee86092cc79d34f9449bd269276642aa06fedfbb2d2a6bf0e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_03eaea597c13c99f2054eb6d36c17474bb08eb1b4af2110169012905ee283f48 = $this->env->getExtension("native_profiler");
        $__internal_03eaea597c13c99f2054eb6d36c17474bb08eb1b4af2110169012905ee283f48->enter($__internal_03eaea597c13c99f2054eb6d36c17474bb08eb1b4af2110169012905ee283f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_03eaea597c13c99f2054eb6d36c17474bb08eb1b4af2110169012905ee283f48->leave($__internal_03eaea597c13c99f2054eb6d36c17474bb08eb1b4af2110169012905ee283f48_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78ac061b19678b04b3b0cf4f6e854636d4f3d1849f496681d3d974d76a60ecf8 = $this->env->getExtension("native_profiler");
        $__internal_78ac061b19678b04b3b0cf4f6e854636d4f3d1849f496681d3d974d76a60ecf8->enter($__internal_78ac061b19678b04b3b0cf4f6e854636d4f3d1849f496681d3d974d76a60ecf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_78ac061b19678b04b3b0cf4f6e854636d4f3d1849f496681d3d974d76a60ecf8->leave($__internal_78ac061b19678b04b3b0cf4f6e854636d4f3d1849f496681d3d974d76a60ecf8_prof);

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
