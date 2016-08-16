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
        $__internal_acee27defc3cafc50a28bfd26f6597b28f4b7cd54a3d3f1ab6a60f9aa22a38a7 = $this->env->getExtension("native_profiler");
        $__internal_acee27defc3cafc50a28bfd26f6597b28f4b7cd54a3d3f1ab6a60f9aa22a38a7->enter($__internal_acee27defc3cafc50a28bfd26f6597b28f4b7cd54a3d3f1ab6a60f9aa22a38a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acee27defc3cafc50a28bfd26f6597b28f4b7cd54a3d3f1ab6a60f9aa22a38a7->leave($__internal_acee27defc3cafc50a28bfd26f6597b28f4b7cd54a3d3f1ab6a60f9aa22a38a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77e9a6e5e0219f285cdf776be0d7cfa513d32ef4c9265957dcff59142bc61a2c = $this->env->getExtension("native_profiler");
        $__internal_77e9a6e5e0219f285cdf776be0d7cfa513d32ef4c9265957dcff59142bc61a2c->enter($__internal_77e9a6e5e0219f285cdf776be0d7cfa513d32ef4c9265957dcff59142bc61a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_77e9a6e5e0219f285cdf776be0d7cfa513d32ef4c9265957dcff59142bc61a2c->leave($__internal_77e9a6e5e0219f285cdf776be0d7cfa513d32ef4c9265957dcff59142bc61a2c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_98eba9784749f2cfca399b6e6d4e8c6b1c2d87eefde4d67c097af8fdbf45a00c = $this->env->getExtension("native_profiler");
        $__internal_98eba9784749f2cfca399b6e6d4e8c6b1c2d87eefde4d67c097af8fdbf45a00c->enter($__internal_98eba9784749f2cfca399b6e6d4e8c6b1c2d87eefde4d67c097af8fdbf45a00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_98eba9784749f2cfca399b6e6d4e8c6b1c2d87eefde4d67c097af8fdbf45a00c->leave($__internal_98eba9784749f2cfca399b6e6d4e8c6b1c2d87eefde4d67c097af8fdbf45a00c_prof);

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
