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
        $__internal_79c7c829136fe9adc2de487b7758b9044d96eb89185e4866ffd2b4e18973ec90 = $this->env->getExtension("native_profiler");
        $__internal_79c7c829136fe9adc2de487b7758b9044d96eb89185e4866ffd2b4e18973ec90->enter($__internal_79c7c829136fe9adc2de487b7758b9044d96eb89185e4866ffd2b4e18973ec90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79c7c829136fe9adc2de487b7758b9044d96eb89185e4866ffd2b4e18973ec90->leave($__internal_79c7c829136fe9adc2de487b7758b9044d96eb89185e4866ffd2b4e18973ec90_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80b51b3acd0760afbf31c62f098ee7fd08045f987432db5e05a32b6d4c6bb469 = $this->env->getExtension("native_profiler");
        $__internal_80b51b3acd0760afbf31c62f098ee7fd08045f987432db5e05a32b6d4c6bb469->enter($__internal_80b51b3acd0760afbf31c62f098ee7fd08045f987432db5e05a32b6d4c6bb469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_80b51b3acd0760afbf31c62f098ee7fd08045f987432db5e05a32b6d4c6bb469->leave($__internal_80b51b3acd0760afbf31c62f098ee7fd08045f987432db5e05a32b6d4c6bb469_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_83b0a18889756467f27fc011cffabcd8dd01206813f55d733ec7b637aa0fe1c8 = $this->env->getExtension("native_profiler");
        $__internal_83b0a18889756467f27fc011cffabcd8dd01206813f55d733ec7b637aa0fe1c8->enter($__internal_83b0a18889756467f27fc011cffabcd8dd01206813f55d733ec7b637aa0fe1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_83b0a18889756467f27fc011cffabcd8dd01206813f55d733ec7b637aa0fe1c8->leave($__internal_83b0a18889756467f27fc011cffabcd8dd01206813f55d733ec7b637aa0fe1c8_prof);

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
