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
        $__internal_044cbe6682807d4b2be1c2f6db878ebc8bc5628b03ae9650c764984ec06caa97 = $this->env->getExtension("native_profiler");
        $__internal_044cbe6682807d4b2be1c2f6db878ebc8bc5628b03ae9650c764984ec06caa97->enter($__internal_044cbe6682807d4b2be1c2f6db878ebc8bc5628b03ae9650c764984ec06caa97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_044cbe6682807d4b2be1c2f6db878ebc8bc5628b03ae9650c764984ec06caa97->leave($__internal_044cbe6682807d4b2be1c2f6db878ebc8bc5628b03ae9650c764984ec06caa97_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7c1b40e29338d3416ff31f054be0f2f6196c6eb727ed62c9488659e867eda7e6 = $this->env->getExtension("native_profiler");
        $__internal_7c1b40e29338d3416ff31f054be0f2f6196c6eb727ed62c9488659e867eda7e6->enter($__internal_7c1b40e29338d3416ff31f054be0f2f6196c6eb727ed62c9488659e867eda7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c1b40e29338d3416ff31f054be0f2f6196c6eb727ed62c9488659e867eda7e6->leave($__internal_7c1b40e29338d3416ff31f054be0f2f6196c6eb727ed62c9488659e867eda7e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10d078a7fe00cebd4deecadd2ae65c50020396ed96e88b2f38526c22d930e9ed = $this->env->getExtension("native_profiler");
        $__internal_10d078a7fe00cebd4deecadd2ae65c50020396ed96e88b2f38526c22d930e9ed->enter($__internal_10d078a7fe00cebd4deecadd2ae65c50020396ed96e88b2f38526c22d930e9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_10d078a7fe00cebd4deecadd2ae65c50020396ed96e88b2f38526c22d930e9ed->leave($__internal_10d078a7fe00cebd4deecadd2ae65c50020396ed96e88b2f38526c22d930e9ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_734f6e1834dad85e98bec1447bb83c7cbb51efa6572ea9ad55e636ee7e35f6e5 = $this->env->getExtension("native_profiler");
        $__internal_734f6e1834dad85e98bec1447bb83c7cbb51efa6572ea9ad55e636ee7e35f6e5->enter($__internal_734f6e1834dad85e98bec1447bb83c7cbb51efa6572ea9ad55e636ee7e35f6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_734f6e1834dad85e98bec1447bb83c7cbb51efa6572ea9ad55e636ee7e35f6e5->leave($__internal_734f6e1834dad85e98bec1447bb83c7cbb51efa6572ea9ad55e636ee7e35f6e5_prof);

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
