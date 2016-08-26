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
        $__internal_fc7e2ef05b3259e4dc1dbaecde937eae5210a9a14578e17c31120447e7d0d3c3 = $this->env->getExtension("native_profiler");
        $__internal_fc7e2ef05b3259e4dc1dbaecde937eae5210a9a14578e17c31120447e7d0d3c3->enter($__internal_fc7e2ef05b3259e4dc1dbaecde937eae5210a9a14578e17c31120447e7d0d3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc7e2ef05b3259e4dc1dbaecde937eae5210a9a14578e17c31120447e7d0d3c3->leave($__internal_fc7e2ef05b3259e4dc1dbaecde937eae5210a9a14578e17c31120447e7d0d3c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5cc47528a5b618f47d8d5d279423ec9dcbe9e73f78ad1c175812c9ffcab4acc8 = $this->env->getExtension("native_profiler");
        $__internal_5cc47528a5b618f47d8d5d279423ec9dcbe9e73f78ad1c175812c9ffcab4acc8->enter($__internal_5cc47528a5b618f47d8d5d279423ec9dcbe9e73f78ad1c175812c9ffcab4acc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5cc47528a5b618f47d8d5d279423ec9dcbe9e73f78ad1c175812c9ffcab4acc8->leave($__internal_5cc47528a5b618f47d8d5d279423ec9dcbe9e73f78ad1c175812c9ffcab4acc8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5541ee264416251cdb102c06c6def884db11d5f47b2cd1f323121bb54e43de88 = $this->env->getExtension("native_profiler");
        $__internal_5541ee264416251cdb102c06c6def884db11d5f47b2cd1f323121bb54e43de88->enter($__internal_5541ee264416251cdb102c06c6def884db11d5f47b2cd1f323121bb54e43de88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5541ee264416251cdb102c06c6def884db11d5f47b2cd1f323121bb54e43de88->leave($__internal_5541ee264416251cdb102c06c6def884db11d5f47b2cd1f323121bb54e43de88_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1682e430ec9a41daec61d2f0b952121e626869e3c1ad902d831748dabda516d3 = $this->env->getExtension("native_profiler");
        $__internal_1682e430ec9a41daec61d2f0b952121e626869e3c1ad902d831748dabda516d3->enter($__internal_1682e430ec9a41daec61d2f0b952121e626869e3c1ad902d831748dabda516d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1682e430ec9a41daec61d2f0b952121e626869e3c1ad902d831748dabda516d3->leave($__internal_1682e430ec9a41daec61d2f0b952121e626869e3c1ad902d831748dabda516d3_prof);

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
