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
        $__internal_7fcbd6ecac56162d6e66f7077ee4e49e500622fb66c58b4d00ece5ee1b7e8372 = $this->env->getExtension("native_profiler");
        $__internal_7fcbd6ecac56162d6e66f7077ee4e49e500622fb66c58b4d00ece5ee1b7e8372->enter($__internal_7fcbd6ecac56162d6e66f7077ee4e49e500622fb66c58b4d00ece5ee1b7e8372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fcbd6ecac56162d6e66f7077ee4e49e500622fb66c58b4d00ece5ee1b7e8372->leave($__internal_7fcbd6ecac56162d6e66f7077ee4e49e500622fb66c58b4d00ece5ee1b7e8372_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b68f2cedacc05aae89098d6a2df1fe57cfc37f1a25fed1b696db00c53357837 = $this->env->getExtension("native_profiler");
        $__internal_3b68f2cedacc05aae89098d6a2df1fe57cfc37f1a25fed1b696db00c53357837->enter($__internal_3b68f2cedacc05aae89098d6a2df1fe57cfc37f1a25fed1b696db00c53357837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3b68f2cedacc05aae89098d6a2df1fe57cfc37f1a25fed1b696db00c53357837->leave($__internal_3b68f2cedacc05aae89098d6a2df1fe57cfc37f1a25fed1b696db00c53357837_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dee6c6e5d961da192a94e1125f538e3f92baedc16cb894d2933235ea65244f03 = $this->env->getExtension("native_profiler");
        $__internal_dee6c6e5d961da192a94e1125f538e3f92baedc16cb894d2933235ea65244f03->enter($__internal_dee6c6e5d961da192a94e1125f538e3f92baedc16cb894d2933235ea65244f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dee6c6e5d961da192a94e1125f538e3f92baedc16cb894d2933235ea65244f03->leave($__internal_dee6c6e5d961da192a94e1125f538e3f92baedc16cb894d2933235ea65244f03_prof);

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
