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
        $__internal_61ceb891e78b8021b693324a6eb4a788941c828c522a0c208c239562bfad5672 = $this->env->getExtension("native_profiler");
        $__internal_61ceb891e78b8021b693324a6eb4a788941c828c522a0c208c239562bfad5672->enter($__internal_61ceb891e78b8021b693324a6eb4a788941c828c522a0c208c239562bfad5672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61ceb891e78b8021b693324a6eb4a788941c828c522a0c208c239562bfad5672->leave($__internal_61ceb891e78b8021b693324a6eb4a788941c828c522a0c208c239562bfad5672_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13cb666b827e088fb532b986cf960d32ca000b1dfa836b6f37d0360378c9a9ed = $this->env->getExtension("native_profiler");
        $__internal_13cb666b827e088fb532b986cf960d32ca000b1dfa836b6f37d0360378c9a9ed->enter($__internal_13cb666b827e088fb532b986cf960d32ca000b1dfa836b6f37d0360378c9a9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13cb666b827e088fb532b986cf960d32ca000b1dfa836b6f37d0360378c9a9ed->leave($__internal_13cb666b827e088fb532b986cf960d32ca000b1dfa836b6f37d0360378c9a9ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4fa1a79e55d77b109df9d4c994ad8b3bc6d7b4353883efa74d9b8a01963631fb = $this->env->getExtension("native_profiler");
        $__internal_4fa1a79e55d77b109df9d4c994ad8b3bc6d7b4353883efa74d9b8a01963631fb->enter($__internal_4fa1a79e55d77b109df9d4c994ad8b3bc6d7b4353883efa74d9b8a01963631fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4fa1a79e55d77b109df9d4c994ad8b3bc6d7b4353883efa74d9b8a01963631fb->leave($__internal_4fa1a79e55d77b109df9d4c994ad8b3bc6d7b4353883efa74d9b8a01963631fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0918720e063806467e11b9892d1ab90516ba72188e0c83b6a12d0223bc73ed1 = $this->env->getExtension("native_profiler");
        $__internal_d0918720e063806467e11b9892d1ab90516ba72188e0c83b6a12d0223bc73ed1->enter($__internal_d0918720e063806467e11b9892d1ab90516ba72188e0c83b6a12d0223bc73ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d0918720e063806467e11b9892d1ab90516ba72188e0c83b6a12d0223bc73ed1->leave($__internal_d0918720e063806467e11b9892d1ab90516ba72188e0c83b6a12d0223bc73ed1_prof);

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
