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
        $__internal_bc12eb668060b56cbb0b41c6ce7b3a2cedd6254826e93dce1b43c97d045695d4 = $this->env->getExtension("native_profiler");
        $__internal_bc12eb668060b56cbb0b41c6ce7b3a2cedd6254826e93dce1b43c97d045695d4->enter($__internal_bc12eb668060b56cbb0b41c6ce7b3a2cedd6254826e93dce1b43c97d045695d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc12eb668060b56cbb0b41c6ce7b3a2cedd6254826e93dce1b43c97d045695d4->leave($__internal_bc12eb668060b56cbb0b41c6ce7b3a2cedd6254826e93dce1b43c97d045695d4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e5d34d606ddbee56563941efd649b6ca4aefb242ce08eaaaf1ebf3e7a73b410 = $this->env->getExtension("native_profiler");
        $__internal_4e5d34d606ddbee56563941efd649b6ca4aefb242ce08eaaaf1ebf3e7a73b410->enter($__internal_4e5d34d606ddbee56563941efd649b6ca4aefb242ce08eaaaf1ebf3e7a73b410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e5d34d606ddbee56563941efd649b6ca4aefb242ce08eaaaf1ebf3e7a73b410->leave($__internal_4e5d34d606ddbee56563941efd649b6ca4aefb242ce08eaaaf1ebf3e7a73b410_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7be5d08045d6b9d4336543014f84f754407fe958d136d112cc1e8a2a08693e64 = $this->env->getExtension("native_profiler");
        $__internal_7be5d08045d6b9d4336543014f84f754407fe958d136d112cc1e8a2a08693e64->enter($__internal_7be5d08045d6b9d4336543014f84f754407fe958d136d112cc1e8a2a08693e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7be5d08045d6b9d4336543014f84f754407fe958d136d112cc1e8a2a08693e64->leave($__internal_7be5d08045d6b9d4336543014f84f754407fe958d136d112cc1e8a2a08693e64_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ac486cdf590d7bab1f6fa75817c5a24a3d4acaa9c04ca8855b2b395b5716068 = $this->env->getExtension("native_profiler");
        $__internal_5ac486cdf590d7bab1f6fa75817c5a24a3d4acaa9c04ca8855b2b395b5716068->enter($__internal_5ac486cdf590d7bab1f6fa75817c5a24a3d4acaa9c04ca8855b2b395b5716068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5ac486cdf590d7bab1f6fa75817c5a24a3d4acaa9c04ca8855b2b395b5716068->leave($__internal_5ac486cdf590d7bab1f6fa75817c5a24a3d4acaa9c04ca8855b2b395b5716068_prof);

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
