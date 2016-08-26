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
        $__internal_abd20d53ec9836a8446622e2bcf32f02d3146a3660064e24ca78ca41076ceee1 = $this->env->getExtension("native_profiler");
        $__internal_abd20d53ec9836a8446622e2bcf32f02d3146a3660064e24ca78ca41076ceee1->enter($__internal_abd20d53ec9836a8446622e2bcf32f02d3146a3660064e24ca78ca41076ceee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abd20d53ec9836a8446622e2bcf32f02d3146a3660064e24ca78ca41076ceee1->leave($__internal_abd20d53ec9836a8446622e2bcf32f02d3146a3660064e24ca78ca41076ceee1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7625638ea8c89c0ac0f186b0c747d5c46ad3a68866f55fd5ec3271824b61be1d = $this->env->getExtension("native_profiler");
        $__internal_7625638ea8c89c0ac0f186b0c747d5c46ad3a68866f55fd5ec3271824b61be1d->enter($__internal_7625638ea8c89c0ac0f186b0c747d5c46ad3a68866f55fd5ec3271824b61be1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7625638ea8c89c0ac0f186b0c747d5c46ad3a68866f55fd5ec3271824b61be1d->leave($__internal_7625638ea8c89c0ac0f186b0c747d5c46ad3a68866f55fd5ec3271824b61be1d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f94395b895c34639bbb836d8d8084ec18d3cedec8b7a0a47efc0976f6c8e3b0 = $this->env->getExtension("native_profiler");
        $__internal_2f94395b895c34639bbb836d8d8084ec18d3cedec8b7a0a47efc0976f6c8e3b0->enter($__internal_2f94395b895c34639bbb836d8d8084ec18d3cedec8b7a0a47efc0976f6c8e3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f94395b895c34639bbb836d8d8084ec18d3cedec8b7a0a47efc0976f6c8e3b0->leave($__internal_2f94395b895c34639bbb836d8d8084ec18d3cedec8b7a0a47efc0976f6c8e3b0_prof);

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
