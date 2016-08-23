<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d2e0bf86933bb4a5256da87dc6cd5ac08ca8fbd4e9efb517221a095eb5080bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b33f90f43d47b904cedf72fd11103fbd9662b4c811c5b965ef3fc90cca3c1450 = $this->env->getExtension("native_profiler");
        $__internal_b33f90f43d47b904cedf72fd11103fbd9662b4c811c5b965ef3fc90cca3c1450->enter($__internal_b33f90f43d47b904cedf72fd11103fbd9662b4c811c5b965ef3fc90cca3c1450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b33f90f43d47b904cedf72fd11103fbd9662b4c811c5b965ef3fc90cca3c1450->leave($__internal_b33f90f43d47b904cedf72fd11103fbd9662b4c811c5b965ef3fc90cca3c1450_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8eeeca58f285841e4a70c3cd701c68ed2d0053a4d72cc6c15e7a4d533dea4f31 = $this->env->getExtension("native_profiler");
        $__internal_8eeeca58f285841e4a70c3cd701c68ed2d0053a4d72cc6c15e7a4d533dea4f31->enter($__internal_8eeeca58f285841e4a70c3cd701c68ed2d0053a4d72cc6c15e7a4d533dea4f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8eeeca58f285841e4a70c3cd701c68ed2d0053a4d72cc6c15e7a4d533dea4f31->leave($__internal_8eeeca58f285841e4a70c3cd701c68ed2d0053a4d72cc6c15e7a4d533dea4f31_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_129a1dba9f26283cdee650a0f796ca2c82fae0c45c81aae84960fabdf7638843 = $this->env->getExtension("native_profiler");
        $__internal_129a1dba9f26283cdee650a0f796ca2c82fae0c45c81aae84960fabdf7638843->enter($__internal_129a1dba9f26283cdee650a0f796ca2c82fae0c45c81aae84960fabdf7638843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_129a1dba9f26283cdee650a0f796ca2c82fae0c45c81aae84960fabdf7638843->leave($__internal_129a1dba9f26283cdee650a0f796ca2c82fae0c45c81aae84960fabdf7638843_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
