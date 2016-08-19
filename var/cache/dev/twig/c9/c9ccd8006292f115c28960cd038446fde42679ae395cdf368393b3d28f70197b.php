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
        $__internal_61b796ef810b1ca26cb3ac85faa0657d4aa349ebabd70a8b0c34e01586a79f1f = $this->env->getExtension("native_profiler");
        $__internal_61b796ef810b1ca26cb3ac85faa0657d4aa349ebabd70a8b0c34e01586a79f1f->enter($__internal_61b796ef810b1ca26cb3ac85faa0657d4aa349ebabd70a8b0c34e01586a79f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61b796ef810b1ca26cb3ac85faa0657d4aa349ebabd70a8b0c34e01586a79f1f->leave($__internal_61b796ef810b1ca26cb3ac85faa0657d4aa349ebabd70a8b0c34e01586a79f1f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_785ef0b60077044a9447a64591678bc961ae0657b733b3bc7411b48515c8ccd0 = $this->env->getExtension("native_profiler");
        $__internal_785ef0b60077044a9447a64591678bc961ae0657b733b3bc7411b48515c8ccd0->enter($__internal_785ef0b60077044a9447a64591678bc961ae0657b733b3bc7411b48515c8ccd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_785ef0b60077044a9447a64591678bc961ae0657b733b3bc7411b48515c8ccd0->leave($__internal_785ef0b60077044a9447a64591678bc961ae0657b733b3bc7411b48515c8ccd0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a03ce80ff7b91b791cbdf115fdc8a5795c26aad3088e17e40167fb4bf4000be8 = $this->env->getExtension("native_profiler");
        $__internal_a03ce80ff7b91b791cbdf115fdc8a5795c26aad3088e17e40167fb4bf4000be8->enter($__internal_a03ce80ff7b91b791cbdf115fdc8a5795c26aad3088e17e40167fb4bf4000be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a03ce80ff7b91b791cbdf115fdc8a5795c26aad3088e17e40167fb4bf4000be8->leave($__internal_a03ce80ff7b91b791cbdf115fdc8a5795c26aad3088e17e40167fb4bf4000be8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c5947e8949ff978b99092fee67f1186850c5c5fa812709a524cbf9df1f33eaa = $this->env->getExtension("native_profiler");
        $__internal_7c5947e8949ff978b99092fee67f1186850c5c5fa812709a524cbf9df1f33eaa->enter($__internal_7c5947e8949ff978b99092fee67f1186850c5c5fa812709a524cbf9df1f33eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7c5947e8949ff978b99092fee67f1186850c5c5fa812709a524cbf9df1f33eaa->leave($__internal_7c5947e8949ff978b99092fee67f1186850c5c5fa812709a524cbf9df1f33eaa_prof);

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
