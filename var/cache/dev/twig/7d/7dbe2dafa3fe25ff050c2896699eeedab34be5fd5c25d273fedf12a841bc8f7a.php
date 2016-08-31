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
        $__internal_7e009dec3369a262d1145c7b5e9d7a0af3e5ff7ed0923f4fbaa733fd959e4db9 = $this->env->getExtension("native_profiler");
        $__internal_7e009dec3369a262d1145c7b5e9d7a0af3e5ff7ed0923f4fbaa733fd959e4db9->enter($__internal_7e009dec3369a262d1145c7b5e9d7a0af3e5ff7ed0923f4fbaa733fd959e4db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e009dec3369a262d1145c7b5e9d7a0af3e5ff7ed0923f4fbaa733fd959e4db9->leave($__internal_7e009dec3369a262d1145c7b5e9d7a0af3e5ff7ed0923f4fbaa733fd959e4db9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f0dfda830517580ad2092d3aab4103d0c9c809637c7fce6c95a325c3fd5dd3c = $this->env->getExtension("native_profiler");
        $__internal_1f0dfda830517580ad2092d3aab4103d0c9c809637c7fce6c95a325c3fd5dd3c->enter($__internal_1f0dfda830517580ad2092d3aab4103d0c9c809637c7fce6c95a325c3fd5dd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1f0dfda830517580ad2092d3aab4103d0c9c809637c7fce6c95a325c3fd5dd3c->leave($__internal_1f0dfda830517580ad2092d3aab4103d0c9c809637c7fce6c95a325c3fd5dd3c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42e2c14f2e6a398a5554778c07b3005cb3bd7f19f4f43a1b5a5b27265d99c778 = $this->env->getExtension("native_profiler");
        $__internal_42e2c14f2e6a398a5554778c07b3005cb3bd7f19f4f43a1b5a5b27265d99c778->enter($__internal_42e2c14f2e6a398a5554778c07b3005cb3bd7f19f4f43a1b5a5b27265d99c778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_42e2c14f2e6a398a5554778c07b3005cb3bd7f19f4f43a1b5a5b27265d99c778->leave($__internal_42e2c14f2e6a398a5554778c07b3005cb3bd7f19f4f43a1b5a5b27265d99c778_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc6ec63f06b4e7a19126b8a4f62ef8d4b01bb67c77f880cb571e0caaa9a9d724 = $this->env->getExtension("native_profiler");
        $__internal_cc6ec63f06b4e7a19126b8a4f62ef8d4b01bb67c77f880cb571e0caaa9a9d724->enter($__internal_cc6ec63f06b4e7a19126b8a4f62ef8d4b01bb67c77f880cb571e0caaa9a9d724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cc6ec63f06b4e7a19126b8a4f62ef8d4b01bb67c77f880cb571e0caaa9a9d724->leave($__internal_cc6ec63f06b4e7a19126b8a4f62ef8d4b01bb67c77f880cb571e0caaa9a9d724_prof);

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
