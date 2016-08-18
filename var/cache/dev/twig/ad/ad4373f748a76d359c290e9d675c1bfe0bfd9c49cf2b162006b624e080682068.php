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
        $__internal_93dc01b9440e864d880822d0e001e30ae5c3d9166cc83f8f1bdab4b5a5b57f78 = $this->env->getExtension("native_profiler");
        $__internal_93dc01b9440e864d880822d0e001e30ae5c3d9166cc83f8f1bdab4b5a5b57f78->enter($__internal_93dc01b9440e864d880822d0e001e30ae5c3d9166cc83f8f1bdab4b5a5b57f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93dc01b9440e864d880822d0e001e30ae5c3d9166cc83f8f1bdab4b5a5b57f78->leave($__internal_93dc01b9440e864d880822d0e001e30ae5c3d9166cc83f8f1bdab4b5a5b57f78_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d81815a2447f1a8f0d04f4cbc9a581703c4ef20687e3de44731635fd5a423e4 = $this->env->getExtension("native_profiler");
        $__internal_8d81815a2447f1a8f0d04f4cbc9a581703c4ef20687e3de44731635fd5a423e4->enter($__internal_8d81815a2447f1a8f0d04f4cbc9a581703c4ef20687e3de44731635fd5a423e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8d81815a2447f1a8f0d04f4cbc9a581703c4ef20687e3de44731635fd5a423e4->leave($__internal_8d81815a2447f1a8f0d04f4cbc9a581703c4ef20687e3de44731635fd5a423e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bf567bf7ef708cdf939490c61cb9722c4e86820e352c8588480c23cdfcbb6de = $this->env->getExtension("native_profiler");
        $__internal_0bf567bf7ef708cdf939490c61cb9722c4e86820e352c8588480c23cdfcbb6de->enter($__internal_0bf567bf7ef708cdf939490c61cb9722c4e86820e352c8588480c23cdfcbb6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0bf567bf7ef708cdf939490c61cb9722c4e86820e352c8588480c23cdfcbb6de->leave($__internal_0bf567bf7ef708cdf939490c61cb9722c4e86820e352c8588480c23cdfcbb6de_prof);

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
