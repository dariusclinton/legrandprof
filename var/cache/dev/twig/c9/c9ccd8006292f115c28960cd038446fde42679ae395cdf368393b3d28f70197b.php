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
        $__internal_fcd40d8f618a16ed2e4c4ad3319a911da022a3aaf3d44252269c759b627086ac = $this->env->getExtension("native_profiler");
        $__internal_fcd40d8f618a16ed2e4c4ad3319a911da022a3aaf3d44252269c759b627086ac->enter($__internal_fcd40d8f618a16ed2e4c4ad3319a911da022a3aaf3d44252269c759b627086ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcd40d8f618a16ed2e4c4ad3319a911da022a3aaf3d44252269c759b627086ac->leave($__internal_fcd40d8f618a16ed2e4c4ad3319a911da022a3aaf3d44252269c759b627086ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fc4bfcf57392379787f83a47ceb8f8dbee5bb4c4cdcffa43a5d37bdc0f321a63 = $this->env->getExtension("native_profiler");
        $__internal_fc4bfcf57392379787f83a47ceb8f8dbee5bb4c4cdcffa43a5d37bdc0f321a63->enter($__internal_fc4bfcf57392379787f83a47ceb8f8dbee5bb4c4cdcffa43a5d37bdc0f321a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fc4bfcf57392379787f83a47ceb8f8dbee5bb4c4cdcffa43a5d37bdc0f321a63->leave($__internal_fc4bfcf57392379787f83a47ceb8f8dbee5bb4c4cdcffa43a5d37bdc0f321a63_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a2cd6617f7aa6b466ff76d5df4281b8c9680b5a88a24ee0519e6e6683bfb4576 = $this->env->getExtension("native_profiler");
        $__internal_a2cd6617f7aa6b466ff76d5df4281b8c9680b5a88a24ee0519e6e6683bfb4576->enter($__internal_a2cd6617f7aa6b466ff76d5df4281b8c9680b5a88a24ee0519e6e6683bfb4576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a2cd6617f7aa6b466ff76d5df4281b8c9680b5a88a24ee0519e6e6683bfb4576->leave($__internal_a2cd6617f7aa6b466ff76d5df4281b8c9680b5a88a24ee0519e6e6683bfb4576_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_850a3662f585a01fde8694a9a06718ac72ca8c7b20ad72af912494f565428138 = $this->env->getExtension("native_profiler");
        $__internal_850a3662f585a01fde8694a9a06718ac72ca8c7b20ad72af912494f565428138->enter($__internal_850a3662f585a01fde8694a9a06718ac72ca8c7b20ad72af912494f565428138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_850a3662f585a01fde8694a9a06718ac72ca8c7b20ad72af912494f565428138->leave($__internal_850a3662f585a01fde8694a9a06718ac72ca8c7b20ad72af912494f565428138_prof);

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
