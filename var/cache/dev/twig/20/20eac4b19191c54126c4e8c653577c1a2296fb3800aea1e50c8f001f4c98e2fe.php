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
        $__internal_95b2c88e3981dce0366983caa01eeac51fc352635caee8c93a10f708703ef555 = $this->env->getExtension("native_profiler");
        $__internal_95b2c88e3981dce0366983caa01eeac51fc352635caee8c93a10f708703ef555->enter($__internal_95b2c88e3981dce0366983caa01eeac51fc352635caee8c93a10f708703ef555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_95b2c88e3981dce0366983caa01eeac51fc352635caee8c93a10f708703ef555->leave($__internal_95b2c88e3981dce0366983caa01eeac51fc352635caee8c93a10f708703ef555_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ac4c541931b414090d75b83275e8e474ffcb2c470bcd10eec3870c84349c8e3 = $this->env->getExtension("native_profiler");
        $__internal_5ac4c541931b414090d75b83275e8e474ffcb2c470bcd10eec3870c84349c8e3->enter($__internal_5ac4c541931b414090d75b83275e8e474ffcb2c470bcd10eec3870c84349c8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5ac4c541931b414090d75b83275e8e474ffcb2c470bcd10eec3870c84349c8e3->leave($__internal_5ac4c541931b414090d75b83275e8e474ffcb2c470bcd10eec3870c84349c8e3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_427ecc7090ba82b502f112347baea4939f592a598290a005cafc848da5d7b934 = $this->env->getExtension("native_profiler");
        $__internal_427ecc7090ba82b502f112347baea4939f592a598290a005cafc848da5d7b934->enter($__internal_427ecc7090ba82b502f112347baea4939f592a598290a005cafc848da5d7b934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_427ecc7090ba82b502f112347baea4939f592a598290a005cafc848da5d7b934->leave($__internal_427ecc7090ba82b502f112347baea4939f592a598290a005cafc848da5d7b934_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_603d9d06e8e5ded43d23f70bd15368f559c0def1c5a47125853b5cf6b1726831 = $this->env->getExtension("native_profiler");
        $__internal_603d9d06e8e5ded43d23f70bd15368f559c0def1c5a47125853b5cf6b1726831->enter($__internal_603d9d06e8e5ded43d23f70bd15368f559c0def1c5a47125853b5cf6b1726831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_603d9d06e8e5ded43d23f70bd15368f559c0def1c5a47125853b5cf6b1726831->leave($__internal_603d9d06e8e5ded43d23f70bd15368f559c0def1c5a47125853b5cf6b1726831_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88a0631e88141e3ffa9a861ab319b16e3f892289aad13f1f3ffff3909a2c8303 = $this->env->getExtension("native_profiler");
        $__internal_88a0631e88141e3ffa9a861ab319b16e3f892289aad13f1f3ffff3909a2c8303->enter($__internal_88a0631e88141e3ffa9a861ab319b16e3f892289aad13f1f3ffff3909a2c8303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_88a0631e88141e3ffa9a861ab319b16e3f892289aad13f1f3ffff3909a2c8303->leave($__internal_88a0631e88141e3ffa9a861ab319b16e3f892289aad13f1f3ffff3909a2c8303_prof);

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
