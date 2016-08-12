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
        $__internal_3d3f1c896f3a80217003c8060a8cf29196fbaac372568264a2e1748fcc452df2 = $this->env->getExtension("native_profiler");
        $__internal_3d3f1c896f3a80217003c8060a8cf29196fbaac372568264a2e1748fcc452df2->enter($__internal_3d3f1c896f3a80217003c8060a8cf29196fbaac372568264a2e1748fcc452df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3d3f1c896f3a80217003c8060a8cf29196fbaac372568264a2e1748fcc452df2->leave($__internal_3d3f1c896f3a80217003c8060a8cf29196fbaac372568264a2e1748fcc452df2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b01b6ddac208fb75c02d4e784a2bb4214150c19df9b03cc589e8f9d2ca61788 = $this->env->getExtension("native_profiler");
        $__internal_9b01b6ddac208fb75c02d4e784a2bb4214150c19df9b03cc589e8f9d2ca61788->enter($__internal_9b01b6ddac208fb75c02d4e784a2bb4214150c19df9b03cc589e8f9d2ca61788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b01b6ddac208fb75c02d4e784a2bb4214150c19df9b03cc589e8f9d2ca61788->leave($__internal_9b01b6ddac208fb75c02d4e784a2bb4214150c19df9b03cc589e8f9d2ca61788_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe8c055ca76e0936a09d752d23816e0f37aa0915ecd56f3eca11d9f01fef6890 = $this->env->getExtension("native_profiler");
        $__internal_fe8c055ca76e0936a09d752d23816e0f37aa0915ecd56f3eca11d9f01fef6890->enter($__internal_fe8c055ca76e0936a09d752d23816e0f37aa0915ecd56f3eca11d9f01fef6890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fe8c055ca76e0936a09d752d23816e0f37aa0915ecd56f3eca11d9f01fef6890->leave($__internal_fe8c055ca76e0936a09d752d23816e0f37aa0915ecd56f3eca11d9f01fef6890_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6cd68d65664467a2ff446ca09110ca70cf6296ea794719e16d6e9ff621c853a = $this->env->getExtension("native_profiler");
        $__internal_c6cd68d65664467a2ff446ca09110ca70cf6296ea794719e16d6e9ff621c853a->enter($__internal_c6cd68d65664467a2ff446ca09110ca70cf6296ea794719e16d6e9ff621c853a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c6cd68d65664467a2ff446ca09110ca70cf6296ea794719e16d6e9ff621c853a->leave($__internal_c6cd68d65664467a2ff446ca09110ca70cf6296ea794719e16d6e9ff621c853a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4f0c49dbbbb544c7c6f9a4585acb2a3099380e217ff53f4b6474c161428edb7 = $this->env->getExtension("native_profiler");
        $__internal_d4f0c49dbbbb544c7c6f9a4585acb2a3099380e217ff53f4b6474c161428edb7->enter($__internal_d4f0c49dbbbb544c7c6f9a4585acb2a3099380e217ff53f4b6474c161428edb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d4f0c49dbbbb544c7c6f9a4585acb2a3099380e217ff53f4b6474c161428edb7->leave($__internal_d4f0c49dbbbb544c7c6f9a4585acb2a3099380e217ff53f4b6474c161428edb7_prof);

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
