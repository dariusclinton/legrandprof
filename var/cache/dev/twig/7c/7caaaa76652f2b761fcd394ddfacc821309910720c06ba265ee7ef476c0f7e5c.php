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
        $__internal_541707649b7f03720fd7a3baef30838ae9f38ab71fa721a19259088de4926355 = $this->env->getExtension("native_profiler");
        $__internal_541707649b7f03720fd7a3baef30838ae9f38ab71fa721a19259088de4926355->enter($__internal_541707649b7f03720fd7a3baef30838ae9f38ab71fa721a19259088de4926355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_541707649b7f03720fd7a3baef30838ae9f38ab71fa721a19259088de4926355->leave($__internal_541707649b7f03720fd7a3baef30838ae9f38ab71fa721a19259088de4926355_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5078bdf39290da01b8ea1c2ad4c3c64177a208ba332add2381b784fbcdc4b933 = $this->env->getExtension("native_profiler");
        $__internal_5078bdf39290da01b8ea1c2ad4c3c64177a208ba332add2381b784fbcdc4b933->enter($__internal_5078bdf39290da01b8ea1c2ad4c3c64177a208ba332add2381b784fbcdc4b933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5078bdf39290da01b8ea1c2ad4c3c64177a208ba332add2381b784fbcdc4b933->leave($__internal_5078bdf39290da01b8ea1c2ad4c3c64177a208ba332add2381b784fbcdc4b933_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_378c1603cd1b5cce998ad5a44e2cc02f5a3d3909b898a2e585ac93cedae11600 = $this->env->getExtension("native_profiler");
        $__internal_378c1603cd1b5cce998ad5a44e2cc02f5a3d3909b898a2e585ac93cedae11600->enter($__internal_378c1603cd1b5cce998ad5a44e2cc02f5a3d3909b898a2e585ac93cedae11600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_378c1603cd1b5cce998ad5a44e2cc02f5a3d3909b898a2e585ac93cedae11600->leave($__internal_378c1603cd1b5cce998ad5a44e2cc02f5a3d3909b898a2e585ac93cedae11600_prof);

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
