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
        $__internal_18305a7fb42fac609ae837220c95875bb0f700f0ca089e6f39b9e1a9d01fb4b6 = $this->env->getExtension("native_profiler");
        $__internal_18305a7fb42fac609ae837220c95875bb0f700f0ca089e6f39b9e1a9d01fb4b6->enter($__internal_18305a7fb42fac609ae837220c95875bb0f700f0ca089e6f39b9e1a9d01fb4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_18305a7fb42fac609ae837220c95875bb0f700f0ca089e6f39b9e1a9d01fb4b6->leave($__internal_18305a7fb42fac609ae837220c95875bb0f700f0ca089e6f39b9e1a9d01fb4b6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6ef864220e1802abe74a11f4c6b8fb25d00cbeb969744120f3ae6ad859bf5a6 = $this->env->getExtension("native_profiler");
        $__internal_e6ef864220e1802abe74a11f4c6b8fb25d00cbeb969744120f3ae6ad859bf5a6->enter($__internal_e6ef864220e1802abe74a11f4c6b8fb25d00cbeb969744120f3ae6ad859bf5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e6ef864220e1802abe74a11f4c6b8fb25d00cbeb969744120f3ae6ad859bf5a6->leave($__internal_e6ef864220e1802abe74a11f4c6b8fb25d00cbeb969744120f3ae6ad859bf5a6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0104dd8dfe9732c472a13c8450859188d77545d1e52d14d616b1c93931293ad2 = $this->env->getExtension("native_profiler");
        $__internal_0104dd8dfe9732c472a13c8450859188d77545d1e52d14d616b1c93931293ad2->enter($__internal_0104dd8dfe9732c472a13c8450859188d77545d1e52d14d616b1c93931293ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0104dd8dfe9732c472a13c8450859188d77545d1e52d14d616b1c93931293ad2->leave($__internal_0104dd8dfe9732c472a13c8450859188d77545d1e52d14d616b1c93931293ad2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd60f5cf963df5c90472723c669f925d7e8851c901dbf76ff0308f8c91e18097 = $this->env->getExtension("native_profiler");
        $__internal_cd60f5cf963df5c90472723c669f925d7e8851c901dbf76ff0308f8c91e18097->enter($__internal_cd60f5cf963df5c90472723c669f925d7e8851c901dbf76ff0308f8c91e18097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd60f5cf963df5c90472723c669f925d7e8851c901dbf76ff0308f8c91e18097->leave($__internal_cd60f5cf963df5c90472723c669f925d7e8851c901dbf76ff0308f8c91e18097_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1a084587e2bb6e6ba1ecdb23cc32b847d65f378634cad4be7bea68efc0dc3c6 = $this->env->getExtension("native_profiler");
        $__internal_e1a084587e2bb6e6ba1ecdb23cc32b847d65f378634cad4be7bea68efc0dc3c6->enter($__internal_e1a084587e2bb6e6ba1ecdb23cc32b847d65f378634cad4be7bea68efc0dc3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e1a084587e2bb6e6ba1ecdb23cc32b847d65f378634cad4be7bea68efc0dc3c6->leave($__internal_e1a084587e2bb6e6ba1ecdb23cc32b847d65f378634cad4be7bea68efc0dc3c6_prof);

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
