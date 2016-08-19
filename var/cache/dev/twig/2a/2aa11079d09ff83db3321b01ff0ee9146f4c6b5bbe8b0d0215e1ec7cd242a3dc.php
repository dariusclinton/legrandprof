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
        $__internal_c1262487d5b293a49a45f88c4e020b06791904b8e11532de8ad31aebf48874f7 = $this->env->getExtension("native_profiler");
        $__internal_c1262487d5b293a49a45f88c4e020b06791904b8e11532de8ad31aebf48874f7->enter($__internal_c1262487d5b293a49a45f88c4e020b06791904b8e11532de8ad31aebf48874f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c1262487d5b293a49a45f88c4e020b06791904b8e11532de8ad31aebf48874f7->leave($__internal_c1262487d5b293a49a45f88c4e020b06791904b8e11532de8ad31aebf48874f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0638d1eaa40afcefb53513cf8d8c97cfcdf290e353a4983096018b8c29143184 = $this->env->getExtension("native_profiler");
        $__internal_0638d1eaa40afcefb53513cf8d8c97cfcdf290e353a4983096018b8c29143184->enter($__internal_0638d1eaa40afcefb53513cf8d8c97cfcdf290e353a4983096018b8c29143184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0638d1eaa40afcefb53513cf8d8c97cfcdf290e353a4983096018b8c29143184->leave($__internal_0638d1eaa40afcefb53513cf8d8c97cfcdf290e353a4983096018b8c29143184_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b17dc62596f19e6c134064532710a74fd6b3fe470a3ccc0dc60c911adc3d62c5 = $this->env->getExtension("native_profiler");
        $__internal_b17dc62596f19e6c134064532710a74fd6b3fe470a3ccc0dc60c911adc3d62c5->enter($__internal_b17dc62596f19e6c134064532710a74fd6b3fe470a3ccc0dc60c911adc3d62c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b17dc62596f19e6c134064532710a74fd6b3fe470a3ccc0dc60c911adc3d62c5->leave($__internal_b17dc62596f19e6c134064532710a74fd6b3fe470a3ccc0dc60c911adc3d62c5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd8ffd0d66d8b4a60cde292c6951e580798bd2660c676cc3ff1e1c9ba28543ca = $this->env->getExtension("native_profiler");
        $__internal_fd8ffd0d66d8b4a60cde292c6951e580798bd2660c676cc3ff1e1c9ba28543ca->enter($__internal_fd8ffd0d66d8b4a60cde292c6951e580798bd2660c676cc3ff1e1c9ba28543ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fd8ffd0d66d8b4a60cde292c6951e580798bd2660c676cc3ff1e1c9ba28543ca->leave($__internal_fd8ffd0d66d8b4a60cde292c6951e580798bd2660c676cc3ff1e1c9ba28543ca_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7bf0f91df57e6d494e7d7fc73a3434d87d15e257ee59ae93b20504ab6f485a89 = $this->env->getExtension("native_profiler");
        $__internal_7bf0f91df57e6d494e7d7fc73a3434d87d15e257ee59ae93b20504ab6f485a89->enter($__internal_7bf0f91df57e6d494e7d7fc73a3434d87d15e257ee59ae93b20504ab6f485a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7bf0f91df57e6d494e7d7fc73a3434d87d15e257ee59ae93b20504ab6f485a89->leave($__internal_7bf0f91df57e6d494e7d7fc73a3434d87d15e257ee59ae93b20504ab6f485a89_prof);

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
