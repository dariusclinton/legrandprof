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
        $__internal_922b8be4ced12ac50a9295d21cf5e662479b0b000862e99f2e655ceef71ea15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922b8be4ced12ac50a9295d21cf5e662479b0b000862e99f2e655ceef71ea15f->enter($__internal_922b8be4ced12ac50a9295d21cf5e662479b0b000862e99f2e655ceef71ea15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_922b8be4ced12ac50a9295d21cf5e662479b0b000862e99f2e655ceef71ea15f->leave($__internal_922b8be4ced12ac50a9295d21cf5e662479b0b000862e99f2e655ceef71ea15f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_26e7bce50c9e10bbebb277e07ca4effb9719dba6fd61f2ad02fbf7e544e30939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e7bce50c9e10bbebb277e07ca4effb9719dba6fd61f2ad02fbf7e544e30939->enter($__internal_26e7bce50c9e10bbebb277e07ca4effb9719dba6fd61f2ad02fbf7e544e30939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_26e7bce50c9e10bbebb277e07ca4effb9719dba6fd61f2ad02fbf7e544e30939->leave($__internal_26e7bce50c9e10bbebb277e07ca4effb9719dba6fd61f2ad02fbf7e544e30939_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c63b6955d28b99811d88d71a8807cea38619d58ca0e669610e2a2433ac0e25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c63b6955d28b99811d88d71a8807cea38619d58ca0e669610e2a2433ac0e25b->enter($__internal_1c63b6955d28b99811d88d71a8807cea38619d58ca0e669610e2a2433ac0e25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c63b6955d28b99811d88d71a8807cea38619d58ca0e669610e2a2433ac0e25b->leave($__internal_1c63b6955d28b99811d88d71a8807cea38619d58ca0e669610e2a2433ac0e25b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c44a8398433ea8c4a1f7e5a0e4045a54abd293b657bec9e6175c4e44bac784f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44a8398433ea8c4a1f7e5a0e4045a54abd293b657bec9e6175c4e44bac784f0->enter($__internal_c44a8398433ea8c4a1f7e5a0e4045a54abd293b657bec9e6175c4e44bac784f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c44a8398433ea8c4a1f7e5a0e4045a54abd293b657bec9e6175c4e44bac784f0->leave($__internal_c44a8398433ea8c4a1f7e5a0e4045a54abd293b657bec9e6175c4e44bac784f0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9745e857a3b5c3eb648f4dc288b05d30f1830cc3adee9908bb65e48cb163677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9745e857a3b5c3eb648f4dc288b05d30f1830cc3adee9908bb65e48cb163677->enter($__internal_f9745e857a3b5c3eb648f4dc288b05d30f1830cc3adee9908bb65e48cb163677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f9745e857a3b5c3eb648f4dc288b05d30f1830cc3adee9908bb65e48cb163677->leave($__internal_f9745e857a3b5c3eb648f4dc288b05d30f1830cc3adee9908bb65e48cb163677_prof);

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
