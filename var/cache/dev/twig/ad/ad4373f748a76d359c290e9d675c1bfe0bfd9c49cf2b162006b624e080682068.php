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
        $__internal_ded5e90ea64dd1964c640123aa4742c02b52f3cd1599f3695d706b6f37b197fb = $this->env->getExtension("native_profiler");
        $__internal_ded5e90ea64dd1964c640123aa4742c02b52f3cd1599f3695d706b6f37b197fb->enter($__internal_ded5e90ea64dd1964c640123aa4742c02b52f3cd1599f3695d706b6f37b197fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ded5e90ea64dd1964c640123aa4742c02b52f3cd1599f3695d706b6f37b197fb->leave($__internal_ded5e90ea64dd1964c640123aa4742c02b52f3cd1599f3695d706b6f37b197fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d71dc1acda1bbd5acc311bc6d04c1578f829283510a5511c84e359e5136beb9 = $this->env->getExtension("native_profiler");
        $__internal_9d71dc1acda1bbd5acc311bc6d04c1578f829283510a5511c84e359e5136beb9->enter($__internal_9d71dc1acda1bbd5acc311bc6d04c1578f829283510a5511c84e359e5136beb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9d71dc1acda1bbd5acc311bc6d04c1578f829283510a5511c84e359e5136beb9->leave($__internal_9d71dc1acda1bbd5acc311bc6d04c1578f829283510a5511c84e359e5136beb9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_90cea5b6c9b4f12b2924f109db66ed95b0a087cb57ed7597887eba3cf6109ddc = $this->env->getExtension("native_profiler");
        $__internal_90cea5b6c9b4f12b2924f109db66ed95b0a087cb57ed7597887eba3cf6109ddc->enter($__internal_90cea5b6c9b4f12b2924f109db66ed95b0a087cb57ed7597887eba3cf6109ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90cea5b6c9b4f12b2924f109db66ed95b0a087cb57ed7597887eba3cf6109ddc->leave($__internal_90cea5b6c9b4f12b2924f109db66ed95b0a087cb57ed7597887eba3cf6109ddc_prof);

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
