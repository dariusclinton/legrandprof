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
        $__internal_9153e79b859e18ec64cae500d1b3e6c74d19c274a734568ba7ccc5e5ea7c3ac0 = $this->env->getExtension("native_profiler");
        $__internal_9153e79b859e18ec64cae500d1b3e6c74d19c274a734568ba7ccc5e5ea7c3ac0->enter($__internal_9153e79b859e18ec64cae500d1b3e6c74d19c274a734568ba7ccc5e5ea7c3ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9153e79b859e18ec64cae500d1b3e6c74d19c274a734568ba7ccc5e5ea7c3ac0->leave($__internal_9153e79b859e18ec64cae500d1b3e6c74d19c274a734568ba7ccc5e5ea7c3ac0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2df71d3e905a01f404cf01f926fab26a67183292c0994b1e8361a53651d640a2 = $this->env->getExtension("native_profiler");
        $__internal_2df71d3e905a01f404cf01f926fab26a67183292c0994b1e8361a53651d640a2->enter($__internal_2df71d3e905a01f404cf01f926fab26a67183292c0994b1e8361a53651d640a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2df71d3e905a01f404cf01f926fab26a67183292c0994b1e8361a53651d640a2->leave($__internal_2df71d3e905a01f404cf01f926fab26a67183292c0994b1e8361a53651d640a2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a728ddfe14842c60bbb7e22d3de8141833487770a4a895992039ee55b8d1d11 = $this->env->getExtension("native_profiler");
        $__internal_8a728ddfe14842c60bbb7e22d3de8141833487770a4a895992039ee55b8d1d11->enter($__internal_8a728ddfe14842c60bbb7e22d3de8141833487770a4a895992039ee55b8d1d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a728ddfe14842c60bbb7e22d3de8141833487770a4a895992039ee55b8d1d11->leave($__internal_8a728ddfe14842c60bbb7e22d3de8141833487770a4a895992039ee55b8d1d11_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_381d47bbe72b3737627794cf7585e2f0f349facb0ed741d3e47e18c53d4d3f85 = $this->env->getExtension("native_profiler");
        $__internal_381d47bbe72b3737627794cf7585e2f0f349facb0ed741d3e47e18c53d4d3f85->enter($__internal_381d47bbe72b3737627794cf7585e2f0f349facb0ed741d3e47e18c53d4d3f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_381d47bbe72b3737627794cf7585e2f0f349facb0ed741d3e47e18c53d4d3f85->leave($__internal_381d47bbe72b3737627794cf7585e2f0f349facb0ed741d3e47e18c53d4d3f85_prof);

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
