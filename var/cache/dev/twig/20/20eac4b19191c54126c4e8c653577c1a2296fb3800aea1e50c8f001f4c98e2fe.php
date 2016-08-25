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
        $__internal_d5a8aef9d0f5fc6596fd223533802a217ffb3986bd619603ba3f2bae27805227 = $this->env->getExtension("native_profiler");
        $__internal_d5a8aef9d0f5fc6596fd223533802a217ffb3986bd619603ba3f2bae27805227->enter($__internal_d5a8aef9d0f5fc6596fd223533802a217ffb3986bd619603ba3f2bae27805227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d5a8aef9d0f5fc6596fd223533802a217ffb3986bd619603ba3f2bae27805227->leave($__internal_d5a8aef9d0f5fc6596fd223533802a217ffb3986bd619603ba3f2bae27805227_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe1b0a530adbc400989e9f98da78add2caca5556c69314e18fd78f5059d99b0e = $this->env->getExtension("native_profiler");
        $__internal_fe1b0a530adbc400989e9f98da78add2caca5556c69314e18fd78f5059d99b0e->enter($__internal_fe1b0a530adbc400989e9f98da78add2caca5556c69314e18fd78f5059d99b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fe1b0a530adbc400989e9f98da78add2caca5556c69314e18fd78f5059d99b0e->leave($__internal_fe1b0a530adbc400989e9f98da78add2caca5556c69314e18fd78f5059d99b0e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa4873074758ce997e76fd3ba3cf75cddba05ac465f0d51c55bb7857e910b3a4 = $this->env->getExtension("native_profiler");
        $__internal_aa4873074758ce997e76fd3ba3cf75cddba05ac465f0d51c55bb7857e910b3a4->enter($__internal_aa4873074758ce997e76fd3ba3cf75cddba05ac465f0d51c55bb7857e910b3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aa4873074758ce997e76fd3ba3cf75cddba05ac465f0d51c55bb7857e910b3a4->leave($__internal_aa4873074758ce997e76fd3ba3cf75cddba05ac465f0d51c55bb7857e910b3a4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa671b35b29dc4e6fa815d0750bfa75a4c61eceb9fc093fdb33a88893349ad38 = $this->env->getExtension("native_profiler");
        $__internal_aa671b35b29dc4e6fa815d0750bfa75a4c61eceb9fc093fdb33a88893349ad38->enter($__internal_aa671b35b29dc4e6fa815d0750bfa75a4c61eceb9fc093fdb33a88893349ad38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aa671b35b29dc4e6fa815d0750bfa75a4c61eceb9fc093fdb33a88893349ad38->leave($__internal_aa671b35b29dc4e6fa815d0750bfa75a4c61eceb9fc093fdb33a88893349ad38_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ccdafa9f6ef0bd84b4dd5c15ec769c898b3df740e51614bb107b463d5ce36c7 = $this->env->getExtension("native_profiler");
        $__internal_0ccdafa9f6ef0bd84b4dd5c15ec769c898b3df740e51614bb107b463d5ce36c7->enter($__internal_0ccdafa9f6ef0bd84b4dd5c15ec769c898b3df740e51614bb107b463d5ce36c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0ccdafa9f6ef0bd84b4dd5c15ec769c898b3df740e51614bb107b463d5ce36c7->leave($__internal_0ccdafa9f6ef0bd84b4dd5c15ec769c898b3df740e51614bb107b463d5ce36c7_prof);

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
