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
        $__internal_0d048d62af86699321b20ef7abb2097e8398497fffa08a7149aa14bfe8a12b48 = $this->env->getExtension("native_profiler");
        $__internal_0d048d62af86699321b20ef7abb2097e8398497fffa08a7149aa14bfe8a12b48->enter($__internal_0d048d62af86699321b20ef7abb2097e8398497fffa08a7149aa14bfe8a12b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d048d62af86699321b20ef7abb2097e8398497fffa08a7149aa14bfe8a12b48->leave($__internal_0d048d62af86699321b20ef7abb2097e8398497fffa08a7149aa14bfe8a12b48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c1a9e297e654f6c8f7b81c832b558d79c677a9987ace19e939ec5e1e50193e6 = $this->env->getExtension("native_profiler");
        $__internal_5c1a9e297e654f6c8f7b81c832b558d79c677a9987ace19e939ec5e1e50193e6->enter($__internal_5c1a9e297e654f6c8f7b81c832b558d79c677a9987ace19e939ec5e1e50193e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5c1a9e297e654f6c8f7b81c832b558d79c677a9987ace19e939ec5e1e50193e6->leave($__internal_5c1a9e297e654f6c8f7b81c832b558d79c677a9987ace19e939ec5e1e50193e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0efcd5ffc1f5f857ada15a06745fab426a5a8bb84a1ac608c786255fd726e678 = $this->env->getExtension("native_profiler");
        $__internal_0efcd5ffc1f5f857ada15a06745fab426a5a8bb84a1ac608c786255fd726e678->enter($__internal_0efcd5ffc1f5f857ada15a06745fab426a5a8bb84a1ac608c786255fd726e678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0efcd5ffc1f5f857ada15a06745fab426a5a8bb84a1ac608c786255fd726e678->leave($__internal_0efcd5ffc1f5f857ada15a06745fab426a5a8bb84a1ac608c786255fd726e678_prof);

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
