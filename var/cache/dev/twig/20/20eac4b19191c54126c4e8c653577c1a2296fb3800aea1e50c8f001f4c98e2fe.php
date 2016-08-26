<?php

/* base.html.twig */
class __TwigTemplate_07e59192eb905907e6fafe1e40d079c5d535cc051e569b6414a97f546e436d49 extends Twig_Template
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
        $__internal_0611760165b40557fd7b67a8bf83b28606f28bbe0f345ffe693e174159939573 = $this->env->getExtension("native_profiler");
        $__internal_0611760165b40557fd7b67a8bf83b28606f28bbe0f345ffe693e174159939573->enter($__internal_0611760165b40557fd7b67a8bf83b28606f28bbe0f345ffe693e174159939573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0611760165b40557fd7b67a8bf83b28606f28bbe0f345ffe693e174159939573->leave($__internal_0611760165b40557fd7b67a8bf83b28606f28bbe0f345ffe693e174159939573_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f26730859a7b154facefdfdbf4b5df1bc42aff71cf642a6b7d82549c01314f0 = $this->env->getExtension("native_profiler");
        $__internal_4f26730859a7b154facefdfdbf4b5df1bc42aff71cf642a6b7d82549c01314f0->enter($__internal_4f26730859a7b154facefdfdbf4b5df1bc42aff71cf642a6b7d82549c01314f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4f26730859a7b154facefdfdbf4b5df1bc42aff71cf642a6b7d82549c01314f0->leave($__internal_4f26730859a7b154facefdfdbf4b5df1bc42aff71cf642a6b7d82549c01314f0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_157f695a0db003ed352485e02cd63567ad1799313fe172e3513654288920aba0 = $this->env->getExtension("native_profiler");
        $__internal_157f695a0db003ed352485e02cd63567ad1799313fe172e3513654288920aba0->enter($__internal_157f695a0db003ed352485e02cd63567ad1799313fe172e3513654288920aba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_157f695a0db003ed352485e02cd63567ad1799313fe172e3513654288920aba0->leave($__internal_157f695a0db003ed352485e02cd63567ad1799313fe172e3513654288920aba0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b59b4844a463b9312a7c343f155bf66c0a8718186b7b7a601eab1baed94d264 = $this->env->getExtension("native_profiler");
        $__internal_5b59b4844a463b9312a7c343f155bf66c0a8718186b7b7a601eab1baed94d264->enter($__internal_5b59b4844a463b9312a7c343f155bf66c0a8718186b7b7a601eab1baed94d264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b59b4844a463b9312a7c343f155bf66c0a8718186b7b7a601eab1baed94d264->leave($__internal_5b59b4844a463b9312a7c343f155bf66c0a8718186b7b7a601eab1baed94d264_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a04abc85875bb7cf81c279c5c9a0a88ebdbaa5debeef3d464acc52d4e83f0fd1 = $this->env->getExtension("native_profiler");
        $__internal_a04abc85875bb7cf81c279c5c9a0a88ebdbaa5debeef3d464acc52d4e83f0fd1->enter($__internal_a04abc85875bb7cf81c279c5c9a0a88ebdbaa5debeef3d464acc52d4e83f0fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a04abc85875bb7cf81c279c5c9a0a88ebdbaa5debeef3d464acc52d4e83f0fd1->leave($__internal_a04abc85875bb7cf81c279c5c9a0a88ebdbaa5debeef3d464acc52d4e83f0fd1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
