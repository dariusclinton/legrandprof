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
        $__internal_e46f94726a170f2b45f8eba51b9be0f2367abb7fe9383637c38dcff1141f879c = $this->env->getExtension("native_profiler");
        $__internal_e46f94726a170f2b45f8eba51b9be0f2367abb7fe9383637c38dcff1141f879c->enter($__internal_e46f94726a170f2b45f8eba51b9be0f2367abb7fe9383637c38dcff1141f879c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e46f94726a170f2b45f8eba51b9be0f2367abb7fe9383637c38dcff1141f879c->leave($__internal_e46f94726a170f2b45f8eba51b9be0f2367abb7fe9383637c38dcff1141f879c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a928e148e2a4f91db408d32b77777f8f1decde903ae6e87d60396724b84fb6e5 = $this->env->getExtension("native_profiler");
        $__internal_a928e148e2a4f91db408d32b77777f8f1decde903ae6e87d60396724b84fb6e5->enter($__internal_a928e148e2a4f91db408d32b77777f8f1decde903ae6e87d60396724b84fb6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a928e148e2a4f91db408d32b77777f8f1decde903ae6e87d60396724b84fb6e5->leave($__internal_a928e148e2a4f91db408d32b77777f8f1decde903ae6e87d60396724b84fb6e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc3ab6efbefc958d13e76cefc8b76c98ddedb0044e3f83164a0bbeb1c525feb4 = $this->env->getExtension("native_profiler");
        $__internal_dc3ab6efbefc958d13e76cefc8b76c98ddedb0044e3f83164a0bbeb1c525feb4->enter($__internal_dc3ab6efbefc958d13e76cefc8b76c98ddedb0044e3f83164a0bbeb1c525feb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dc3ab6efbefc958d13e76cefc8b76c98ddedb0044e3f83164a0bbeb1c525feb4->leave($__internal_dc3ab6efbefc958d13e76cefc8b76c98ddedb0044e3f83164a0bbeb1c525feb4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76db44b631d63b07e15bc893ae3d1b6b8d8965f020ca922a80c3bbca4829af5e = $this->env->getExtension("native_profiler");
        $__internal_76db44b631d63b07e15bc893ae3d1b6b8d8965f020ca922a80c3bbca4829af5e->enter($__internal_76db44b631d63b07e15bc893ae3d1b6b8d8965f020ca922a80c3bbca4829af5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_76db44b631d63b07e15bc893ae3d1b6b8d8965f020ca922a80c3bbca4829af5e->leave($__internal_76db44b631d63b07e15bc893ae3d1b6b8d8965f020ca922a80c3bbca4829af5e_prof);

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
