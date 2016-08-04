<?php

/* ::base.html.twig */
class __TwigTemplate_71024d356ca261f99923846d58dc2e6a0c4f15fe4956ae19b83b44eb08bd26cd extends Twig_Template
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
        $__internal_515ff227f7a0ac4d25368c2f77462a1b307fda2bb981656f37288f6b47b75bd4 = $this->env->getExtension("native_profiler");
        $__internal_515ff227f7a0ac4d25368c2f77462a1b307fda2bb981656f37288f6b47b75bd4->enter($__internal_515ff227f7a0ac4d25368c2f77462a1b307fda2bb981656f37288f6b47b75bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_515ff227f7a0ac4d25368c2f77462a1b307fda2bb981656f37288f6b47b75bd4->leave($__internal_515ff227f7a0ac4d25368c2f77462a1b307fda2bb981656f37288f6b47b75bd4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_84173c985170fca143d1733e486c3743a8a083f4a2cd8b82d898baa3deaa9a20 = $this->env->getExtension("native_profiler");
        $__internal_84173c985170fca143d1733e486c3743a8a083f4a2cd8b82d898baa3deaa9a20->enter($__internal_84173c985170fca143d1733e486c3743a8a083f4a2cd8b82d898baa3deaa9a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_84173c985170fca143d1733e486c3743a8a083f4a2cd8b82d898baa3deaa9a20->leave($__internal_84173c985170fca143d1733e486c3743a8a083f4a2cd8b82d898baa3deaa9a20_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5172b9cda310dadc1017ca38d5a3ad55d4edf60bf984e47e1626bdd0a30f9ac3 = $this->env->getExtension("native_profiler");
        $__internal_5172b9cda310dadc1017ca38d5a3ad55d4edf60bf984e47e1626bdd0a30f9ac3->enter($__internal_5172b9cda310dadc1017ca38d5a3ad55d4edf60bf984e47e1626bdd0a30f9ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5172b9cda310dadc1017ca38d5a3ad55d4edf60bf984e47e1626bdd0a30f9ac3->leave($__internal_5172b9cda310dadc1017ca38d5a3ad55d4edf60bf984e47e1626bdd0a30f9ac3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3774ca8353b4e0e009319299886cda5f30dd0d7f57201dd6b5113989856678c = $this->env->getExtension("native_profiler");
        $__internal_d3774ca8353b4e0e009319299886cda5f30dd0d7f57201dd6b5113989856678c->enter($__internal_d3774ca8353b4e0e009319299886cda5f30dd0d7f57201dd6b5113989856678c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d3774ca8353b4e0e009319299886cda5f30dd0d7f57201dd6b5113989856678c->leave($__internal_d3774ca8353b4e0e009319299886cda5f30dd0d7f57201dd6b5113989856678c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cef47a928abbe5c5ed434c402d1bd92b460ac60d8d54359111b9add84b13a943 = $this->env->getExtension("native_profiler");
        $__internal_cef47a928abbe5c5ed434c402d1bd92b460ac60d8d54359111b9add84b13a943->enter($__internal_cef47a928abbe5c5ed434c402d1bd92b460ac60d8d54359111b9add84b13a943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cef47a928abbe5c5ed434c402d1bd92b460ac60d8d54359111b9add84b13a943->leave($__internal_cef47a928abbe5c5ed434c402d1bd92b460ac60d8d54359111b9add84b13a943_prof);

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
