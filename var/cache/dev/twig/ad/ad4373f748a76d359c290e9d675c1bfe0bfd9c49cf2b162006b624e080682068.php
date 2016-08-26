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
        $__internal_fa43a79b706ce9ce7a62b404828cce805213a62098e03c27f2faf9531fcd5897 = $this->env->getExtension("native_profiler");
        $__internal_fa43a79b706ce9ce7a62b404828cce805213a62098e03c27f2faf9531fcd5897->enter($__internal_fa43a79b706ce9ce7a62b404828cce805213a62098e03c27f2faf9531fcd5897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa43a79b706ce9ce7a62b404828cce805213a62098e03c27f2faf9531fcd5897->leave($__internal_fa43a79b706ce9ce7a62b404828cce805213a62098e03c27f2faf9531fcd5897_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ca61565bfd0dc20ac8a2aa1a060ec9a69c4fe44c4a8aa287299a20623128678 = $this->env->getExtension("native_profiler");
        $__internal_7ca61565bfd0dc20ac8a2aa1a060ec9a69c4fe44c4a8aa287299a20623128678->enter($__internal_7ca61565bfd0dc20ac8a2aa1a060ec9a69c4fe44c4a8aa287299a20623128678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7ca61565bfd0dc20ac8a2aa1a060ec9a69c4fe44c4a8aa287299a20623128678->leave($__internal_7ca61565bfd0dc20ac8a2aa1a060ec9a69c4fe44c4a8aa287299a20623128678_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8ac35236256e56ed5763a119fd3ac5a0ebb1f2b1d1222470a550a5c3b5e46f7 = $this->env->getExtension("native_profiler");
        $__internal_a8ac35236256e56ed5763a119fd3ac5a0ebb1f2b1d1222470a550a5c3b5e46f7->enter($__internal_a8ac35236256e56ed5763a119fd3ac5a0ebb1f2b1d1222470a550a5c3b5e46f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a8ac35236256e56ed5763a119fd3ac5a0ebb1f2b1d1222470a550a5c3b5e46f7->leave($__internal_a8ac35236256e56ed5763a119fd3ac5a0ebb1f2b1d1222470a550a5c3b5e46f7_prof);

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
