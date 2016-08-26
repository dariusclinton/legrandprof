<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_dafc26c5342b879f08b03c1a2b61d5789976de4b27dcbd5a24b235428589c573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b54ea059734cd226b6bf264d901f06cbc0201bec46f50f5576ab05936e58dfd6 = $this->env->getExtension("native_profiler");
        $__internal_b54ea059734cd226b6bf264d901f06cbc0201bec46f50f5576ab05936e58dfd6->enter($__internal_b54ea059734cd226b6bf264d901f06cbc0201bec46f50f5576ab05936e58dfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b54ea059734cd226b6bf264d901f06cbc0201bec46f50f5576ab05936e58dfd6->leave($__internal_b54ea059734cd226b6bf264d901f06cbc0201bec46f50f5576ab05936e58dfd6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_32857983318871c6d8688e3b4726a598eb78472c7eb0256666250439f403c82d = $this->env->getExtension("native_profiler");
        $__internal_32857983318871c6d8688e3b4726a598eb78472c7eb0256666250439f403c82d->enter($__internal_32857983318871c6d8688e3b4726a598eb78472c7eb0256666250439f403c82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_32857983318871c6d8688e3b4726a598eb78472c7eb0256666250439f403c82d->leave($__internal_32857983318871c6d8688e3b4726a598eb78472c7eb0256666250439f403c82d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b15cc281cbc9d74d9006ce76f1519c89b1917899602f060d1973841c70d8a5f7 = $this->env->getExtension("native_profiler");
        $__internal_b15cc281cbc9d74d9006ce76f1519c89b1917899602f060d1973841c70d8a5f7->enter($__internal_b15cc281cbc9d74d9006ce76f1519c89b1917899602f060d1973841c70d8a5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b15cc281cbc9d74d9006ce76f1519c89b1917899602f060d1973841c70d8a5f7->leave($__internal_b15cc281cbc9d74d9006ce76f1519c89b1917899602f060d1973841c70d8a5f7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_210d79052db142414f4968b946d401296c1be683b9b13e9b5f56d24ec20f414f = $this->env->getExtension("native_profiler");
        $__internal_210d79052db142414f4968b946d401296c1be683b9b13e9b5f56d24ec20f414f->enter($__internal_210d79052db142414f4968b946d401296c1be683b9b13e9b5f56d24ec20f414f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_210d79052db142414f4968b946d401296c1be683b9b13e9b5f56d24ec20f414f->leave($__internal_210d79052db142414f4968b946d401296c1be683b9b13e9b5f56d24ec20f414f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
