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
        $__internal_96d7ea03add490fb9a6cbcb6e65e1469c47b7f03cb193bd09f5bb11766d6e95f = $this->env->getExtension("native_profiler");
        $__internal_96d7ea03add490fb9a6cbcb6e65e1469c47b7f03cb193bd09f5bb11766d6e95f->enter($__internal_96d7ea03add490fb9a6cbcb6e65e1469c47b7f03cb193bd09f5bb11766d6e95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96d7ea03add490fb9a6cbcb6e65e1469c47b7f03cb193bd09f5bb11766d6e95f->leave($__internal_96d7ea03add490fb9a6cbcb6e65e1469c47b7f03cb193bd09f5bb11766d6e95f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4967ebe368d5345d448884a059ee4a21361b519ae0d793c59bf8ad7d4b95a57b = $this->env->getExtension("native_profiler");
        $__internal_4967ebe368d5345d448884a059ee4a21361b519ae0d793c59bf8ad7d4b95a57b->enter($__internal_4967ebe368d5345d448884a059ee4a21361b519ae0d793c59bf8ad7d4b95a57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4967ebe368d5345d448884a059ee4a21361b519ae0d793c59bf8ad7d4b95a57b->leave($__internal_4967ebe368d5345d448884a059ee4a21361b519ae0d793c59bf8ad7d4b95a57b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef0c244756f833138deb13132697901835b23ac7509da49865fed9acbe717047 = $this->env->getExtension("native_profiler");
        $__internal_ef0c244756f833138deb13132697901835b23ac7509da49865fed9acbe717047->enter($__internal_ef0c244756f833138deb13132697901835b23ac7509da49865fed9acbe717047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef0c244756f833138deb13132697901835b23ac7509da49865fed9acbe717047->leave($__internal_ef0c244756f833138deb13132697901835b23ac7509da49865fed9acbe717047_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9978b5fe94791c11770cb5eca20371716448bb2151269d629b3dfcaba5a02942 = $this->env->getExtension("native_profiler");
        $__internal_9978b5fe94791c11770cb5eca20371716448bb2151269d629b3dfcaba5a02942->enter($__internal_9978b5fe94791c11770cb5eca20371716448bb2151269d629b3dfcaba5a02942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9978b5fe94791c11770cb5eca20371716448bb2151269d629b3dfcaba5a02942->leave($__internal_9978b5fe94791c11770cb5eca20371716448bb2151269d629b3dfcaba5a02942_prof);

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
