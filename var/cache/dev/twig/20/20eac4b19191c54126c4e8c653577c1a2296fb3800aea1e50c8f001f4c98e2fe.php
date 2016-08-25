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
        $__internal_bc9d86cfffe12d4f9f12304132c801cb2a8168a1c15a143fd09d809f51285fe7 = $this->env->getExtension("native_profiler");
        $__internal_bc9d86cfffe12d4f9f12304132c801cb2a8168a1c15a143fd09d809f51285fe7->enter($__internal_bc9d86cfffe12d4f9f12304132c801cb2a8168a1c15a143fd09d809f51285fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bc9d86cfffe12d4f9f12304132c801cb2a8168a1c15a143fd09d809f51285fe7->leave($__internal_bc9d86cfffe12d4f9f12304132c801cb2a8168a1c15a143fd09d809f51285fe7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_63e546165410bf81b7df3061a7ef83898fb5d16c8cb29b21cb487575977b4c19 = $this->env->getExtension("native_profiler");
        $__internal_63e546165410bf81b7df3061a7ef83898fb5d16c8cb29b21cb487575977b4c19->enter($__internal_63e546165410bf81b7df3061a7ef83898fb5d16c8cb29b21cb487575977b4c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_63e546165410bf81b7df3061a7ef83898fb5d16c8cb29b21cb487575977b4c19->leave($__internal_63e546165410bf81b7df3061a7ef83898fb5d16c8cb29b21cb487575977b4c19_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94797a8f22de284cdb392ce0d412ff861674d799f44f55fbe4bda1d866134d84 = $this->env->getExtension("native_profiler");
        $__internal_94797a8f22de284cdb392ce0d412ff861674d799f44f55fbe4bda1d866134d84->enter($__internal_94797a8f22de284cdb392ce0d412ff861674d799f44f55fbe4bda1d866134d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_94797a8f22de284cdb392ce0d412ff861674d799f44f55fbe4bda1d866134d84->leave($__internal_94797a8f22de284cdb392ce0d412ff861674d799f44f55fbe4bda1d866134d84_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_641f5db041d31b6fcf5adf1308ac4fb025bb10d88dda98860160990f11a23b90 = $this->env->getExtension("native_profiler");
        $__internal_641f5db041d31b6fcf5adf1308ac4fb025bb10d88dda98860160990f11a23b90->enter($__internal_641f5db041d31b6fcf5adf1308ac4fb025bb10d88dda98860160990f11a23b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_641f5db041d31b6fcf5adf1308ac4fb025bb10d88dda98860160990f11a23b90->leave($__internal_641f5db041d31b6fcf5adf1308ac4fb025bb10d88dda98860160990f11a23b90_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_152ada6df350bab66b6c9bd69d02eff186d48cbecef9fe15ba100c2f36a8ec37 = $this->env->getExtension("native_profiler");
        $__internal_152ada6df350bab66b6c9bd69d02eff186d48cbecef9fe15ba100c2f36a8ec37->enter($__internal_152ada6df350bab66b6c9bd69d02eff186d48cbecef9fe15ba100c2f36a8ec37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_152ada6df350bab66b6c9bd69d02eff186d48cbecef9fe15ba100c2f36a8ec37->leave($__internal_152ada6df350bab66b6c9bd69d02eff186d48cbecef9fe15ba100c2f36a8ec37_prof);

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
