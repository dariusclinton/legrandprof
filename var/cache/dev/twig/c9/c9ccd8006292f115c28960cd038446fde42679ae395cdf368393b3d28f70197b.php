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
        $__internal_e5bedbea4aaf1962ab1a614eef35f279faf8fce9a787341fbb59e428ccfd4b31 = $this->env->getExtension("native_profiler");
        $__internal_e5bedbea4aaf1962ab1a614eef35f279faf8fce9a787341fbb59e428ccfd4b31->enter($__internal_e5bedbea4aaf1962ab1a614eef35f279faf8fce9a787341fbb59e428ccfd4b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5bedbea4aaf1962ab1a614eef35f279faf8fce9a787341fbb59e428ccfd4b31->leave($__internal_e5bedbea4aaf1962ab1a614eef35f279faf8fce9a787341fbb59e428ccfd4b31_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a51fd9f87aa3a0b1eb2777d8cfa137d43af83b28bb59ec1ec3609124740c5bd = $this->env->getExtension("native_profiler");
        $__internal_2a51fd9f87aa3a0b1eb2777d8cfa137d43af83b28bb59ec1ec3609124740c5bd->enter($__internal_2a51fd9f87aa3a0b1eb2777d8cfa137d43af83b28bb59ec1ec3609124740c5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a51fd9f87aa3a0b1eb2777d8cfa137d43af83b28bb59ec1ec3609124740c5bd->leave($__internal_2a51fd9f87aa3a0b1eb2777d8cfa137d43af83b28bb59ec1ec3609124740c5bd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a05f00f9ddee22c6c93afa8ca7f4d7c03b76b7372020c8f5b14ef51f5cae0e5 = $this->env->getExtension("native_profiler");
        $__internal_8a05f00f9ddee22c6c93afa8ca7f4d7c03b76b7372020c8f5b14ef51f5cae0e5->enter($__internal_8a05f00f9ddee22c6c93afa8ca7f4d7c03b76b7372020c8f5b14ef51f5cae0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a05f00f9ddee22c6c93afa8ca7f4d7c03b76b7372020c8f5b14ef51f5cae0e5->leave($__internal_8a05f00f9ddee22c6c93afa8ca7f4d7c03b76b7372020c8f5b14ef51f5cae0e5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_537a9e7ac1883e42b0e11a57da01aa07f80b63f4327acd733c7301d3ced5abfc = $this->env->getExtension("native_profiler");
        $__internal_537a9e7ac1883e42b0e11a57da01aa07f80b63f4327acd733c7301d3ced5abfc->enter($__internal_537a9e7ac1883e42b0e11a57da01aa07f80b63f4327acd733c7301d3ced5abfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_537a9e7ac1883e42b0e11a57da01aa07f80b63f4327acd733c7301d3ced5abfc->leave($__internal_537a9e7ac1883e42b0e11a57da01aa07f80b63f4327acd733c7301d3ced5abfc_prof);

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
