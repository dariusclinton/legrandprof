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
        $__internal_ace90fa7a0cea0e65b6e6003f904bfa95bab8b4c4b16e2e47fc393d66798b44a = $this->env->getExtension("native_profiler");
        $__internal_ace90fa7a0cea0e65b6e6003f904bfa95bab8b4c4b16e2e47fc393d66798b44a->enter($__internal_ace90fa7a0cea0e65b6e6003f904bfa95bab8b4c4b16e2e47fc393d66798b44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ace90fa7a0cea0e65b6e6003f904bfa95bab8b4c4b16e2e47fc393d66798b44a->leave($__internal_ace90fa7a0cea0e65b6e6003f904bfa95bab8b4c4b16e2e47fc393d66798b44a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_376ef6ecaf400331e73ce2a4988cf1fea87d13e1d5c3f8ef1be0a6659e19dca7 = $this->env->getExtension("native_profiler");
        $__internal_376ef6ecaf400331e73ce2a4988cf1fea87d13e1d5c3f8ef1be0a6659e19dca7->enter($__internal_376ef6ecaf400331e73ce2a4988cf1fea87d13e1d5c3f8ef1be0a6659e19dca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_376ef6ecaf400331e73ce2a4988cf1fea87d13e1d5c3f8ef1be0a6659e19dca7->leave($__internal_376ef6ecaf400331e73ce2a4988cf1fea87d13e1d5c3f8ef1be0a6659e19dca7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f161543c46e484a78d28bbd7476ff77839b7c7ab58e09e6445bbc3d991d8df4c = $this->env->getExtension("native_profiler");
        $__internal_f161543c46e484a78d28bbd7476ff77839b7c7ab58e09e6445bbc3d991d8df4c->enter($__internal_f161543c46e484a78d28bbd7476ff77839b7c7ab58e09e6445bbc3d991d8df4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f161543c46e484a78d28bbd7476ff77839b7c7ab58e09e6445bbc3d991d8df4c->leave($__internal_f161543c46e484a78d28bbd7476ff77839b7c7ab58e09e6445bbc3d991d8df4c_prof);

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
