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
        $__internal_81a7e80f35e24b31f964ff0ac036d8890bba75abc69b39502ae1988abf5d362d = $this->env->getExtension("native_profiler");
        $__internal_81a7e80f35e24b31f964ff0ac036d8890bba75abc69b39502ae1988abf5d362d->enter($__internal_81a7e80f35e24b31f964ff0ac036d8890bba75abc69b39502ae1988abf5d362d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81a7e80f35e24b31f964ff0ac036d8890bba75abc69b39502ae1988abf5d362d->leave($__internal_81a7e80f35e24b31f964ff0ac036d8890bba75abc69b39502ae1988abf5d362d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e02991e361da9ab964f50ca5952a031fc2784579dd21afd9faefdbf7508b86fe = $this->env->getExtension("native_profiler");
        $__internal_e02991e361da9ab964f50ca5952a031fc2784579dd21afd9faefdbf7508b86fe->enter($__internal_e02991e361da9ab964f50ca5952a031fc2784579dd21afd9faefdbf7508b86fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e02991e361da9ab964f50ca5952a031fc2784579dd21afd9faefdbf7508b86fe->leave($__internal_e02991e361da9ab964f50ca5952a031fc2784579dd21afd9faefdbf7508b86fe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd39060efa3fb8bb128bd0f465b5f1b8279b9d50a4489a9277c36dbe9ce9f494 = $this->env->getExtension("native_profiler");
        $__internal_fd39060efa3fb8bb128bd0f465b5f1b8279b9d50a4489a9277c36dbe9ce9f494->enter($__internal_fd39060efa3fb8bb128bd0f465b5f1b8279b9d50a4489a9277c36dbe9ce9f494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fd39060efa3fb8bb128bd0f465b5f1b8279b9d50a4489a9277c36dbe9ce9f494->leave($__internal_fd39060efa3fb8bb128bd0f465b5f1b8279b9d50a4489a9277c36dbe9ce9f494_prof);

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
