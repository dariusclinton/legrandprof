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
        $__internal_cbf99d6e89635be99fe791b83e7bfa4319848d669aaec3dddef0d9d1355ec2ae = $this->env->getExtension("native_profiler");
        $__internal_cbf99d6e89635be99fe791b83e7bfa4319848d669aaec3dddef0d9d1355ec2ae->enter($__internal_cbf99d6e89635be99fe791b83e7bfa4319848d669aaec3dddef0d9d1355ec2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf99d6e89635be99fe791b83e7bfa4319848d669aaec3dddef0d9d1355ec2ae->leave($__internal_cbf99d6e89635be99fe791b83e7bfa4319848d669aaec3dddef0d9d1355ec2ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6c1649a22e5970b4c23a6f4a2054961abbd75f3a8eada7f51e4dfc541defc6ab = $this->env->getExtension("native_profiler");
        $__internal_6c1649a22e5970b4c23a6f4a2054961abbd75f3a8eada7f51e4dfc541defc6ab->enter($__internal_6c1649a22e5970b4c23a6f4a2054961abbd75f3a8eada7f51e4dfc541defc6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6c1649a22e5970b4c23a6f4a2054961abbd75f3a8eada7f51e4dfc541defc6ab->leave($__internal_6c1649a22e5970b4c23a6f4a2054961abbd75f3a8eada7f51e4dfc541defc6ab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_831b0594c807149da9e6b5bb870118fdaaacc4ff82398940bb35ffc53aafbd16 = $this->env->getExtension("native_profiler");
        $__internal_831b0594c807149da9e6b5bb870118fdaaacc4ff82398940bb35ffc53aafbd16->enter($__internal_831b0594c807149da9e6b5bb870118fdaaacc4ff82398940bb35ffc53aafbd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_831b0594c807149da9e6b5bb870118fdaaacc4ff82398940bb35ffc53aafbd16->leave($__internal_831b0594c807149da9e6b5bb870118fdaaacc4ff82398940bb35ffc53aafbd16_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31eee752e6d8fea4c343a9dd6afc2193dfc0984af4437ea5f07940c6046463bb = $this->env->getExtension("native_profiler");
        $__internal_31eee752e6d8fea4c343a9dd6afc2193dfc0984af4437ea5f07940c6046463bb->enter($__internal_31eee752e6d8fea4c343a9dd6afc2193dfc0984af4437ea5f07940c6046463bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_31eee752e6d8fea4c343a9dd6afc2193dfc0984af4437ea5f07940c6046463bb->leave($__internal_31eee752e6d8fea4c343a9dd6afc2193dfc0984af4437ea5f07940c6046463bb_prof);

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
