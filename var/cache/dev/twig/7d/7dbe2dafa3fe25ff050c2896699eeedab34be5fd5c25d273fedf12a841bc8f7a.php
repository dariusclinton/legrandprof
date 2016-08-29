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
        $__internal_1dfd0daeb7cbed2b58dbab1f8b7547807b9ea5bec2d0199248ad01bbc3f7ed7a = $this->env->getExtension("native_profiler");
        $__internal_1dfd0daeb7cbed2b58dbab1f8b7547807b9ea5bec2d0199248ad01bbc3f7ed7a->enter($__internal_1dfd0daeb7cbed2b58dbab1f8b7547807b9ea5bec2d0199248ad01bbc3f7ed7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dfd0daeb7cbed2b58dbab1f8b7547807b9ea5bec2d0199248ad01bbc3f7ed7a->leave($__internal_1dfd0daeb7cbed2b58dbab1f8b7547807b9ea5bec2d0199248ad01bbc3f7ed7a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f29ff41f9aa93126673ba191cf2f79383aa0dfd544cf0e962c0d19070ad5a53 = $this->env->getExtension("native_profiler");
        $__internal_9f29ff41f9aa93126673ba191cf2f79383aa0dfd544cf0e962c0d19070ad5a53->enter($__internal_9f29ff41f9aa93126673ba191cf2f79383aa0dfd544cf0e962c0d19070ad5a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9f29ff41f9aa93126673ba191cf2f79383aa0dfd544cf0e962c0d19070ad5a53->leave($__internal_9f29ff41f9aa93126673ba191cf2f79383aa0dfd544cf0e962c0d19070ad5a53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24d452faaad8986cf5dfde804fcd52762075256bf23471bd529a211491b5a07d = $this->env->getExtension("native_profiler");
        $__internal_24d452faaad8986cf5dfde804fcd52762075256bf23471bd529a211491b5a07d->enter($__internal_24d452faaad8986cf5dfde804fcd52762075256bf23471bd529a211491b5a07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_24d452faaad8986cf5dfde804fcd52762075256bf23471bd529a211491b5a07d->leave($__internal_24d452faaad8986cf5dfde804fcd52762075256bf23471bd529a211491b5a07d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ef4519ec7091d85a77c262cc757e5d6b231d48237646a77526f7aa16f02deae = $this->env->getExtension("native_profiler");
        $__internal_4ef4519ec7091d85a77c262cc757e5d6b231d48237646a77526f7aa16f02deae->enter($__internal_4ef4519ec7091d85a77c262cc757e5d6b231d48237646a77526f7aa16f02deae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ef4519ec7091d85a77c262cc757e5d6b231d48237646a77526f7aa16f02deae->leave($__internal_4ef4519ec7091d85a77c262cc757e5d6b231d48237646a77526f7aa16f02deae_prof);

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
