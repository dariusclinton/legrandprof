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
        $__internal_4152560bd1eafb43bb6f6ee3c08b436d83f72aaaa0f3e20c98f42508853e2965 = $this->env->getExtension("native_profiler");
        $__internal_4152560bd1eafb43bb6f6ee3c08b436d83f72aaaa0f3e20c98f42508853e2965->enter($__internal_4152560bd1eafb43bb6f6ee3c08b436d83f72aaaa0f3e20c98f42508853e2965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4152560bd1eafb43bb6f6ee3c08b436d83f72aaaa0f3e20c98f42508853e2965->leave($__internal_4152560bd1eafb43bb6f6ee3c08b436d83f72aaaa0f3e20c98f42508853e2965_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e99a48b75a6165e1063bdbc755e1652f47c747f489d81dcda9ad7fd40f5861c5 = $this->env->getExtension("native_profiler");
        $__internal_e99a48b75a6165e1063bdbc755e1652f47c747f489d81dcda9ad7fd40f5861c5->enter($__internal_e99a48b75a6165e1063bdbc755e1652f47c747f489d81dcda9ad7fd40f5861c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e99a48b75a6165e1063bdbc755e1652f47c747f489d81dcda9ad7fd40f5861c5->leave($__internal_e99a48b75a6165e1063bdbc755e1652f47c747f489d81dcda9ad7fd40f5861c5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b7f77df72b595a64edb4fad43e7f8287951364e02c1cc2c2243de53bf85c4cb = $this->env->getExtension("native_profiler");
        $__internal_2b7f77df72b595a64edb4fad43e7f8287951364e02c1cc2c2243de53bf85c4cb->enter($__internal_2b7f77df72b595a64edb4fad43e7f8287951364e02c1cc2c2243de53bf85c4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b7f77df72b595a64edb4fad43e7f8287951364e02c1cc2c2243de53bf85c4cb->leave($__internal_2b7f77df72b595a64edb4fad43e7f8287951364e02c1cc2c2243de53bf85c4cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ddfa8665e1774723e1a53725b644f61b9363811419a65e78973672d846178957 = $this->env->getExtension("native_profiler");
        $__internal_ddfa8665e1774723e1a53725b644f61b9363811419a65e78973672d846178957->enter($__internal_ddfa8665e1774723e1a53725b644f61b9363811419a65e78973672d846178957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ddfa8665e1774723e1a53725b644f61b9363811419a65e78973672d846178957->leave($__internal_ddfa8665e1774723e1a53725b644f61b9363811419a65e78973672d846178957_prof);

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
