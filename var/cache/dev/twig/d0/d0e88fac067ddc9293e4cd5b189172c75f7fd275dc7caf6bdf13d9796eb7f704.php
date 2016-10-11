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
        $__internal_94c657d7bbcd215ce75dc216905aaa57b69bbb174a367391185d9bd78c96dd51 = $this->env->getExtension("native_profiler");
        $__internal_94c657d7bbcd215ce75dc216905aaa57b69bbb174a367391185d9bd78c96dd51->enter($__internal_94c657d7bbcd215ce75dc216905aaa57b69bbb174a367391185d9bd78c96dd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_94c657d7bbcd215ce75dc216905aaa57b69bbb174a367391185d9bd78c96dd51->leave($__internal_94c657d7bbcd215ce75dc216905aaa57b69bbb174a367391185d9bd78c96dd51_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5b8075b1654dcd7e3ee46a90cf86781c4e6de7d58bb5925730b985d6eec2e04 = $this->env->getExtension("native_profiler");
        $__internal_e5b8075b1654dcd7e3ee46a90cf86781c4e6de7d58bb5925730b985d6eec2e04->enter($__internal_e5b8075b1654dcd7e3ee46a90cf86781c4e6de7d58bb5925730b985d6eec2e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e5b8075b1654dcd7e3ee46a90cf86781c4e6de7d58bb5925730b985d6eec2e04->leave($__internal_e5b8075b1654dcd7e3ee46a90cf86781c4e6de7d58bb5925730b985d6eec2e04_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5024e54f15f583f3480bb6627094289f45d076fd0a26568d5fd5b660a84ff2c = $this->env->getExtension("native_profiler");
        $__internal_e5024e54f15f583f3480bb6627094289f45d076fd0a26568d5fd5b660a84ff2c->enter($__internal_e5024e54f15f583f3480bb6627094289f45d076fd0a26568d5fd5b660a84ff2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e5024e54f15f583f3480bb6627094289f45d076fd0a26568d5fd5b660a84ff2c->leave($__internal_e5024e54f15f583f3480bb6627094289f45d076fd0a26568d5fd5b660a84ff2c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2c80b1f1fdc4493a3aff1717bde2adfae6ade1c2d404c5feb35eea012f5f459 = $this->env->getExtension("native_profiler");
        $__internal_f2c80b1f1fdc4493a3aff1717bde2adfae6ade1c2d404c5feb35eea012f5f459->enter($__internal_f2c80b1f1fdc4493a3aff1717bde2adfae6ade1c2d404c5feb35eea012f5f459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f2c80b1f1fdc4493a3aff1717bde2adfae6ade1c2d404c5feb35eea012f5f459->leave($__internal_f2c80b1f1fdc4493a3aff1717bde2adfae6ade1c2d404c5feb35eea012f5f459_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f46716543f1175f44a8368bb0649ba3d926e08906915cb82e1810a541e500db7 = $this->env->getExtension("native_profiler");
        $__internal_f46716543f1175f44a8368bb0649ba3d926e08906915cb82e1810a541e500db7->enter($__internal_f46716543f1175f44a8368bb0649ba3d926e08906915cb82e1810a541e500db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f46716543f1175f44a8368bb0649ba3d926e08906915cb82e1810a541e500db7->leave($__internal_f46716543f1175f44a8368bb0649ba3d926e08906915cb82e1810a541e500db7_prof);

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
