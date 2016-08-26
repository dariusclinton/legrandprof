<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1cc0d6ce3c44e79033fcf1e9aa9249caf8107f3da3f5d440d1538baab78954b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_121266b0b9eac560709c11e34b24dc6e7bbe29411cffc6af606e23c595b5c52e = $this->env->getExtension("native_profiler");
        $__internal_121266b0b9eac560709c11e34b24dc6e7bbe29411cffc6af606e23c595b5c52e->enter($__internal_121266b0b9eac560709c11e34b24dc6e7bbe29411cffc6af606e23c595b5c52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121266b0b9eac560709c11e34b24dc6e7bbe29411cffc6af606e23c595b5c52e->leave($__internal_121266b0b9eac560709c11e34b24dc6e7bbe29411cffc6af606e23c595b5c52e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef632b00c67c89d5847991f2b1cf7fe7636ba791efbe4dabca3c662b45fad672 = $this->env->getExtension("native_profiler");
        $__internal_ef632b00c67c89d5847991f2b1cf7fe7636ba791efbe4dabca3c662b45fad672->enter($__internal_ef632b00c67c89d5847991f2b1cf7fe7636ba791efbe4dabca3c662b45fad672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ef632b00c67c89d5847991f2b1cf7fe7636ba791efbe4dabca3c662b45fad672->leave($__internal_ef632b00c67c89d5847991f2b1cf7fe7636ba791efbe4dabca3c662b45fad672_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffbd7c6027a6633d7e828d2357f45bf1512bf528376072d0ea7a874ead5ff201 = $this->env->getExtension("native_profiler");
        $__internal_ffbd7c6027a6633d7e828d2357f45bf1512bf528376072d0ea7a874ead5ff201->enter($__internal_ffbd7c6027a6633d7e828d2357f45bf1512bf528376072d0ea7a874ead5ff201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ffbd7c6027a6633d7e828d2357f45bf1512bf528376072d0ea7a874ead5ff201->leave($__internal_ffbd7c6027a6633d7e828d2357f45bf1512bf528376072d0ea7a874ead5ff201_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
