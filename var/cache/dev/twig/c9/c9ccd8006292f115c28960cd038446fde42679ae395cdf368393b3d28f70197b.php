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
        $__internal_3eff054643af249e4022a83acbee1e0ce56e144e1657b30b4e9fa0255fd70698 = $this->env->getExtension("native_profiler");
        $__internal_3eff054643af249e4022a83acbee1e0ce56e144e1657b30b4e9fa0255fd70698->enter($__internal_3eff054643af249e4022a83acbee1e0ce56e144e1657b30b4e9fa0255fd70698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eff054643af249e4022a83acbee1e0ce56e144e1657b30b4e9fa0255fd70698->leave($__internal_3eff054643af249e4022a83acbee1e0ce56e144e1657b30b4e9fa0255fd70698_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8486b3e0d0ff4427e8e0071e88af0fabfd466813a70c758c20c76aab441de8a = $this->env->getExtension("native_profiler");
        $__internal_b8486b3e0d0ff4427e8e0071e88af0fabfd466813a70c758c20c76aab441de8a->enter($__internal_b8486b3e0d0ff4427e8e0071e88af0fabfd466813a70c758c20c76aab441de8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8486b3e0d0ff4427e8e0071e88af0fabfd466813a70c758c20c76aab441de8a->leave($__internal_b8486b3e0d0ff4427e8e0071e88af0fabfd466813a70c758c20c76aab441de8a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ccf05cf2a9352675ecb08a8a299ef66769cc8f30567b7552035c620cd810826c = $this->env->getExtension("native_profiler");
        $__internal_ccf05cf2a9352675ecb08a8a299ef66769cc8f30567b7552035c620cd810826c->enter($__internal_ccf05cf2a9352675ecb08a8a299ef66769cc8f30567b7552035c620cd810826c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ccf05cf2a9352675ecb08a8a299ef66769cc8f30567b7552035c620cd810826c->leave($__internal_ccf05cf2a9352675ecb08a8a299ef66769cc8f30567b7552035c620cd810826c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09c78efc1870fcc363042a68318ae79ffd6103425be7beb6e2b8087c52ffb5df = $this->env->getExtension("native_profiler");
        $__internal_09c78efc1870fcc363042a68318ae79ffd6103425be7beb6e2b8087c52ffb5df->enter($__internal_09c78efc1870fcc363042a68318ae79ffd6103425be7beb6e2b8087c52ffb5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09c78efc1870fcc363042a68318ae79ffd6103425be7beb6e2b8087c52ffb5df->leave($__internal_09c78efc1870fcc363042a68318ae79ffd6103425be7beb6e2b8087c52ffb5df_prof);

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
