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
        $__internal_e00f4e2ac921563512d38e900542804b44b1ee9a5c3288ec5e897e1ecc6c2e3e = $this->env->getExtension("native_profiler");
        $__internal_e00f4e2ac921563512d38e900542804b44b1ee9a5c3288ec5e897e1ecc6c2e3e->enter($__internal_e00f4e2ac921563512d38e900542804b44b1ee9a5c3288ec5e897e1ecc6c2e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e00f4e2ac921563512d38e900542804b44b1ee9a5c3288ec5e897e1ecc6c2e3e->leave($__internal_e00f4e2ac921563512d38e900542804b44b1ee9a5c3288ec5e897e1ecc6c2e3e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_58f4e32c4000f4008b7c43ab17c1fa14b923d92f5f1fb6dda7cbd0f5ef473a37 = $this->env->getExtension("native_profiler");
        $__internal_58f4e32c4000f4008b7c43ab17c1fa14b923d92f5f1fb6dda7cbd0f5ef473a37->enter($__internal_58f4e32c4000f4008b7c43ab17c1fa14b923d92f5f1fb6dda7cbd0f5ef473a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_58f4e32c4000f4008b7c43ab17c1fa14b923d92f5f1fb6dda7cbd0f5ef473a37->leave($__internal_58f4e32c4000f4008b7c43ab17c1fa14b923d92f5f1fb6dda7cbd0f5ef473a37_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b70ca559470213b3e80bfb5e22c728cbd43c0569b5204d5070a25bd0d870c7ca = $this->env->getExtension("native_profiler");
        $__internal_b70ca559470213b3e80bfb5e22c728cbd43c0569b5204d5070a25bd0d870c7ca->enter($__internal_b70ca559470213b3e80bfb5e22c728cbd43c0569b5204d5070a25bd0d870c7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b70ca559470213b3e80bfb5e22c728cbd43c0569b5204d5070a25bd0d870c7ca->leave($__internal_b70ca559470213b3e80bfb5e22c728cbd43c0569b5204d5070a25bd0d870c7ca_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_090bf60d7b0e6472b0bbed4285adcd41decdec52d297520df7c8976d228ed249 = $this->env->getExtension("native_profiler");
        $__internal_090bf60d7b0e6472b0bbed4285adcd41decdec52d297520df7c8976d228ed249->enter($__internal_090bf60d7b0e6472b0bbed4285adcd41decdec52d297520df7c8976d228ed249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_090bf60d7b0e6472b0bbed4285adcd41decdec52d297520df7c8976d228ed249->leave($__internal_090bf60d7b0e6472b0bbed4285adcd41decdec52d297520df7c8976d228ed249_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecca1c11487b241df7d4f719a333954a21d88511d4c2b8741af80de75b1e7e70 = $this->env->getExtension("native_profiler");
        $__internal_ecca1c11487b241df7d4f719a333954a21d88511d4c2b8741af80de75b1e7e70->enter($__internal_ecca1c11487b241df7d4f719a333954a21d88511d4c2b8741af80de75b1e7e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ecca1c11487b241df7d4f719a333954a21d88511d4c2b8741af80de75b1e7e70->leave($__internal_ecca1c11487b241df7d4f719a333954a21d88511d4c2b8741af80de75b1e7e70_prof);

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
