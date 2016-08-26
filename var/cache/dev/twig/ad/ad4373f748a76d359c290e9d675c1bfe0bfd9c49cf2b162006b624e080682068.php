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
        $__internal_45ceb1fedc6f056bd1ad0e86dfb7fe977e091b53dca6a61d570867036002a819 = $this->env->getExtension("native_profiler");
        $__internal_45ceb1fedc6f056bd1ad0e86dfb7fe977e091b53dca6a61d570867036002a819->enter($__internal_45ceb1fedc6f056bd1ad0e86dfb7fe977e091b53dca6a61d570867036002a819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45ceb1fedc6f056bd1ad0e86dfb7fe977e091b53dca6a61d570867036002a819->leave($__internal_45ceb1fedc6f056bd1ad0e86dfb7fe977e091b53dca6a61d570867036002a819_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d12d4496ca3e8f35002116dbe3843d44bb23c9c193cc4deb36e128079a30dd1d = $this->env->getExtension("native_profiler");
        $__internal_d12d4496ca3e8f35002116dbe3843d44bb23c9c193cc4deb36e128079a30dd1d->enter($__internal_d12d4496ca3e8f35002116dbe3843d44bb23c9c193cc4deb36e128079a30dd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d12d4496ca3e8f35002116dbe3843d44bb23c9c193cc4deb36e128079a30dd1d->leave($__internal_d12d4496ca3e8f35002116dbe3843d44bb23c9c193cc4deb36e128079a30dd1d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a1aaaefc614f8fdf19ba1b98139a15fd2c85ffb59b320975f9208a5028c05ca = $this->env->getExtension("native_profiler");
        $__internal_0a1aaaefc614f8fdf19ba1b98139a15fd2c85ffb59b320975f9208a5028c05ca->enter($__internal_0a1aaaefc614f8fdf19ba1b98139a15fd2c85ffb59b320975f9208a5028c05ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a1aaaefc614f8fdf19ba1b98139a15fd2c85ffb59b320975f9208a5028c05ca->leave($__internal_0a1aaaefc614f8fdf19ba1b98139a15fd2c85ffb59b320975f9208a5028c05ca_prof);

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
