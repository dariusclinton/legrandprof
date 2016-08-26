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
        $__internal_3f935fbc1974cae1fc3e508b4b40d32100439fc2c00e3049dafda7c096f77ac6 = $this->env->getExtension("native_profiler");
        $__internal_3f935fbc1974cae1fc3e508b4b40d32100439fc2c00e3049dafda7c096f77ac6->enter($__internal_3f935fbc1974cae1fc3e508b4b40d32100439fc2c00e3049dafda7c096f77ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f935fbc1974cae1fc3e508b4b40d32100439fc2c00e3049dafda7c096f77ac6->leave($__internal_3f935fbc1974cae1fc3e508b4b40d32100439fc2c00e3049dafda7c096f77ac6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c7eb836c26b5e2eab0069e1215726ee83b7632255e11a5eb8659a96515afe99b = $this->env->getExtension("native_profiler");
        $__internal_c7eb836c26b5e2eab0069e1215726ee83b7632255e11a5eb8659a96515afe99b->enter($__internal_c7eb836c26b5e2eab0069e1215726ee83b7632255e11a5eb8659a96515afe99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7eb836c26b5e2eab0069e1215726ee83b7632255e11a5eb8659a96515afe99b->leave($__internal_c7eb836c26b5e2eab0069e1215726ee83b7632255e11a5eb8659a96515afe99b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_672e459da216b3962229eae5d5241fb9f7ce9bff3f8b61b93482f2ae4dfcfd0f = $this->env->getExtension("native_profiler");
        $__internal_672e459da216b3962229eae5d5241fb9f7ce9bff3f8b61b93482f2ae4dfcfd0f->enter($__internal_672e459da216b3962229eae5d5241fb9f7ce9bff3f8b61b93482f2ae4dfcfd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_672e459da216b3962229eae5d5241fb9f7ce9bff3f8b61b93482f2ae4dfcfd0f->leave($__internal_672e459da216b3962229eae5d5241fb9f7ce9bff3f8b61b93482f2ae4dfcfd0f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09e94c48fee608063a11b8a20d71295f2249d8ca68b156897b13f9b32a4e4cff = $this->env->getExtension("native_profiler");
        $__internal_09e94c48fee608063a11b8a20d71295f2249d8ca68b156897b13f9b32a4e4cff->enter($__internal_09e94c48fee608063a11b8a20d71295f2249d8ca68b156897b13f9b32a4e4cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09e94c48fee608063a11b8a20d71295f2249d8ca68b156897b13f9b32a4e4cff->leave($__internal_09e94c48fee608063a11b8a20d71295f2249d8ca68b156897b13f9b32a4e4cff_prof);

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
