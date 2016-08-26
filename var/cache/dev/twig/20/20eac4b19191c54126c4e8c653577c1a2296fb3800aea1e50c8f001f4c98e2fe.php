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
        $__internal_844298fe8691cdf2fcb82e9d0d3591cf4ef7d57c955a865a1f1ae86a07546bf4 = $this->env->getExtension("native_profiler");
        $__internal_844298fe8691cdf2fcb82e9d0d3591cf4ef7d57c955a865a1f1ae86a07546bf4->enter($__internal_844298fe8691cdf2fcb82e9d0d3591cf4ef7d57c955a865a1f1ae86a07546bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_844298fe8691cdf2fcb82e9d0d3591cf4ef7d57c955a865a1f1ae86a07546bf4->leave($__internal_844298fe8691cdf2fcb82e9d0d3591cf4ef7d57c955a865a1f1ae86a07546bf4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41153cd8afa8f3bc8a393a4933f356c5316b7a8ba492f22aef298586579c448f = $this->env->getExtension("native_profiler");
        $__internal_41153cd8afa8f3bc8a393a4933f356c5316b7a8ba492f22aef298586579c448f->enter($__internal_41153cd8afa8f3bc8a393a4933f356c5316b7a8ba492f22aef298586579c448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_41153cd8afa8f3bc8a393a4933f356c5316b7a8ba492f22aef298586579c448f->leave($__internal_41153cd8afa8f3bc8a393a4933f356c5316b7a8ba492f22aef298586579c448f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e3d2c919c76d29d4cf6412085b74dc8aa082c562174849cd9c7421ac6336830 = $this->env->getExtension("native_profiler");
        $__internal_3e3d2c919c76d29d4cf6412085b74dc8aa082c562174849cd9c7421ac6336830->enter($__internal_3e3d2c919c76d29d4cf6412085b74dc8aa082c562174849cd9c7421ac6336830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3e3d2c919c76d29d4cf6412085b74dc8aa082c562174849cd9c7421ac6336830->leave($__internal_3e3d2c919c76d29d4cf6412085b74dc8aa082c562174849cd9c7421ac6336830_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_afc09cc1f10db8e076fd9227da3b3659fab86ffe745e29e9891cd619684e3316 = $this->env->getExtension("native_profiler");
        $__internal_afc09cc1f10db8e076fd9227da3b3659fab86ffe745e29e9891cd619684e3316->enter($__internal_afc09cc1f10db8e076fd9227da3b3659fab86ffe745e29e9891cd619684e3316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_afc09cc1f10db8e076fd9227da3b3659fab86ffe745e29e9891cd619684e3316->leave($__internal_afc09cc1f10db8e076fd9227da3b3659fab86ffe745e29e9891cd619684e3316_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c06f7dbb79511e1328ca9c587fd7c258d5710cbfe86461c4e568ce1f0473e51 = $this->env->getExtension("native_profiler");
        $__internal_1c06f7dbb79511e1328ca9c587fd7c258d5710cbfe86461c4e568ce1f0473e51->enter($__internal_1c06f7dbb79511e1328ca9c587fd7c258d5710cbfe86461c4e568ce1f0473e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1c06f7dbb79511e1328ca9c587fd7c258d5710cbfe86461c4e568ce1f0473e51->leave($__internal_1c06f7dbb79511e1328ca9c587fd7c258d5710cbfe86461c4e568ce1f0473e51_prof);

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
