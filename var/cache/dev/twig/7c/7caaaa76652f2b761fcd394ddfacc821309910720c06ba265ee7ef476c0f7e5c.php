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
        $__internal_121c7bd39025dc1cbd43b87155ad07919b29e113c045ddbd382e55eb2ea70d66 = $this->env->getExtension("native_profiler");
        $__internal_121c7bd39025dc1cbd43b87155ad07919b29e113c045ddbd382e55eb2ea70d66->enter($__internal_121c7bd39025dc1cbd43b87155ad07919b29e113c045ddbd382e55eb2ea70d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121c7bd39025dc1cbd43b87155ad07919b29e113c045ddbd382e55eb2ea70d66->leave($__internal_121c7bd39025dc1cbd43b87155ad07919b29e113c045ddbd382e55eb2ea70d66_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3007cf99d3709a75ee46887c7491dc83a56d4370c45f7fadf299808f3e22d6d9 = $this->env->getExtension("native_profiler");
        $__internal_3007cf99d3709a75ee46887c7491dc83a56d4370c45f7fadf299808f3e22d6d9->enter($__internal_3007cf99d3709a75ee46887c7491dc83a56d4370c45f7fadf299808f3e22d6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3007cf99d3709a75ee46887c7491dc83a56d4370c45f7fadf299808f3e22d6d9->leave($__internal_3007cf99d3709a75ee46887c7491dc83a56d4370c45f7fadf299808f3e22d6d9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_48c00146f4b8f8ca104d23cb56d298cd8daa96c5df609aef3993ae484186bff8 = $this->env->getExtension("native_profiler");
        $__internal_48c00146f4b8f8ca104d23cb56d298cd8daa96c5df609aef3993ae484186bff8->enter($__internal_48c00146f4b8f8ca104d23cb56d298cd8daa96c5df609aef3993ae484186bff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_48c00146f4b8f8ca104d23cb56d298cd8daa96c5df609aef3993ae484186bff8->leave($__internal_48c00146f4b8f8ca104d23cb56d298cd8daa96c5df609aef3993ae484186bff8_prof);

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
