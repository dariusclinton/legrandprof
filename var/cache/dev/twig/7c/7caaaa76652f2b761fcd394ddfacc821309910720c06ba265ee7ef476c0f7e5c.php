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
        $__internal_0bba3f46491f09306737a3508048a4a55b3e3c1c879cdbc8dbb7a127163be235 = $this->env->getExtension("native_profiler");
        $__internal_0bba3f46491f09306737a3508048a4a55b3e3c1c879cdbc8dbb7a127163be235->enter($__internal_0bba3f46491f09306737a3508048a4a55b3e3c1c879cdbc8dbb7a127163be235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bba3f46491f09306737a3508048a4a55b3e3c1c879cdbc8dbb7a127163be235->leave($__internal_0bba3f46491f09306737a3508048a4a55b3e3c1c879cdbc8dbb7a127163be235_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8d59b5c08e2bbf501634655fb694f0a6d1a54538479c0a83f4ea00da3963aa8 = $this->env->getExtension("native_profiler");
        $__internal_d8d59b5c08e2bbf501634655fb694f0a6d1a54538479c0a83f4ea00da3963aa8->enter($__internal_d8d59b5c08e2bbf501634655fb694f0a6d1a54538479c0a83f4ea00da3963aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d8d59b5c08e2bbf501634655fb694f0a6d1a54538479c0a83f4ea00da3963aa8->leave($__internal_d8d59b5c08e2bbf501634655fb694f0a6d1a54538479c0a83f4ea00da3963aa8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a12c634847a2113d36fb83252d74c149b7779764f7e09d004a21352c3af41619 = $this->env->getExtension("native_profiler");
        $__internal_a12c634847a2113d36fb83252d74c149b7779764f7e09d004a21352c3af41619->enter($__internal_a12c634847a2113d36fb83252d74c149b7779764f7e09d004a21352c3af41619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a12c634847a2113d36fb83252d74c149b7779764f7e09d004a21352c3af41619->leave($__internal_a12c634847a2113d36fb83252d74c149b7779764f7e09d004a21352c3af41619_prof);

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
