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
        $__internal_3ab14f8cc330d936b9c78fa4550320e79b4fd1f722bd41353bd92aaff0267b39 = $this->env->getExtension("native_profiler");
        $__internal_3ab14f8cc330d936b9c78fa4550320e79b4fd1f722bd41353bd92aaff0267b39->enter($__internal_3ab14f8cc330d936b9c78fa4550320e79b4fd1f722bd41353bd92aaff0267b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ab14f8cc330d936b9c78fa4550320e79b4fd1f722bd41353bd92aaff0267b39->leave($__internal_3ab14f8cc330d936b9c78fa4550320e79b4fd1f722bd41353bd92aaff0267b39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42bc53fe54deb845a39c93ac1cc681bcdeca7693b0abb0d96098a2a810c68bfe = $this->env->getExtension("native_profiler");
        $__internal_42bc53fe54deb845a39c93ac1cc681bcdeca7693b0abb0d96098a2a810c68bfe->enter($__internal_42bc53fe54deb845a39c93ac1cc681bcdeca7693b0abb0d96098a2a810c68bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_42bc53fe54deb845a39c93ac1cc681bcdeca7693b0abb0d96098a2a810c68bfe->leave($__internal_42bc53fe54deb845a39c93ac1cc681bcdeca7693b0abb0d96098a2a810c68bfe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7eac39f8de5d814d6790eb4e8aa26c9077164e6c862c17ec5e832e27e2b0feda = $this->env->getExtension("native_profiler");
        $__internal_7eac39f8de5d814d6790eb4e8aa26c9077164e6c862c17ec5e832e27e2b0feda->enter($__internal_7eac39f8de5d814d6790eb4e8aa26c9077164e6c862c17ec5e832e27e2b0feda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7eac39f8de5d814d6790eb4e8aa26c9077164e6c862c17ec5e832e27e2b0feda->leave($__internal_7eac39f8de5d814d6790eb4e8aa26c9077164e6c862c17ec5e832e27e2b0feda_prof);

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
