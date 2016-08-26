<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_dafc26c5342b879f08b03c1a2b61d5789976de4b27dcbd5a24b235428589c573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_f2c7bf015c225814cc69ec0034548a44da7f514d9bd66716db102e2ae76da03e = $this->env->getExtension("native_profiler");
        $__internal_f2c7bf015c225814cc69ec0034548a44da7f514d9bd66716db102e2ae76da03e->enter($__internal_f2c7bf015c225814cc69ec0034548a44da7f514d9bd66716db102e2ae76da03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2c7bf015c225814cc69ec0034548a44da7f514d9bd66716db102e2ae76da03e->leave($__internal_f2c7bf015c225814cc69ec0034548a44da7f514d9bd66716db102e2ae76da03e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9fa3ae7531c67a17992fe5e3b69a73379ef332237494fed546d3258796b17b57 = $this->env->getExtension("native_profiler");
        $__internal_9fa3ae7531c67a17992fe5e3b69a73379ef332237494fed546d3258796b17b57->enter($__internal_9fa3ae7531c67a17992fe5e3b69a73379ef332237494fed546d3258796b17b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9fa3ae7531c67a17992fe5e3b69a73379ef332237494fed546d3258796b17b57->leave($__internal_9fa3ae7531c67a17992fe5e3b69a73379ef332237494fed546d3258796b17b57_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a07a939f83bc21843b1b1701ce98d54ee66726ae3f9daf8d9110ca4082ff8bd = $this->env->getExtension("native_profiler");
        $__internal_8a07a939f83bc21843b1b1701ce98d54ee66726ae3f9daf8d9110ca4082ff8bd->enter($__internal_8a07a939f83bc21843b1b1701ce98d54ee66726ae3f9daf8d9110ca4082ff8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a07a939f83bc21843b1b1701ce98d54ee66726ae3f9daf8d9110ca4082ff8bd->leave($__internal_8a07a939f83bc21843b1b1701ce98d54ee66726ae3f9daf8d9110ca4082ff8bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b2260324c9a439c465599128a8eac0452647962a7f97c6a02decc76568d5da2 = $this->env->getExtension("native_profiler");
        $__internal_9b2260324c9a439c465599128a8eac0452647962a7f97c6a02decc76568d5da2->enter($__internal_9b2260324c9a439c465599128a8eac0452647962a7f97c6a02decc76568d5da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9b2260324c9a439c465599128a8eac0452647962a7f97c6a02decc76568d5da2->leave($__internal_9b2260324c9a439c465599128a8eac0452647962a7f97c6a02decc76568d5da2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
