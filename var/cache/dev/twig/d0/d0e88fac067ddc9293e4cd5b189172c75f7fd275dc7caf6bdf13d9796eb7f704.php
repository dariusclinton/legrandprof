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
        $__internal_95269c29232db2600979be48f63e7d8572d522fe8e2fc5c0829d50899c7773e0 = $this->env->getExtension("native_profiler");
        $__internal_95269c29232db2600979be48f63e7d8572d522fe8e2fc5c0829d50899c7773e0->enter($__internal_95269c29232db2600979be48f63e7d8572d522fe8e2fc5c0829d50899c7773e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_95269c29232db2600979be48f63e7d8572d522fe8e2fc5c0829d50899c7773e0->leave($__internal_95269c29232db2600979be48f63e7d8572d522fe8e2fc5c0829d50899c7773e0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eea346bc01c607c982a9c8f5272ea3c84676a1f20d9b51a67478bc037b4537bd = $this->env->getExtension("native_profiler");
        $__internal_eea346bc01c607c982a9c8f5272ea3c84676a1f20d9b51a67478bc037b4537bd->enter($__internal_eea346bc01c607c982a9c8f5272ea3c84676a1f20d9b51a67478bc037b4537bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eea346bc01c607c982a9c8f5272ea3c84676a1f20d9b51a67478bc037b4537bd->leave($__internal_eea346bc01c607c982a9c8f5272ea3c84676a1f20d9b51a67478bc037b4537bd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77d2fe9231dcc021d52656d3a2a0b6b89acc4f3127841ab2fc4563e9e74c8099 = $this->env->getExtension("native_profiler");
        $__internal_77d2fe9231dcc021d52656d3a2a0b6b89acc4f3127841ab2fc4563e9e74c8099->enter($__internal_77d2fe9231dcc021d52656d3a2a0b6b89acc4f3127841ab2fc4563e9e74c8099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_77d2fe9231dcc021d52656d3a2a0b6b89acc4f3127841ab2fc4563e9e74c8099->leave($__internal_77d2fe9231dcc021d52656d3a2a0b6b89acc4f3127841ab2fc4563e9e74c8099_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c597c8797d851590d2aaafe5c2b3f126c1b42ddbe99f10e7b975054fca44d90 = $this->env->getExtension("native_profiler");
        $__internal_9c597c8797d851590d2aaafe5c2b3f126c1b42ddbe99f10e7b975054fca44d90->enter($__internal_9c597c8797d851590d2aaafe5c2b3f126c1b42ddbe99f10e7b975054fca44d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c597c8797d851590d2aaafe5c2b3f126c1b42ddbe99f10e7b975054fca44d90->leave($__internal_9c597c8797d851590d2aaafe5c2b3f126c1b42ddbe99f10e7b975054fca44d90_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df5da1cb6aedba6fe58b5e15e0c66dec53ea79cffa439dcf043c0bf77041e4d2 = $this->env->getExtension("native_profiler");
        $__internal_df5da1cb6aedba6fe58b5e15e0c66dec53ea79cffa439dcf043c0bf77041e4d2->enter($__internal_df5da1cb6aedba6fe58b5e15e0c66dec53ea79cffa439dcf043c0bf77041e4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_df5da1cb6aedba6fe58b5e15e0c66dec53ea79cffa439dcf043c0bf77041e4d2->leave($__internal_df5da1cb6aedba6fe58b5e15e0c66dec53ea79cffa439dcf043c0bf77041e4d2_prof);

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
