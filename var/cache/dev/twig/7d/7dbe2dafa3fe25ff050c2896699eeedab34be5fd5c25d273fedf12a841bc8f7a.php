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
        $__internal_d2a0cfdbeab900a84c3a6c997328ea0f871766ef86ea6b0b6c3ece4819e62586 = $this->env->getExtension("native_profiler");
        $__internal_d2a0cfdbeab900a84c3a6c997328ea0f871766ef86ea6b0b6c3ece4819e62586->enter($__internal_d2a0cfdbeab900a84c3a6c997328ea0f871766ef86ea6b0b6c3ece4819e62586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2a0cfdbeab900a84c3a6c997328ea0f871766ef86ea6b0b6c3ece4819e62586->leave($__internal_d2a0cfdbeab900a84c3a6c997328ea0f871766ef86ea6b0b6c3ece4819e62586_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_521fac5ccba2cce237af861e6064bbdedaa0e7a49c4638944e4f41060fcc8877 = $this->env->getExtension("native_profiler");
        $__internal_521fac5ccba2cce237af861e6064bbdedaa0e7a49c4638944e4f41060fcc8877->enter($__internal_521fac5ccba2cce237af861e6064bbdedaa0e7a49c4638944e4f41060fcc8877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_521fac5ccba2cce237af861e6064bbdedaa0e7a49c4638944e4f41060fcc8877->leave($__internal_521fac5ccba2cce237af861e6064bbdedaa0e7a49c4638944e4f41060fcc8877_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_726246bfb1076d0a50927b92ce5e5c7269d6fd5166660e82686e3147184bed57 = $this->env->getExtension("native_profiler");
        $__internal_726246bfb1076d0a50927b92ce5e5c7269d6fd5166660e82686e3147184bed57->enter($__internal_726246bfb1076d0a50927b92ce5e5c7269d6fd5166660e82686e3147184bed57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_726246bfb1076d0a50927b92ce5e5c7269d6fd5166660e82686e3147184bed57->leave($__internal_726246bfb1076d0a50927b92ce5e5c7269d6fd5166660e82686e3147184bed57_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db70de5eec10b7dded5c43efac1bc4ad7a2d8cf052e841ffc02c34eda02bb744 = $this->env->getExtension("native_profiler");
        $__internal_db70de5eec10b7dded5c43efac1bc4ad7a2d8cf052e841ffc02c34eda02bb744->enter($__internal_db70de5eec10b7dded5c43efac1bc4ad7a2d8cf052e841ffc02c34eda02bb744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db70de5eec10b7dded5c43efac1bc4ad7a2d8cf052e841ffc02c34eda02bb744->leave($__internal_db70de5eec10b7dded5c43efac1bc4ad7a2d8cf052e841ffc02c34eda02bb744_prof);

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
