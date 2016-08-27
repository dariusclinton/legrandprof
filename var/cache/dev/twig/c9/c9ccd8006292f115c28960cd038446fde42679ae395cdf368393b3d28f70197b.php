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
        $__internal_71e53decce542df22407f45c96d6218cdce5a1dae21eadf687ed731b84ba04aa = $this->env->getExtension("native_profiler");
        $__internal_71e53decce542df22407f45c96d6218cdce5a1dae21eadf687ed731b84ba04aa->enter($__internal_71e53decce542df22407f45c96d6218cdce5a1dae21eadf687ed731b84ba04aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e53decce542df22407f45c96d6218cdce5a1dae21eadf687ed731b84ba04aa->leave($__internal_71e53decce542df22407f45c96d6218cdce5a1dae21eadf687ed731b84ba04aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b109c97e8e785e5356a5f03ed41e0c897aa4e3286ba4ed9a0775f05f37e8326f = $this->env->getExtension("native_profiler");
        $__internal_b109c97e8e785e5356a5f03ed41e0c897aa4e3286ba4ed9a0775f05f37e8326f->enter($__internal_b109c97e8e785e5356a5f03ed41e0c897aa4e3286ba4ed9a0775f05f37e8326f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b109c97e8e785e5356a5f03ed41e0c897aa4e3286ba4ed9a0775f05f37e8326f->leave($__internal_b109c97e8e785e5356a5f03ed41e0c897aa4e3286ba4ed9a0775f05f37e8326f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62e7f92f216035e6db2b4d7b64043adf81a3770c9e49a58abb923120ea1a6734 = $this->env->getExtension("native_profiler");
        $__internal_62e7f92f216035e6db2b4d7b64043adf81a3770c9e49a58abb923120ea1a6734->enter($__internal_62e7f92f216035e6db2b4d7b64043adf81a3770c9e49a58abb923120ea1a6734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_62e7f92f216035e6db2b4d7b64043adf81a3770c9e49a58abb923120ea1a6734->leave($__internal_62e7f92f216035e6db2b4d7b64043adf81a3770c9e49a58abb923120ea1a6734_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9cdeaf2e4182d66fab22ce5bfa160ea760f97712db857d0df1b61da4d53ca85 = $this->env->getExtension("native_profiler");
        $__internal_c9cdeaf2e4182d66fab22ce5bfa160ea760f97712db857d0df1b61da4d53ca85->enter($__internal_c9cdeaf2e4182d66fab22ce5bfa160ea760f97712db857d0df1b61da4d53ca85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9cdeaf2e4182d66fab22ce5bfa160ea760f97712db857d0df1b61da4d53ca85->leave($__internal_c9cdeaf2e4182d66fab22ce5bfa160ea760f97712db857d0df1b61da4d53ca85_prof);

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
