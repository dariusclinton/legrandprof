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
        $__internal_e74906d2ed1e313babbb3330b01036efa4fc780f4ca92ac6387dd9b842e9d1c5 = $this->env->getExtension("native_profiler");
        $__internal_e74906d2ed1e313babbb3330b01036efa4fc780f4ca92ac6387dd9b842e9d1c5->enter($__internal_e74906d2ed1e313babbb3330b01036efa4fc780f4ca92ac6387dd9b842e9d1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e74906d2ed1e313babbb3330b01036efa4fc780f4ca92ac6387dd9b842e9d1c5->leave($__internal_e74906d2ed1e313babbb3330b01036efa4fc780f4ca92ac6387dd9b842e9d1c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_877bbb46286a877fb51f5fe888d41e50be03ba97322ab46c54ea252e32b2d028 = $this->env->getExtension("native_profiler");
        $__internal_877bbb46286a877fb51f5fe888d41e50be03ba97322ab46c54ea252e32b2d028->enter($__internal_877bbb46286a877fb51f5fe888d41e50be03ba97322ab46c54ea252e32b2d028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_877bbb46286a877fb51f5fe888d41e50be03ba97322ab46c54ea252e32b2d028->leave($__internal_877bbb46286a877fb51f5fe888d41e50be03ba97322ab46c54ea252e32b2d028_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df7ac48597ed833e868261c8818115bc5d310a3e20da021b4017b8532dd2ed74 = $this->env->getExtension("native_profiler");
        $__internal_df7ac48597ed833e868261c8818115bc5d310a3e20da021b4017b8532dd2ed74->enter($__internal_df7ac48597ed833e868261c8818115bc5d310a3e20da021b4017b8532dd2ed74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df7ac48597ed833e868261c8818115bc5d310a3e20da021b4017b8532dd2ed74->leave($__internal_df7ac48597ed833e868261c8818115bc5d310a3e20da021b4017b8532dd2ed74_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed4f2774a2dff27e0b7fed373118a800e571cd9b7d8ab76623ff799a046d2b63 = $this->env->getExtension("native_profiler");
        $__internal_ed4f2774a2dff27e0b7fed373118a800e571cd9b7d8ab76623ff799a046d2b63->enter($__internal_ed4f2774a2dff27e0b7fed373118a800e571cd9b7d8ab76623ff799a046d2b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed4f2774a2dff27e0b7fed373118a800e571cd9b7d8ab76623ff799a046d2b63->leave($__internal_ed4f2774a2dff27e0b7fed373118a800e571cd9b7d8ab76623ff799a046d2b63_prof);

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
