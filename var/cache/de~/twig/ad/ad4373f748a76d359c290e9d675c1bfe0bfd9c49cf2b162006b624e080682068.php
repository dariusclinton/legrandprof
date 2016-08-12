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
        $__internal_174173f12cdea37f9a73fc6cd8978b5bb3b53827a455185c615222c2e31c9a88 = $this->env->getExtension("native_profiler");
        $__internal_174173f12cdea37f9a73fc6cd8978b5bb3b53827a455185c615222c2e31c9a88->enter($__internal_174173f12cdea37f9a73fc6cd8978b5bb3b53827a455185c615222c2e31c9a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_174173f12cdea37f9a73fc6cd8978b5bb3b53827a455185c615222c2e31c9a88->leave($__internal_174173f12cdea37f9a73fc6cd8978b5bb3b53827a455185c615222c2e31c9a88_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd111c4806897eea8d1bad52bbce5e67312a969ba46c09d985dd081434938b9e = $this->env->getExtension("native_profiler");
        $__internal_bd111c4806897eea8d1bad52bbce5e67312a969ba46c09d985dd081434938b9e->enter($__internal_bd111c4806897eea8d1bad52bbce5e67312a969ba46c09d985dd081434938b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bd111c4806897eea8d1bad52bbce5e67312a969ba46c09d985dd081434938b9e->leave($__internal_bd111c4806897eea8d1bad52bbce5e67312a969ba46c09d985dd081434938b9e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_80e1d2373755bc06e817eff4c922bb4ee0946b03a89ecb72f3aa8a19f2b362c1 = $this->env->getExtension("native_profiler");
        $__internal_80e1d2373755bc06e817eff4c922bb4ee0946b03a89ecb72f3aa8a19f2b362c1->enter($__internal_80e1d2373755bc06e817eff4c922bb4ee0946b03a89ecb72f3aa8a19f2b362c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_80e1d2373755bc06e817eff4c922bb4ee0946b03a89ecb72f3aa8a19f2b362c1->leave($__internal_80e1d2373755bc06e817eff4c922bb4ee0946b03a89ecb72f3aa8a19f2b362c1_prof);

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
