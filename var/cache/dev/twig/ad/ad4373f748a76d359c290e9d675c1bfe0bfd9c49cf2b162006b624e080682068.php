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
        $__internal_18c2b68eba759eb94c8a6b2173f6fd459efffd49f4471e38184f320c3c77897c = $this->env->getExtension("native_profiler");
        $__internal_18c2b68eba759eb94c8a6b2173f6fd459efffd49f4471e38184f320c3c77897c->enter($__internal_18c2b68eba759eb94c8a6b2173f6fd459efffd49f4471e38184f320c3c77897c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18c2b68eba759eb94c8a6b2173f6fd459efffd49f4471e38184f320c3c77897c->leave($__internal_18c2b68eba759eb94c8a6b2173f6fd459efffd49f4471e38184f320c3c77897c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6034749b09cd81f2c99a3cd598777f8a65194be81ae63dd40b881ceacb91ff8e = $this->env->getExtension("native_profiler");
        $__internal_6034749b09cd81f2c99a3cd598777f8a65194be81ae63dd40b881ceacb91ff8e->enter($__internal_6034749b09cd81f2c99a3cd598777f8a65194be81ae63dd40b881ceacb91ff8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6034749b09cd81f2c99a3cd598777f8a65194be81ae63dd40b881ceacb91ff8e->leave($__internal_6034749b09cd81f2c99a3cd598777f8a65194be81ae63dd40b881ceacb91ff8e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5a32cb6be11908a75829d71ddac0439f5621ab04caaf766947f7c3873661928 = $this->env->getExtension("native_profiler");
        $__internal_e5a32cb6be11908a75829d71ddac0439f5621ab04caaf766947f7c3873661928->enter($__internal_e5a32cb6be11908a75829d71ddac0439f5621ab04caaf766947f7c3873661928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e5a32cb6be11908a75829d71ddac0439f5621ab04caaf766947f7c3873661928->leave($__internal_e5a32cb6be11908a75829d71ddac0439f5621ab04caaf766947f7c3873661928_prof);

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
