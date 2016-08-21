<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_612fe1cd77c47339cbc2a0e68fcda4ab1300b032dd7be1e2c9885af0eaca677b extends Twig_Template
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
        $__internal_6ad525ffdbc2444b99451aa9f0b8f135beb16f70ee7052cd85111573a6bfa03e = $this->env->getExtension("native_profiler");
        $__internal_6ad525ffdbc2444b99451aa9f0b8f135beb16f70ee7052cd85111573a6bfa03e->enter($__internal_6ad525ffdbc2444b99451aa9f0b8f135beb16f70ee7052cd85111573a6bfa03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad525ffdbc2444b99451aa9f0b8f135beb16f70ee7052cd85111573a6bfa03e->leave($__internal_6ad525ffdbc2444b99451aa9f0b8f135beb16f70ee7052cd85111573a6bfa03e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7c0c6ebebdaa2cf4c205e3e793d5cd39e941cc632bebe4ef9f757cb46b785d7f = $this->env->getExtension("native_profiler");
        $__internal_7c0c6ebebdaa2cf4c205e3e793d5cd39e941cc632bebe4ef9f757cb46b785d7f->enter($__internal_7c0c6ebebdaa2cf4c205e3e793d5cd39e941cc632bebe4ef9f757cb46b785d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c0c6ebebdaa2cf4c205e3e793d5cd39e941cc632bebe4ef9f757cb46b785d7f->leave($__internal_7c0c6ebebdaa2cf4c205e3e793d5cd39e941cc632bebe4ef9f757cb46b785d7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7dc5f12418227978a3cc9dce67e527aabb2512efb29bcdac0d2f3ccf3620589a = $this->env->getExtension("native_profiler");
        $__internal_7dc5f12418227978a3cc9dce67e527aabb2512efb29bcdac0d2f3ccf3620589a->enter($__internal_7dc5f12418227978a3cc9dce67e527aabb2512efb29bcdac0d2f3ccf3620589a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7dc5f12418227978a3cc9dce67e527aabb2512efb29bcdac0d2f3ccf3620589a->leave($__internal_7dc5f12418227978a3cc9dce67e527aabb2512efb29bcdac0d2f3ccf3620589a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b544c1a68f3c6942a440658cb49ecf38b27735468a59a74628ab5b66f6f8fa4b = $this->env->getExtension("native_profiler");
        $__internal_b544c1a68f3c6942a440658cb49ecf38b27735468a59a74628ab5b66f6f8fa4b->enter($__internal_b544c1a68f3c6942a440658cb49ecf38b27735468a59a74628ab5b66f6f8fa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b544c1a68f3c6942a440658cb49ecf38b27735468a59a74628ab5b66f6f8fa4b->leave($__internal_b544c1a68f3c6942a440658cb49ecf38b27735468a59a74628ab5b66f6f8fa4b_prof);

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
