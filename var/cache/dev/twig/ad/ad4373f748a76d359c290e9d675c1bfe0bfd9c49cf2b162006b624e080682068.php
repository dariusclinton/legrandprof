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
        $__internal_94f83492b53f07387625b4425b12384c2bfcfa006bd96f3a8357c684ead2dafe = $this->env->getExtension("native_profiler");
        $__internal_94f83492b53f07387625b4425b12384c2bfcfa006bd96f3a8357c684ead2dafe->enter($__internal_94f83492b53f07387625b4425b12384c2bfcfa006bd96f3a8357c684ead2dafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94f83492b53f07387625b4425b12384c2bfcfa006bd96f3a8357c684ead2dafe->leave($__internal_94f83492b53f07387625b4425b12384c2bfcfa006bd96f3a8357c684ead2dafe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9f004de699473a833a38018bc8b195890a9c94c3f9857eae43a3bed3a5c14a5 = $this->env->getExtension("native_profiler");
        $__internal_c9f004de699473a833a38018bc8b195890a9c94c3f9857eae43a3bed3a5c14a5->enter($__internal_c9f004de699473a833a38018bc8b195890a9c94c3f9857eae43a3bed3a5c14a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c9f004de699473a833a38018bc8b195890a9c94c3f9857eae43a3bed3a5c14a5->leave($__internal_c9f004de699473a833a38018bc8b195890a9c94c3f9857eae43a3bed3a5c14a5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_823cdf28ba42c451c00ba51fc56ea86a5bd599b87b9c1066eaaa13842bfef1eb = $this->env->getExtension("native_profiler");
        $__internal_823cdf28ba42c451c00ba51fc56ea86a5bd599b87b9c1066eaaa13842bfef1eb->enter($__internal_823cdf28ba42c451c00ba51fc56ea86a5bd599b87b9c1066eaaa13842bfef1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_823cdf28ba42c451c00ba51fc56ea86a5bd599b87b9c1066eaaa13842bfef1eb->leave($__internal_823cdf28ba42c451c00ba51fc56ea86a5bd599b87b9c1066eaaa13842bfef1eb_prof);

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
