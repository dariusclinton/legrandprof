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
        $__internal_b146b09b1b43af0e9891d4a0e4109be5624ff13f12c7ef07eefbc20767c322dc = $this->env->getExtension("native_profiler");
        $__internal_b146b09b1b43af0e9891d4a0e4109be5624ff13f12c7ef07eefbc20767c322dc->enter($__internal_b146b09b1b43af0e9891d4a0e4109be5624ff13f12c7ef07eefbc20767c322dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b146b09b1b43af0e9891d4a0e4109be5624ff13f12c7ef07eefbc20767c322dc->leave($__internal_b146b09b1b43af0e9891d4a0e4109be5624ff13f12c7ef07eefbc20767c322dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04b207f9d5510e0ba79f191ba515cbe7431bc0ff3f78faf99b13754572e31f7a = $this->env->getExtension("native_profiler");
        $__internal_04b207f9d5510e0ba79f191ba515cbe7431bc0ff3f78faf99b13754572e31f7a->enter($__internal_04b207f9d5510e0ba79f191ba515cbe7431bc0ff3f78faf99b13754572e31f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04b207f9d5510e0ba79f191ba515cbe7431bc0ff3f78faf99b13754572e31f7a->leave($__internal_04b207f9d5510e0ba79f191ba515cbe7431bc0ff3f78faf99b13754572e31f7a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b0ad5c85f79ade2512c8f7902f117f2ee4f3c8b1c83b61d03e3cf53ca003b54 = $this->env->getExtension("native_profiler");
        $__internal_2b0ad5c85f79ade2512c8f7902f117f2ee4f3c8b1c83b61d03e3cf53ca003b54->enter($__internal_2b0ad5c85f79ade2512c8f7902f117f2ee4f3c8b1c83b61d03e3cf53ca003b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b0ad5c85f79ade2512c8f7902f117f2ee4f3c8b1c83b61d03e3cf53ca003b54->leave($__internal_2b0ad5c85f79ade2512c8f7902f117f2ee4f3c8b1c83b61d03e3cf53ca003b54_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c10e19db97a7d647c45f43bac505e121c9fd1fbbe2f6c8346b6ae104a70971b = $this->env->getExtension("native_profiler");
        $__internal_3c10e19db97a7d647c45f43bac505e121c9fd1fbbe2f6c8346b6ae104a70971b->enter($__internal_3c10e19db97a7d647c45f43bac505e121c9fd1fbbe2f6c8346b6ae104a70971b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3c10e19db97a7d647c45f43bac505e121c9fd1fbbe2f6c8346b6ae104a70971b->leave($__internal_3c10e19db97a7d647c45f43bac505e121c9fd1fbbe2f6c8346b6ae104a70971b_prof);

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
