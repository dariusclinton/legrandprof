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
        $__internal_6955fae7cb7a04bc238d28a01bd452b898cfce4cd8efd2acd3eb135e628f4b0e = $this->env->getExtension("native_profiler");
        $__internal_6955fae7cb7a04bc238d28a01bd452b898cfce4cd8efd2acd3eb135e628f4b0e->enter($__internal_6955fae7cb7a04bc238d28a01bd452b898cfce4cd8efd2acd3eb135e628f4b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6955fae7cb7a04bc238d28a01bd452b898cfce4cd8efd2acd3eb135e628f4b0e->leave($__internal_6955fae7cb7a04bc238d28a01bd452b898cfce4cd8efd2acd3eb135e628f4b0e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9555939f77c8319da00859c186419d825e6281e340c698bea8aab4718c94aea = $this->env->getExtension("native_profiler");
        $__internal_c9555939f77c8319da00859c186419d825e6281e340c698bea8aab4718c94aea->enter($__internal_c9555939f77c8319da00859c186419d825e6281e340c698bea8aab4718c94aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c9555939f77c8319da00859c186419d825e6281e340c698bea8aab4718c94aea->leave($__internal_c9555939f77c8319da00859c186419d825e6281e340c698bea8aab4718c94aea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89d333215f62b88c25a845fd5ece2f3974ba077e198d4a44e215f21f0a5dbff2 = $this->env->getExtension("native_profiler");
        $__internal_89d333215f62b88c25a845fd5ece2f3974ba077e198d4a44e215f21f0a5dbff2->enter($__internal_89d333215f62b88c25a845fd5ece2f3974ba077e198d4a44e215f21f0a5dbff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_89d333215f62b88c25a845fd5ece2f3974ba077e198d4a44e215f21f0a5dbff2->leave($__internal_89d333215f62b88c25a845fd5ece2f3974ba077e198d4a44e215f21f0a5dbff2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f096e18e9163b06a1fd8f9720f1b5676b1b4fc04e557c2fd75ef6b06eff6d45b = $this->env->getExtension("native_profiler");
        $__internal_f096e18e9163b06a1fd8f9720f1b5676b1b4fc04e557c2fd75ef6b06eff6d45b->enter($__internal_f096e18e9163b06a1fd8f9720f1b5676b1b4fc04e557c2fd75ef6b06eff6d45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f096e18e9163b06a1fd8f9720f1b5676b1b4fc04e557c2fd75ef6b06eff6d45b->leave($__internal_f096e18e9163b06a1fd8f9720f1b5676b1b4fc04e557c2fd75ef6b06eff6d45b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69952cd36eaf3c314f3821d7e4a121bf3f33fb5396aa17be8f01b94f8d060251 = $this->env->getExtension("native_profiler");
        $__internal_69952cd36eaf3c314f3821d7e4a121bf3f33fb5396aa17be8f01b94f8d060251->enter($__internal_69952cd36eaf3c314f3821d7e4a121bf3f33fb5396aa17be8f01b94f8d060251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_69952cd36eaf3c314f3821d7e4a121bf3f33fb5396aa17be8f01b94f8d060251->leave($__internal_69952cd36eaf3c314f3821d7e4a121bf3f33fb5396aa17be8f01b94f8d060251_prof);

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
