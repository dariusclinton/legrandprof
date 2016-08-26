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
        $__internal_85cd37332e2c4dc7e6c4ed35d8953d3fb9265ad91dca8cd7efaadbd3a2023022 = $this->env->getExtension("native_profiler");
        $__internal_85cd37332e2c4dc7e6c4ed35d8953d3fb9265ad91dca8cd7efaadbd3a2023022->enter($__internal_85cd37332e2c4dc7e6c4ed35d8953d3fb9265ad91dca8cd7efaadbd3a2023022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85cd37332e2c4dc7e6c4ed35d8953d3fb9265ad91dca8cd7efaadbd3a2023022->leave($__internal_85cd37332e2c4dc7e6c4ed35d8953d3fb9265ad91dca8cd7efaadbd3a2023022_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_274dbb525e6b972d3aa58f0c45f01c0ad803538274f947b339ae55a0e7e2201c = $this->env->getExtension("native_profiler");
        $__internal_274dbb525e6b972d3aa58f0c45f01c0ad803538274f947b339ae55a0e7e2201c->enter($__internal_274dbb525e6b972d3aa58f0c45f01c0ad803538274f947b339ae55a0e7e2201c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_274dbb525e6b972d3aa58f0c45f01c0ad803538274f947b339ae55a0e7e2201c->leave($__internal_274dbb525e6b972d3aa58f0c45f01c0ad803538274f947b339ae55a0e7e2201c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05a60d02a1d0293fa5654ff09cef91d4fff072be33328cdbd648882afac736aa = $this->env->getExtension("native_profiler");
        $__internal_05a60d02a1d0293fa5654ff09cef91d4fff072be33328cdbd648882afac736aa->enter($__internal_05a60d02a1d0293fa5654ff09cef91d4fff072be33328cdbd648882afac736aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_05a60d02a1d0293fa5654ff09cef91d4fff072be33328cdbd648882afac736aa->leave($__internal_05a60d02a1d0293fa5654ff09cef91d4fff072be33328cdbd648882afac736aa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cbce6a09f323b6bc2797b31cd023a2c33feb4778b28d4d4f2abdd10608dc1db = $this->env->getExtension("native_profiler");
        $__internal_9cbce6a09f323b6bc2797b31cd023a2c33feb4778b28d4d4f2abdd10608dc1db->enter($__internal_9cbce6a09f323b6bc2797b31cd023a2c33feb4778b28d4d4f2abdd10608dc1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9cbce6a09f323b6bc2797b31cd023a2c33feb4778b28d4d4f2abdd10608dc1db->leave($__internal_9cbce6a09f323b6bc2797b31cd023a2c33feb4778b28d4d4f2abdd10608dc1db_prof);

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
