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
        $__internal_f05e05fb868a1048f24115b7bfb227dd6b4b16771237a1b3bbe0666f0e0064de = $this->env->getExtension("native_profiler");
        $__internal_f05e05fb868a1048f24115b7bfb227dd6b4b16771237a1b3bbe0666f0e0064de->enter($__internal_f05e05fb868a1048f24115b7bfb227dd6b4b16771237a1b3bbe0666f0e0064de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f05e05fb868a1048f24115b7bfb227dd6b4b16771237a1b3bbe0666f0e0064de->leave($__internal_f05e05fb868a1048f24115b7bfb227dd6b4b16771237a1b3bbe0666f0e0064de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cdc4d80c7662f456d0a399bc66dbc9ac85c099cf66f97fb83c2c0189b7db682c = $this->env->getExtension("native_profiler");
        $__internal_cdc4d80c7662f456d0a399bc66dbc9ac85c099cf66f97fb83c2c0189b7db682c->enter($__internal_cdc4d80c7662f456d0a399bc66dbc9ac85c099cf66f97fb83c2c0189b7db682c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cdc4d80c7662f456d0a399bc66dbc9ac85c099cf66f97fb83c2c0189b7db682c->leave($__internal_cdc4d80c7662f456d0a399bc66dbc9ac85c099cf66f97fb83c2c0189b7db682c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36f0665112414949c74abc5be7f09e3ae7583219c815aac212bc21c319a1915b = $this->env->getExtension("native_profiler");
        $__internal_36f0665112414949c74abc5be7f09e3ae7583219c815aac212bc21c319a1915b->enter($__internal_36f0665112414949c74abc5be7f09e3ae7583219c815aac212bc21c319a1915b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36f0665112414949c74abc5be7f09e3ae7583219c815aac212bc21c319a1915b->leave($__internal_36f0665112414949c74abc5be7f09e3ae7583219c815aac212bc21c319a1915b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_80b547850ef5ab8eaceee4b505c5019cc243a08beb761a32a5940a1c92530fcb = $this->env->getExtension("native_profiler");
        $__internal_80b547850ef5ab8eaceee4b505c5019cc243a08beb761a32a5940a1c92530fcb->enter($__internal_80b547850ef5ab8eaceee4b505c5019cc243a08beb761a32a5940a1c92530fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_80b547850ef5ab8eaceee4b505c5019cc243a08beb761a32a5940a1c92530fcb->leave($__internal_80b547850ef5ab8eaceee4b505c5019cc243a08beb761a32a5940a1c92530fcb_prof);

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
