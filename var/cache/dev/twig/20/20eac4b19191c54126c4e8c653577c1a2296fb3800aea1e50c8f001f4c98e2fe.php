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
        $__internal_ccd78835dc692d3c8c4742ffaacfcac449671f9d8813c4322d13554da423a1b7 = $this->env->getExtension("native_profiler");
        $__internal_ccd78835dc692d3c8c4742ffaacfcac449671f9d8813c4322d13554da423a1b7->enter($__internal_ccd78835dc692d3c8c4742ffaacfcac449671f9d8813c4322d13554da423a1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ccd78835dc692d3c8c4742ffaacfcac449671f9d8813c4322d13554da423a1b7->leave($__internal_ccd78835dc692d3c8c4742ffaacfcac449671f9d8813c4322d13554da423a1b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d2cd54c093d31496b85071cb803b9689d76e55d098a0b66c804571b872a450a = $this->env->getExtension("native_profiler");
        $__internal_7d2cd54c093d31496b85071cb803b9689d76e55d098a0b66c804571b872a450a->enter($__internal_7d2cd54c093d31496b85071cb803b9689d76e55d098a0b66c804571b872a450a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7d2cd54c093d31496b85071cb803b9689d76e55d098a0b66c804571b872a450a->leave($__internal_7d2cd54c093d31496b85071cb803b9689d76e55d098a0b66c804571b872a450a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e63056c58ecb70890bfd3a71b2a149043b8fe01eb03aeb7b9c9116e4a15ce5a = $this->env->getExtension("native_profiler");
        $__internal_1e63056c58ecb70890bfd3a71b2a149043b8fe01eb03aeb7b9c9116e4a15ce5a->enter($__internal_1e63056c58ecb70890bfd3a71b2a149043b8fe01eb03aeb7b9c9116e4a15ce5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1e63056c58ecb70890bfd3a71b2a149043b8fe01eb03aeb7b9c9116e4a15ce5a->leave($__internal_1e63056c58ecb70890bfd3a71b2a149043b8fe01eb03aeb7b9c9116e4a15ce5a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f7202572daa405925c6e2bbde75bab3242b8a68f04aa9e2b3a6e0c803e9aba6 = $this->env->getExtension("native_profiler");
        $__internal_5f7202572daa405925c6e2bbde75bab3242b8a68f04aa9e2b3a6e0c803e9aba6->enter($__internal_5f7202572daa405925c6e2bbde75bab3242b8a68f04aa9e2b3a6e0c803e9aba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5f7202572daa405925c6e2bbde75bab3242b8a68f04aa9e2b3a6e0c803e9aba6->leave($__internal_5f7202572daa405925c6e2bbde75bab3242b8a68f04aa9e2b3a6e0c803e9aba6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea777cd55d957f64ae73ddd43a3cf1848444eac23d28a1f8f49758d0d372f4e8 = $this->env->getExtension("native_profiler");
        $__internal_ea777cd55d957f64ae73ddd43a3cf1848444eac23d28a1f8f49758d0d372f4e8->enter($__internal_ea777cd55d957f64ae73ddd43a3cf1848444eac23d28a1f8f49758d0d372f4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ea777cd55d957f64ae73ddd43a3cf1848444eac23d28a1f8f49758d0d372f4e8->leave($__internal_ea777cd55d957f64ae73ddd43a3cf1848444eac23d28a1f8f49758d0d372f4e8_prof);

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
