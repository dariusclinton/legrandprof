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
        $__internal_880e3f93f518325f9c99763b03d653eac668acb6949b43eff6fab431215f419c = $this->env->getExtension("native_profiler");
        $__internal_880e3f93f518325f9c99763b03d653eac668acb6949b43eff6fab431215f419c->enter($__internal_880e3f93f518325f9c99763b03d653eac668acb6949b43eff6fab431215f419c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_880e3f93f518325f9c99763b03d653eac668acb6949b43eff6fab431215f419c->leave($__internal_880e3f93f518325f9c99763b03d653eac668acb6949b43eff6fab431215f419c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b78637dba23e35398132c9cffb7a1875dcd2fd9b13a4409ca5c39ff4a2558112 = $this->env->getExtension("native_profiler");
        $__internal_b78637dba23e35398132c9cffb7a1875dcd2fd9b13a4409ca5c39ff4a2558112->enter($__internal_b78637dba23e35398132c9cffb7a1875dcd2fd9b13a4409ca5c39ff4a2558112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b78637dba23e35398132c9cffb7a1875dcd2fd9b13a4409ca5c39ff4a2558112->leave($__internal_b78637dba23e35398132c9cffb7a1875dcd2fd9b13a4409ca5c39ff4a2558112_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b0ecf8b8a418126e034748af95a4668b277e918348a86494834fc5e974f7dae = $this->env->getExtension("native_profiler");
        $__internal_5b0ecf8b8a418126e034748af95a4668b277e918348a86494834fc5e974f7dae->enter($__internal_5b0ecf8b8a418126e034748af95a4668b277e918348a86494834fc5e974f7dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5b0ecf8b8a418126e034748af95a4668b277e918348a86494834fc5e974f7dae->leave($__internal_5b0ecf8b8a418126e034748af95a4668b277e918348a86494834fc5e974f7dae_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d9e5fd2899e8dab9d1386adfd429facbccf7a04386e849e7c0cc2951bd377da = $this->env->getExtension("native_profiler");
        $__internal_1d9e5fd2899e8dab9d1386adfd429facbccf7a04386e849e7c0cc2951bd377da->enter($__internal_1d9e5fd2899e8dab9d1386adfd429facbccf7a04386e849e7c0cc2951bd377da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d9e5fd2899e8dab9d1386adfd429facbccf7a04386e849e7c0cc2951bd377da->leave($__internal_1d9e5fd2899e8dab9d1386adfd429facbccf7a04386e849e7c0cc2951bd377da_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c2c132a9ac2366ea3614a28fa2a8a5cccf82d3fd5b99db6ad0e6d1d9e660fba5 = $this->env->getExtension("native_profiler");
        $__internal_c2c132a9ac2366ea3614a28fa2a8a5cccf82d3fd5b99db6ad0e6d1d9e660fba5->enter($__internal_c2c132a9ac2366ea3614a28fa2a8a5cccf82d3fd5b99db6ad0e6d1d9e660fba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c2c132a9ac2366ea3614a28fa2a8a5cccf82d3fd5b99db6ad0e6d1d9e660fba5->leave($__internal_c2c132a9ac2366ea3614a28fa2a8a5cccf82d3fd5b99db6ad0e6d1d9e660fba5_prof);

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
