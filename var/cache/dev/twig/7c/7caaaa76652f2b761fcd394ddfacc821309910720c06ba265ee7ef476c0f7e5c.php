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
        $__internal_0be8cd78a9cbc99091c678415c6613dd59f87b34e642e40918f50015e9d6f7b7 = $this->env->getExtension("native_profiler");
        $__internal_0be8cd78a9cbc99091c678415c6613dd59f87b34e642e40918f50015e9d6f7b7->enter($__internal_0be8cd78a9cbc99091c678415c6613dd59f87b34e642e40918f50015e9d6f7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be8cd78a9cbc99091c678415c6613dd59f87b34e642e40918f50015e9d6f7b7->leave($__internal_0be8cd78a9cbc99091c678415c6613dd59f87b34e642e40918f50015e9d6f7b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5477115faf1405b832decdb8e248bb1e4271bacf36c4e02dfd59b634de0f7fb3 = $this->env->getExtension("native_profiler");
        $__internal_5477115faf1405b832decdb8e248bb1e4271bacf36c4e02dfd59b634de0f7fb3->enter($__internal_5477115faf1405b832decdb8e248bb1e4271bacf36c4e02dfd59b634de0f7fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5477115faf1405b832decdb8e248bb1e4271bacf36c4e02dfd59b634de0f7fb3->leave($__internal_5477115faf1405b832decdb8e248bb1e4271bacf36c4e02dfd59b634de0f7fb3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_00e919f42342c5557073c0b8e634f7406b8e9d5f0b174edcc02b8e7b671c3f82 = $this->env->getExtension("native_profiler");
        $__internal_00e919f42342c5557073c0b8e634f7406b8e9d5f0b174edcc02b8e7b671c3f82->enter($__internal_00e919f42342c5557073c0b8e634f7406b8e9d5f0b174edcc02b8e7b671c3f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_00e919f42342c5557073c0b8e634f7406b8e9d5f0b174edcc02b8e7b671c3f82->leave($__internal_00e919f42342c5557073c0b8e634f7406b8e9d5f0b174edcc02b8e7b671c3f82_prof);

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
