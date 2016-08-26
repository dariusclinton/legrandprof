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
        $__internal_e3c5f12cf0ff478d14fc03e9185ae01e2e5f898c720bc1d0582bd399faf59aa3 = $this->env->getExtension("native_profiler");
        $__internal_e3c5f12cf0ff478d14fc03e9185ae01e2e5f898c720bc1d0582bd399faf59aa3->enter($__internal_e3c5f12cf0ff478d14fc03e9185ae01e2e5f898c720bc1d0582bd399faf59aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3c5f12cf0ff478d14fc03e9185ae01e2e5f898c720bc1d0582bd399faf59aa3->leave($__internal_e3c5f12cf0ff478d14fc03e9185ae01e2e5f898c720bc1d0582bd399faf59aa3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a42cc66491211e42cb02f62c229a10555fa4d5ee2aa3902cb1ef406cdbdfd6f4 = $this->env->getExtension("native_profiler");
        $__internal_a42cc66491211e42cb02f62c229a10555fa4d5ee2aa3902cb1ef406cdbdfd6f4->enter($__internal_a42cc66491211e42cb02f62c229a10555fa4d5ee2aa3902cb1ef406cdbdfd6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a42cc66491211e42cb02f62c229a10555fa4d5ee2aa3902cb1ef406cdbdfd6f4->leave($__internal_a42cc66491211e42cb02f62c229a10555fa4d5ee2aa3902cb1ef406cdbdfd6f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d69d4b319d4974e452ed6f97a3a8748074c91abaaa1f629acfcc5113386db5cc = $this->env->getExtension("native_profiler");
        $__internal_d69d4b319d4974e452ed6f97a3a8748074c91abaaa1f629acfcc5113386db5cc->enter($__internal_d69d4b319d4974e452ed6f97a3a8748074c91abaaa1f629acfcc5113386db5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d69d4b319d4974e452ed6f97a3a8748074c91abaaa1f629acfcc5113386db5cc->leave($__internal_d69d4b319d4974e452ed6f97a3a8748074c91abaaa1f629acfcc5113386db5cc_prof);

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
