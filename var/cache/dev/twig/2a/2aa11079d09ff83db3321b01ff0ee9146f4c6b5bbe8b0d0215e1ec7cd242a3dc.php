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
        $__internal_53fff881b832e25e27179c1c6a436c40ebd1f0954ba84efc7601c0ce8e48705b = $this->env->getExtension("native_profiler");
        $__internal_53fff881b832e25e27179c1c6a436c40ebd1f0954ba84efc7601c0ce8e48705b->enter($__internal_53fff881b832e25e27179c1c6a436c40ebd1f0954ba84efc7601c0ce8e48705b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_53fff881b832e25e27179c1c6a436c40ebd1f0954ba84efc7601c0ce8e48705b->leave($__internal_53fff881b832e25e27179c1c6a436c40ebd1f0954ba84efc7601c0ce8e48705b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_63220aa94f0500ce2590eda666c7c2ebfae1d437530688018b64fe88a6e0bfb2 = $this->env->getExtension("native_profiler");
        $__internal_63220aa94f0500ce2590eda666c7c2ebfae1d437530688018b64fe88a6e0bfb2->enter($__internal_63220aa94f0500ce2590eda666c7c2ebfae1d437530688018b64fe88a6e0bfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_63220aa94f0500ce2590eda666c7c2ebfae1d437530688018b64fe88a6e0bfb2->leave($__internal_63220aa94f0500ce2590eda666c7c2ebfae1d437530688018b64fe88a6e0bfb2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2371ef77154eb5d5f4ba4ffc5435f872d943e5ba58f00f87f4aecab5111eb0b1 = $this->env->getExtension("native_profiler");
        $__internal_2371ef77154eb5d5f4ba4ffc5435f872d943e5ba58f00f87f4aecab5111eb0b1->enter($__internal_2371ef77154eb5d5f4ba4ffc5435f872d943e5ba58f00f87f4aecab5111eb0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2371ef77154eb5d5f4ba4ffc5435f872d943e5ba58f00f87f4aecab5111eb0b1->leave($__internal_2371ef77154eb5d5f4ba4ffc5435f872d943e5ba58f00f87f4aecab5111eb0b1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_81f014ef6d1c61f88e0f570f2c24e806cb2ffa96762cbe84f31ddf330663d664 = $this->env->getExtension("native_profiler");
        $__internal_81f014ef6d1c61f88e0f570f2c24e806cb2ffa96762cbe84f31ddf330663d664->enter($__internal_81f014ef6d1c61f88e0f570f2c24e806cb2ffa96762cbe84f31ddf330663d664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_81f014ef6d1c61f88e0f570f2c24e806cb2ffa96762cbe84f31ddf330663d664->leave($__internal_81f014ef6d1c61f88e0f570f2c24e806cb2ffa96762cbe84f31ddf330663d664_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29a42b9321ae2bf11baf423120acd43f472791056bf7af355854addd081a442a = $this->env->getExtension("native_profiler");
        $__internal_29a42b9321ae2bf11baf423120acd43f472791056bf7af355854addd081a442a->enter($__internal_29a42b9321ae2bf11baf423120acd43f472791056bf7af355854addd081a442a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_29a42b9321ae2bf11baf423120acd43f472791056bf7af355854addd081a442a->leave($__internal_29a42b9321ae2bf11baf423120acd43f472791056bf7af355854addd081a442a_prof);

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
