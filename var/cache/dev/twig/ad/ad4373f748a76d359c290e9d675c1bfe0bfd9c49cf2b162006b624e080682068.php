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
        $__internal_71c19c8e83cd52e779049d85f1bc028691cd3b89ac60b02ab4162c43030273fa = $this->env->getExtension("native_profiler");
        $__internal_71c19c8e83cd52e779049d85f1bc028691cd3b89ac60b02ab4162c43030273fa->enter($__internal_71c19c8e83cd52e779049d85f1bc028691cd3b89ac60b02ab4162c43030273fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71c19c8e83cd52e779049d85f1bc028691cd3b89ac60b02ab4162c43030273fa->leave($__internal_71c19c8e83cd52e779049d85f1bc028691cd3b89ac60b02ab4162c43030273fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eaecc1ca0b4f557666c3e6af0f5ca55baa10e84ac0a3284f5ecfbc359d605674 = $this->env->getExtension("native_profiler");
        $__internal_eaecc1ca0b4f557666c3e6af0f5ca55baa10e84ac0a3284f5ecfbc359d605674->enter($__internal_eaecc1ca0b4f557666c3e6af0f5ca55baa10e84ac0a3284f5ecfbc359d605674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eaecc1ca0b4f557666c3e6af0f5ca55baa10e84ac0a3284f5ecfbc359d605674->leave($__internal_eaecc1ca0b4f557666c3e6af0f5ca55baa10e84ac0a3284f5ecfbc359d605674_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_939df65ed09f4a8e1f55810e3067d866b02bbd0e72bc64880c981e4ad1a6fd7a = $this->env->getExtension("native_profiler");
        $__internal_939df65ed09f4a8e1f55810e3067d866b02bbd0e72bc64880c981e4ad1a6fd7a->enter($__internal_939df65ed09f4a8e1f55810e3067d866b02bbd0e72bc64880c981e4ad1a6fd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_939df65ed09f4a8e1f55810e3067d866b02bbd0e72bc64880c981e4ad1a6fd7a->leave($__internal_939df65ed09f4a8e1f55810e3067d866b02bbd0e72bc64880c981e4ad1a6fd7a_prof);

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
