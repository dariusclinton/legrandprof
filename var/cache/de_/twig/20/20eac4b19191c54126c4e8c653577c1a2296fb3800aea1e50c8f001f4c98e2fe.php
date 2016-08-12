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
        $__internal_29f206081587a604de61cc0f724510ad9a6d1a47c02b3d71cd727c329476cdf6 = $this->env->getExtension("native_profiler");
        $__internal_29f206081587a604de61cc0f724510ad9a6d1a47c02b3d71cd727c329476cdf6->enter($__internal_29f206081587a604de61cc0f724510ad9a6d1a47c02b3d71cd727c329476cdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_29f206081587a604de61cc0f724510ad9a6d1a47c02b3d71cd727c329476cdf6->leave($__internal_29f206081587a604de61cc0f724510ad9a6d1a47c02b3d71cd727c329476cdf6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_72e5d1d07463c66ba7a80c850e8230f89ef1e5fa0d50c278820547df97c476a3 = $this->env->getExtension("native_profiler");
        $__internal_72e5d1d07463c66ba7a80c850e8230f89ef1e5fa0d50c278820547df97c476a3->enter($__internal_72e5d1d07463c66ba7a80c850e8230f89ef1e5fa0d50c278820547df97c476a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_72e5d1d07463c66ba7a80c850e8230f89ef1e5fa0d50c278820547df97c476a3->leave($__internal_72e5d1d07463c66ba7a80c850e8230f89ef1e5fa0d50c278820547df97c476a3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60ff39dab27031e327f9fff6d765cf936fba16496d9b3d29660efc7faa5542df = $this->env->getExtension("native_profiler");
        $__internal_60ff39dab27031e327f9fff6d765cf936fba16496d9b3d29660efc7faa5542df->enter($__internal_60ff39dab27031e327f9fff6d765cf936fba16496d9b3d29660efc7faa5542df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_60ff39dab27031e327f9fff6d765cf936fba16496d9b3d29660efc7faa5542df->leave($__internal_60ff39dab27031e327f9fff6d765cf936fba16496d9b3d29660efc7faa5542df_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f83a3fb1976b2133dad03cbd5084016865696d83de120a87b1ed986d9a4f32d = $this->env->getExtension("native_profiler");
        $__internal_1f83a3fb1976b2133dad03cbd5084016865696d83de120a87b1ed986d9a4f32d->enter($__internal_1f83a3fb1976b2133dad03cbd5084016865696d83de120a87b1ed986d9a4f32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f83a3fb1976b2133dad03cbd5084016865696d83de120a87b1ed986d9a4f32d->leave($__internal_1f83a3fb1976b2133dad03cbd5084016865696d83de120a87b1ed986d9a4f32d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4a28769cd999e708c07f8fe966b1b825a69cdcb28ec76f66f64c0a77b40438d = $this->env->getExtension("native_profiler");
        $__internal_b4a28769cd999e708c07f8fe966b1b825a69cdcb28ec76f66f64c0a77b40438d->enter($__internal_b4a28769cd999e708c07f8fe966b1b825a69cdcb28ec76f66f64c0a77b40438d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b4a28769cd999e708c07f8fe966b1b825a69cdcb28ec76f66f64c0a77b40438d->leave($__internal_b4a28769cd999e708c07f8fe966b1b825a69cdcb28ec76f66f64c0a77b40438d_prof);

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
