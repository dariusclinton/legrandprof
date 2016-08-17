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
        $__internal_c81177dcfe4a3dadc419b773a0b7eae791dd5c6e41148d8d1614b15127722490 = $this->env->getExtension("native_profiler");
        $__internal_c81177dcfe4a3dadc419b773a0b7eae791dd5c6e41148d8d1614b15127722490->enter($__internal_c81177dcfe4a3dadc419b773a0b7eae791dd5c6e41148d8d1614b15127722490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c81177dcfe4a3dadc419b773a0b7eae791dd5c6e41148d8d1614b15127722490->leave($__internal_c81177dcfe4a3dadc419b773a0b7eae791dd5c6e41148d8d1614b15127722490_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8f88c63c992bf69bb210b2c7ad4b65cdc82d41d0f81b478c0968f958c9ad836 = $this->env->getExtension("native_profiler");
        $__internal_c8f88c63c992bf69bb210b2c7ad4b65cdc82d41d0f81b478c0968f958c9ad836->enter($__internal_c8f88c63c992bf69bb210b2c7ad4b65cdc82d41d0f81b478c0968f958c9ad836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c8f88c63c992bf69bb210b2c7ad4b65cdc82d41d0f81b478c0968f958c9ad836->leave($__internal_c8f88c63c992bf69bb210b2c7ad4b65cdc82d41d0f81b478c0968f958c9ad836_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d6a6436a55542c350af42721e8eb39b9a413667b0260311a0a151b537a5181ef = $this->env->getExtension("native_profiler");
        $__internal_d6a6436a55542c350af42721e8eb39b9a413667b0260311a0a151b537a5181ef->enter($__internal_d6a6436a55542c350af42721e8eb39b9a413667b0260311a0a151b537a5181ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d6a6436a55542c350af42721e8eb39b9a413667b0260311a0a151b537a5181ef->leave($__internal_d6a6436a55542c350af42721e8eb39b9a413667b0260311a0a151b537a5181ef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b7a58ff159ef471097172e40a0e4b5a0c4320bc540586b1e2bd4e336a157ca5 = $this->env->getExtension("native_profiler");
        $__internal_7b7a58ff159ef471097172e40a0e4b5a0c4320bc540586b1e2bd4e336a157ca5->enter($__internal_7b7a58ff159ef471097172e40a0e4b5a0c4320bc540586b1e2bd4e336a157ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7b7a58ff159ef471097172e40a0e4b5a0c4320bc540586b1e2bd4e336a157ca5->leave($__internal_7b7a58ff159ef471097172e40a0e4b5a0c4320bc540586b1e2bd4e336a157ca5_prof);

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
