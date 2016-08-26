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
        $__internal_a0b37f491611ddcf71a03784ee2b0f8d393ab58efb3ab527baabdf31c449f359 = $this->env->getExtension("native_profiler");
        $__internal_a0b37f491611ddcf71a03784ee2b0f8d393ab58efb3ab527baabdf31c449f359->enter($__internal_a0b37f491611ddcf71a03784ee2b0f8d393ab58efb3ab527baabdf31c449f359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0b37f491611ddcf71a03784ee2b0f8d393ab58efb3ab527baabdf31c449f359->leave($__internal_a0b37f491611ddcf71a03784ee2b0f8d393ab58efb3ab527baabdf31c449f359_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_895f4aa4302d22e3b4627f607a9f9c4ad430731e1ce2ee688470a773eba1e2d3 = $this->env->getExtension("native_profiler");
        $__internal_895f4aa4302d22e3b4627f607a9f9c4ad430731e1ce2ee688470a773eba1e2d3->enter($__internal_895f4aa4302d22e3b4627f607a9f9c4ad430731e1ce2ee688470a773eba1e2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_895f4aa4302d22e3b4627f607a9f9c4ad430731e1ce2ee688470a773eba1e2d3->leave($__internal_895f4aa4302d22e3b4627f607a9f9c4ad430731e1ce2ee688470a773eba1e2d3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_80582bc0ab2c5a6f098bb710a26cc23ff314b38acef982dc684cc64b1abb6158 = $this->env->getExtension("native_profiler");
        $__internal_80582bc0ab2c5a6f098bb710a26cc23ff314b38acef982dc684cc64b1abb6158->enter($__internal_80582bc0ab2c5a6f098bb710a26cc23ff314b38acef982dc684cc64b1abb6158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_80582bc0ab2c5a6f098bb710a26cc23ff314b38acef982dc684cc64b1abb6158->leave($__internal_80582bc0ab2c5a6f098bb710a26cc23ff314b38acef982dc684cc64b1abb6158_prof);

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
