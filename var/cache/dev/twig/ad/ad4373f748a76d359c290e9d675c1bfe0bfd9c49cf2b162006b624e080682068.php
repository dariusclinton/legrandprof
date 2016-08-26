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
        $__internal_c8cb620ed1718a729392d2f6989e2b691624be552e066df8d14dc7774ca7a3e5 = $this->env->getExtension("native_profiler");
        $__internal_c8cb620ed1718a729392d2f6989e2b691624be552e066df8d14dc7774ca7a3e5->enter($__internal_c8cb620ed1718a729392d2f6989e2b691624be552e066df8d14dc7774ca7a3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8cb620ed1718a729392d2f6989e2b691624be552e066df8d14dc7774ca7a3e5->leave($__internal_c8cb620ed1718a729392d2f6989e2b691624be552e066df8d14dc7774ca7a3e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_31cb1ae335799936c126381fddbac2e2c13a68a57fd121feddfac17b95af4412 = $this->env->getExtension("native_profiler");
        $__internal_31cb1ae335799936c126381fddbac2e2c13a68a57fd121feddfac17b95af4412->enter($__internal_31cb1ae335799936c126381fddbac2e2c13a68a57fd121feddfac17b95af4412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_31cb1ae335799936c126381fddbac2e2c13a68a57fd121feddfac17b95af4412->leave($__internal_31cb1ae335799936c126381fddbac2e2c13a68a57fd121feddfac17b95af4412_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_af55cc9ca4447ad4ca8ef934329081af16d3311d90124acec8ca7f9731df3ee7 = $this->env->getExtension("native_profiler");
        $__internal_af55cc9ca4447ad4ca8ef934329081af16d3311d90124acec8ca7f9731df3ee7->enter($__internal_af55cc9ca4447ad4ca8ef934329081af16d3311d90124acec8ca7f9731df3ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_af55cc9ca4447ad4ca8ef934329081af16d3311d90124acec8ca7f9731df3ee7->leave($__internal_af55cc9ca4447ad4ca8ef934329081af16d3311d90124acec8ca7f9731df3ee7_prof);

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
