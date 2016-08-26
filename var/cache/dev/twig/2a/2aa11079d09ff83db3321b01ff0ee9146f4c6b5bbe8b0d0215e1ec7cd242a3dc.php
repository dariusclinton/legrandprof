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
        $__internal_358c5ffe340ea49c278020db1c9e78840e6ef714a31809188ed1eaffaea4f439 = $this->env->getExtension("native_profiler");
        $__internal_358c5ffe340ea49c278020db1c9e78840e6ef714a31809188ed1eaffaea4f439->enter($__internal_358c5ffe340ea49c278020db1c9e78840e6ef714a31809188ed1eaffaea4f439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_358c5ffe340ea49c278020db1c9e78840e6ef714a31809188ed1eaffaea4f439->leave($__internal_358c5ffe340ea49c278020db1c9e78840e6ef714a31809188ed1eaffaea4f439_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_07334eac576bfb30eba6eedb4a56ecafadaa207b2535816daf2d40782cf5a4fb = $this->env->getExtension("native_profiler");
        $__internal_07334eac576bfb30eba6eedb4a56ecafadaa207b2535816daf2d40782cf5a4fb->enter($__internal_07334eac576bfb30eba6eedb4a56ecafadaa207b2535816daf2d40782cf5a4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_07334eac576bfb30eba6eedb4a56ecafadaa207b2535816daf2d40782cf5a4fb->leave($__internal_07334eac576bfb30eba6eedb4a56ecafadaa207b2535816daf2d40782cf5a4fb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da063fc46ccaa4a5893f4b37be75df3bef5e06395736b1d84e164544ebcc278f = $this->env->getExtension("native_profiler");
        $__internal_da063fc46ccaa4a5893f4b37be75df3bef5e06395736b1d84e164544ebcc278f->enter($__internal_da063fc46ccaa4a5893f4b37be75df3bef5e06395736b1d84e164544ebcc278f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da063fc46ccaa4a5893f4b37be75df3bef5e06395736b1d84e164544ebcc278f->leave($__internal_da063fc46ccaa4a5893f4b37be75df3bef5e06395736b1d84e164544ebcc278f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2cd25ccd1254df8d8c2697f305661a230305eecb2f5c05fe81775a06b3cfdbc = $this->env->getExtension("native_profiler");
        $__internal_a2cd25ccd1254df8d8c2697f305661a230305eecb2f5c05fe81775a06b3cfdbc->enter($__internal_a2cd25ccd1254df8d8c2697f305661a230305eecb2f5c05fe81775a06b3cfdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a2cd25ccd1254df8d8c2697f305661a230305eecb2f5c05fe81775a06b3cfdbc->leave($__internal_a2cd25ccd1254df8d8c2697f305661a230305eecb2f5c05fe81775a06b3cfdbc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9735fed144f92648e7fea8666eefba8194dc7266e4ca42ea20cc89bc244d186 = $this->env->getExtension("native_profiler");
        $__internal_f9735fed144f92648e7fea8666eefba8194dc7266e4ca42ea20cc89bc244d186->enter($__internal_f9735fed144f92648e7fea8666eefba8194dc7266e4ca42ea20cc89bc244d186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f9735fed144f92648e7fea8666eefba8194dc7266e4ca42ea20cc89bc244d186->leave($__internal_f9735fed144f92648e7fea8666eefba8194dc7266e4ca42ea20cc89bc244d186_prof);

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
