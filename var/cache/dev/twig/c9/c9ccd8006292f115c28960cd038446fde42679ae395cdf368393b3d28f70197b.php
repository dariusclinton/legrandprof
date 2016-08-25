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
        $__internal_faefdd219d69f338e6c7b1a9cc0865de0bd3c5bad7e8640fbb4cc46218b1b2b3 = $this->env->getExtension("native_profiler");
        $__internal_faefdd219d69f338e6c7b1a9cc0865de0bd3c5bad7e8640fbb4cc46218b1b2b3->enter($__internal_faefdd219d69f338e6c7b1a9cc0865de0bd3c5bad7e8640fbb4cc46218b1b2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faefdd219d69f338e6c7b1a9cc0865de0bd3c5bad7e8640fbb4cc46218b1b2b3->leave($__internal_faefdd219d69f338e6c7b1a9cc0865de0bd3c5bad7e8640fbb4cc46218b1b2b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb0c7281e2d6b480f796842436341b7497680b8c46900bc0a29685432eda4496 = $this->env->getExtension("native_profiler");
        $__internal_cb0c7281e2d6b480f796842436341b7497680b8c46900bc0a29685432eda4496->enter($__internal_cb0c7281e2d6b480f796842436341b7497680b8c46900bc0a29685432eda4496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cb0c7281e2d6b480f796842436341b7497680b8c46900bc0a29685432eda4496->leave($__internal_cb0c7281e2d6b480f796842436341b7497680b8c46900bc0a29685432eda4496_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4b81fa10cf73e04e76a28ff6241f2c6391a7f53a87d1ce6030acb03972417f8 = $this->env->getExtension("native_profiler");
        $__internal_e4b81fa10cf73e04e76a28ff6241f2c6391a7f53a87d1ce6030acb03972417f8->enter($__internal_e4b81fa10cf73e04e76a28ff6241f2c6391a7f53a87d1ce6030acb03972417f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e4b81fa10cf73e04e76a28ff6241f2c6391a7f53a87d1ce6030acb03972417f8->leave($__internal_e4b81fa10cf73e04e76a28ff6241f2c6391a7f53a87d1ce6030acb03972417f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aeb66b38c757fa9029b8b4d62a53efaa99b6a400fc027977826233256f10ec52 = $this->env->getExtension("native_profiler");
        $__internal_aeb66b38c757fa9029b8b4d62a53efaa99b6a400fc027977826233256f10ec52->enter($__internal_aeb66b38c757fa9029b8b4d62a53efaa99b6a400fc027977826233256f10ec52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aeb66b38c757fa9029b8b4d62a53efaa99b6a400fc027977826233256f10ec52->leave($__internal_aeb66b38c757fa9029b8b4d62a53efaa99b6a400fc027977826233256f10ec52_prof);

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
