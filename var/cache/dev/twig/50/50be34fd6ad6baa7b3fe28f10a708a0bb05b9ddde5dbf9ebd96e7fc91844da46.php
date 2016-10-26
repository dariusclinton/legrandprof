<?php

/* ::base.html.twig */
class __TwigTemplate_734375ac28020a4cdcb39809fb73a29360f8b2dd0e33f70c9b36dd8be88275b7 extends Twig_Template
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
        $__internal_e3735d70dd397310bb25a084c805db0cd48b4eef76827f31d3325d9227c70d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3735d70dd397310bb25a084c805db0cd48b4eef76827f31d3325d9227c70d65->enter($__internal_e3735d70dd397310bb25a084c805db0cd48b4eef76827f31d3325d9227c70d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_e3735d70dd397310bb25a084c805db0cd48b4eef76827f31d3325d9227c70d65->leave($__internal_e3735d70dd397310bb25a084c805db0cd48b4eef76827f31d3325d9227c70d65_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5bb32c2db2bf2b6f0db6c88626070f0437f851a122d3dadf395ba49b22b0b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5bb32c2db2bf2b6f0db6c88626070f0437f851a122d3dadf395ba49b22b0b92->enter($__internal_d5bb32c2db2bf2b6f0db6c88626070f0437f851a122d3dadf395ba49b22b0b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d5bb32c2db2bf2b6f0db6c88626070f0437f851a122d3dadf395ba49b22b0b92->leave($__internal_d5bb32c2db2bf2b6f0db6c88626070f0437f851a122d3dadf395ba49b22b0b92_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ba6c8d8be4c2354db259f772c2b10790c27f02106d86b7d1f08183d1ead9d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba6c8d8be4c2354db259f772c2b10790c27f02106d86b7d1f08183d1ead9d7b->enter($__internal_3ba6c8d8be4c2354db259f772c2b10790c27f02106d86b7d1f08183d1ead9d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3ba6c8d8be4c2354db259f772c2b10790c27f02106d86b7d1f08183d1ead9d7b->leave($__internal_3ba6c8d8be4c2354db259f772c2b10790c27f02106d86b7d1f08183d1ead9d7b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5503e6eeb1740ab0431efef94cfbd1f1ab029c59e699da686f0d1031ef23b44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5503e6eeb1740ab0431efef94cfbd1f1ab029c59e699da686f0d1031ef23b44d->enter($__internal_5503e6eeb1740ab0431efef94cfbd1f1ab029c59e699da686f0d1031ef23b44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5503e6eeb1740ab0431efef94cfbd1f1ab029c59e699da686f0d1031ef23b44d->leave($__internal_5503e6eeb1740ab0431efef94cfbd1f1ab029c59e699da686f0d1031ef23b44d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4a265bee877374681962d91faf3d34e7427c88acd623eb1896bcb8fe0509b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a265bee877374681962d91faf3d34e7427c88acd623eb1896bcb8fe0509b06->enter($__internal_c4a265bee877374681962d91faf3d34e7427c88acd623eb1896bcb8fe0509b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c4a265bee877374681962d91faf3d34e7427c88acd623eb1896bcb8fe0509b06->leave($__internal_c4a265bee877374681962d91faf3d34e7427c88acd623eb1896bcb8fe0509b06_prof);

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
