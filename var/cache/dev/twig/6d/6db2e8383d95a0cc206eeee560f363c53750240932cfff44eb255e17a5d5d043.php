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
        $__internal_16af6754b65bee05d2b3a20039e7d446a0e70bc392d76b27e0ae7b161e3c66e9 = $this->env->getExtension("native_profiler");
        $__internal_16af6754b65bee05d2b3a20039e7d446a0e70bc392d76b27e0ae7b161e3c66e9->enter($__internal_16af6754b65bee05d2b3a20039e7d446a0e70bc392d76b27e0ae7b161e3c66e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16af6754b65bee05d2b3a20039e7d446a0e70bc392d76b27e0ae7b161e3c66e9->leave($__internal_16af6754b65bee05d2b3a20039e7d446a0e70bc392d76b27e0ae7b161e3c66e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d717504df1ee81866ac237aeb56984295cf8eb6da5fd1fb5ff43f9fa9d05719b = $this->env->getExtension("native_profiler");
        $__internal_d717504df1ee81866ac237aeb56984295cf8eb6da5fd1fb5ff43f9fa9d05719b->enter($__internal_d717504df1ee81866ac237aeb56984295cf8eb6da5fd1fb5ff43f9fa9d05719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d717504df1ee81866ac237aeb56984295cf8eb6da5fd1fb5ff43f9fa9d05719b->leave($__internal_d717504df1ee81866ac237aeb56984295cf8eb6da5fd1fb5ff43f9fa9d05719b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c15b5b1bc7ea75b4cc6d143a0c02552a20b5db5455f9ca095ae42f2a16824025 = $this->env->getExtension("native_profiler");
        $__internal_c15b5b1bc7ea75b4cc6d143a0c02552a20b5db5455f9ca095ae42f2a16824025->enter($__internal_c15b5b1bc7ea75b4cc6d143a0c02552a20b5db5455f9ca095ae42f2a16824025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c15b5b1bc7ea75b4cc6d143a0c02552a20b5db5455f9ca095ae42f2a16824025->leave($__internal_c15b5b1bc7ea75b4cc6d143a0c02552a20b5db5455f9ca095ae42f2a16824025_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ff41e594216c9af2971cef675395f0563ced38b1cd3a0700a39895ca6f4bb5c = $this->env->getExtension("native_profiler");
        $__internal_2ff41e594216c9af2971cef675395f0563ced38b1cd3a0700a39895ca6f4bb5c->enter($__internal_2ff41e594216c9af2971cef675395f0563ced38b1cd3a0700a39895ca6f4bb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ff41e594216c9af2971cef675395f0563ced38b1cd3a0700a39895ca6f4bb5c->leave($__internal_2ff41e594216c9af2971cef675395f0563ced38b1cd3a0700a39895ca6f4bb5c_prof);

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
