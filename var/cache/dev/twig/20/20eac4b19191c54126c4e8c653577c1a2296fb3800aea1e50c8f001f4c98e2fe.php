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
        $__internal_91674e184542b7338b380f39ac6ebc9385c21f142e4d740e9082d0451b3c0392 = $this->env->getExtension("native_profiler");
        $__internal_91674e184542b7338b380f39ac6ebc9385c21f142e4d740e9082d0451b3c0392->enter($__internal_91674e184542b7338b380f39ac6ebc9385c21f142e4d740e9082d0451b3c0392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_91674e184542b7338b380f39ac6ebc9385c21f142e4d740e9082d0451b3c0392->leave($__internal_91674e184542b7338b380f39ac6ebc9385c21f142e4d740e9082d0451b3c0392_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41cb259d8278906fc64814625d3b1b98b5a033533c36b2ddeb3405bf5ec3308b = $this->env->getExtension("native_profiler");
        $__internal_41cb259d8278906fc64814625d3b1b98b5a033533c36b2ddeb3405bf5ec3308b->enter($__internal_41cb259d8278906fc64814625d3b1b98b5a033533c36b2ddeb3405bf5ec3308b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_41cb259d8278906fc64814625d3b1b98b5a033533c36b2ddeb3405bf5ec3308b->leave($__internal_41cb259d8278906fc64814625d3b1b98b5a033533c36b2ddeb3405bf5ec3308b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0da56d36f0de1198d077039b18dc6416464ae847c3de8cc3ab9a57c38bd29cd = $this->env->getExtension("native_profiler");
        $__internal_d0da56d36f0de1198d077039b18dc6416464ae847c3de8cc3ab9a57c38bd29cd->enter($__internal_d0da56d36f0de1198d077039b18dc6416464ae847c3de8cc3ab9a57c38bd29cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d0da56d36f0de1198d077039b18dc6416464ae847c3de8cc3ab9a57c38bd29cd->leave($__internal_d0da56d36f0de1198d077039b18dc6416464ae847c3de8cc3ab9a57c38bd29cd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1522460d9683dd3ad5911f0fc89460f36d2eab3da77c2ef3a1df00428a04b06d = $this->env->getExtension("native_profiler");
        $__internal_1522460d9683dd3ad5911f0fc89460f36d2eab3da77c2ef3a1df00428a04b06d->enter($__internal_1522460d9683dd3ad5911f0fc89460f36d2eab3da77c2ef3a1df00428a04b06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1522460d9683dd3ad5911f0fc89460f36d2eab3da77c2ef3a1df00428a04b06d->leave($__internal_1522460d9683dd3ad5911f0fc89460f36d2eab3da77c2ef3a1df00428a04b06d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab44760f50e94c48a8e6134dd06306f7725627129dc2ddc56fe164cf213af25c = $this->env->getExtension("native_profiler");
        $__internal_ab44760f50e94c48a8e6134dd06306f7725627129dc2ddc56fe164cf213af25c->enter($__internal_ab44760f50e94c48a8e6134dd06306f7725627129dc2ddc56fe164cf213af25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ab44760f50e94c48a8e6134dd06306f7725627129dc2ddc56fe164cf213af25c->leave($__internal_ab44760f50e94c48a8e6134dd06306f7725627129dc2ddc56fe164cf213af25c_prof);

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
