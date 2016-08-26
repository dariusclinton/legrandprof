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
        $__internal_f9efbbf311d6425fa58c2328c8503528aa2dfe046cc363991d24191d3a242a62 = $this->env->getExtension("native_profiler");
        $__internal_f9efbbf311d6425fa58c2328c8503528aa2dfe046cc363991d24191d3a242a62->enter($__internal_f9efbbf311d6425fa58c2328c8503528aa2dfe046cc363991d24191d3a242a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f9efbbf311d6425fa58c2328c8503528aa2dfe046cc363991d24191d3a242a62->leave($__internal_f9efbbf311d6425fa58c2328c8503528aa2dfe046cc363991d24191d3a242a62_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_50007189fd5fadb25bb706bd088ea8c3627a5f5ed93012bd5a0996f297a9a363 = $this->env->getExtension("native_profiler");
        $__internal_50007189fd5fadb25bb706bd088ea8c3627a5f5ed93012bd5a0996f297a9a363->enter($__internal_50007189fd5fadb25bb706bd088ea8c3627a5f5ed93012bd5a0996f297a9a363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_50007189fd5fadb25bb706bd088ea8c3627a5f5ed93012bd5a0996f297a9a363->leave($__internal_50007189fd5fadb25bb706bd088ea8c3627a5f5ed93012bd5a0996f297a9a363_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32e74084988e84e7720071d53182b7e21abc04c2795ec340324a76b7ec31fc09 = $this->env->getExtension("native_profiler");
        $__internal_32e74084988e84e7720071d53182b7e21abc04c2795ec340324a76b7ec31fc09->enter($__internal_32e74084988e84e7720071d53182b7e21abc04c2795ec340324a76b7ec31fc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_32e74084988e84e7720071d53182b7e21abc04c2795ec340324a76b7ec31fc09->leave($__internal_32e74084988e84e7720071d53182b7e21abc04c2795ec340324a76b7ec31fc09_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5a735541d8ed9655eda1b825594f9c12ed2f9c1283991767e4675467ea1ba65 = $this->env->getExtension("native_profiler");
        $__internal_e5a735541d8ed9655eda1b825594f9c12ed2f9c1283991767e4675467ea1ba65->enter($__internal_e5a735541d8ed9655eda1b825594f9c12ed2f9c1283991767e4675467ea1ba65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e5a735541d8ed9655eda1b825594f9c12ed2f9c1283991767e4675467ea1ba65->leave($__internal_e5a735541d8ed9655eda1b825594f9c12ed2f9c1283991767e4675467ea1ba65_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecf49a9b99b753f7edfe67841087d1672b6822c28fc2cfc4d4bf6bff681d15ff = $this->env->getExtension("native_profiler");
        $__internal_ecf49a9b99b753f7edfe67841087d1672b6822c28fc2cfc4d4bf6bff681d15ff->enter($__internal_ecf49a9b99b753f7edfe67841087d1672b6822c28fc2cfc4d4bf6bff681d15ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ecf49a9b99b753f7edfe67841087d1672b6822c28fc2cfc4d4bf6bff681d15ff->leave($__internal_ecf49a9b99b753f7edfe67841087d1672b6822c28fc2cfc4d4bf6bff681d15ff_prof);

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
