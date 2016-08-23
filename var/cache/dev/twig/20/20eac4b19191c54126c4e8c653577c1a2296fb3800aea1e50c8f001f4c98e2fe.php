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
        $__internal_4800c9e96ab6edd1836fbcb777df5afd9870ceaae642d6467d227737e519bcb7 = $this->env->getExtension("native_profiler");
        $__internal_4800c9e96ab6edd1836fbcb777df5afd9870ceaae642d6467d227737e519bcb7->enter($__internal_4800c9e96ab6edd1836fbcb777df5afd9870ceaae642d6467d227737e519bcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4800c9e96ab6edd1836fbcb777df5afd9870ceaae642d6467d227737e519bcb7->leave($__internal_4800c9e96ab6edd1836fbcb777df5afd9870ceaae642d6467d227737e519bcb7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_112401de8376a6ddcbecba3ab70db9105ac11cb61fb103a6f8ce09ee4540eee8 = $this->env->getExtension("native_profiler");
        $__internal_112401de8376a6ddcbecba3ab70db9105ac11cb61fb103a6f8ce09ee4540eee8->enter($__internal_112401de8376a6ddcbecba3ab70db9105ac11cb61fb103a6f8ce09ee4540eee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_112401de8376a6ddcbecba3ab70db9105ac11cb61fb103a6f8ce09ee4540eee8->leave($__internal_112401de8376a6ddcbecba3ab70db9105ac11cb61fb103a6f8ce09ee4540eee8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3708c6949e844b16b35fa1849d63c6f34335810f4019092affe3eb9a8481ca97 = $this->env->getExtension("native_profiler");
        $__internal_3708c6949e844b16b35fa1849d63c6f34335810f4019092affe3eb9a8481ca97->enter($__internal_3708c6949e844b16b35fa1849d63c6f34335810f4019092affe3eb9a8481ca97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3708c6949e844b16b35fa1849d63c6f34335810f4019092affe3eb9a8481ca97->leave($__internal_3708c6949e844b16b35fa1849d63c6f34335810f4019092affe3eb9a8481ca97_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_62951a04b356272db192c664417ad4b7badfcd2e2be46d5ac075a65fad5d1da5 = $this->env->getExtension("native_profiler");
        $__internal_62951a04b356272db192c664417ad4b7badfcd2e2be46d5ac075a65fad5d1da5->enter($__internal_62951a04b356272db192c664417ad4b7badfcd2e2be46d5ac075a65fad5d1da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62951a04b356272db192c664417ad4b7badfcd2e2be46d5ac075a65fad5d1da5->leave($__internal_62951a04b356272db192c664417ad4b7badfcd2e2be46d5ac075a65fad5d1da5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3489e585fd011f345157947fc535d3ce8fdb9dc1bd09018696c4d2a44d8379c1 = $this->env->getExtension("native_profiler");
        $__internal_3489e585fd011f345157947fc535d3ce8fdb9dc1bd09018696c4d2a44d8379c1->enter($__internal_3489e585fd011f345157947fc535d3ce8fdb9dc1bd09018696c4d2a44d8379c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3489e585fd011f345157947fc535d3ce8fdb9dc1bd09018696c4d2a44d8379c1->leave($__internal_3489e585fd011f345157947fc535d3ce8fdb9dc1bd09018696c4d2a44d8379c1_prof);

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
