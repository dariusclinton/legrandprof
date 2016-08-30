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
        $__internal_6f6c19efd73ba46e2ef2d641b4a3824764bd01250600b7da8d5f7326cca437e1 = $this->env->getExtension("native_profiler");
        $__internal_6f6c19efd73ba46e2ef2d641b4a3824764bd01250600b7da8d5f7326cca437e1->enter($__internal_6f6c19efd73ba46e2ef2d641b4a3824764bd01250600b7da8d5f7326cca437e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f6c19efd73ba46e2ef2d641b4a3824764bd01250600b7da8d5f7326cca437e1->leave($__internal_6f6c19efd73ba46e2ef2d641b4a3824764bd01250600b7da8d5f7326cca437e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f4a0b23d079554f073d3e2cf9f2299c7aaf80e255aa13b572f3a8863b4e0f63a = $this->env->getExtension("native_profiler");
        $__internal_f4a0b23d079554f073d3e2cf9f2299c7aaf80e255aa13b572f3a8863b4e0f63a->enter($__internal_f4a0b23d079554f073d3e2cf9f2299c7aaf80e255aa13b572f3a8863b4e0f63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f4a0b23d079554f073d3e2cf9f2299c7aaf80e255aa13b572f3a8863b4e0f63a->leave($__internal_f4a0b23d079554f073d3e2cf9f2299c7aaf80e255aa13b572f3a8863b4e0f63a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c377d0dcf92356ac4c46be79343a8c0f812463e84cc134f744ac19993740a22 = $this->env->getExtension("native_profiler");
        $__internal_0c377d0dcf92356ac4c46be79343a8c0f812463e84cc134f744ac19993740a22->enter($__internal_0c377d0dcf92356ac4c46be79343a8c0f812463e84cc134f744ac19993740a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c377d0dcf92356ac4c46be79343a8c0f812463e84cc134f744ac19993740a22->leave($__internal_0c377d0dcf92356ac4c46be79343a8c0f812463e84cc134f744ac19993740a22_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3e4bab73a1c289e9da3d22e14e713e6c948fb6a57fc1f2d7f735b923864384b = $this->env->getExtension("native_profiler");
        $__internal_b3e4bab73a1c289e9da3d22e14e713e6c948fb6a57fc1f2d7f735b923864384b->enter($__internal_b3e4bab73a1c289e9da3d22e14e713e6c948fb6a57fc1f2d7f735b923864384b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b3e4bab73a1c289e9da3d22e14e713e6c948fb6a57fc1f2d7f735b923864384b->leave($__internal_b3e4bab73a1c289e9da3d22e14e713e6c948fb6a57fc1f2d7f735b923864384b_prof);

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
