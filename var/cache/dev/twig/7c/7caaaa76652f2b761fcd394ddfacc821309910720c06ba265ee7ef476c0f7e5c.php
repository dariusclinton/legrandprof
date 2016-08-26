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
        $__internal_64d32316911f292f1bf9bf0368f41d5375fead940228a4d048d111f7b363d69c = $this->env->getExtension("native_profiler");
        $__internal_64d32316911f292f1bf9bf0368f41d5375fead940228a4d048d111f7b363d69c->enter($__internal_64d32316911f292f1bf9bf0368f41d5375fead940228a4d048d111f7b363d69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64d32316911f292f1bf9bf0368f41d5375fead940228a4d048d111f7b363d69c->leave($__internal_64d32316911f292f1bf9bf0368f41d5375fead940228a4d048d111f7b363d69c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_20086c30b50f7b428db66d4e8ba832cb2fdf82c831080536b3a2fb836505e060 = $this->env->getExtension("native_profiler");
        $__internal_20086c30b50f7b428db66d4e8ba832cb2fdf82c831080536b3a2fb836505e060->enter($__internal_20086c30b50f7b428db66d4e8ba832cb2fdf82c831080536b3a2fb836505e060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_20086c30b50f7b428db66d4e8ba832cb2fdf82c831080536b3a2fb836505e060->leave($__internal_20086c30b50f7b428db66d4e8ba832cb2fdf82c831080536b3a2fb836505e060_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b7ec760f6ea6f63524ae5a0e793502f5976948f9411536fdfd24e62078c10cd = $this->env->getExtension("native_profiler");
        $__internal_4b7ec760f6ea6f63524ae5a0e793502f5976948f9411536fdfd24e62078c10cd->enter($__internal_4b7ec760f6ea6f63524ae5a0e793502f5976948f9411536fdfd24e62078c10cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4b7ec760f6ea6f63524ae5a0e793502f5976948f9411536fdfd24e62078c10cd->leave($__internal_4b7ec760f6ea6f63524ae5a0e793502f5976948f9411536fdfd24e62078c10cd_prof);

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
