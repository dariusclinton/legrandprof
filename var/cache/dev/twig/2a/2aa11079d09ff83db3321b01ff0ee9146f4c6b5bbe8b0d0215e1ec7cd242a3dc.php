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
        $__internal_68d4601a82094b4d0671aa0a463562fad44d0e55a613896adce0c7d46a5fef02 = $this->env->getExtension("native_profiler");
        $__internal_68d4601a82094b4d0671aa0a463562fad44d0e55a613896adce0c7d46a5fef02->enter($__internal_68d4601a82094b4d0671aa0a463562fad44d0e55a613896adce0c7d46a5fef02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_68d4601a82094b4d0671aa0a463562fad44d0e55a613896adce0c7d46a5fef02->leave($__internal_68d4601a82094b4d0671aa0a463562fad44d0e55a613896adce0c7d46a5fef02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_471d12d9c09ff648d5522f077ea30019094db6e228bbc4707a103aecc7aa55dc = $this->env->getExtension("native_profiler");
        $__internal_471d12d9c09ff648d5522f077ea30019094db6e228bbc4707a103aecc7aa55dc->enter($__internal_471d12d9c09ff648d5522f077ea30019094db6e228bbc4707a103aecc7aa55dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_471d12d9c09ff648d5522f077ea30019094db6e228bbc4707a103aecc7aa55dc->leave($__internal_471d12d9c09ff648d5522f077ea30019094db6e228bbc4707a103aecc7aa55dc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_030049cbcfb21bcf48464a3344352678c4558db24fc9f428d9af68c42a2a68ea = $this->env->getExtension("native_profiler");
        $__internal_030049cbcfb21bcf48464a3344352678c4558db24fc9f428d9af68c42a2a68ea->enter($__internal_030049cbcfb21bcf48464a3344352678c4558db24fc9f428d9af68c42a2a68ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_030049cbcfb21bcf48464a3344352678c4558db24fc9f428d9af68c42a2a68ea->leave($__internal_030049cbcfb21bcf48464a3344352678c4558db24fc9f428d9af68c42a2a68ea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9eef6125c744bdcde2b3eb83ad8ea15a2785870eb5004aa22c30a15992e2e3f = $this->env->getExtension("native_profiler");
        $__internal_c9eef6125c744bdcde2b3eb83ad8ea15a2785870eb5004aa22c30a15992e2e3f->enter($__internal_c9eef6125c744bdcde2b3eb83ad8ea15a2785870eb5004aa22c30a15992e2e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c9eef6125c744bdcde2b3eb83ad8ea15a2785870eb5004aa22c30a15992e2e3f->leave($__internal_c9eef6125c744bdcde2b3eb83ad8ea15a2785870eb5004aa22c30a15992e2e3f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e40fa3a1baecc3936e03e217c0a3a6d9a8ef190e255c7886ec1b13efd96ce00 = $this->env->getExtension("native_profiler");
        $__internal_3e40fa3a1baecc3936e03e217c0a3a6d9a8ef190e255c7886ec1b13efd96ce00->enter($__internal_3e40fa3a1baecc3936e03e217c0a3a6d9a8ef190e255c7886ec1b13efd96ce00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3e40fa3a1baecc3936e03e217c0a3a6d9a8ef190e255c7886ec1b13efd96ce00->leave($__internal_3e40fa3a1baecc3936e03e217c0a3a6d9a8ef190e255c7886ec1b13efd96ce00_prof);

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
