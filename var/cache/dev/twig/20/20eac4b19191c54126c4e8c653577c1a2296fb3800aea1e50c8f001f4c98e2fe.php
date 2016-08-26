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
        $__internal_faa81159b160a9d4812cbc3cd31120444465d04ec1d583f2a20499db6d86d906 = $this->env->getExtension("native_profiler");
        $__internal_faa81159b160a9d4812cbc3cd31120444465d04ec1d583f2a20499db6d86d906->enter($__internal_faa81159b160a9d4812cbc3cd31120444465d04ec1d583f2a20499db6d86d906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_faa81159b160a9d4812cbc3cd31120444465d04ec1d583f2a20499db6d86d906->leave($__internal_faa81159b160a9d4812cbc3cd31120444465d04ec1d583f2a20499db6d86d906_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd665ccfa6281318590f5e3a792975a922722dcbec90c5dbdbaa0493a2490cd7 = $this->env->getExtension("native_profiler");
        $__internal_cd665ccfa6281318590f5e3a792975a922722dcbec90c5dbdbaa0493a2490cd7->enter($__internal_cd665ccfa6281318590f5e3a792975a922722dcbec90c5dbdbaa0493a2490cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cd665ccfa6281318590f5e3a792975a922722dcbec90c5dbdbaa0493a2490cd7->leave($__internal_cd665ccfa6281318590f5e3a792975a922722dcbec90c5dbdbaa0493a2490cd7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c842c3eaba041a1b0991340ab64719952461b97b5b2b8a657a1015b986fdc1ee = $this->env->getExtension("native_profiler");
        $__internal_c842c3eaba041a1b0991340ab64719952461b97b5b2b8a657a1015b986fdc1ee->enter($__internal_c842c3eaba041a1b0991340ab64719952461b97b5b2b8a657a1015b986fdc1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c842c3eaba041a1b0991340ab64719952461b97b5b2b8a657a1015b986fdc1ee->leave($__internal_c842c3eaba041a1b0991340ab64719952461b97b5b2b8a657a1015b986fdc1ee_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f19d6f67a607a35133c2a2030edb5d901b678d2827609d2423cea116f75a148 = $this->env->getExtension("native_profiler");
        $__internal_1f19d6f67a607a35133c2a2030edb5d901b678d2827609d2423cea116f75a148->enter($__internal_1f19d6f67a607a35133c2a2030edb5d901b678d2827609d2423cea116f75a148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f19d6f67a607a35133c2a2030edb5d901b678d2827609d2423cea116f75a148->leave($__internal_1f19d6f67a607a35133c2a2030edb5d901b678d2827609d2423cea116f75a148_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c46bd062a5bd43646c3eea96284db1da91f874bfa55ef890ae329c626684bb4 = $this->env->getExtension("native_profiler");
        $__internal_6c46bd062a5bd43646c3eea96284db1da91f874bfa55ef890ae329c626684bb4->enter($__internal_6c46bd062a5bd43646c3eea96284db1da91f874bfa55ef890ae329c626684bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6c46bd062a5bd43646c3eea96284db1da91f874bfa55ef890ae329c626684bb4->leave($__internal_6c46bd062a5bd43646c3eea96284db1da91f874bfa55ef890ae329c626684bb4_prof);

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
