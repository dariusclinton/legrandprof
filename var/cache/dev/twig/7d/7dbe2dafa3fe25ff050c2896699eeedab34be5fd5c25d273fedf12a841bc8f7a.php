<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c540542da6661f22dd959f9bc2b595fd4127ea0ddbcbb9066e46ee2b63dc1e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2adf2eec2aa19aaba51af13f97c7363b254ccc449884117a92f9635c66d0ef76 = $this->env->getExtension("native_profiler");
        $__internal_2adf2eec2aa19aaba51af13f97c7363b254ccc449884117a92f9635c66d0ef76->enter($__internal_2adf2eec2aa19aaba51af13f97c7363b254ccc449884117a92f9635c66d0ef76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2adf2eec2aa19aaba51af13f97c7363b254ccc449884117a92f9635c66d0ef76->leave($__internal_2adf2eec2aa19aaba51af13f97c7363b254ccc449884117a92f9635c66d0ef76_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aab44b08947c40ab34d5f4aea109719624ea4524c45bf6d939d568e416112953 = $this->env->getExtension("native_profiler");
        $__internal_aab44b08947c40ab34d5f4aea109719624ea4524c45bf6d939d568e416112953->enter($__internal_aab44b08947c40ab34d5f4aea109719624ea4524c45bf6d939d568e416112953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aab44b08947c40ab34d5f4aea109719624ea4524c45bf6d939d568e416112953->leave($__internal_aab44b08947c40ab34d5f4aea109719624ea4524c45bf6d939d568e416112953_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4747e9166e943a16b517c1222c4daff312cd58c2ed7e0ddde5c9f01337b442bf = $this->env->getExtension("native_profiler");
        $__internal_4747e9166e943a16b517c1222c4daff312cd58c2ed7e0ddde5c9f01337b442bf->enter($__internal_4747e9166e943a16b517c1222c4daff312cd58c2ed7e0ddde5c9f01337b442bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4747e9166e943a16b517c1222c4daff312cd58c2ed7e0ddde5c9f01337b442bf->leave($__internal_4747e9166e943a16b517c1222c4daff312cd58c2ed7e0ddde5c9f01337b442bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b825d6838c3c98b12a6e0459ae93aa1936ec3841b458cb41964a82e468625886 = $this->env->getExtension("native_profiler");
        $__internal_b825d6838c3c98b12a6e0459ae93aa1936ec3841b458cb41964a82e468625886->enter($__internal_b825d6838c3c98b12a6e0459ae93aa1936ec3841b458cb41964a82e468625886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b825d6838c3c98b12a6e0459ae93aa1936ec3841b458cb41964a82e468625886->leave($__internal_b825d6838c3c98b12a6e0459ae93aa1936ec3841b458cb41964a82e468625886_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
