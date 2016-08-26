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
        $__internal_927709c20ffc0c9b242c9601522cb87d7fbbd815b48e445254870bffc46a6955 = $this->env->getExtension("native_profiler");
        $__internal_927709c20ffc0c9b242c9601522cb87d7fbbd815b48e445254870bffc46a6955->enter($__internal_927709c20ffc0c9b242c9601522cb87d7fbbd815b48e445254870bffc46a6955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_927709c20ffc0c9b242c9601522cb87d7fbbd815b48e445254870bffc46a6955->leave($__internal_927709c20ffc0c9b242c9601522cb87d7fbbd815b48e445254870bffc46a6955_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9eabaab074e11f38d0c92cdb26c602bec4517d7403c8cdfa3fdd0ad06a053b80 = $this->env->getExtension("native_profiler");
        $__internal_9eabaab074e11f38d0c92cdb26c602bec4517d7403c8cdfa3fdd0ad06a053b80->enter($__internal_9eabaab074e11f38d0c92cdb26c602bec4517d7403c8cdfa3fdd0ad06a053b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9eabaab074e11f38d0c92cdb26c602bec4517d7403c8cdfa3fdd0ad06a053b80->leave($__internal_9eabaab074e11f38d0c92cdb26c602bec4517d7403c8cdfa3fdd0ad06a053b80_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d833d626d3c1ff631be7b995eb5274e3a1a424001f7aed22b30bdc94d9c8a74 = $this->env->getExtension("native_profiler");
        $__internal_4d833d626d3c1ff631be7b995eb5274e3a1a424001f7aed22b30bdc94d9c8a74->enter($__internal_4d833d626d3c1ff631be7b995eb5274e3a1a424001f7aed22b30bdc94d9c8a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4d833d626d3c1ff631be7b995eb5274e3a1a424001f7aed22b30bdc94d9c8a74->leave($__internal_4d833d626d3c1ff631be7b995eb5274e3a1a424001f7aed22b30bdc94d9c8a74_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_16768f749768243b8d9989b4b7fcdc4458698f7d468775d3cabb4ad3beb4b93f = $this->env->getExtension("native_profiler");
        $__internal_16768f749768243b8d9989b4b7fcdc4458698f7d468775d3cabb4ad3beb4b93f->enter($__internal_16768f749768243b8d9989b4b7fcdc4458698f7d468775d3cabb4ad3beb4b93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_16768f749768243b8d9989b4b7fcdc4458698f7d468775d3cabb4ad3beb4b93f->leave($__internal_16768f749768243b8d9989b4b7fcdc4458698f7d468775d3cabb4ad3beb4b93f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65d44effd19fff93e6ff13417d87a687687a5ee0ffd0be25a0d9743b7d0e6386 = $this->env->getExtension("native_profiler");
        $__internal_65d44effd19fff93e6ff13417d87a687687a5ee0ffd0be25a0d9743b7d0e6386->enter($__internal_65d44effd19fff93e6ff13417d87a687687a5ee0ffd0be25a0d9743b7d0e6386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_65d44effd19fff93e6ff13417d87a687687a5ee0ffd0be25a0d9743b7d0e6386->leave($__internal_65d44effd19fff93e6ff13417d87a687687a5ee0ffd0be25a0d9743b7d0e6386_prof);

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
