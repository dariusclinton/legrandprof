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
        $__internal_744a835a5f926409892ca993592bd5dc30f6622d5d36a5c79d24651cadba9f1e = $this->env->getExtension("native_profiler");
        $__internal_744a835a5f926409892ca993592bd5dc30f6622d5d36a5c79d24651cadba9f1e->enter($__internal_744a835a5f926409892ca993592bd5dc30f6622d5d36a5c79d24651cadba9f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_744a835a5f926409892ca993592bd5dc30f6622d5d36a5c79d24651cadba9f1e->leave($__internal_744a835a5f926409892ca993592bd5dc30f6622d5d36a5c79d24651cadba9f1e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd764f379928fb65316e31b3e86d2000b01154f63cf3b85deb00dfa2093dc77d = $this->env->getExtension("native_profiler");
        $__internal_bd764f379928fb65316e31b3e86d2000b01154f63cf3b85deb00dfa2093dc77d->enter($__internal_bd764f379928fb65316e31b3e86d2000b01154f63cf3b85deb00dfa2093dc77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bd764f379928fb65316e31b3e86d2000b01154f63cf3b85deb00dfa2093dc77d->leave($__internal_bd764f379928fb65316e31b3e86d2000b01154f63cf3b85deb00dfa2093dc77d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ec51fb9a32ed282c6da8be7255cc5a9348261e6955351c05878e8581a2e50e7 = $this->env->getExtension("native_profiler");
        $__internal_5ec51fb9a32ed282c6da8be7255cc5a9348261e6955351c05878e8581a2e50e7->enter($__internal_5ec51fb9a32ed282c6da8be7255cc5a9348261e6955351c05878e8581a2e50e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ec51fb9a32ed282c6da8be7255cc5a9348261e6955351c05878e8581a2e50e7->leave($__internal_5ec51fb9a32ed282c6da8be7255cc5a9348261e6955351c05878e8581a2e50e7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8cb242cd863189715f71a05415586e561814e38966661e0377e56af3aa864ce4 = $this->env->getExtension("native_profiler");
        $__internal_8cb242cd863189715f71a05415586e561814e38966661e0377e56af3aa864ce4->enter($__internal_8cb242cd863189715f71a05415586e561814e38966661e0377e56af3aa864ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8cb242cd863189715f71a05415586e561814e38966661e0377e56af3aa864ce4->leave($__internal_8cb242cd863189715f71a05415586e561814e38966661e0377e56af3aa864ce4_prof);

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
