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
        $__internal_1eb6e1ee10c453529c4186a2e383bbb84f5ff9937b1004192c4f9a9feaf2cb16 = $this->env->getExtension("native_profiler");
        $__internal_1eb6e1ee10c453529c4186a2e383bbb84f5ff9937b1004192c4f9a9feaf2cb16->enter($__internal_1eb6e1ee10c453529c4186a2e383bbb84f5ff9937b1004192c4f9a9feaf2cb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eb6e1ee10c453529c4186a2e383bbb84f5ff9937b1004192c4f9a9feaf2cb16->leave($__internal_1eb6e1ee10c453529c4186a2e383bbb84f5ff9937b1004192c4f9a9feaf2cb16_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b6e5017d870c048a791c2e8405665ae7dcf07f80c14fde4311063d9628db2145 = $this->env->getExtension("native_profiler");
        $__internal_b6e5017d870c048a791c2e8405665ae7dcf07f80c14fde4311063d9628db2145->enter($__internal_b6e5017d870c048a791c2e8405665ae7dcf07f80c14fde4311063d9628db2145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b6e5017d870c048a791c2e8405665ae7dcf07f80c14fde4311063d9628db2145->leave($__internal_b6e5017d870c048a791c2e8405665ae7dcf07f80c14fde4311063d9628db2145_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81230db2da8fb82e1222c7d597c64b07ac3d96bea225fc9c6c28d943366d47a8 = $this->env->getExtension("native_profiler");
        $__internal_81230db2da8fb82e1222c7d597c64b07ac3d96bea225fc9c6c28d943366d47a8->enter($__internal_81230db2da8fb82e1222c7d597c64b07ac3d96bea225fc9c6c28d943366d47a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_81230db2da8fb82e1222c7d597c64b07ac3d96bea225fc9c6c28d943366d47a8->leave($__internal_81230db2da8fb82e1222c7d597c64b07ac3d96bea225fc9c6c28d943366d47a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b2601a73cf08ab417f32d32a0b67415527f9a5d11ca006722cca6192387876b = $this->env->getExtension("native_profiler");
        $__internal_4b2601a73cf08ab417f32d32a0b67415527f9a5d11ca006722cca6192387876b->enter($__internal_4b2601a73cf08ab417f32d32a0b67415527f9a5d11ca006722cca6192387876b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4b2601a73cf08ab417f32d32a0b67415527f9a5d11ca006722cca6192387876b->leave($__internal_4b2601a73cf08ab417f32d32a0b67415527f9a5d11ca006722cca6192387876b_prof);

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
