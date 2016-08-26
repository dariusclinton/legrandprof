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
        $__internal_99ee4a161d0d28003882c28802d49b6d12ab3662c127cf25716a7c066dc5d6b0 = $this->env->getExtension("native_profiler");
        $__internal_99ee4a161d0d28003882c28802d49b6d12ab3662c127cf25716a7c066dc5d6b0->enter($__internal_99ee4a161d0d28003882c28802d49b6d12ab3662c127cf25716a7c066dc5d6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99ee4a161d0d28003882c28802d49b6d12ab3662c127cf25716a7c066dc5d6b0->leave($__internal_99ee4a161d0d28003882c28802d49b6d12ab3662c127cf25716a7c066dc5d6b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f4b6ec2afdef9d36afe6a1dba16ef1ba323ea8a5a3120c5ee6d157127efe59b = $this->env->getExtension("native_profiler");
        $__internal_5f4b6ec2afdef9d36afe6a1dba16ef1ba323ea8a5a3120c5ee6d157127efe59b->enter($__internal_5f4b6ec2afdef9d36afe6a1dba16ef1ba323ea8a5a3120c5ee6d157127efe59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f4b6ec2afdef9d36afe6a1dba16ef1ba323ea8a5a3120c5ee6d157127efe59b->leave($__internal_5f4b6ec2afdef9d36afe6a1dba16ef1ba323ea8a5a3120c5ee6d157127efe59b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc81c3f5dbb4b9ddfb6d54a6391b4f33670f0beffef897fc2241668fe9075343 = $this->env->getExtension("native_profiler");
        $__internal_bc81c3f5dbb4b9ddfb6d54a6391b4f33670f0beffef897fc2241668fe9075343->enter($__internal_bc81c3f5dbb4b9ddfb6d54a6391b4f33670f0beffef897fc2241668fe9075343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc81c3f5dbb4b9ddfb6d54a6391b4f33670f0beffef897fc2241668fe9075343->leave($__internal_bc81c3f5dbb4b9ddfb6d54a6391b4f33670f0beffef897fc2241668fe9075343_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa91fbd29b11ef89c850de71c56707f3175a0492b7d5aa8be34dd695bd39f8ea = $this->env->getExtension("native_profiler");
        $__internal_fa91fbd29b11ef89c850de71c56707f3175a0492b7d5aa8be34dd695bd39f8ea->enter($__internal_fa91fbd29b11ef89c850de71c56707f3175a0492b7d5aa8be34dd695bd39f8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fa91fbd29b11ef89c850de71c56707f3175a0492b7d5aa8be34dd695bd39f8ea->leave($__internal_fa91fbd29b11ef89c850de71c56707f3175a0492b7d5aa8be34dd695bd39f8ea_prof);

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
