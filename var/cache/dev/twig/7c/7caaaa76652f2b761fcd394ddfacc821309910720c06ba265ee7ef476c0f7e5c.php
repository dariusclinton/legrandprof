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
        $__internal_11846340cbfcfce4cd0cb15b75aadeb883baedcbe844e79de2fac4a8f12e0c1c = $this->env->getExtension("native_profiler");
        $__internal_11846340cbfcfce4cd0cb15b75aadeb883baedcbe844e79de2fac4a8f12e0c1c->enter($__internal_11846340cbfcfce4cd0cb15b75aadeb883baedcbe844e79de2fac4a8f12e0c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11846340cbfcfce4cd0cb15b75aadeb883baedcbe844e79de2fac4a8f12e0c1c->leave($__internal_11846340cbfcfce4cd0cb15b75aadeb883baedcbe844e79de2fac4a8f12e0c1c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_975dfce7bd6f274809a9d031366f4a7105cd28e98bb13020f5aa5dd9ae535110 = $this->env->getExtension("native_profiler");
        $__internal_975dfce7bd6f274809a9d031366f4a7105cd28e98bb13020f5aa5dd9ae535110->enter($__internal_975dfce7bd6f274809a9d031366f4a7105cd28e98bb13020f5aa5dd9ae535110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_975dfce7bd6f274809a9d031366f4a7105cd28e98bb13020f5aa5dd9ae535110->leave($__internal_975dfce7bd6f274809a9d031366f4a7105cd28e98bb13020f5aa5dd9ae535110_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3272d38d91181ae3caf24b0ec9f75f46771046d935f3c83e66462961d6b1f79 = $this->env->getExtension("native_profiler");
        $__internal_a3272d38d91181ae3caf24b0ec9f75f46771046d935f3c83e66462961d6b1f79->enter($__internal_a3272d38d91181ae3caf24b0ec9f75f46771046d935f3c83e66462961d6b1f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a3272d38d91181ae3caf24b0ec9f75f46771046d935f3c83e66462961d6b1f79->leave($__internal_a3272d38d91181ae3caf24b0ec9f75f46771046d935f3c83e66462961d6b1f79_prof);

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
