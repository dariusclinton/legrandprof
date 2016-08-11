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
        $__internal_be54ad97964399f21c91c27a32008c4d9a8c61301c365068aef809de7119328e = $this->env->getExtension("native_profiler");
        $__internal_be54ad97964399f21c91c27a32008c4d9a8c61301c365068aef809de7119328e->enter($__internal_be54ad97964399f21c91c27a32008c4d9a8c61301c365068aef809de7119328e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be54ad97964399f21c91c27a32008c4d9a8c61301c365068aef809de7119328e->leave($__internal_be54ad97964399f21c91c27a32008c4d9a8c61301c365068aef809de7119328e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff68491e9d5cc221051c831f43959209601ab2148051fdf7631ea6e2184fcaf2 = $this->env->getExtension("native_profiler");
        $__internal_ff68491e9d5cc221051c831f43959209601ab2148051fdf7631ea6e2184fcaf2->enter($__internal_ff68491e9d5cc221051c831f43959209601ab2148051fdf7631ea6e2184fcaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ff68491e9d5cc221051c831f43959209601ab2148051fdf7631ea6e2184fcaf2->leave($__internal_ff68491e9d5cc221051c831f43959209601ab2148051fdf7631ea6e2184fcaf2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c463d58bf342fc74427d91d2b95ebb2692e3ba51a0f8625f6bd82566953132dd = $this->env->getExtension("native_profiler");
        $__internal_c463d58bf342fc74427d91d2b95ebb2692e3ba51a0f8625f6bd82566953132dd->enter($__internal_c463d58bf342fc74427d91d2b95ebb2692e3ba51a0f8625f6bd82566953132dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c463d58bf342fc74427d91d2b95ebb2692e3ba51a0f8625f6bd82566953132dd->leave($__internal_c463d58bf342fc74427d91d2b95ebb2692e3ba51a0f8625f6bd82566953132dd_prof);

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
