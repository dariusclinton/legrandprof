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
        $__internal_3a73863dc52c084d27f3ddfda638b61b32bcc5c6d44c9ed15402be00d092879b = $this->env->getExtension("native_profiler");
        $__internal_3a73863dc52c084d27f3ddfda638b61b32bcc5c6d44c9ed15402be00d092879b->enter($__internal_3a73863dc52c084d27f3ddfda638b61b32bcc5c6d44c9ed15402be00d092879b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a73863dc52c084d27f3ddfda638b61b32bcc5c6d44c9ed15402be00d092879b->leave($__internal_3a73863dc52c084d27f3ddfda638b61b32bcc5c6d44c9ed15402be00d092879b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a795f2f5771e2ae7c79629a6c244199778d44219a818d681b735730e54306d7 = $this->env->getExtension("native_profiler");
        $__internal_2a795f2f5771e2ae7c79629a6c244199778d44219a818d681b735730e54306d7->enter($__internal_2a795f2f5771e2ae7c79629a6c244199778d44219a818d681b735730e54306d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a795f2f5771e2ae7c79629a6c244199778d44219a818d681b735730e54306d7->leave($__internal_2a795f2f5771e2ae7c79629a6c244199778d44219a818d681b735730e54306d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b9a2a18cb426f07aadebe4b410131640b8c5ccf1debbf95b6c3ed8a227be4c2b = $this->env->getExtension("native_profiler");
        $__internal_b9a2a18cb426f07aadebe4b410131640b8c5ccf1debbf95b6c3ed8a227be4c2b->enter($__internal_b9a2a18cb426f07aadebe4b410131640b8c5ccf1debbf95b6c3ed8a227be4c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b9a2a18cb426f07aadebe4b410131640b8c5ccf1debbf95b6c3ed8a227be4c2b->leave($__internal_b9a2a18cb426f07aadebe4b410131640b8c5ccf1debbf95b6c3ed8a227be4c2b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27b955abe610cd77f59f6c82753d0b663591b024da2d0320b8126bcb18cebad7 = $this->env->getExtension("native_profiler");
        $__internal_27b955abe610cd77f59f6c82753d0b663591b024da2d0320b8126bcb18cebad7->enter($__internal_27b955abe610cd77f59f6c82753d0b663591b024da2d0320b8126bcb18cebad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27b955abe610cd77f59f6c82753d0b663591b024da2d0320b8126bcb18cebad7->leave($__internal_27b955abe610cd77f59f6c82753d0b663591b024da2d0320b8126bcb18cebad7_prof);

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
