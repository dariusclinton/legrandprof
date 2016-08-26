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
        $__internal_6d434a0f3aafe21a713208c25007ef6df69afa0893a66417fbbc2cbdeb99340c = $this->env->getExtension("native_profiler");
        $__internal_6d434a0f3aafe21a713208c25007ef6df69afa0893a66417fbbc2cbdeb99340c->enter($__internal_6d434a0f3aafe21a713208c25007ef6df69afa0893a66417fbbc2cbdeb99340c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d434a0f3aafe21a713208c25007ef6df69afa0893a66417fbbc2cbdeb99340c->leave($__internal_6d434a0f3aafe21a713208c25007ef6df69afa0893a66417fbbc2cbdeb99340c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f983fca1a1ba544f2179a0ba4d5a629ec70acd082a40ac0d76d2c9a88d95a261 = $this->env->getExtension("native_profiler");
        $__internal_f983fca1a1ba544f2179a0ba4d5a629ec70acd082a40ac0d76d2c9a88d95a261->enter($__internal_f983fca1a1ba544f2179a0ba4d5a629ec70acd082a40ac0d76d2c9a88d95a261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f983fca1a1ba544f2179a0ba4d5a629ec70acd082a40ac0d76d2c9a88d95a261->leave($__internal_f983fca1a1ba544f2179a0ba4d5a629ec70acd082a40ac0d76d2c9a88d95a261_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b2075fe32f845ebfff0d0c5dac0025fdbfd9dbfe419ee6a6210511ed5c96e05 = $this->env->getExtension("native_profiler");
        $__internal_5b2075fe32f845ebfff0d0c5dac0025fdbfd9dbfe419ee6a6210511ed5c96e05->enter($__internal_5b2075fe32f845ebfff0d0c5dac0025fdbfd9dbfe419ee6a6210511ed5c96e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b2075fe32f845ebfff0d0c5dac0025fdbfd9dbfe419ee6a6210511ed5c96e05->leave($__internal_5b2075fe32f845ebfff0d0c5dac0025fdbfd9dbfe419ee6a6210511ed5c96e05_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_623177a103d614ee3e19b5beaadc80aa1fb6379773b37c19825bc161090e0cd0 = $this->env->getExtension("native_profiler");
        $__internal_623177a103d614ee3e19b5beaadc80aa1fb6379773b37c19825bc161090e0cd0->enter($__internal_623177a103d614ee3e19b5beaadc80aa1fb6379773b37c19825bc161090e0cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_623177a103d614ee3e19b5beaadc80aa1fb6379773b37c19825bc161090e0cd0->leave($__internal_623177a103d614ee3e19b5beaadc80aa1fb6379773b37c19825bc161090e0cd0_prof);

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
