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
        $__internal_5a6f57cae60e49ebbb784b713733487bf20c9cce94cf476c03796d9aa4a24823 = $this->env->getExtension("native_profiler");
        $__internal_5a6f57cae60e49ebbb784b713733487bf20c9cce94cf476c03796d9aa4a24823->enter($__internal_5a6f57cae60e49ebbb784b713733487bf20c9cce94cf476c03796d9aa4a24823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a6f57cae60e49ebbb784b713733487bf20c9cce94cf476c03796d9aa4a24823->leave($__internal_5a6f57cae60e49ebbb784b713733487bf20c9cce94cf476c03796d9aa4a24823_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_20dc2b33b0e1819c0e2c7c45070847cb2e35a1cc60857bb8ea7418f124b92c34 = $this->env->getExtension("native_profiler");
        $__internal_20dc2b33b0e1819c0e2c7c45070847cb2e35a1cc60857bb8ea7418f124b92c34->enter($__internal_20dc2b33b0e1819c0e2c7c45070847cb2e35a1cc60857bb8ea7418f124b92c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_20dc2b33b0e1819c0e2c7c45070847cb2e35a1cc60857bb8ea7418f124b92c34->leave($__internal_20dc2b33b0e1819c0e2c7c45070847cb2e35a1cc60857bb8ea7418f124b92c34_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ec29694c95b6f2517f72f5925d37190729e13d903704a393f017c57878be01f = $this->env->getExtension("native_profiler");
        $__internal_9ec29694c95b6f2517f72f5925d37190729e13d903704a393f017c57878be01f->enter($__internal_9ec29694c95b6f2517f72f5925d37190729e13d903704a393f017c57878be01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ec29694c95b6f2517f72f5925d37190729e13d903704a393f017c57878be01f->leave($__internal_9ec29694c95b6f2517f72f5925d37190729e13d903704a393f017c57878be01f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea8f794ecb05a46bcf18b77b8525043b4c15eb066bfe6189afd609b9c8170d6e = $this->env->getExtension("native_profiler");
        $__internal_ea8f794ecb05a46bcf18b77b8525043b4c15eb066bfe6189afd609b9c8170d6e->enter($__internal_ea8f794ecb05a46bcf18b77b8525043b4c15eb066bfe6189afd609b9c8170d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ea8f794ecb05a46bcf18b77b8525043b4c15eb066bfe6189afd609b9c8170d6e->leave($__internal_ea8f794ecb05a46bcf18b77b8525043b4c15eb066bfe6189afd609b9c8170d6e_prof);

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
