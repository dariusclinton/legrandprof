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
        $__internal_49ca60d914d7e72c746ad5be10b53ad9bf89297a25b3e3afaefe2f2f301b974d = $this->env->getExtension("native_profiler");
        $__internal_49ca60d914d7e72c746ad5be10b53ad9bf89297a25b3e3afaefe2f2f301b974d->enter($__internal_49ca60d914d7e72c746ad5be10b53ad9bf89297a25b3e3afaefe2f2f301b974d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49ca60d914d7e72c746ad5be10b53ad9bf89297a25b3e3afaefe2f2f301b974d->leave($__internal_49ca60d914d7e72c746ad5be10b53ad9bf89297a25b3e3afaefe2f2f301b974d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_abcf71fd41a22b943ad85f76534e9bfb405f237b72cd41d55bf306cc8dae553d = $this->env->getExtension("native_profiler");
        $__internal_abcf71fd41a22b943ad85f76534e9bfb405f237b72cd41d55bf306cc8dae553d->enter($__internal_abcf71fd41a22b943ad85f76534e9bfb405f237b72cd41d55bf306cc8dae553d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_abcf71fd41a22b943ad85f76534e9bfb405f237b72cd41d55bf306cc8dae553d->leave($__internal_abcf71fd41a22b943ad85f76534e9bfb405f237b72cd41d55bf306cc8dae553d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e0426435327826cf00dd25886aa550ff73b9979f6165ec02b742f3b3f8f53da = $this->env->getExtension("native_profiler");
        $__internal_7e0426435327826cf00dd25886aa550ff73b9979f6165ec02b742f3b3f8f53da->enter($__internal_7e0426435327826cf00dd25886aa550ff73b9979f6165ec02b742f3b3f8f53da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e0426435327826cf00dd25886aa550ff73b9979f6165ec02b742f3b3f8f53da->leave($__internal_7e0426435327826cf00dd25886aa550ff73b9979f6165ec02b742f3b3f8f53da_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52e6f852d193dc51e4d27f8b8ac4f73f869db4f5fd68bfb8118242967bca8b6f = $this->env->getExtension("native_profiler");
        $__internal_52e6f852d193dc51e4d27f8b8ac4f73f869db4f5fd68bfb8118242967bca8b6f->enter($__internal_52e6f852d193dc51e4d27f8b8ac4f73f869db4f5fd68bfb8118242967bca8b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52e6f852d193dc51e4d27f8b8ac4f73f869db4f5fd68bfb8118242967bca8b6f->leave($__internal_52e6f852d193dc51e4d27f8b8ac4f73f869db4f5fd68bfb8118242967bca8b6f_prof);

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
