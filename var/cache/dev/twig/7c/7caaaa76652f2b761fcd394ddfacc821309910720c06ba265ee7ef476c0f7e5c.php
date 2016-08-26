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
        $__internal_a97d1a538d924cc3d391994096867e4f4499b2ce8b739462487cef651694e754 = $this->env->getExtension("native_profiler");
        $__internal_a97d1a538d924cc3d391994096867e4f4499b2ce8b739462487cef651694e754->enter($__internal_a97d1a538d924cc3d391994096867e4f4499b2ce8b739462487cef651694e754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a97d1a538d924cc3d391994096867e4f4499b2ce8b739462487cef651694e754->leave($__internal_a97d1a538d924cc3d391994096867e4f4499b2ce8b739462487cef651694e754_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0388e304021f38fb17b6c286d58f41bf6a74c6a15915f48a81b0b95ac1678429 = $this->env->getExtension("native_profiler");
        $__internal_0388e304021f38fb17b6c286d58f41bf6a74c6a15915f48a81b0b95ac1678429->enter($__internal_0388e304021f38fb17b6c286d58f41bf6a74c6a15915f48a81b0b95ac1678429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0388e304021f38fb17b6c286d58f41bf6a74c6a15915f48a81b0b95ac1678429->leave($__internal_0388e304021f38fb17b6c286d58f41bf6a74c6a15915f48a81b0b95ac1678429_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_96ccdb9ae1c1bf9160f55376936e7d45e69ca590809124eb34aa95f5ee4f198d = $this->env->getExtension("native_profiler");
        $__internal_96ccdb9ae1c1bf9160f55376936e7d45e69ca590809124eb34aa95f5ee4f198d->enter($__internal_96ccdb9ae1c1bf9160f55376936e7d45e69ca590809124eb34aa95f5ee4f198d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_96ccdb9ae1c1bf9160f55376936e7d45e69ca590809124eb34aa95f5ee4f198d->leave($__internal_96ccdb9ae1c1bf9160f55376936e7d45e69ca590809124eb34aa95f5ee4f198d_prof);

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
