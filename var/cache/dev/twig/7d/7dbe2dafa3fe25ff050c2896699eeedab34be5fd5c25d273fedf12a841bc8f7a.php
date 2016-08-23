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
        $__internal_22898974011bfed0f795055b709ad5d93ce09864ee8efcae985882b2735c3590 = $this->env->getExtension("native_profiler");
        $__internal_22898974011bfed0f795055b709ad5d93ce09864ee8efcae985882b2735c3590->enter($__internal_22898974011bfed0f795055b709ad5d93ce09864ee8efcae985882b2735c3590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22898974011bfed0f795055b709ad5d93ce09864ee8efcae985882b2735c3590->leave($__internal_22898974011bfed0f795055b709ad5d93ce09864ee8efcae985882b2735c3590_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6a8705e187a167cba2d82cca7a5499e1e0c1861a6042ffcc1f8a8259f09f49f = $this->env->getExtension("native_profiler");
        $__internal_a6a8705e187a167cba2d82cca7a5499e1e0c1861a6042ffcc1f8a8259f09f49f->enter($__internal_a6a8705e187a167cba2d82cca7a5499e1e0c1861a6042ffcc1f8a8259f09f49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6a8705e187a167cba2d82cca7a5499e1e0c1861a6042ffcc1f8a8259f09f49f->leave($__internal_a6a8705e187a167cba2d82cca7a5499e1e0c1861a6042ffcc1f8a8259f09f49f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df211748b5e0853092e212d6d154f55070c2983d12c763d4a5b7bf8bf0ff2fdc = $this->env->getExtension("native_profiler");
        $__internal_df211748b5e0853092e212d6d154f55070c2983d12c763d4a5b7bf8bf0ff2fdc->enter($__internal_df211748b5e0853092e212d6d154f55070c2983d12c763d4a5b7bf8bf0ff2fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df211748b5e0853092e212d6d154f55070c2983d12c763d4a5b7bf8bf0ff2fdc->leave($__internal_df211748b5e0853092e212d6d154f55070c2983d12c763d4a5b7bf8bf0ff2fdc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5eb7ce52c46a6ec67bb93ef35011589fc3de7ba90b05fd87310dfd13d1c0719 = $this->env->getExtension("native_profiler");
        $__internal_d5eb7ce52c46a6ec67bb93ef35011589fc3de7ba90b05fd87310dfd13d1c0719->enter($__internal_d5eb7ce52c46a6ec67bb93ef35011589fc3de7ba90b05fd87310dfd13d1c0719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d5eb7ce52c46a6ec67bb93ef35011589fc3de7ba90b05fd87310dfd13d1c0719->leave($__internal_d5eb7ce52c46a6ec67bb93ef35011589fc3de7ba90b05fd87310dfd13d1c0719_prof);

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
