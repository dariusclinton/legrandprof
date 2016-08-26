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
        $__internal_5bd3c3380aac7ad1ceb8b239f8d3aab3e1e99cc050670436d2fadb20f25f67a9 = $this->env->getExtension("native_profiler");
        $__internal_5bd3c3380aac7ad1ceb8b239f8d3aab3e1e99cc050670436d2fadb20f25f67a9->enter($__internal_5bd3c3380aac7ad1ceb8b239f8d3aab3e1e99cc050670436d2fadb20f25f67a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd3c3380aac7ad1ceb8b239f8d3aab3e1e99cc050670436d2fadb20f25f67a9->leave($__internal_5bd3c3380aac7ad1ceb8b239f8d3aab3e1e99cc050670436d2fadb20f25f67a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_44c9e2df48dc0b7f6c5be72d67a961710793612b2fc4146d47640e9e23050153 = $this->env->getExtension("native_profiler");
        $__internal_44c9e2df48dc0b7f6c5be72d67a961710793612b2fc4146d47640e9e23050153->enter($__internal_44c9e2df48dc0b7f6c5be72d67a961710793612b2fc4146d47640e9e23050153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_44c9e2df48dc0b7f6c5be72d67a961710793612b2fc4146d47640e9e23050153->leave($__internal_44c9e2df48dc0b7f6c5be72d67a961710793612b2fc4146d47640e9e23050153_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd45ade5814adb742668eeb7db29437b49500abcfdc84e45b8e4139569836529 = $this->env->getExtension("native_profiler");
        $__internal_dd45ade5814adb742668eeb7db29437b49500abcfdc84e45b8e4139569836529->enter($__internal_dd45ade5814adb742668eeb7db29437b49500abcfdc84e45b8e4139569836529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dd45ade5814adb742668eeb7db29437b49500abcfdc84e45b8e4139569836529->leave($__internal_dd45ade5814adb742668eeb7db29437b49500abcfdc84e45b8e4139569836529_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4a5188d57f60a62e01d19f269598a8e8e29a4fd8c6f3cb18dec83b6a2abe418 = $this->env->getExtension("native_profiler");
        $__internal_d4a5188d57f60a62e01d19f269598a8e8e29a4fd8c6f3cb18dec83b6a2abe418->enter($__internal_d4a5188d57f60a62e01d19f269598a8e8e29a4fd8c6f3cb18dec83b6a2abe418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d4a5188d57f60a62e01d19f269598a8e8e29a4fd8c6f3cb18dec83b6a2abe418->leave($__internal_d4a5188d57f60a62e01d19f269598a8e8e29a4fd8c6f3cb18dec83b6a2abe418_prof);

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
