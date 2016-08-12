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
        $__internal_345b99f862e7876086f3dc356ff05bc3f7ea1f75aa8976c5eb5a59ffbc070f6e = $this->env->getExtension("native_profiler");
        $__internal_345b99f862e7876086f3dc356ff05bc3f7ea1f75aa8976c5eb5a59ffbc070f6e->enter($__internal_345b99f862e7876086f3dc356ff05bc3f7ea1f75aa8976c5eb5a59ffbc070f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_345b99f862e7876086f3dc356ff05bc3f7ea1f75aa8976c5eb5a59ffbc070f6e->leave($__internal_345b99f862e7876086f3dc356ff05bc3f7ea1f75aa8976c5eb5a59ffbc070f6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3b90c8384a5e062dc54f736529a885f581e63deef44353cf4fa0c3cbcd337a4 = $this->env->getExtension("native_profiler");
        $__internal_e3b90c8384a5e062dc54f736529a885f581e63deef44353cf4fa0c3cbcd337a4->enter($__internal_e3b90c8384a5e062dc54f736529a885f581e63deef44353cf4fa0c3cbcd337a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e3b90c8384a5e062dc54f736529a885f581e63deef44353cf4fa0c3cbcd337a4->leave($__internal_e3b90c8384a5e062dc54f736529a885f581e63deef44353cf4fa0c3cbcd337a4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99f26584f02afd1a89fe183c19d78de234ab51a965362ef653c31e17df7cabf6 = $this->env->getExtension("native_profiler");
        $__internal_99f26584f02afd1a89fe183c19d78de234ab51a965362ef653c31e17df7cabf6->enter($__internal_99f26584f02afd1a89fe183c19d78de234ab51a965362ef653c31e17df7cabf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_99f26584f02afd1a89fe183c19d78de234ab51a965362ef653c31e17df7cabf6->leave($__internal_99f26584f02afd1a89fe183c19d78de234ab51a965362ef653c31e17df7cabf6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_03e0b0ab0b56ce8d07bf86dc76e217aadc3b50e4b740e2d1e336b43fcb6860e8 = $this->env->getExtension("native_profiler");
        $__internal_03e0b0ab0b56ce8d07bf86dc76e217aadc3b50e4b740e2d1e336b43fcb6860e8->enter($__internal_03e0b0ab0b56ce8d07bf86dc76e217aadc3b50e4b740e2d1e336b43fcb6860e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_03e0b0ab0b56ce8d07bf86dc76e217aadc3b50e4b740e2d1e336b43fcb6860e8->leave($__internal_03e0b0ab0b56ce8d07bf86dc76e217aadc3b50e4b740e2d1e336b43fcb6860e8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f490c1a38a71ffa808cc5fc2aff691dacd355f5bc15d039c28ba78d18b41f504 = $this->env->getExtension("native_profiler");
        $__internal_f490c1a38a71ffa808cc5fc2aff691dacd355f5bc15d039c28ba78d18b41f504->enter($__internal_f490c1a38a71ffa808cc5fc2aff691dacd355f5bc15d039c28ba78d18b41f504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f490c1a38a71ffa808cc5fc2aff691dacd355f5bc15d039c28ba78d18b41f504->leave($__internal_f490c1a38a71ffa808cc5fc2aff691dacd355f5bc15d039c28ba78d18b41f504_prof);

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
