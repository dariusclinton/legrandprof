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
        $__internal_1cc94996bd108220f9102ff83be3176d3ecff0e78d963a01b109972a81ea1933 = $this->env->getExtension("native_profiler");
        $__internal_1cc94996bd108220f9102ff83be3176d3ecff0e78d963a01b109972a81ea1933->enter($__internal_1cc94996bd108220f9102ff83be3176d3ecff0e78d963a01b109972a81ea1933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1cc94996bd108220f9102ff83be3176d3ecff0e78d963a01b109972a81ea1933->leave($__internal_1cc94996bd108220f9102ff83be3176d3ecff0e78d963a01b109972a81ea1933_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a093cd62e0a6a326083cb7a6828216667cff77a8cfb88d8ecad2f08cc151fa79 = $this->env->getExtension("native_profiler");
        $__internal_a093cd62e0a6a326083cb7a6828216667cff77a8cfb88d8ecad2f08cc151fa79->enter($__internal_a093cd62e0a6a326083cb7a6828216667cff77a8cfb88d8ecad2f08cc151fa79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a093cd62e0a6a326083cb7a6828216667cff77a8cfb88d8ecad2f08cc151fa79->leave($__internal_a093cd62e0a6a326083cb7a6828216667cff77a8cfb88d8ecad2f08cc151fa79_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86a7d216569a4d68ac1c493df359b173e473960f39f915faf7838a2b5e6b3fa1 = $this->env->getExtension("native_profiler");
        $__internal_86a7d216569a4d68ac1c493df359b173e473960f39f915faf7838a2b5e6b3fa1->enter($__internal_86a7d216569a4d68ac1c493df359b173e473960f39f915faf7838a2b5e6b3fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_86a7d216569a4d68ac1c493df359b173e473960f39f915faf7838a2b5e6b3fa1->leave($__internal_86a7d216569a4d68ac1c493df359b173e473960f39f915faf7838a2b5e6b3fa1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_709fa026f6ca7ed2984a77627870801b59c568112f88d40e51213fe31a3c07e0 = $this->env->getExtension("native_profiler");
        $__internal_709fa026f6ca7ed2984a77627870801b59c568112f88d40e51213fe31a3c07e0->enter($__internal_709fa026f6ca7ed2984a77627870801b59c568112f88d40e51213fe31a3c07e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_709fa026f6ca7ed2984a77627870801b59c568112f88d40e51213fe31a3c07e0->leave($__internal_709fa026f6ca7ed2984a77627870801b59c568112f88d40e51213fe31a3c07e0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3719416e2c7aca3faadef7c57439a526f96e2dc045a72eed99f890d0377dae19 = $this->env->getExtension("native_profiler");
        $__internal_3719416e2c7aca3faadef7c57439a526f96e2dc045a72eed99f890d0377dae19->enter($__internal_3719416e2c7aca3faadef7c57439a526f96e2dc045a72eed99f890d0377dae19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3719416e2c7aca3faadef7c57439a526f96e2dc045a72eed99f890d0377dae19->leave($__internal_3719416e2c7aca3faadef7c57439a526f96e2dc045a72eed99f890d0377dae19_prof);

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
