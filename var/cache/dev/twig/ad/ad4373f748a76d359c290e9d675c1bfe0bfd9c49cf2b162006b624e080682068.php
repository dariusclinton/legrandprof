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
        $__internal_af22ea7ba5aad9fd3feed4e0bfe0a213cfd2d059533dce1ccf412a25f4f1b145 = $this->env->getExtension("native_profiler");
        $__internal_af22ea7ba5aad9fd3feed4e0bfe0a213cfd2d059533dce1ccf412a25f4f1b145->enter($__internal_af22ea7ba5aad9fd3feed4e0bfe0a213cfd2d059533dce1ccf412a25f4f1b145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af22ea7ba5aad9fd3feed4e0bfe0a213cfd2d059533dce1ccf412a25f4f1b145->leave($__internal_af22ea7ba5aad9fd3feed4e0bfe0a213cfd2d059533dce1ccf412a25f4f1b145_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa27658db2850c2c360c176bf1cc591030c8a2065baea004955fd799637c024e = $this->env->getExtension("native_profiler");
        $__internal_fa27658db2850c2c360c176bf1cc591030c8a2065baea004955fd799637c024e->enter($__internal_fa27658db2850c2c360c176bf1cc591030c8a2065baea004955fd799637c024e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fa27658db2850c2c360c176bf1cc591030c8a2065baea004955fd799637c024e->leave($__internal_fa27658db2850c2c360c176bf1cc591030c8a2065baea004955fd799637c024e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_326f557bd4ba782b3c0b61efdbaba7991c089020a3508822a26ab77204835c8f = $this->env->getExtension("native_profiler");
        $__internal_326f557bd4ba782b3c0b61efdbaba7991c089020a3508822a26ab77204835c8f->enter($__internal_326f557bd4ba782b3c0b61efdbaba7991c089020a3508822a26ab77204835c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_326f557bd4ba782b3c0b61efdbaba7991c089020a3508822a26ab77204835c8f->leave($__internal_326f557bd4ba782b3c0b61efdbaba7991c089020a3508822a26ab77204835c8f_prof);

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
