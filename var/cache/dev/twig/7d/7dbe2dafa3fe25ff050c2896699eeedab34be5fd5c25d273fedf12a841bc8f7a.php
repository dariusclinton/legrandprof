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
        $__internal_dedcba6bb7242c769bd2a9bf87d0b570a180b8f7bb558f86f6161ebcbd38dfde = $this->env->getExtension("native_profiler");
        $__internal_dedcba6bb7242c769bd2a9bf87d0b570a180b8f7bb558f86f6161ebcbd38dfde->enter($__internal_dedcba6bb7242c769bd2a9bf87d0b570a180b8f7bb558f86f6161ebcbd38dfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dedcba6bb7242c769bd2a9bf87d0b570a180b8f7bb558f86f6161ebcbd38dfde->leave($__internal_dedcba6bb7242c769bd2a9bf87d0b570a180b8f7bb558f86f6161ebcbd38dfde_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f7790e1138f0679267ae6086d7aa8feaf910f825d92b8826cf126e2c86323f6 = $this->env->getExtension("native_profiler");
        $__internal_1f7790e1138f0679267ae6086d7aa8feaf910f825d92b8826cf126e2c86323f6->enter($__internal_1f7790e1138f0679267ae6086d7aa8feaf910f825d92b8826cf126e2c86323f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1f7790e1138f0679267ae6086d7aa8feaf910f825d92b8826cf126e2c86323f6->leave($__internal_1f7790e1138f0679267ae6086d7aa8feaf910f825d92b8826cf126e2c86323f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb213e3a00cda492e82ed182ec9a69168c83a4121462e3bb7e349e21da41ee38 = $this->env->getExtension("native_profiler");
        $__internal_bb213e3a00cda492e82ed182ec9a69168c83a4121462e3bb7e349e21da41ee38->enter($__internal_bb213e3a00cda492e82ed182ec9a69168c83a4121462e3bb7e349e21da41ee38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb213e3a00cda492e82ed182ec9a69168c83a4121462e3bb7e349e21da41ee38->leave($__internal_bb213e3a00cda492e82ed182ec9a69168c83a4121462e3bb7e349e21da41ee38_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b122099b41b711785944dfb7251ba9f80bce7d19f1d9b928df520ebebb2b1244 = $this->env->getExtension("native_profiler");
        $__internal_b122099b41b711785944dfb7251ba9f80bce7d19f1d9b928df520ebebb2b1244->enter($__internal_b122099b41b711785944dfb7251ba9f80bce7d19f1d9b928df520ebebb2b1244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b122099b41b711785944dfb7251ba9f80bce7d19f1d9b928df520ebebb2b1244->leave($__internal_b122099b41b711785944dfb7251ba9f80bce7d19f1d9b928df520ebebb2b1244_prof);

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
