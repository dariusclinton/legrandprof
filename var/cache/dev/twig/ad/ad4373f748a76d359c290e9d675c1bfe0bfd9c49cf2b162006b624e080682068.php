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
        $__internal_75483d32886bc62e5a0461b91073153491e3da85bc39ff60ef7116c7036bbb37 = $this->env->getExtension("native_profiler");
        $__internal_75483d32886bc62e5a0461b91073153491e3da85bc39ff60ef7116c7036bbb37->enter($__internal_75483d32886bc62e5a0461b91073153491e3da85bc39ff60ef7116c7036bbb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75483d32886bc62e5a0461b91073153491e3da85bc39ff60ef7116c7036bbb37->leave($__internal_75483d32886bc62e5a0461b91073153491e3da85bc39ff60ef7116c7036bbb37_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04e79d93a0e17705a4c18d6e7283fec4c306a3ddb6bfa3266b06fea66024021d = $this->env->getExtension("native_profiler");
        $__internal_04e79d93a0e17705a4c18d6e7283fec4c306a3ddb6bfa3266b06fea66024021d->enter($__internal_04e79d93a0e17705a4c18d6e7283fec4c306a3ddb6bfa3266b06fea66024021d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_04e79d93a0e17705a4c18d6e7283fec4c306a3ddb6bfa3266b06fea66024021d->leave($__internal_04e79d93a0e17705a4c18d6e7283fec4c306a3ddb6bfa3266b06fea66024021d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_afa412a72e01dc1f0c50cd20bfa67a0ae3dfa2e4516dbb2238676794321f89a4 = $this->env->getExtension("native_profiler");
        $__internal_afa412a72e01dc1f0c50cd20bfa67a0ae3dfa2e4516dbb2238676794321f89a4->enter($__internal_afa412a72e01dc1f0c50cd20bfa67a0ae3dfa2e4516dbb2238676794321f89a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_afa412a72e01dc1f0c50cd20bfa67a0ae3dfa2e4516dbb2238676794321f89a4->leave($__internal_afa412a72e01dc1f0c50cd20bfa67a0ae3dfa2e4516dbb2238676794321f89a4_prof);

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
