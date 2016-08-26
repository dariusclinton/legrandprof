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
        $__internal_40f8dcddbcb1f47a4122fa95b8e564810d86d99b2287403c435eb0b5ba955112 = $this->env->getExtension("native_profiler");
        $__internal_40f8dcddbcb1f47a4122fa95b8e564810d86d99b2287403c435eb0b5ba955112->enter($__internal_40f8dcddbcb1f47a4122fa95b8e564810d86d99b2287403c435eb0b5ba955112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40f8dcddbcb1f47a4122fa95b8e564810d86d99b2287403c435eb0b5ba955112->leave($__internal_40f8dcddbcb1f47a4122fa95b8e564810d86d99b2287403c435eb0b5ba955112_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9e2a2cd460a5961e7fd7a25df93723d4b451e80bed9f2bc06081aa378bf5a46d = $this->env->getExtension("native_profiler");
        $__internal_9e2a2cd460a5961e7fd7a25df93723d4b451e80bed9f2bc06081aa378bf5a46d->enter($__internal_9e2a2cd460a5961e7fd7a25df93723d4b451e80bed9f2bc06081aa378bf5a46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9e2a2cd460a5961e7fd7a25df93723d4b451e80bed9f2bc06081aa378bf5a46d->leave($__internal_9e2a2cd460a5961e7fd7a25df93723d4b451e80bed9f2bc06081aa378bf5a46d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b128f463abc4ae826a57604ea795fedffc2a192ae5e680a7459caed2c3746c0b = $this->env->getExtension("native_profiler");
        $__internal_b128f463abc4ae826a57604ea795fedffc2a192ae5e680a7459caed2c3746c0b->enter($__internal_b128f463abc4ae826a57604ea795fedffc2a192ae5e680a7459caed2c3746c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b128f463abc4ae826a57604ea795fedffc2a192ae5e680a7459caed2c3746c0b->leave($__internal_b128f463abc4ae826a57604ea795fedffc2a192ae5e680a7459caed2c3746c0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0028db0f718259ee8be31154ffbec3ea47314b4f024213b734321ea55bef7e97 = $this->env->getExtension("native_profiler");
        $__internal_0028db0f718259ee8be31154ffbec3ea47314b4f024213b734321ea55bef7e97->enter($__internal_0028db0f718259ee8be31154ffbec3ea47314b4f024213b734321ea55bef7e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0028db0f718259ee8be31154ffbec3ea47314b4f024213b734321ea55bef7e97->leave($__internal_0028db0f718259ee8be31154ffbec3ea47314b4f024213b734321ea55bef7e97_prof);

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
