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
        $__internal_3f028aa7ef8babab154a051a4f1c0e9b8407875b81530da27d79cfd3ca40ecd3 = $this->env->getExtension("native_profiler");
        $__internal_3f028aa7ef8babab154a051a4f1c0e9b8407875b81530da27d79cfd3ca40ecd3->enter($__internal_3f028aa7ef8babab154a051a4f1c0e9b8407875b81530da27d79cfd3ca40ecd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3f028aa7ef8babab154a051a4f1c0e9b8407875b81530da27d79cfd3ca40ecd3->leave($__internal_3f028aa7ef8babab154a051a4f1c0e9b8407875b81530da27d79cfd3ca40ecd3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f2f38ff01f107102363e3d093dbaaaf4fd8d06c64bfcd446e89c5a32322a267 = $this->env->getExtension("native_profiler");
        $__internal_6f2f38ff01f107102363e3d093dbaaaf4fd8d06c64bfcd446e89c5a32322a267->enter($__internal_6f2f38ff01f107102363e3d093dbaaaf4fd8d06c64bfcd446e89c5a32322a267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f2f38ff01f107102363e3d093dbaaaf4fd8d06c64bfcd446e89c5a32322a267->leave($__internal_6f2f38ff01f107102363e3d093dbaaaf4fd8d06c64bfcd446e89c5a32322a267_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bbe97b8ab20375f1cec5e5971fc61837629b355a308ca031eeb014ab2967e431 = $this->env->getExtension("native_profiler");
        $__internal_bbe97b8ab20375f1cec5e5971fc61837629b355a308ca031eeb014ab2967e431->enter($__internal_bbe97b8ab20375f1cec5e5971fc61837629b355a308ca031eeb014ab2967e431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bbe97b8ab20375f1cec5e5971fc61837629b355a308ca031eeb014ab2967e431->leave($__internal_bbe97b8ab20375f1cec5e5971fc61837629b355a308ca031eeb014ab2967e431_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4db4242fb855fb163feff79149a1e8a92f0eaac1782c0129b05e79ab67854c98 = $this->env->getExtension("native_profiler");
        $__internal_4db4242fb855fb163feff79149a1e8a92f0eaac1782c0129b05e79ab67854c98->enter($__internal_4db4242fb855fb163feff79149a1e8a92f0eaac1782c0129b05e79ab67854c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4db4242fb855fb163feff79149a1e8a92f0eaac1782c0129b05e79ab67854c98->leave($__internal_4db4242fb855fb163feff79149a1e8a92f0eaac1782c0129b05e79ab67854c98_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5275b28dffa0675dbaee4f4f322fe79821e8369196af81bdb10a6c6474d79104 = $this->env->getExtension("native_profiler");
        $__internal_5275b28dffa0675dbaee4f4f322fe79821e8369196af81bdb10a6c6474d79104->enter($__internal_5275b28dffa0675dbaee4f4f322fe79821e8369196af81bdb10a6c6474d79104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5275b28dffa0675dbaee4f4f322fe79821e8369196af81bdb10a6c6474d79104->leave($__internal_5275b28dffa0675dbaee4f4f322fe79821e8369196af81bdb10a6c6474d79104_prof);

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
