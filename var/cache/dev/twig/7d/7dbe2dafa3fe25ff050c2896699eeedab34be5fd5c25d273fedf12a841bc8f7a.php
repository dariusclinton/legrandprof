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
        $__internal_8d0ce724f1f4f6cf38061349e1b17eba04721a2160f83b5f5af4ca4269c71206 = $this->env->getExtension("native_profiler");
        $__internal_8d0ce724f1f4f6cf38061349e1b17eba04721a2160f83b5f5af4ca4269c71206->enter($__internal_8d0ce724f1f4f6cf38061349e1b17eba04721a2160f83b5f5af4ca4269c71206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d0ce724f1f4f6cf38061349e1b17eba04721a2160f83b5f5af4ca4269c71206->leave($__internal_8d0ce724f1f4f6cf38061349e1b17eba04721a2160f83b5f5af4ca4269c71206_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7eb98aef35e9934a5bb28fc9288683aac0fa41cf9a167905cec54fd0df9412b4 = $this->env->getExtension("native_profiler");
        $__internal_7eb98aef35e9934a5bb28fc9288683aac0fa41cf9a167905cec54fd0df9412b4->enter($__internal_7eb98aef35e9934a5bb28fc9288683aac0fa41cf9a167905cec54fd0df9412b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7eb98aef35e9934a5bb28fc9288683aac0fa41cf9a167905cec54fd0df9412b4->leave($__internal_7eb98aef35e9934a5bb28fc9288683aac0fa41cf9a167905cec54fd0df9412b4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_faf45479113ea9374ae58158639a0f9cb49251fad977b567023f1bfad3d686cf = $this->env->getExtension("native_profiler");
        $__internal_faf45479113ea9374ae58158639a0f9cb49251fad977b567023f1bfad3d686cf->enter($__internal_faf45479113ea9374ae58158639a0f9cb49251fad977b567023f1bfad3d686cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_faf45479113ea9374ae58158639a0f9cb49251fad977b567023f1bfad3d686cf->leave($__internal_faf45479113ea9374ae58158639a0f9cb49251fad977b567023f1bfad3d686cf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f66a17f2a1ea920987c71cb7a200b6e4130c4e9486b837b9fa2ff5a61f6d2c7 = $this->env->getExtension("native_profiler");
        $__internal_6f66a17f2a1ea920987c71cb7a200b6e4130c4e9486b837b9fa2ff5a61f6d2c7->enter($__internal_6f66a17f2a1ea920987c71cb7a200b6e4130c4e9486b837b9fa2ff5a61f6d2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f66a17f2a1ea920987c71cb7a200b6e4130c4e9486b837b9fa2ff5a61f6d2c7->leave($__internal_6f66a17f2a1ea920987c71cb7a200b6e4130c4e9486b837b9fa2ff5a61f6d2c7_prof);

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
