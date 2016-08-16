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
        $__internal_d2ce1c8e5455fbabcab9c11f553299dd792af764dd89e65838638db94c8824cc = $this->env->getExtension("native_profiler");
        $__internal_d2ce1c8e5455fbabcab9c11f553299dd792af764dd89e65838638db94c8824cc->enter($__internal_d2ce1c8e5455fbabcab9c11f553299dd792af764dd89e65838638db94c8824cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d2ce1c8e5455fbabcab9c11f553299dd792af764dd89e65838638db94c8824cc->leave($__internal_d2ce1c8e5455fbabcab9c11f553299dd792af764dd89e65838638db94c8824cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8170d05d52800a62a3a14a60f4a170b0d48917def06b457512f1aa7c86c2436 = $this->env->getExtension("native_profiler");
        $__internal_d8170d05d52800a62a3a14a60f4a170b0d48917def06b457512f1aa7c86c2436->enter($__internal_d8170d05d52800a62a3a14a60f4a170b0d48917def06b457512f1aa7c86c2436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d8170d05d52800a62a3a14a60f4a170b0d48917def06b457512f1aa7c86c2436->leave($__internal_d8170d05d52800a62a3a14a60f4a170b0d48917def06b457512f1aa7c86c2436_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02e543ac9f07ad4e199f5ec1b15e79cc8b49bc1d549e775a0ded35c1bfdf7cf2 = $this->env->getExtension("native_profiler");
        $__internal_02e543ac9f07ad4e199f5ec1b15e79cc8b49bc1d549e775a0ded35c1bfdf7cf2->enter($__internal_02e543ac9f07ad4e199f5ec1b15e79cc8b49bc1d549e775a0ded35c1bfdf7cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_02e543ac9f07ad4e199f5ec1b15e79cc8b49bc1d549e775a0ded35c1bfdf7cf2->leave($__internal_02e543ac9f07ad4e199f5ec1b15e79cc8b49bc1d549e775a0ded35c1bfdf7cf2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7119ad8d634b6cef43275a501163820aa23e8f5be6ec0d3e6da075d14008b397 = $this->env->getExtension("native_profiler");
        $__internal_7119ad8d634b6cef43275a501163820aa23e8f5be6ec0d3e6da075d14008b397->enter($__internal_7119ad8d634b6cef43275a501163820aa23e8f5be6ec0d3e6da075d14008b397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7119ad8d634b6cef43275a501163820aa23e8f5be6ec0d3e6da075d14008b397->leave($__internal_7119ad8d634b6cef43275a501163820aa23e8f5be6ec0d3e6da075d14008b397_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13e0d111fe81969ef771d55fa52d11539731e0a4f4f71d4ef3a23358207fe36b = $this->env->getExtension("native_profiler");
        $__internal_13e0d111fe81969ef771d55fa52d11539731e0a4f4f71d4ef3a23358207fe36b->enter($__internal_13e0d111fe81969ef771d55fa52d11539731e0a4f4f71d4ef3a23358207fe36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_13e0d111fe81969ef771d55fa52d11539731e0a4f4f71d4ef3a23358207fe36b->leave($__internal_13e0d111fe81969ef771d55fa52d11539731e0a4f4f71d4ef3a23358207fe36b_prof);

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
