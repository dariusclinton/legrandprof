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
        $__internal_c65489b006c3233039a9ce67edb5e7190662fce465ff33afb202d3a18a200ff2 = $this->env->getExtension("native_profiler");
        $__internal_c65489b006c3233039a9ce67edb5e7190662fce465ff33afb202d3a18a200ff2->enter($__internal_c65489b006c3233039a9ce67edb5e7190662fce465ff33afb202d3a18a200ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c65489b006c3233039a9ce67edb5e7190662fce465ff33afb202d3a18a200ff2->leave($__internal_c65489b006c3233039a9ce67edb5e7190662fce465ff33afb202d3a18a200ff2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e83ce41c7f46dd0ff3c3a4615ddd5dee7bd428d985f4a0107c79dcb7978b844 = $this->env->getExtension("native_profiler");
        $__internal_0e83ce41c7f46dd0ff3c3a4615ddd5dee7bd428d985f4a0107c79dcb7978b844->enter($__internal_0e83ce41c7f46dd0ff3c3a4615ddd5dee7bd428d985f4a0107c79dcb7978b844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0e83ce41c7f46dd0ff3c3a4615ddd5dee7bd428d985f4a0107c79dcb7978b844->leave($__internal_0e83ce41c7f46dd0ff3c3a4615ddd5dee7bd428d985f4a0107c79dcb7978b844_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61804db21faed9d723dc5e91218eddd44ac91c08523c58b45678c74912e73fea = $this->env->getExtension("native_profiler");
        $__internal_61804db21faed9d723dc5e91218eddd44ac91c08523c58b45678c74912e73fea->enter($__internal_61804db21faed9d723dc5e91218eddd44ac91c08523c58b45678c74912e73fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_61804db21faed9d723dc5e91218eddd44ac91c08523c58b45678c74912e73fea->leave($__internal_61804db21faed9d723dc5e91218eddd44ac91c08523c58b45678c74912e73fea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aeb3fe06d329accf46af3c1b7053d6a8dfa34d4a4014b6c7f0fdd883e8849eb6 = $this->env->getExtension("native_profiler");
        $__internal_aeb3fe06d329accf46af3c1b7053d6a8dfa34d4a4014b6c7f0fdd883e8849eb6->enter($__internal_aeb3fe06d329accf46af3c1b7053d6a8dfa34d4a4014b6c7f0fdd883e8849eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aeb3fe06d329accf46af3c1b7053d6a8dfa34d4a4014b6c7f0fdd883e8849eb6->leave($__internal_aeb3fe06d329accf46af3c1b7053d6a8dfa34d4a4014b6c7f0fdd883e8849eb6_prof);

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
