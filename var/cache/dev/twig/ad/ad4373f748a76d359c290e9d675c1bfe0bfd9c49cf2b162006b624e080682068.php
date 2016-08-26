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
        $__internal_ab5d981e31ec5806084579e491f08e9a7c11fdd4e155d1609aa15dd2f5630590 = $this->env->getExtension("native_profiler");
        $__internal_ab5d981e31ec5806084579e491f08e9a7c11fdd4e155d1609aa15dd2f5630590->enter($__internal_ab5d981e31ec5806084579e491f08e9a7c11fdd4e155d1609aa15dd2f5630590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab5d981e31ec5806084579e491f08e9a7c11fdd4e155d1609aa15dd2f5630590->leave($__internal_ab5d981e31ec5806084579e491f08e9a7c11fdd4e155d1609aa15dd2f5630590_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22fa1365d9c971ed95b944dee73e29eecf67a8ccde4e7615110ca3769b5c36da = $this->env->getExtension("native_profiler");
        $__internal_22fa1365d9c971ed95b944dee73e29eecf67a8ccde4e7615110ca3769b5c36da->enter($__internal_22fa1365d9c971ed95b944dee73e29eecf67a8ccde4e7615110ca3769b5c36da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_22fa1365d9c971ed95b944dee73e29eecf67a8ccde4e7615110ca3769b5c36da->leave($__internal_22fa1365d9c971ed95b944dee73e29eecf67a8ccde4e7615110ca3769b5c36da_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_858d45339e7d5ffeca5500355593eddee5c8b32ea63bd752fc21865b3765afab = $this->env->getExtension("native_profiler");
        $__internal_858d45339e7d5ffeca5500355593eddee5c8b32ea63bd752fc21865b3765afab->enter($__internal_858d45339e7d5ffeca5500355593eddee5c8b32ea63bd752fc21865b3765afab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_858d45339e7d5ffeca5500355593eddee5c8b32ea63bd752fc21865b3765afab->leave($__internal_858d45339e7d5ffeca5500355593eddee5c8b32ea63bd752fc21865b3765afab_prof);

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
