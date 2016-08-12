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
        $__internal_995207d895202a080ec45977d88c9c758f774090cd0a02f0b54ccfcffda35e54 = $this->env->getExtension("native_profiler");
        $__internal_995207d895202a080ec45977d88c9c758f774090cd0a02f0b54ccfcffda35e54->enter($__internal_995207d895202a080ec45977d88c9c758f774090cd0a02f0b54ccfcffda35e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_995207d895202a080ec45977d88c9c758f774090cd0a02f0b54ccfcffda35e54->leave($__internal_995207d895202a080ec45977d88c9c758f774090cd0a02f0b54ccfcffda35e54_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d625bf23430445331e4d2fa44a94e798fa529937b7abc2f562f2324cc4f03ddc = $this->env->getExtension("native_profiler");
        $__internal_d625bf23430445331e4d2fa44a94e798fa529937b7abc2f562f2324cc4f03ddc->enter($__internal_d625bf23430445331e4d2fa44a94e798fa529937b7abc2f562f2324cc4f03ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d625bf23430445331e4d2fa44a94e798fa529937b7abc2f562f2324cc4f03ddc->leave($__internal_d625bf23430445331e4d2fa44a94e798fa529937b7abc2f562f2324cc4f03ddc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a9fa4a67af2b342fff16ce8f907431f6d2930c56f7da8beb623abaa442c9d3c = $this->env->getExtension("native_profiler");
        $__internal_8a9fa4a67af2b342fff16ce8f907431f6d2930c56f7da8beb623abaa442c9d3c->enter($__internal_8a9fa4a67af2b342fff16ce8f907431f6d2930c56f7da8beb623abaa442c9d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8a9fa4a67af2b342fff16ce8f907431f6d2930c56f7da8beb623abaa442c9d3c->leave($__internal_8a9fa4a67af2b342fff16ce8f907431f6d2930c56f7da8beb623abaa442c9d3c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fddc918ea9c611b573235d08cda55d193cf6051375dbcb77c7b1ce9570822107 = $this->env->getExtension("native_profiler");
        $__internal_fddc918ea9c611b573235d08cda55d193cf6051375dbcb77c7b1ce9570822107->enter($__internal_fddc918ea9c611b573235d08cda55d193cf6051375dbcb77c7b1ce9570822107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fddc918ea9c611b573235d08cda55d193cf6051375dbcb77c7b1ce9570822107->leave($__internal_fddc918ea9c611b573235d08cda55d193cf6051375dbcb77c7b1ce9570822107_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_331459a28f1b22c7f0de3d3aabb86233a3f3f6634591aee428226e83ccf5be48 = $this->env->getExtension("native_profiler");
        $__internal_331459a28f1b22c7f0de3d3aabb86233a3f3f6634591aee428226e83ccf5be48->enter($__internal_331459a28f1b22c7f0de3d3aabb86233a3f3f6634591aee428226e83ccf5be48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_331459a28f1b22c7f0de3d3aabb86233a3f3f6634591aee428226e83ccf5be48->leave($__internal_331459a28f1b22c7f0de3d3aabb86233a3f3f6634591aee428226e83ccf5be48_prof);

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
