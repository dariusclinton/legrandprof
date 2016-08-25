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
        $__internal_258f8920d525edfafc085dcc3a98b326d0ad7950e019bf861f5410d12d549a2f = $this->env->getExtension("native_profiler");
        $__internal_258f8920d525edfafc085dcc3a98b326d0ad7950e019bf861f5410d12d549a2f->enter($__internal_258f8920d525edfafc085dcc3a98b326d0ad7950e019bf861f5410d12d549a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_258f8920d525edfafc085dcc3a98b326d0ad7950e019bf861f5410d12d549a2f->leave($__internal_258f8920d525edfafc085dcc3a98b326d0ad7950e019bf861f5410d12d549a2f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_616ed48afd292ee0059836cdcdab24b942e8eed0c11a93ffa1da63f1ffbd1afd = $this->env->getExtension("native_profiler");
        $__internal_616ed48afd292ee0059836cdcdab24b942e8eed0c11a93ffa1da63f1ffbd1afd->enter($__internal_616ed48afd292ee0059836cdcdab24b942e8eed0c11a93ffa1da63f1ffbd1afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_616ed48afd292ee0059836cdcdab24b942e8eed0c11a93ffa1da63f1ffbd1afd->leave($__internal_616ed48afd292ee0059836cdcdab24b942e8eed0c11a93ffa1da63f1ffbd1afd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_800c8325def78d66e157418c8e629185c1f3901515d4997e0630712bd67d2c10 = $this->env->getExtension("native_profiler");
        $__internal_800c8325def78d66e157418c8e629185c1f3901515d4997e0630712bd67d2c10->enter($__internal_800c8325def78d66e157418c8e629185c1f3901515d4997e0630712bd67d2c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_800c8325def78d66e157418c8e629185c1f3901515d4997e0630712bd67d2c10->leave($__internal_800c8325def78d66e157418c8e629185c1f3901515d4997e0630712bd67d2c10_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c21012aca719c7267772765d889caa68d82d869dd6e4ba7d530e71b587241e8 = $this->env->getExtension("native_profiler");
        $__internal_2c21012aca719c7267772765d889caa68d82d869dd6e4ba7d530e71b587241e8->enter($__internal_2c21012aca719c7267772765d889caa68d82d869dd6e4ba7d530e71b587241e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c21012aca719c7267772765d889caa68d82d869dd6e4ba7d530e71b587241e8->leave($__internal_2c21012aca719c7267772765d889caa68d82d869dd6e4ba7d530e71b587241e8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab9ef4c6bf8d1e313338c1b5b4b8ec4e2082b112f27a900da025a9a03b4076cf = $this->env->getExtension("native_profiler");
        $__internal_ab9ef4c6bf8d1e313338c1b5b4b8ec4e2082b112f27a900da025a9a03b4076cf->enter($__internal_ab9ef4c6bf8d1e313338c1b5b4b8ec4e2082b112f27a900da025a9a03b4076cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ab9ef4c6bf8d1e313338c1b5b4b8ec4e2082b112f27a900da025a9a03b4076cf->leave($__internal_ab9ef4c6bf8d1e313338c1b5b4b8ec4e2082b112f27a900da025a9a03b4076cf_prof);

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
