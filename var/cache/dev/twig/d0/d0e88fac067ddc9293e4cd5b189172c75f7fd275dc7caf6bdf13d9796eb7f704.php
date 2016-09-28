<?php

/* ::base.html.twig */
class __TwigTemplate_7a2f2d95223c043aa62cb0a1e1e226295a550e70246b38a27b6b2e05caeedbe6 extends Twig_Template
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
        $__internal_5c5c5c7639353e49c1251f6cf1424c67da8786631498581dc8295ed9a799bbaa = $this->env->getExtension("native_profiler");
        $__internal_5c5c5c7639353e49c1251f6cf1424c67da8786631498581dc8295ed9a799bbaa->enter($__internal_5c5c5c7639353e49c1251f6cf1424c67da8786631498581dc8295ed9a799bbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_5c5c5c7639353e49c1251f6cf1424c67da8786631498581dc8295ed9a799bbaa->leave($__internal_5c5c5c7639353e49c1251f6cf1424c67da8786631498581dc8295ed9a799bbaa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_239dc1300c82ddfae68610476629246ffd37a6c95df4de55e9a95f85c52e6467 = $this->env->getExtension("native_profiler");
        $__internal_239dc1300c82ddfae68610476629246ffd37a6c95df4de55e9a95f85c52e6467->enter($__internal_239dc1300c82ddfae68610476629246ffd37a6c95df4de55e9a95f85c52e6467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_239dc1300c82ddfae68610476629246ffd37a6c95df4de55e9a95f85c52e6467->leave($__internal_239dc1300c82ddfae68610476629246ffd37a6c95df4de55e9a95f85c52e6467_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84152e4a3e918bf8859be69792fcf676f70d3d7c30986d88160892af5b95ccea = $this->env->getExtension("native_profiler");
        $__internal_84152e4a3e918bf8859be69792fcf676f70d3d7c30986d88160892af5b95ccea->enter($__internal_84152e4a3e918bf8859be69792fcf676f70d3d7c30986d88160892af5b95ccea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_84152e4a3e918bf8859be69792fcf676f70d3d7c30986d88160892af5b95ccea->leave($__internal_84152e4a3e918bf8859be69792fcf676f70d3d7c30986d88160892af5b95ccea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca258ccb90c7d13cc36cc56d097f12e6f22e2814d337a40bd24f83428291554d = $this->env->getExtension("native_profiler");
        $__internal_ca258ccb90c7d13cc36cc56d097f12e6f22e2814d337a40bd24f83428291554d->enter($__internal_ca258ccb90c7d13cc36cc56d097f12e6f22e2814d337a40bd24f83428291554d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca258ccb90c7d13cc36cc56d097f12e6f22e2814d337a40bd24f83428291554d->leave($__internal_ca258ccb90c7d13cc36cc56d097f12e6f22e2814d337a40bd24f83428291554d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8f320ad6e34c4a06085a82fa3df613fee8b4fc471f848183ddfebfc3524656b = $this->env->getExtension("native_profiler");
        $__internal_b8f320ad6e34c4a06085a82fa3df613fee8b4fc471f848183ddfebfc3524656b->enter($__internal_b8f320ad6e34c4a06085a82fa3df613fee8b4fc471f848183ddfebfc3524656b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b8f320ad6e34c4a06085a82fa3df613fee8b4fc471f848183ddfebfc3524656b->leave($__internal_b8f320ad6e34c4a06085a82fa3df613fee8b4fc471f848183ddfebfc3524656b_prof);

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

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
