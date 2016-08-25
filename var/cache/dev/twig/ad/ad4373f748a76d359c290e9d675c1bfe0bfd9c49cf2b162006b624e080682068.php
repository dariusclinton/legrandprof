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
        $__internal_d0f39e099277a23421e9bc409521279c85d7f5b79bee11637bf9567f7cf989b5 = $this->env->getExtension("native_profiler");
        $__internal_d0f39e099277a23421e9bc409521279c85d7f5b79bee11637bf9567f7cf989b5->enter($__internal_d0f39e099277a23421e9bc409521279c85d7f5b79bee11637bf9567f7cf989b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0f39e099277a23421e9bc409521279c85d7f5b79bee11637bf9567f7cf989b5->leave($__internal_d0f39e099277a23421e9bc409521279c85d7f5b79bee11637bf9567f7cf989b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c61f903f5b1e73952ba8cef557525ec80c60518117c1397a5a506fe09ee74372 = $this->env->getExtension("native_profiler");
        $__internal_c61f903f5b1e73952ba8cef557525ec80c60518117c1397a5a506fe09ee74372->enter($__internal_c61f903f5b1e73952ba8cef557525ec80c60518117c1397a5a506fe09ee74372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c61f903f5b1e73952ba8cef557525ec80c60518117c1397a5a506fe09ee74372->leave($__internal_c61f903f5b1e73952ba8cef557525ec80c60518117c1397a5a506fe09ee74372_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b93fb08a7700df4e458434bd2ef07fbccc0647b14da19af3e84f95f623aaa345 = $this->env->getExtension("native_profiler");
        $__internal_b93fb08a7700df4e458434bd2ef07fbccc0647b14da19af3e84f95f623aaa345->enter($__internal_b93fb08a7700df4e458434bd2ef07fbccc0647b14da19af3e84f95f623aaa345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b93fb08a7700df4e458434bd2ef07fbccc0647b14da19af3e84f95f623aaa345->leave($__internal_b93fb08a7700df4e458434bd2ef07fbccc0647b14da19af3e84f95f623aaa345_prof);

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
