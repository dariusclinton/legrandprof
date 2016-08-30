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
        $__internal_070f065dc3e1bb1ec53c40a40bf21b03b5c83962599ceefae6e04d8b1e1c65d0 = $this->env->getExtension("native_profiler");
        $__internal_070f065dc3e1bb1ec53c40a40bf21b03b5c83962599ceefae6e04d8b1e1c65d0->enter($__internal_070f065dc3e1bb1ec53c40a40bf21b03b5c83962599ceefae6e04d8b1e1c65d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_070f065dc3e1bb1ec53c40a40bf21b03b5c83962599ceefae6e04d8b1e1c65d0->leave($__internal_070f065dc3e1bb1ec53c40a40bf21b03b5c83962599ceefae6e04d8b1e1c65d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08d99d270d15f38c33b093bf6628ee04d9bff2411a1a780ba5aa7fa0fc2aa247 = $this->env->getExtension("native_profiler");
        $__internal_08d99d270d15f38c33b093bf6628ee04d9bff2411a1a780ba5aa7fa0fc2aa247->enter($__internal_08d99d270d15f38c33b093bf6628ee04d9bff2411a1a780ba5aa7fa0fc2aa247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_08d99d270d15f38c33b093bf6628ee04d9bff2411a1a780ba5aa7fa0fc2aa247->leave($__internal_08d99d270d15f38c33b093bf6628ee04d9bff2411a1a780ba5aa7fa0fc2aa247_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60790aee30fe088dd0cfd002d44e69cc4562757b66416f09469be8f4c923d66c = $this->env->getExtension("native_profiler");
        $__internal_60790aee30fe088dd0cfd002d44e69cc4562757b66416f09469be8f4c923d66c->enter($__internal_60790aee30fe088dd0cfd002d44e69cc4562757b66416f09469be8f4c923d66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_60790aee30fe088dd0cfd002d44e69cc4562757b66416f09469be8f4c923d66c->leave($__internal_60790aee30fe088dd0cfd002d44e69cc4562757b66416f09469be8f4c923d66c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d588b77a135dc1ff1cecbfef22258e3fc57b85f920ef95548481348b63b1b40a = $this->env->getExtension("native_profiler");
        $__internal_d588b77a135dc1ff1cecbfef22258e3fc57b85f920ef95548481348b63b1b40a->enter($__internal_d588b77a135dc1ff1cecbfef22258e3fc57b85f920ef95548481348b63b1b40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d588b77a135dc1ff1cecbfef22258e3fc57b85f920ef95548481348b63b1b40a->leave($__internal_d588b77a135dc1ff1cecbfef22258e3fc57b85f920ef95548481348b63b1b40a_prof);

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
