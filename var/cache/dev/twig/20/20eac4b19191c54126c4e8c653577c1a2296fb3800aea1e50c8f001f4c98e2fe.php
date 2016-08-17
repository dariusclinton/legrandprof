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
        $__internal_8942023b3885863cedd9688b0f72fed6c8e25a088d984ee5f1b46eab2868ecaf = $this->env->getExtension("native_profiler");
        $__internal_8942023b3885863cedd9688b0f72fed6c8e25a088d984ee5f1b46eab2868ecaf->enter($__internal_8942023b3885863cedd9688b0f72fed6c8e25a088d984ee5f1b46eab2868ecaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8942023b3885863cedd9688b0f72fed6c8e25a088d984ee5f1b46eab2868ecaf->leave($__internal_8942023b3885863cedd9688b0f72fed6c8e25a088d984ee5f1b46eab2868ecaf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_265468f24941f727eb935e79a9ee210f3766a1773b377119925fdb2fd8adef66 = $this->env->getExtension("native_profiler");
        $__internal_265468f24941f727eb935e79a9ee210f3766a1773b377119925fdb2fd8adef66->enter($__internal_265468f24941f727eb935e79a9ee210f3766a1773b377119925fdb2fd8adef66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_265468f24941f727eb935e79a9ee210f3766a1773b377119925fdb2fd8adef66->leave($__internal_265468f24941f727eb935e79a9ee210f3766a1773b377119925fdb2fd8adef66_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9297533a7354ccaa28e799d60744ae29fcc3ba021b420d5420245d4bd658bff = $this->env->getExtension("native_profiler");
        $__internal_b9297533a7354ccaa28e799d60744ae29fcc3ba021b420d5420245d4bd658bff->enter($__internal_b9297533a7354ccaa28e799d60744ae29fcc3ba021b420d5420245d4bd658bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b9297533a7354ccaa28e799d60744ae29fcc3ba021b420d5420245d4bd658bff->leave($__internal_b9297533a7354ccaa28e799d60744ae29fcc3ba021b420d5420245d4bd658bff_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d61d75cff6f0a44c427184b9a74fa6d0be2acb6fcf71324a9f2d426bf1237a2 = $this->env->getExtension("native_profiler");
        $__internal_5d61d75cff6f0a44c427184b9a74fa6d0be2acb6fcf71324a9f2d426bf1237a2->enter($__internal_5d61d75cff6f0a44c427184b9a74fa6d0be2acb6fcf71324a9f2d426bf1237a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d61d75cff6f0a44c427184b9a74fa6d0be2acb6fcf71324a9f2d426bf1237a2->leave($__internal_5d61d75cff6f0a44c427184b9a74fa6d0be2acb6fcf71324a9f2d426bf1237a2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e4e170afdd8a58cc6dea1c103f9afdddaa344e6645ce4fda5781096e5c95b78 = $this->env->getExtension("native_profiler");
        $__internal_7e4e170afdd8a58cc6dea1c103f9afdddaa344e6645ce4fda5781096e5c95b78->enter($__internal_7e4e170afdd8a58cc6dea1c103f9afdddaa344e6645ce4fda5781096e5c95b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7e4e170afdd8a58cc6dea1c103f9afdddaa344e6645ce4fda5781096e5c95b78->leave($__internal_7e4e170afdd8a58cc6dea1c103f9afdddaa344e6645ce4fda5781096e5c95b78_prof);

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
