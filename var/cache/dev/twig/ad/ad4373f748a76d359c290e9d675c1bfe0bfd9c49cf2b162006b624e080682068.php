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
        $__internal_6a224952f22e27f46cad5a4ce7526dcc0de053e4ca6002c2a6b3824c6fa9d2ed = $this->env->getExtension("native_profiler");
        $__internal_6a224952f22e27f46cad5a4ce7526dcc0de053e4ca6002c2a6b3824c6fa9d2ed->enter($__internal_6a224952f22e27f46cad5a4ce7526dcc0de053e4ca6002c2a6b3824c6fa9d2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a224952f22e27f46cad5a4ce7526dcc0de053e4ca6002c2a6b3824c6fa9d2ed->leave($__internal_6a224952f22e27f46cad5a4ce7526dcc0de053e4ca6002c2a6b3824c6fa9d2ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b37ab58ca8b68edd3509adee28ca475ea8c26c4a57c02caff60c8aef2afd702e = $this->env->getExtension("native_profiler");
        $__internal_b37ab58ca8b68edd3509adee28ca475ea8c26c4a57c02caff60c8aef2afd702e->enter($__internal_b37ab58ca8b68edd3509adee28ca475ea8c26c4a57c02caff60c8aef2afd702e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b37ab58ca8b68edd3509adee28ca475ea8c26c4a57c02caff60c8aef2afd702e->leave($__internal_b37ab58ca8b68edd3509adee28ca475ea8c26c4a57c02caff60c8aef2afd702e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c26e0d5ebf2f8c5236bce5feb043ca0656d525fa4034b3fd120a425ae29a1a0 = $this->env->getExtension("native_profiler");
        $__internal_5c26e0d5ebf2f8c5236bce5feb043ca0656d525fa4034b3fd120a425ae29a1a0->enter($__internal_5c26e0d5ebf2f8c5236bce5feb043ca0656d525fa4034b3fd120a425ae29a1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5c26e0d5ebf2f8c5236bce5feb043ca0656d525fa4034b3fd120a425ae29a1a0->leave($__internal_5c26e0d5ebf2f8c5236bce5feb043ca0656d525fa4034b3fd120a425ae29a1a0_prof);

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
