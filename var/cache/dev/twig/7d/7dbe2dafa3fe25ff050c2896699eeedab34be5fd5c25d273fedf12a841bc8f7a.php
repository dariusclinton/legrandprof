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
        $__internal_ae4ff4273ce55fae63677ef5ea9e61abe1c8ebc0fcc41f1c6fd5fa0b885b353e = $this->env->getExtension("native_profiler");
        $__internal_ae4ff4273ce55fae63677ef5ea9e61abe1c8ebc0fcc41f1c6fd5fa0b885b353e->enter($__internal_ae4ff4273ce55fae63677ef5ea9e61abe1c8ebc0fcc41f1c6fd5fa0b885b353e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae4ff4273ce55fae63677ef5ea9e61abe1c8ebc0fcc41f1c6fd5fa0b885b353e->leave($__internal_ae4ff4273ce55fae63677ef5ea9e61abe1c8ebc0fcc41f1c6fd5fa0b885b353e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b2f7582e825db65fbe0a658c39a3bad6e7a4bbf2e21a9c787e0bd4b4125f5980 = $this->env->getExtension("native_profiler");
        $__internal_b2f7582e825db65fbe0a658c39a3bad6e7a4bbf2e21a9c787e0bd4b4125f5980->enter($__internal_b2f7582e825db65fbe0a658c39a3bad6e7a4bbf2e21a9c787e0bd4b4125f5980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b2f7582e825db65fbe0a658c39a3bad6e7a4bbf2e21a9c787e0bd4b4125f5980->leave($__internal_b2f7582e825db65fbe0a658c39a3bad6e7a4bbf2e21a9c787e0bd4b4125f5980_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8168d400fda5289b365b9c634337b5a364f7e49eb470acbfbb10779fe940749 = $this->env->getExtension("native_profiler");
        $__internal_e8168d400fda5289b365b9c634337b5a364f7e49eb470acbfbb10779fe940749->enter($__internal_e8168d400fda5289b365b9c634337b5a364f7e49eb470acbfbb10779fe940749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8168d400fda5289b365b9c634337b5a364f7e49eb470acbfbb10779fe940749->leave($__internal_e8168d400fda5289b365b9c634337b5a364f7e49eb470acbfbb10779fe940749_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4bfe71fecf15eb1d37c3de873124feab53e0ed3bb94ec880ef998df70d5812d1 = $this->env->getExtension("native_profiler");
        $__internal_4bfe71fecf15eb1d37c3de873124feab53e0ed3bb94ec880ef998df70d5812d1->enter($__internal_4bfe71fecf15eb1d37c3de873124feab53e0ed3bb94ec880ef998df70d5812d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4bfe71fecf15eb1d37c3de873124feab53e0ed3bb94ec880ef998df70d5812d1->leave($__internal_4bfe71fecf15eb1d37c3de873124feab53e0ed3bb94ec880ef998df70d5812d1_prof);

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
