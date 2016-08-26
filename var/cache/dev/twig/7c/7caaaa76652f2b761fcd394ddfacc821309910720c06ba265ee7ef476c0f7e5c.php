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
        $__internal_cddf64ad1f00b5291b1281b96733722a700c8fd653f789fa7a168773a301a6ab = $this->env->getExtension("native_profiler");
        $__internal_cddf64ad1f00b5291b1281b96733722a700c8fd653f789fa7a168773a301a6ab->enter($__internal_cddf64ad1f00b5291b1281b96733722a700c8fd653f789fa7a168773a301a6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cddf64ad1f00b5291b1281b96733722a700c8fd653f789fa7a168773a301a6ab->leave($__internal_cddf64ad1f00b5291b1281b96733722a700c8fd653f789fa7a168773a301a6ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f814e96e8bf0784a6c0fa6e767f694f30e3bae3609690b11462773d1a8e4c740 = $this->env->getExtension("native_profiler");
        $__internal_f814e96e8bf0784a6c0fa6e767f694f30e3bae3609690b11462773d1a8e4c740->enter($__internal_f814e96e8bf0784a6c0fa6e767f694f30e3bae3609690b11462773d1a8e4c740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f814e96e8bf0784a6c0fa6e767f694f30e3bae3609690b11462773d1a8e4c740->leave($__internal_f814e96e8bf0784a6c0fa6e767f694f30e3bae3609690b11462773d1a8e4c740_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d24ad9c5b549f13173fee8d792cb51e451cfc62bac1418f040ad48d6622a65b4 = $this->env->getExtension("native_profiler");
        $__internal_d24ad9c5b549f13173fee8d792cb51e451cfc62bac1418f040ad48d6622a65b4->enter($__internal_d24ad9c5b549f13173fee8d792cb51e451cfc62bac1418f040ad48d6622a65b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d24ad9c5b549f13173fee8d792cb51e451cfc62bac1418f040ad48d6622a65b4->leave($__internal_d24ad9c5b549f13173fee8d792cb51e451cfc62bac1418f040ad48d6622a65b4_prof);

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
