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
        $__internal_bd406bfb4e7181bb1d208c3ea57f02308b94922c58306747460873d84d8693ea = $this->env->getExtension("native_profiler");
        $__internal_bd406bfb4e7181bb1d208c3ea57f02308b94922c58306747460873d84d8693ea->enter($__internal_bd406bfb4e7181bb1d208c3ea57f02308b94922c58306747460873d84d8693ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd406bfb4e7181bb1d208c3ea57f02308b94922c58306747460873d84d8693ea->leave($__internal_bd406bfb4e7181bb1d208c3ea57f02308b94922c58306747460873d84d8693ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d1b763f72ef031edeb235daca439ae5145b9ad58ac8f1afed3ae428e932ae36b = $this->env->getExtension("native_profiler");
        $__internal_d1b763f72ef031edeb235daca439ae5145b9ad58ac8f1afed3ae428e932ae36b->enter($__internal_d1b763f72ef031edeb235daca439ae5145b9ad58ac8f1afed3ae428e932ae36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d1b763f72ef031edeb235daca439ae5145b9ad58ac8f1afed3ae428e932ae36b->leave($__internal_d1b763f72ef031edeb235daca439ae5145b9ad58ac8f1afed3ae428e932ae36b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ef054ae4e0f14b5c853ad5d79309d230f6e966c1943f3c595e5c5cc10f50636 = $this->env->getExtension("native_profiler");
        $__internal_3ef054ae4e0f14b5c853ad5d79309d230f6e966c1943f3c595e5c5cc10f50636->enter($__internal_3ef054ae4e0f14b5c853ad5d79309d230f6e966c1943f3c595e5c5cc10f50636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ef054ae4e0f14b5c853ad5d79309d230f6e966c1943f3c595e5c5cc10f50636->leave($__internal_3ef054ae4e0f14b5c853ad5d79309d230f6e966c1943f3c595e5c5cc10f50636_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_61aa2d0a8b97ad81594d90939923485d2e5cf16d260f7675946532933c8bf1dc = $this->env->getExtension("native_profiler");
        $__internal_61aa2d0a8b97ad81594d90939923485d2e5cf16d260f7675946532933c8bf1dc->enter($__internal_61aa2d0a8b97ad81594d90939923485d2e5cf16d260f7675946532933c8bf1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_61aa2d0a8b97ad81594d90939923485d2e5cf16d260f7675946532933c8bf1dc->leave($__internal_61aa2d0a8b97ad81594d90939923485d2e5cf16d260f7675946532933c8bf1dc_prof);

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
