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
        $__internal_2b7f16ae0f89df7127eabd532d1db768db7b9665d29f5d009ba4b61d3b01c0db = $this->env->getExtension("native_profiler");
        $__internal_2b7f16ae0f89df7127eabd532d1db768db7b9665d29f5d009ba4b61d3b01c0db->enter($__internal_2b7f16ae0f89df7127eabd532d1db768db7b9665d29f5d009ba4b61d3b01c0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7f16ae0f89df7127eabd532d1db768db7b9665d29f5d009ba4b61d3b01c0db->leave($__internal_2b7f16ae0f89df7127eabd532d1db768db7b9665d29f5d009ba4b61d3b01c0db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8ee2673ac61fa9b1d9d8019a22f66d049e98ed60fe53f2bb46f4ba2317cece2 = $this->env->getExtension("native_profiler");
        $__internal_a8ee2673ac61fa9b1d9d8019a22f66d049e98ed60fe53f2bb46f4ba2317cece2->enter($__internal_a8ee2673ac61fa9b1d9d8019a22f66d049e98ed60fe53f2bb46f4ba2317cece2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a8ee2673ac61fa9b1d9d8019a22f66d049e98ed60fe53f2bb46f4ba2317cece2->leave($__internal_a8ee2673ac61fa9b1d9d8019a22f66d049e98ed60fe53f2bb46f4ba2317cece2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_854253d9fd68d723f76b2cd52f8542286c818d7b89442b699330c05644c1873f = $this->env->getExtension("native_profiler");
        $__internal_854253d9fd68d723f76b2cd52f8542286c818d7b89442b699330c05644c1873f->enter($__internal_854253d9fd68d723f76b2cd52f8542286c818d7b89442b699330c05644c1873f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_854253d9fd68d723f76b2cd52f8542286c818d7b89442b699330c05644c1873f->leave($__internal_854253d9fd68d723f76b2cd52f8542286c818d7b89442b699330c05644c1873f_prof);

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
