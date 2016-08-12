<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_612fe1cd77c47339cbc2a0e68fcda4ab1300b032dd7be1e2c9885af0eaca677b extends Twig_Template
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
        $__internal_e7d028744b6ba904600d31c855a9516d0545d6baf021159db42ce0e78141144a = $this->env->getExtension("native_profiler");
        $__internal_e7d028744b6ba904600d31c855a9516d0545d6baf021159db42ce0e78141144a->enter($__internal_e7d028744b6ba904600d31c855a9516d0545d6baf021159db42ce0e78141144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d028744b6ba904600d31c855a9516d0545d6baf021159db42ce0e78141144a->leave($__internal_e7d028744b6ba904600d31c855a9516d0545d6baf021159db42ce0e78141144a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c226c770a5bfb03375bfbd8a648590381c5bf5716cba1665310e52168d3db59 = $this->env->getExtension("native_profiler");
        $__internal_4c226c770a5bfb03375bfbd8a648590381c5bf5716cba1665310e52168d3db59->enter($__internal_4c226c770a5bfb03375bfbd8a648590381c5bf5716cba1665310e52168d3db59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4c226c770a5bfb03375bfbd8a648590381c5bf5716cba1665310e52168d3db59->leave($__internal_4c226c770a5bfb03375bfbd8a648590381c5bf5716cba1665310e52168d3db59_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86680b4332a5ac6d80bd70cd20c3e58ed594fa320f2a081953f8393d7fa59778 = $this->env->getExtension("native_profiler");
        $__internal_86680b4332a5ac6d80bd70cd20c3e58ed594fa320f2a081953f8393d7fa59778->enter($__internal_86680b4332a5ac6d80bd70cd20c3e58ed594fa320f2a081953f8393d7fa59778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_86680b4332a5ac6d80bd70cd20c3e58ed594fa320f2a081953f8393d7fa59778->leave($__internal_86680b4332a5ac6d80bd70cd20c3e58ed594fa320f2a081953f8393d7fa59778_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9c8bc1f7fb22cdae4776e486088a538e7983d620069c3267756bb0b81add716 = $this->env->getExtension("native_profiler");
        $__internal_b9c8bc1f7fb22cdae4776e486088a538e7983d620069c3267756bb0b81add716->enter($__internal_b9c8bc1f7fb22cdae4776e486088a538e7983d620069c3267756bb0b81add716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b9c8bc1f7fb22cdae4776e486088a538e7983d620069c3267756bb0b81add716->leave($__internal_b9c8bc1f7fb22cdae4776e486088a538e7983d620069c3267756bb0b81add716_prof);

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
