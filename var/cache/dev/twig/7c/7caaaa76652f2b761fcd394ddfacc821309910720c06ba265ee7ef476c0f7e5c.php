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
        $__internal_64436902a2b1b7dc567fa8d9ad2fac5e688e0161cfae3eb514b61e05298081c1 = $this->env->getExtension("native_profiler");
        $__internal_64436902a2b1b7dc567fa8d9ad2fac5e688e0161cfae3eb514b61e05298081c1->enter($__internal_64436902a2b1b7dc567fa8d9ad2fac5e688e0161cfae3eb514b61e05298081c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64436902a2b1b7dc567fa8d9ad2fac5e688e0161cfae3eb514b61e05298081c1->leave($__internal_64436902a2b1b7dc567fa8d9ad2fac5e688e0161cfae3eb514b61e05298081c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8e9a69dc9718b533cd99732ca4b00c95a7d16650af6dee952c3cbb6a6ca7fd6 = $this->env->getExtension("native_profiler");
        $__internal_a8e9a69dc9718b533cd99732ca4b00c95a7d16650af6dee952c3cbb6a6ca7fd6->enter($__internal_a8e9a69dc9718b533cd99732ca4b00c95a7d16650af6dee952c3cbb6a6ca7fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a8e9a69dc9718b533cd99732ca4b00c95a7d16650af6dee952c3cbb6a6ca7fd6->leave($__internal_a8e9a69dc9718b533cd99732ca4b00c95a7d16650af6dee952c3cbb6a6ca7fd6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3088927a317b8303aa0e0e6f7c8111af4a2eb0f144a691dd925fabe237bb8920 = $this->env->getExtension("native_profiler");
        $__internal_3088927a317b8303aa0e0e6f7c8111af4a2eb0f144a691dd925fabe237bb8920->enter($__internal_3088927a317b8303aa0e0e6f7c8111af4a2eb0f144a691dd925fabe237bb8920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3088927a317b8303aa0e0e6f7c8111af4a2eb0f144a691dd925fabe237bb8920->leave($__internal_3088927a317b8303aa0e0e6f7c8111af4a2eb0f144a691dd925fabe237bb8920_prof);

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
