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
        $__internal_fb0ac86621ce358d1a342c1a3a520c946b9bb26260ac8bbbaf7c87dcdb4e7782 = $this->env->getExtension("native_profiler");
        $__internal_fb0ac86621ce358d1a342c1a3a520c946b9bb26260ac8bbbaf7c87dcdb4e7782->enter($__internal_fb0ac86621ce358d1a342c1a3a520c946b9bb26260ac8bbbaf7c87dcdb4e7782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb0ac86621ce358d1a342c1a3a520c946b9bb26260ac8bbbaf7c87dcdb4e7782->leave($__internal_fb0ac86621ce358d1a342c1a3a520c946b9bb26260ac8bbbaf7c87dcdb4e7782_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c32a0c7cc1d433fb9e23fa73541425b220ea34f0de097c95b74d4dbde80264ee = $this->env->getExtension("native_profiler");
        $__internal_c32a0c7cc1d433fb9e23fa73541425b220ea34f0de097c95b74d4dbde80264ee->enter($__internal_c32a0c7cc1d433fb9e23fa73541425b220ea34f0de097c95b74d4dbde80264ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c32a0c7cc1d433fb9e23fa73541425b220ea34f0de097c95b74d4dbde80264ee->leave($__internal_c32a0c7cc1d433fb9e23fa73541425b220ea34f0de097c95b74d4dbde80264ee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7f5f12ebe49c9494c961b49fac82669eaa050365ceec81df29c79fa3833ff32 = $this->env->getExtension("native_profiler");
        $__internal_e7f5f12ebe49c9494c961b49fac82669eaa050365ceec81df29c79fa3833ff32->enter($__internal_e7f5f12ebe49c9494c961b49fac82669eaa050365ceec81df29c79fa3833ff32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e7f5f12ebe49c9494c961b49fac82669eaa050365ceec81df29c79fa3833ff32->leave($__internal_e7f5f12ebe49c9494c961b49fac82669eaa050365ceec81df29c79fa3833ff32_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_480d9718fd8d6ccb9d5bf49c5ff5115bc2ceefea5e55ffda9504b98b39deca29 = $this->env->getExtension("native_profiler");
        $__internal_480d9718fd8d6ccb9d5bf49c5ff5115bc2ceefea5e55ffda9504b98b39deca29->enter($__internal_480d9718fd8d6ccb9d5bf49c5ff5115bc2ceefea5e55ffda9504b98b39deca29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_480d9718fd8d6ccb9d5bf49c5ff5115bc2ceefea5e55ffda9504b98b39deca29->leave($__internal_480d9718fd8d6ccb9d5bf49c5ff5115bc2ceefea5e55ffda9504b98b39deca29_prof);

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
