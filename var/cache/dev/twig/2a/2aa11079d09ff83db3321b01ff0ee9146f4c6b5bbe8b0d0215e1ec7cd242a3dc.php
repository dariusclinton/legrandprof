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
        $__internal_eee316b4a3623f147e68828eb81540eecc16564df754d91cebcf41fbbcb820ac = $this->env->getExtension("native_profiler");
        $__internal_eee316b4a3623f147e68828eb81540eecc16564df754d91cebcf41fbbcb820ac->enter($__internal_eee316b4a3623f147e68828eb81540eecc16564df754d91cebcf41fbbcb820ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_eee316b4a3623f147e68828eb81540eecc16564df754d91cebcf41fbbcb820ac->leave($__internal_eee316b4a3623f147e68828eb81540eecc16564df754d91cebcf41fbbcb820ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a79a694b2c000d0dd2cd517e10fe6ef269583a04fbdca98412222a18f9bfeee = $this->env->getExtension("native_profiler");
        $__internal_4a79a694b2c000d0dd2cd517e10fe6ef269583a04fbdca98412222a18f9bfeee->enter($__internal_4a79a694b2c000d0dd2cd517e10fe6ef269583a04fbdca98412222a18f9bfeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4a79a694b2c000d0dd2cd517e10fe6ef269583a04fbdca98412222a18f9bfeee->leave($__internal_4a79a694b2c000d0dd2cd517e10fe6ef269583a04fbdca98412222a18f9bfeee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_627c08d3dde19badc0f16ae891bdd6dd6e1337c7515fe4031792f342afb6dda5 = $this->env->getExtension("native_profiler");
        $__internal_627c08d3dde19badc0f16ae891bdd6dd6e1337c7515fe4031792f342afb6dda5->enter($__internal_627c08d3dde19badc0f16ae891bdd6dd6e1337c7515fe4031792f342afb6dda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_627c08d3dde19badc0f16ae891bdd6dd6e1337c7515fe4031792f342afb6dda5->leave($__internal_627c08d3dde19badc0f16ae891bdd6dd6e1337c7515fe4031792f342afb6dda5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d10876e144fc53ecfb93f6a58797a55d94b3c7c802fd78e6bccd0554e228221d = $this->env->getExtension("native_profiler");
        $__internal_d10876e144fc53ecfb93f6a58797a55d94b3c7c802fd78e6bccd0554e228221d->enter($__internal_d10876e144fc53ecfb93f6a58797a55d94b3c7c802fd78e6bccd0554e228221d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d10876e144fc53ecfb93f6a58797a55d94b3c7c802fd78e6bccd0554e228221d->leave($__internal_d10876e144fc53ecfb93f6a58797a55d94b3c7c802fd78e6bccd0554e228221d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4611bbda888ca80a2cefe37b12f75bb11f6931f7ecbbb212e9c3e0035cee3b02 = $this->env->getExtension("native_profiler");
        $__internal_4611bbda888ca80a2cefe37b12f75bb11f6931f7ecbbb212e9c3e0035cee3b02->enter($__internal_4611bbda888ca80a2cefe37b12f75bb11f6931f7ecbbb212e9c3e0035cee3b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4611bbda888ca80a2cefe37b12f75bb11f6931f7ecbbb212e9c3e0035cee3b02->leave($__internal_4611bbda888ca80a2cefe37b12f75bb11f6931f7ecbbb212e9c3e0035cee3b02_prof);

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
