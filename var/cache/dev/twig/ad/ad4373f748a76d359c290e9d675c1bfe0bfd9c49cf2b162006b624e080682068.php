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
        $__internal_b66374d1176c8c4392c5358d1b450312412d7228e666ba3e896c988eaa8cd1e0 = $this->env->getExtension("native_profiler");
        $__internal_b66374d1176c8c4392c5358d1b450312412d7228e666ba3e896c988eaa8cd1e0->enter($__internal_b66374d1176c8c4392c5358d1b450312412d7228e666ba3e896c988eaa8cd1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b66374d1176c8c4392c5358d1b450312412d7228e666ba3e896c988eaa8cd1e0->leave($__internal_b66374d1176c8c4392c5358d1b450312412d7228e666ba3e896c988eaa8cd1e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_98ffc889cf1c5661eb3d8044e91d3b829660ee206ce652233f4f3efa16fd4026 = $this->env->getExtension("native_profiler");
        $__internal_98ffc889cf1c5661eb3d8044e91d3b829660ee206ce652233f4f3efa16fd4026->enter($__internal_98ffc889cf1c5661eb3d8044e91d3b829660ee206ce652233f4f3efa16fd4026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_98ffc889cf1c5661eb3d8044e91d3b829660ee206ce652233f4f3efa16fd4026->leave($__internal_98ffc889cf1c5661eb3d8044e91d3b829660ee206ce652233f4f3efa16fd4026_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b20e70a718bca1a80c6e02ae406e19412f3fb28125ab471ec6a0e3ac2750a0f = $this->env->getExtension("native_profiler");
        $__internal_0b20e70a718bca1a80c6e02ae406e19412f3fb28125ab471ec6a0e3ac2750a0f->enter($__internal_0b20e70a718bca1a80c6e02ae406e19412f3fb28125ab471ec6a0e3ac2750a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b20e70a718bca1a80c6e02ae406e19412f3fb28125ab471ec6a0e3ac2750a0f->leave($__internal_0b20e70a718bca1a80c6e02ae406e19412f3fb28125ab471ec6a0e3ac2750a0f_prof);

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
