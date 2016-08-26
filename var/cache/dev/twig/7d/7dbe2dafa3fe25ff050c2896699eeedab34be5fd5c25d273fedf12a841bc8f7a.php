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
        $__internal_39193939cd553214f125d94600fabb2770ed01df1ae9f07a0feec122b3da497b = $this->env->getExtension("native_profiler");
        $__internal_39193939cd553214f125d94600fabb2770ed01df1ae9f07a0feec122b3da497b->enter($__internal_39193939cd553214f125d94600fabb2770ed01df1ae9f07a0feec122b3da497b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39193939cd553214f125d94600fabb2770ed01df1ae9f07a0feec122b3da497b->leave($__internal_39193939cd553214f125d94600fabb2770ed01df1ae9f07a0feec122b3da497b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5ba9e6b68a1790b2749038bbc902b07a90543f9da406072a16988d6eeded5ea = $this->env->getExtension("native_profiler");
        $__internal_f5ba9e6b68a1790b2749038bbc902b07a90543f9da406072a16988d6eeded5ea->enter($__internal_f5ba9e6b68a1790b2749038bbc902b07a90543f9da406072a16988d6eeded5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f5ba9e6b68a1790b2749038bbc902b07a90543f9da406072a16988d6eeded5ea->leave($__internal_f5ba9e6b68a1790b2749038bbc902b07a90543f9da406072a16988d6eeded5ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60380bdc49efd5ac878c5a93f291a87d6820f7ac33a7d2b0bbc2ecb18c7d2bf9 = $this->env->getExtension("native_profiler");
        $__internal_60380bdc49efd5ac878c5a93f291a87d6820f7ac33a7d2b0bbc2ecb18c7d2bf9->enter($__internal_60380bdc49efd5ac878c5a93f291a87d6820f7ac33a7d2b0bbc2ecb18c7d2bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_60380bdc49efd5ac878c5a93f291a87d6820f7ac33a7d2b0bbc2ecb18c7d2bf9->leave($__internal_60380bdc49efd5ac878c5a93f291a87d6820f7ac33a7d2b0bbc2ecb18c7d2bf9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a646e0d945fcd5b7f2a0915cbbed5d80617afa38ec5df265113b2cf1393a5d88 = $this->env->getExtension("native_profiler");
        $__internal_a646e0d945fcd5b7f2a0915cbbed5d80617afa38ec5df265113b2cf1393a5d88->enter($__internal_a646e0d945fcd5b7f2a0915cbbed5d80617afa38ec5df265113b2cf1393a5d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a646e0d945fcd5b7f2a0915cbbed5d80617afa38ec5df265113b2cf1393a5d88->leave($__internal_a646e0d945fcd5b7f2a0915cbbed5d80617afa38ec5df265113b2cf1393a5d88_prof);

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
