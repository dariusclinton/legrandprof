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
        $__internal_cf2996c8a4aad802b22c9bae0377ed763ee17238cb5a8b06ee3b6cdffb0c2b56 = $this->env->getExtension("native_profiler");
        $__internal_cf2996c8a4aad802b22c9bae0377ed763ee17238cb5a8b06ee3b6cdffb0c2b56->enter($__internal_cf2996c8a4aad802b22c9bae0377ed763ee17238cb5a8b06ee3b6cdffb0c2b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf2996c8a4aad802b22c9bae0377ed763ee17238cb5a8b06ee3b6cdffb0c2b56->leave($__internal_cf2996c8a4aad802b22c9bae0377ed763ee17238cb5a8b06ee3b6cdffb0c2b56_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8cc6227f02f319a8c8426911b59eec56cfadbb4b8c79d2c0f9ebb87cf5f529a6 = $this->env->getExtension("native_profiler");
        $__internal_8cc6227f02f319a8c8426911b59eec56cfadbb4b8c79d2c0f9ebb87cf5f529a6->enter($__internal_8cc6227f02f319a8c8426911b59eec56cfadbb4b8c79d2c0f9ebb87cf5f529a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8cc6227f02f319a8c8426911b59eec56cfadbb4b8c79d2c0f9ebb87cf5f529a6->leave($__internal_8cc6227f02f319a8c8426911b59eec56cfadbb4b8c79d2c0f9ebb87cf5f529a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c5266566c78ea685edfa038eb8eaa2235676e5ec2d493c7a41b79f94e9a41f3 = $this->env->getExtension("native_profiler");
        $__internal_6c5266566c78ea685edfa038eb8eaa2235676e5ec2d493c7a41b79f94e9a41f3->enter($__internal_6c5266566c78ea685edfa038eb8eaa2235676e5ec2d493c7a41b79f94e9a41f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c5266566c78ea685edfa038eb8eaa2235676e5ec2d493c7a41b79f94e9a41f3->leave($__internal_6c5266566c78ea685edfa038eb8eaa2235676e5ec2d493c7a41b79f94e9a41f3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bba7acb6a45240d6a4494953a22ca27944837c74a4b163dddb0552bc0a4c9c97 = $this->env->getExtension("native_profiler");
        $__internal_bba7acb6a45240d6a4494953a22ca27944837c74a4b163dddb0552bc0a4c9c97->enter($__internal_bba7acb6a45240d6a4494953a22ca27944837c74a4b163dddb0552bc0a4c9c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bba7acb6a45240d6a4494953a22ca27944837c74a4b163dddb0552bc0a4c9c97->leave($__internal_bba7acb6a45240d6a4494953a22ca27944837c74a4b163dddb0552bc0a4c9c97_prof);

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
