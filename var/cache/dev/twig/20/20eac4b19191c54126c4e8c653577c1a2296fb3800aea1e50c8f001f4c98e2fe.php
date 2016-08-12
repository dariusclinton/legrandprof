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
        $__internal_ec522b5cb6146e6f3a12617ed059188fec50b31f694b68a1e405bedaf7e9321a = $this->env->getExtension("native_profiler");
        $__internal_ec522b5cb6146e6f3a12617ed059188fec50b31f694b68a1e405bedaf7e9321a->enter($__internal_ec522b5cb6146e6f3a12617ed059188fec50b31f694b68a1e405bedaf7e9321a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ec522b5cb6146e6f3a12617ed059188fec50b31f694b68a1e405bedaf7e9321a->leave($__internal_ec522b5cb6146e6f3a12617ed059188fec50b31f694b68a1e405bedaf7e9321a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32f95a76c10e6ff8064c08196e856ac3bf7a4cb14d1be35577c3c0b9daa59288 = $this->env->getExtension("native_profiler");
        $__internal_32f95a76c10e6ff8064c08196e856ac3bf7a4cb14d1be35577c3c0b9daa59288->enter($__internal_32f95a76c10e6ff8064c08196e856ac3bf7a4cb14d1be35577c3c0b9daa59288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_32f95a76c10e6ff8064c08196e856ac3bf7a4cb14d1be35577c3c0b9daa59288->leave($__internal_32f95a76c10e6ff8064c08196e856ac3bf7a4cb14d1be35577c3c0b9daa59288_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e99637a36f62d657d18ae9d3533035a9089d1b5a89a331a1d330b744ff99d542 = $this->env->getExtension("native_profiler");
        $__internal_e99637a36f62d657d18ae9d3533035a9089d1b5a89a331a1d330b744ff99d542->enter($__internal_e99637a36f62d657d18ae9d3533035a9089d1b5a89a331a1d330b744ff99d542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e99637a36f62d657d18ae9d3533035a9089d1b5a89a331a1d330b744ff99d542->leave($__internal_e99637a36f62d657d18ae9d3533035a9089d1b5a89a331a1d330b744ff99d542_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_15e05f3d160cc2e48d17875d4ef87681a6af33217b8484e400173b50fb8a4659 = $this->env->getExtension("native_profiler");
        $__internal_15e05f3d160cc2e48d17875d4ef87681a6af33217b8484e400173b50fb8a4659->enter($__internal_15e05f3d160cc2e48d17875d4ef87681a6af33217b8484e400173b50fb8a4659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_15e05f3d160cc2e48d17875d4ef87681a6af33217b8484e400173b50fb8a4659->leave($__internal_15e05f3d160cc2e48d17875d4ef87681a6af33217b8484e400173b50fb8a4659_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_683b48b1bafe0e3abf04dcd12c33dbc3cbe605858b6516c519732ff06857826c = $this->env->getExtension("native_profiler");
        $__internal_683b48b1bafe0e3abf04dcd12c33dbc3cbe605858b6516c519732ff06857826c->enter($__internal_683b48b1bafe0e3abf04dcd12c33dbc3cbe605858b6516c519732ff06857826c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_683b48b1bafe0e3abf04dcd12c33dbc3cbe605858b6516c519732ff06857826c->leave($__internal_683b48b1bafe0e3abf04dcd12c33dbc3cbe605858b6516c519732ff06857826c_prof);

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
