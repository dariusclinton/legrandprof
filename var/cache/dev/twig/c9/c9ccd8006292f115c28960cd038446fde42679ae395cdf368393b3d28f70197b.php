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
        $__internal_e37e4001b3e081c5248d382971f643cfb62756817efab0e48c3b5a18de5b88d2 = $this->env->getExtension("native_profiler");
        $__internal_e37e4001b3e081c5248d382971f643cfb62756817efab0e48c3b5a18de5b88d2->enter($__internal_e37e4001b3e081c5248d382971f643cfb62756817efab0e48c3b5a18de5b88d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e37e4001b3e081c5248d382971f643cfb62756817efab0e48c3b5a18de5b88d2->leave($__internal_e37e4001b3e081c5248d382971f643cfb62756817efab0e48c3b5a18de5b88d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f50c9cb8c4e0309c55ec9aa001538c0bff64d457538bc42ebc4e1e092d0be3b8 = $this->env->getExtension("native_profiler");
        $__internal_f50c9cb8c4e0309c55ec9aa001538c0bff64d457538bc42ebc4e1e092d0be3b8->enter($__internal_f50c9cb8c4e0309c55ec9aa001538c0bff64d457538bc42ebc4e1e092d0be3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f50c9cb8c4e0309c55ec9aa001538c0bff64d457538bc42ebc4e1e092d0be3b8->leave($__internal_f50c9cb8c4e0309c55ec9aa001538c0bff64d457538bc42ebc4e1e092d0be3b8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73287761c3d97536459538ef3b18fc37b95c4824b27fc997d634b19fb0bf3f7b = $this->env->getExtension("native_profiler");
        $__internal_73287761c3d97536459538ef3b18fc37b95c4824b27fc997d634b19fb0bf3f7b->enter($__internal_73287761c3d97536459538ef3b18fc37b95c4824b27fc997d634b19fb0bf3f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_73287761c3d97536459538ef3b18fc37b95c4824b27fc997d634b19fb0bf3f7b->leave($__internal_73287761c3d97536459538ef3b18fc37b95c4824b27fc997d634b19fb0bf3f7b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e237cb161bc599b8107b7aa79bbcce415bc247398fde67f6ae095265af401587 = $this->env->getExtension("native_profiler");
        $__internal_e237cb161bc599b8107b7aa79bbcce415bc247398fde67f6ae095265af401587->enter($__internal_e237cb161bc599b8107b7aa79bbcce415bc247398fde67f6ae095265af401587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e237cb161bc599b8107b7aa79bbcce415bc247398fde67f6ae095265af401587->leave($__internal_e237cb161bc599b8107b7aa79bbcce415bc247398fde67f6ae095265af401587_prof);

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
