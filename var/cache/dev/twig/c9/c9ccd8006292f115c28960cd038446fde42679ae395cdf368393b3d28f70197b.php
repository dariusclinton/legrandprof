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
        $__internal_84f44387167383ff2639f821acd7fd8778ea4bf13338f04d584c18011577c165 = $this->env->getExtension("native_profiler");
        $__internal_84f44387167383ff2639f821acd7fd8778ea4bf13338f04d584c18011577c165->enter($__internal_84f44387167383ff2639f821acd7fd8778ea4bf13338f04d584c18011577c165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84f44387167383ff2639f821acd7fd8778ea4bf13338f04d584c18011577c165->leave($__internal_84f44387167383ff2639f821acd7fd8778ea4bf13338f04d584c18011577c165_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8aa437c8f4e6d069a565a5475b51aeb0618ebd96aa46f88c2528a92b9f2c98d = $this->env->getExtension("native_profiler");
        $__internal_c8aa437c8f4e6d069a565a5475b51aeb0618ebd96aa46f88c2528a92b9f2c98d->enter($__internal_c8aa437c8f4e6d069a565a5475b51aeb0618ebd96aa46f88c2528a92b9f2c98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c8aa437c8f4e6d069a565a5475b51aeb0618ebd96aa46f88c2528a92b9f2c98d->leave($__internal_c8aa437c8f4e6d069a565a5475b51aeb0618ebd96aa46f88c2528a92b9f2c98d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fdf20b45e099af5507badc7f4cb2eff818a7de35346367cad49d6371eebc5502 = $this->env->getExtension("native_profiler");
        $__internal_fdf20b45e099af5507badc7f4cb2eff818a7de35346367cad49d6371eebc5502->enter($__internal_fdf20b45e099af5507badc7f4cb2eff818a7de35346367cad49d6371eebc5502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fdf20b45e099af5507badc7f4cb2eff818a7de35346367cad49d6371eebc5502->leave($__internal_fdf20b45e099af5507badc7f4cb2eff818a7de35346367cad49d6371eebc5502_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_083e0effc568cd977109ea8760924168c2bbf98c0279db0984a48f55f5b1fbcd = $this->env->getExtension("native_profiler");
        $__internal_083e0effc568cd977109ea8760924168c2bbf98c0279db0984a48f55f5b1fbcd->enter($__internal_083e0effc568cd977109ea8760924168c2bbf98c0279db0984a48f55f5b1fbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_083e0effc568cd977109ea8760924168c2bbf98c0279db0984a48f55f5b1fbcd->leave($__internal_083e0effc568cd977109ea8760924168c2bbf98c0279db0984a48f55f5b1fbcd_prof);

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
