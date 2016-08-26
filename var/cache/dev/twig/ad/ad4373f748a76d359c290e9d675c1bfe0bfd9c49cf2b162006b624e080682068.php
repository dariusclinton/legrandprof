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
        $__internal_1d9feb3832b76090c23bea8ff06d3fe618eaf6510bbcbc41c82447b19a468ab8 = $this->env->getExtension("native_profiler");
        $__internal_1d9feb3832b76090c23bea8ff06d3fe618eaf6510bbcbc41c82447b19a468ab8->enter($__internal_1d9feb3832b76090c23bea8ff06d3fe618eaf6510bbcbc41c82447b19a468ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d9feb3832b76090c23bea8ff06d3fe618eaf6510bbcbc41c82447b19a468ab8->leave($__internal_1d9feb3832b76090c23bea8ff06d3fe618eaf6510bbcbc41c82447b19a468ab8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d2975ed2702d07aa6776143d29814554db6f0d9de77276f14dae52f9d682c7b = $this->env->getExtension("native_profiler");
        $__internal_3d2975ed2702d07aa6776143d29814554db6f0d9de77276f14dae52f9d682c7b->enter($__internal_3d2975ed2702d07aa6776143d29814554db6f0d9de77276f14dae52f9d682c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3d2975ed2702d07aa6776143d29814554db6f0d9de77276f14dae52f9d682c7b->leave($__internal_3d2975ed2702d07aa6776143d29814554db6f0d9de77276f14dae52f9d682c7b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d06a1bc5967bc4418bc2de0a8e7ee92ca532e9394cc0f0be6131c0b57beb6554 = $this->env->getExtension("native_profiler");
        $__internal_d06a1bc5967bc4418bc2de0a8e7ee92ca532e9394cc0f0be6131c0b57beb6554->enter($__internal_d06a1bc5967bc4418bc2de0a8e7ee92ca532e9394cc0f0be6131c0b57beb6554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d06a1bc5967bc4418bc2de0a8e7ee92ca532e9394cc0f0be6131c0b57beb6554->leave($__internal_d06a1bc5967bc4418bc2de0a8e7ee92ca532e9394cc0f0be6131c0b57beb6554_prof);

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
