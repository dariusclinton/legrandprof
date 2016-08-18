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
        $__internal_e558ce9ff485867141a0e7fc45cef63cdbe64f8476d16f5eec5ca8df585d6acb = $this->env->getExtension("native_profiler");
        $__internal_e558ce9ff485867141a0e7fc45cef63cdbe64f8476d16f5eec5ca8df585d6acb->enter($__internal_e558ce9ff485867141a0e7fc45cef63cdbe64f8476d16f5eec5ca8df585d6acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e558ce9ff485867141a0e7fc45cef63cdbe64f8476d16f5eec5ca8df585d6acb->leave($__internal_e558ce9ff485867141a0e7fc45cef63cdbe64f8476d16f5eec5ca8df585d6acb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c9fe5258aa3faa16c2d18745b7abbf909180aa79741f7f507c0bc5be2ec6540 = $this->env->getExtension("native_profiler");
        $__internal_0c9fe5258aa3faa16c2d18745b7abbf909180aa79741f7f507c0bc5be2ec6540->enter($__internal_0c9fe5258aa3faa16c2d18745b7abbf909180aa79741f7f507c0bc5be2ec6540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0c9fe5258aa3faa16c2d18745b7abbf909180aa79741f7f507c0bc5be2ec6540->leave($__internal_0c9fe5258aa3faa16c2d18745b7abbf909180aa79741f7f507c0bc5be2ec6540_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e005f6e7feb99c75cc705f9f55dcc4a0fb4ebf6c8fddade39a3fc137ae0bbf58 = $this->env->getExtension("native_profiler");
        $__internal_e005f6e7feb99c75cc705f9f55dcc4a0fb4ebf6c8fddade39a3fc137ae0bbf58->enter($__internal_e005f6e7feb99c75cc705f9f55dcc4a0fb4ebf6c8fddade39a3fc137ae0bbf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e005f6e7feb99c75cc705f9f55dcc4a0fb4ebf6c8fddade39a3fc137ae0bbf58->leave($__internal_e005f6e7feb99c75cc705f9f55dcc4a0fb4ebf6c8fddade39a3fc137ae0bbf58_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_535808c29d7578f1bb9f26609c79464dff011cbddee81388beb1d122f974b3f6 = $this->env->getExtension("native_profiler");
        $__internal_535808c29d7578f1bb9f26609c79464dff011cbddee81388beb1d122f974b3f6->enter($__internal_535808c29d7578f1bb9f26609c79464dff011cbddee81388beb1d122f974b3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_535808c29d7578f1bb9f26609c79464dff011cbddee81388beb1d122f974b3f6->leave($__internal_535808c29d7578f1bb9f26609c79464dff011cbddee81388beb1d122f974b3f6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79f042b1f63dcf6fc8802cb3fba2a144ff217a6ba3796ead20cadf12a390f09c = $this->env->getExtension("native_profiler");
        $__internal_79f042b1f63dcf6fc8802cb3fba2a144ff217a6ba3796ead20cadf12a390f09c->enter($__internal_79f042b1f63dcf6fc8802cb3fba2a144ff217a6ba3796ead20cadf12a390f09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_79f042b1f63dcf6fc8802cb3fba2a144ff217a6ba3796ead20cadf12a390f09c->leave($__internal_79f042b1f63dcf6fc8802cb3fba2a144ff217a6ba3796ead20cadf12a390f09c_prof);

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
