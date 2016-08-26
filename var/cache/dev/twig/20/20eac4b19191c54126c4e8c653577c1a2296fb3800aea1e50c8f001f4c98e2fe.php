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
        $__internal_b4a503a61331d25d23a78f9d9ed7edc25b9c6eb605c7b353a94b52b7c6981ed0 = $this->env->getExtension("native_profiler");
        $__internal_b4a503a61331d25d23a78f9d9ed7edc25b9c6eb605c7b353a94b52b7c6981ed0->enter($__internal_b4a503a61331d25d23a78f9d9ed7edc25b9c6eb605c7b353a94b52b7c6981ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b4a503a61331d25d23a78f9d9ed7edc25b9c6eb605c7b353a94b52b7c6981ed0->leave($__internal_b4a503a61331d25d23a78f9d9ed7edc25b9c6eb605c7b353a94b52b7c6981ed0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78b2dd57c64985ca92c9fadaadadc88e5ef7b8bf8832f78dff0246b358502ae7 = $this->env->getExtension("native_profiler");
        $__internal_78b2dd57c64985ca92c9fadaadadc88e5ef7b8bf8832f78dff0246b358502ae7->enter($__internal_78b2dd57c64985ca92c9fadaadadc88e5ef7b8bf8832f78dff0246b358502ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_78b2dd57c64985ca92c9fadaadadc88e5ef7b8bf8832f78dff0246b358502ae7->leave($__internal_78b2dd57c64985ca92c9fadaadadc88e5ef7b8bf8832f78dff0246b358502ae7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37a4e14bdea204d3f1a34b110cd343bb9eed5f81fcc6bce5b91d5f17e6829a81 = $this->env->getExtension("native_profiler");
        $__internal_37a4e14bdea204d3f1a34b110cd343bb9eed5f81fcc6bce5b91d5f17e6829a81->enter($__internal_37a4e14bdea204d3f1a34b110cd343bb9eed5f81fcc6bce5b91d5f17e6829a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_37a4e14bdea204d3f1a34b110cd343bb9eed5f81fcc6bce5b91d5f17e6829a81->leave($__internal_37a4e14bdea204d3f1a34b110cd343bb9eed5f81fcc6bce5b91d5f17e6829a81_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f9139f59d325a454faa432f2aa47a0a17bebaa57b5c095c3a96a85105f02933 = $this->env->getExtension("native_profiler");
        $__internal_8f9139f59d325a454faa432f2aa47a0a17bebaa57b5c095c3a96a85105f02933->enter($__internal_8f9139f59d325a454faa432f2aa47a0a17bebaa57b5c095c3a96a85105f02933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f9139f59d325a454faa432f2aa47a0a17bebaa57b5c095c3a96a85105f02933->leave($__internal_8f9139f59d325a454faa432f2aa47a0a17bebaa57b5c095c3a96a85105f02933_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4db6ea0f3592d79b219cfd82ffd9f5e5ac910e18ef798c181cfa30322784d456 = $this->env->getExtension("native_profiler");
        $__internal_4db6ea0f3592d79b219cfd82ffd9f5e5ac910e18ef798c181cfa30322784d456->enter($__internal_4db6ea0f3592d79b219cfd82ffd9f5e5ac910e18ef798c181cfa30322784d456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4db6ea0f3592d79b219cfd82ffd9f5e5ac910e18ef798c181cfa30322784d456->leave($__internal_4db6ea0f3592d79b219cfd82ffd9f5e5ac910e18ef798c181cfa30322784d456_prof);

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
