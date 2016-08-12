<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1cc0d6ce3c44e79033fcf1e9aa9249caf8107f3da3f5d440d1538baab78954b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_311a21732a687e454da331b840e853f4f9513400d997d761269e5b29b7cf7e5a = $this->env->getExtension("native_profiler");
        $__internal_311a21732a687e454da331b840e853f4f9513400d997d761269e5b29b7cf7e5a->enter($__internal_311a21732a687e454da331b840e853f4f9513400d997d761269e5b29b7cf7e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_311a21732a687e454da331b840e853f4f9513400d997d761269e5b29b7cf7e5a->leave($__internal_311a21732a687e454da331b840e853f4f9513400d997d761269e5b29b7cf7e5a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2ebae0b69f998bcfc8356c40917256a51197da8a2c80b87fdb052320d36965b = $this->env->getExtension("native_profiler");
        $__internal_b2ebae0b69f998bcfc8356c40917256a51197da8a2c80b87fdb052320d36965b->enter($__internal_b2ebae0b69f998bcfc8356c40917256a51197da8a2c80b87fdb052320d36965b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b2ebae0b69f998bcfc8356c40917256a51197da8a2c80b87fdb052320d36965b->leave($__internal_b2ebae0b69f998bcfc8356c40917256a51197da8a2c80b87fdb052320d36965b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d92920102ad147ba5aa422f542f312690d606d00ea04212e810f7a02a5930626 = $this->env->getExtension("native_profiler");
        $__internal_d92920102ad147ba5aa422f542f312690d606d00ea04212e810f7a02a5930626->enter($__internal_d92920102ad147ba5aa422f542f312690d606d00ea04212e810f7a02a5930626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d92920102ad147ba5aa422f542f312690d606d00ea04212e810f7a02a5930626->leave($__internal_d92920102ad147ba5aa422f542f312690d606d00ea04212e810f7a02a5930626_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
