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
        $__internal_b95d79d9a56e48047083e19bb2bd3879fda3e7efa544a3ffe68181fac9966320 = $this->env->getExtension("native_profiler");
        $__internal_b95d79d9a56e48047083e19bb2bd3879fda3e7efa544a3ffe68181fac9966320->enter($__internal_b95d79d9a56e48047083e19bb2bd3879fda3e7efa544a3ffe68181fac9966320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b95d79d9a56e48047083e19bb2bd3879fda3e7efa544a3ffe68181fac9966320->leave($__internal_b95d79d9a56e48047083e19bb2bd3879fda3e7efa544a3ffe68181fac9966320_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c697d3a14efbfe93b46fd1ee423e87d57f1d1061b2f116bdd96e059bc7f201e = $this->env->getExtension("native_profiler");
        $__internal_3c697d3a14efbfe93b46fd1ee423e87d57f1d1061b2f116bdd96e059bc7f201e->enter($__internal_3c697d3a14efbfe93b46fd1ee423e87d57f1d1061b2f116bdd96e059bc7f201e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3c697d3a14efbfe93b46fd1ee423e87d57f1d1061b2f116bdd96e059bc7f201e->leave($__internal_3c697d3a14efbfe93b46fd1ee423e87d57f1d1061b2f116bdd96e059bc7f201e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cab5706f1b98bdecab6e02c9cdf27c03f96cbfd38c1bd28515ef2426fd1497a2 = $this->env->getExtension("native_profiler");
        $__internal_cab5706f1b98bdecab6e02c9cdf27c03f96cbfd38c1bd28515ef2426fd1497a2->enter($__internal_cab5706f1b98bdecab6e02c9cdf27c03f96cbfd38c1bd28515ef2426fd1497a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cab5706f1b98bdecab6e02c9cdf27c03f96cbfd38c1bd28515ef2426fd1497a2->leave($__internal_cab5706f1b98bdecab6e02c9cdf27c03f96cbfd38c1bd28515ef2426fd1497a2_prof);

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
