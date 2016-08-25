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
        $__internal_8e2308f049da532c4f92068d0eba7e5aab9b5192511cc88e2cfd1be1aa3dcd76 = $this->env->getExtension("native_profiler");
        $__internal_8e2308f049da532c4f92068d0eba7e5aab9b5192511cc88e2cfd1be1aa3dcd76->enter($__internal_8e2308f049da532c4f92068d0eba7e5aab9b5192511cc88e2cfd1be1aa3dcd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e2308f049da532c4f92068d0eba7e5aab9b5192511cc88e2cfd1be1aa3dcd76->leave($__internal_8e2308f049da532c4f92068d0eba7e5aab9b5192511cc88e2cfd1be1aa3dcd76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5acdb8719c2cc0c4f1d6efe85ce684cf41a1c81267e8588ebd2704f9ae67278a = $this->env->getExtension("native_profiler");
        $__internal_5acdb8719c2cc0c4f1d6efe85ce684cf41a1c81267e8588ebd2704f9ae67278a->enter($__internal_5acdb8719c2cc0c4f1d6efe85ce684cf41a1c81267e8588ebd2704f9ae67278a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5acdb8719c2cc0c4f1d6efe85ce684cf41a1c81267e8588ebd2704f9ae67278a->leave($__internal_5acdb8719c2cc0c4f1d6efe85ce684cf41a1c81267e8588ebd2704f9ae67278a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed951c6280ef6bf49b7e7678e2354e374dab092f7cd7209eefdc679d6f799b6e = $this->env->getExtension("native_profiler");
        $__internal_ed951c6280ef6bf49b7e7678e2354e374dab092f7cd7209eefdc679d6f799b6e->enter($__internal_ed951c6280ef6bf49b7e7678e2354e374dab092f7cd7209eefdc679d6f799b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ed951c6280ef6bf49b7e7678e2354e374dab092f7cd7209eefdc679d6f799b6e->leave($__internal_ed951c6280ef6bf49b7e7678e2354e374dab092f7cd7209eefdc679d6f799b6e_prof);

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
