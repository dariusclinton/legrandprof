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
        $__internal_a97dab5e76d8accce6865bc00283d1243cad264f7d18b44e5637684a7e67bfcf = $this->env->getExtension("native_profiler");
        $__internal_a97dab5e76d8accce6865bc00283d1243cad264f7d18b44e5637684a7e67bfcf->enter($__internal_a97dab5e76d8accce6865bc00283d1243cad264f7d18b44e5637684a7e67bfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a97dab5e76d8accce6865bc00283d1243cad264f7d18b44e5637684a7e67bfcf->leave($__internal_a97dab5e76d8accce6865bc00283d1243cad264f7d18b44e5637684a7e67bfcf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b45b81d3087e3a8cfe042bb5b12b3c5cb2cb5b28dc86a542eccf41e55c2bf53 = $this->env->getExtension("native_profiler");
        $__internal_6b45b81d3087e3a8cfe042bb5b12b3c5cb2cb5b28dc86a542eccf41e55c2bf53->enter($__internal_6b45b81d3087e3a8cfe042bb5b12b3c5cb2cb5b28dc86a542eccf41e55c2bf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6b45b81d3087e3a8cfe042bb5b12b3c5cb2cb5b28dc86a542eccf41e55c2bf53->leave($__internal_6b45b81d3087e3a8cfe042bb5b12b3c5cb2cb5b28dc86a542eccf41e55c2bf53_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_068ad161ea97948af88bf3255c195dd55867a63c1515ee21350fe399f5e4a614 = $this->env->getExtension("native_profiler");
        $__internal_068ad161ea97948af88bf3255c195dd55867a63c1515ee21350fe399f5e4a614->enter($__internal_068ad161ea97948af88bf3255c195dd55867a63c1515ee21350fe399f5e4a614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_068ad161ea97948af88bf3255c195dd55867a63c1515ee21350fe399f5e4a614->leave($__internal_068ad161ea97948af88bf3255c195dd55867a63c1515ee21350fe399f5e4a614_prof);

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
