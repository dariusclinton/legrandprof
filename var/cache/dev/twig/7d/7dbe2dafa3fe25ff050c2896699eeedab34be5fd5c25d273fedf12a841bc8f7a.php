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
        $__internal_b107860d29345196d0a2415fc3ebdb424afe837edf90e81740361f38c651a7cd = $this->env->getExtension("native_profiler");
        $__internal_b107860d29345196d0a2415fc3ebdb424afe837edf90e81740361f38c651a7cd->enter($__internal_b107860d29345196d0a2415fc3ebdb424afe837edf90e81740361f38c651a7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b107860d29345196d0a2415fc3ebdb424afe837edf90e81740361f38c651a7cd->leave($__internal_b107860d29345196d0a2415fc3ebdb424afe837edf90e81740361f38c651a7cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab65daa83911fd4eb3b51e62c05a9871150da0ce21c813445e6874ac297a56e3 = $this->env->getExtension("native_profiler");
        $__internal_ab65daa83911fd4eb3b51e62c05a9871150da0ce21c813445e6874ac297a56e3->enter($__internal_ab65daa83911fd4eb3b51e62c05a9871150da0ce21c813445e6874ac297a56e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab65daa83911fd4eb3b51e62c05a9871150da0ce21c813445e6874ac297a56e3->leave($__internal_ab65daa83911fd4eb3b51e62c05a9871150da0ce21c813445e6874ac297a56e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ec52262fd40c79105235bba0dce4af8cff72edc89f65e16902ad75dc0aa4964 = $this->env->getExtension("native_profiler");
        $__internal_6ec52262fd40c79105235bba0dce4af8cff72edc89f65e16902ad75dc0aa4964->enter($__internal_6ec52262fd40c79105235bba0dce4af8cff72edc89f65e16902ad75dc0aa4964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6ec52262fd40c79105235bba0dce4af8cff72edc89f65e16902ad75dc0aa4964->leave($__internal_6ec52262fd40c79105235bba0dce4af8cff72edc89f65e16902ad75dc0aa4964_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7de77731308527fbc34b771f9a66c1a6f45e3443359cce5f563b99d21a99281b = $this->env->getExtension("native_profiler");
        $__internal_7de77731308527fbc34b771f9a66c1a6f45e3443359cce5f563b99d21a99281b->enter($__internal_7de77731308527fbc34b771f9a66c1a6f45e3443359cce5f563b99d21a99281b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7de77731308527fbc34b771f9a66c1a6f45e3443359cce5f563b99d21a99281b->leave($__internal_7de77731308527fbc34b771f9a66c1a6f45e3443359cce5f563b99d21a99281b_prof);

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
