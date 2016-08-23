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
        $__internal_9d1857c893384895b65ed7e81301e5dbf049ae3bfdf67a622427367ef5d08f48 = $this->env->getExtension("native_profiler");
        $__internal_9d1857c893384895b65ed7e81301e5dbf049ae3bfdf67a622427367ef5d08f48->enter($__internal_9d1857c893384895b65ed7e81301e5dbf049ae3bfdf67a622427367ef5d08f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9d1857c893384895b65ed7e81301e5dbf049ae3bfdf67a622427367ef5d08f48->leave($__internal_9d1857c893384895b65ed7e81301e5dbf049ae3bfdf67a622427367ef5d08f48_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a5c55f0ecf24b4106b50a44051ecabdc8e0a14af3f968f1075eb203eaafcd88 = $this->env->getExtension("native_profiler");
        $__internal_0a5c55f0ecf24b4106b50a44051ecabdc8e0a14af3f968f1075eb203eaafcd88->enter($__internal_0a5c55f0ecf24b4106b50a44051ecabdc8e0a14af3f968f1075eb203eaafcd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0a5c55f0ecf24b4106b50a44051ecabdc8e0a14af3f968f1075eb203eaafcd88->leave($__internal_0a5c55f0ecf24b4106b50a44051ecabdc8e0a14af3f968f1075eb203eaafcd88_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca93976bd4de01060a1962d95712aa2f143bc9c9898fdeaa242f445be16027ce = $this->env->getExtension("native_profiler");
        $__internal_ca93976bd4de01060a1962d95712aa2f143bc9c9898fdeaa242f445be16027ce->enter($__internal_ca93976bd4de01060a1962d95712aa2f143bc9c9898fdeaa242f445be16027ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ca93976bd4de01060a1962d95712aa2f143bc9c9898fdeaa242f445be16027ce->leave($__internal_ca93976bd4de01060a1962d95712aa2f143bc9c9898fdeaa242f445be16027ce_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f26fc52fd27206dcd1d7fa55a0b358704519202f9f813659ad3ed0147885a13d = $this->env->getExtension("native_profiler");
        $__internal_f26fc52fd27206dcd1d7fa55a0b358704519202f9f813659ad3ed0147885a13d->enter($__internal_f26fc52fd27206dcd1d7fa55a0b358704519202f9f813659ad3ed0147885a13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f26fc52fd27206dcd1d7fa55a0b358704519202f9f813659ad3ed0147885a13d->leave($__internal_f26fc52fd27206dcd1d7fa55a0b358704519202f9f813659ad3ed0147885a13d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e66446d6b2cd5cdcad646b7b0aac3ef9d864dce489e9b94aa4c40c208384373 = $this->env->getExtension("native_profiler");
        $__internal_9e66446d6b2cd5cdcad646b7b0aac3ef9d864dce489e9b94aa4c40c208384373->enter($__internal_9e66446d6b2cd5cdcad646b7b0aac3ef9d864dce489e9b94aa4c40c208384373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9e66446d6b2cd5cdcad646b7b0aac3ef9d864dce489e9b94aa4c40c208384373->leave($__internal_9e66446d6b2cd5cdcad646b7b0aac3ef9d864dce489e9b94aa4c40c208384373_prof);

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
