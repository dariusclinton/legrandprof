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
        $__internal_83d20d9af57f21ff9fc1883067259abc4d2f04f150a78c59391d4a511cb9eaeb = $this->env->getExtension("native_profiler");
        $__internal_83d20d9af57f21ff9fc1883067259abc4d2f04f150a78c59391d4a511cb9eaeb->enter($__internal_83d20d9af57f21ff9fc1883067259abc4d2f04f150a78c59391d4a511cb9eaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83d20d9af57f21ff9fc1883067259abc4d2f04f150a78c59391d4a511cb9eaeb->leave($__internal_83d20d9af57f21ff9fc1883067259abc4d2f04f150a78c59391d4a511cb9eaeb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5df37abdc555e8708b9e95a7d09f562c79c7d5700511e53ffe6d0b6e2addab2f = $this->env->getExtension("native_profiler");
        $__internal_5df37abdc555e8708b9e95a7d09f562c79c7d5700511e53ffe6d0b6e2addab2f->enter($__internal_5df37abdc555e8708b9e95a7d09f562c79c7d5700511e53ffe6d0b6e2addab2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5df37abdc555e8708b9e95a7d09f562c79c7d5700511e53ffe6d0b6e2addab2f->leave($__internal_5df37abdc555e8708b9e95a7d09f562c79c7d5700511e53ffe6d0b6e2addab2f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1dc86cc3e46446a6ac889c004c7114c28320ef5f1480f14f9ef57871eb2eb09 = $this->env->getExtension("native_profiler");
        $__internal_e1dc86cc3e46446a6ac889c004c7114c28320ef5f1480f14f9ef57871eb2eb09->enter($__internal_e1dc86cc3e46446a6ac889c004c7114c28320ef5f1480f14f9ef57871eb2eb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e1dc86cc3e46446a6ac889c004c7114c28320ef5f1480f14f9ef57871eb2eb09->leave($__internal_e1dc86cc3e46446a6ac889c004c7114c28320ef5f1480f14f9ef57871eb2eb09_prof);

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
