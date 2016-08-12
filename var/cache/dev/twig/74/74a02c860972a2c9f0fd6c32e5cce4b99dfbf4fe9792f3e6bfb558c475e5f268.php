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
        $__internal_c1120e9623d59ff051b0891b58fa7ccff45328e2187e11adc335d27a00086ddc = $this->env->getExtension("native_profiler");
        $__internal_c1120e9623d59ff051b0891b58fa7ccff45328e2187e11adc335d27a00086ddc->enter($__internal_c1120e9623d59ff051b0891b58fa7ccff45328e2187e11adc335d27a00086ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c1120e9623d59ff051b0891b58fa7ccff45328e2187e11adc335d27a00086ddc->leave($__internal_c1120e9623d59ff051b0891b58fa7ccff45328e2187e11adc335d27a00086ddc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c24569ea04756c6f365d22c6f09dc9cc8e027589a99248667447136658dd37e9 = $this->env->getExtension("native_profiler");
        $__internal_c24569ea04756c6f365d22c6f09dc9cc8e027589a99248667447136658dd37e9->enter($__internal_c24569ea04756c6f365d22c6f09dc9cc8e027589a99248667447136658dd37e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c24569ea04756c6f365d22c6f09dc9cc8e027589a99248667447136658dd37e9->leave($__internal_c24569ea04756c6f365d22c6f09dc9cc8e027589a99248667447136658dd37e9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d27e7de5ad46e6cb58f33b6f692868ac17ef246efdf0a0e9cd2492dc80bcc71f = $this->env->getExtension("native_profiler");
        $__internal_d27e7de5ad46e6cb58f33b6f692868ac17ef246efdf0a0e9cd2492dc80bcc71f->enter($__internal_d27e7de5ad46e6cb58f33b6f692868ac17ef246efdf0a0e9cd2492dc80bcc71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d27e7de5ad46e6cb58f33b6f692868ac17ef246efdf0a0e9cd2492dc80bcc71f->leave($__internal_d27e7de5ad46e6cb58f33b6f692868ac17ef246efdf0a0e9cd2492dc80bcc71f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b98c34b4995987239b1aa77ce8e9c6854e265856bdfa8c6aff2811dd008ea143 = $this->env->getExtension("native_profiler");
        $__internal_b98c34b4995987239b1aa77ce8e9c6854e265856bdfa8c6aff2811dd008ea143->enter($__internal_b98c34b4995987239b1aa77ce8e9c6854e265856bdfa8c6aff2811dd008ea143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b98c34b4995987239b1aa77ce8e9c6854e265856bdfa8c6aff2811dd008ea143->leave($__internal_b98c34b4995987239b1aa77ce8e9c6854e265856bdfa8c6aff2811dd008ea143_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5d93791f91ffc187310bc7e278985ecf34e7b8120ef68ff271593feaac14756 = $this->env->getExtension("native_profiler");
        $__internal_c5d93791f91ffc187310bc7e278985ecf34e7b8120ef68ff271593feaac14756->enter($__internal_c5d93791f91ffc187310bc7e278985ecf34e7b8120ef68ff271593feaac14756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c5d93791f91ffc187310bc7e278985ecf34e7b8120ef68ff271593feaac14756->leave($__internal_c5d93791f91ffc187310bc7e278985ecf34e7b8120ef68ff271593feaac14756_prof);

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
