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
        $__internal_130ee08aeb9ded32442fffc70d6a535a15e4f0cc2b7702fcfa53e57b7b049ba1 = $this->env->getExtension("native_profiler");
        $__internal_130ee08aeb9ded32442fffc70d6a535a15e4f0cc2b7702fcfa53e57b7b049ba1->enter($__internal_130ee08aeb9ded32442fffc70d6a535a15e4f0cc2b7702fcfa53e57b7b049ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_130ee08aeb9ded32442fffc70d6a535a15e4f0cc2b7702fcfa53e57b7b049ba1->leave($__internal_130ee08aeb9ded32442fffc70d6a535a15e4f0cc2b7702fcfa53e57b7b049ba1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8643c104837a6176c17cb9e1c5c54220f10c8bd81320088b12107f48f0c4d01d = $this->env->getExtension("native_profiler");
        $__internal_8643c104837a6176c17cb9e1c5c54220f10c8bd81320088b12107f48f0c4d01d->enter($__internal_8643c104837a6176c17cb9e1c5c54220f10c8bd81320088b12107f48f0c4d01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8643c104837a6176c17cb9e1c5c54220f10c8bd81320088b12107f48f0c4d01d->leave($__internal_8643c104837a6176c17cb9e1c5c54220f10c8bd81320088b12107f48f0c4d01d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a46e7647b8b9d312ad00036f03dab61095c2a4a9c779ca17554e88d3933183c = $this->env->getExtension("native_profiler");
        $__internal_3a46e7647b8b9d312ad00036f03dab61095c2a4a9c779ca17554e88d3933183c->enter($__internal_3a46e7647b8b9d312ad00036f03dab61095c2a4a9c779ca17554e88d3933183c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3a46e7647b8b9d312ad00036f03dab61095c2a4a9c779ca17554e88d3933183c->leave($__internal_3a46e7647b8b9d312ad00036f03dab61095c2a4a9c779ca17554e88d3933183c_prof);

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
