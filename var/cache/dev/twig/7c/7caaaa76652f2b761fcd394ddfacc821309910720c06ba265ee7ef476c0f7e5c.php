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
        $__internal_541865409a5a850afe410ddea2dc7976293f5344c0fc41da7cf881d7133d5853 = $this->env->getExtension("native_profiler");
        $__internal_541865409a5a850afe410ddea2dc7976293f5344c0fc41da7cf881d7133d5853->enter($__internal_541865409a5a850afe410ddea2dc7976293f5344c0fc41da7cf881d7133d5853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_541865409a5a850afe410ddea2dc7976293f5344c0fc41da7cf881d7133d5853->leave($__internal_541865409a5a850afe410ddea2dc7976293f5344c0fc41da7cf881d7133d5853_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf9065c9d704423478f64ee00d164e3ef4970687a837027146aad57b0ef40a56 = $this->env->getExtension("native_profiler");
        $__internal_cf9065c9d704423478f64ee00d164e3ef4970687a837027146aad57b0ef40a56->enter($__internal_cf9065c9d704423478f64ee00d164e3ef4970687a837027146aad57b0ef40a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cf9065c9d704423478f64ee00d164e3ef4970687a837027146aad57b0ef40a56->leave($__internal_cf9065c9d704423478f64ee00d164e3ef4970687a837027146aad57b0ef40a56_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_809976319df669ed7e65a25b22f6c5407a805fc23f36c570d44673415e5de79d = $this->env->getExtension("native_profiler");
        $__internal_809976319df669ed7e65a25b22f6c5407a805fc23f36c570d44673415e5de79d->enter($__internal_809976319df669ed7e65a25b22f6c5407a805fc23f36c570d44673415e5de79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_809976319df669ed7e65a25b22f6c5407a805fc23f36c570d44673415e5de79d->leave($__internal_809976319df669ed7e65a25b22f6c5407a805fc23f36c570d44673415e5de79d_prof);

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
