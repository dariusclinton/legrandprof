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
        $__internal_c15978d09c4ca9eb26853b66804c42938ea4f3e64efb35925e623a8d9ecdfe4d = $this->env->getExtension("native_profiler");
        $__internal_c15978d09c4ca9eb26853b66804c42938ea4f3e64efb35925e623a8d9ecdfe4d->enter($__internal_c15978d09c4ca9eb26853b66804c42938ea4f3e64efb35925e623a8d9ecdfe4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c15978d09c4ca9eb26853b66804c42938ea4f3e64efb35925e623a8d9ecdfe4d->leave($__internal_c15978d09c4ca9eb26853b66804c42938ea4f3e64efb35925e623a8d9ecdfe4d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9813ec8a61bfc6278f18a859c8343a0270abfad4c6c911cd34bd2766c563c231 = $this->env->getExtension("native_profiler");
        $__internal_9813ec8a61bfc6278f18a859c8343a0270abfad4c6c911cd34bd2766c563c231->enter($__internal_9813ec8a61bfc6278f18a859c8343a0270abfad4c6c911cd34bd2766c563c231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9813ec8a61bfc6278f18a859c8343a0270abfad4c6c911cd34bd2766c563c231->leave($__internal_9813ec8a61bfc6278f18a859c8343a0270abfad4c6c911cd34bd2766c563c231_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_579c6df2298fc05f73e5e0eee474e1524946e82f5d2015228a2bae7928a1a9cc = $this->env->getExtension("native_profiler");
        $__internal_579c6df2298fc05f73e5e0eee474e1524946e82f5d2015228a2bae7928a1a9cc->enter($__internal_579c6df2298fc05f73e5e0eee474e1524946e82f5d2015228a2bae7928a1a9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_579c6df2298fc05f73e5e0eee474e1524946e82f5d2015228a2bae7928a1a9cc->leave($__internal_579c6df2298fc05f73e5e0eee474e1524946e82f5d2015228a2bae7928a1a9cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4ada1a1a751c49c31316dfe3ba6ad62ba146fab04ec7fa292ad721670d88e40 = $this->env->getExtension("native_profiler");
        $__internal_a4ada1a1a751c49c31316dfe3ba6ad62ba146fab04ec7fa292ad721670d88e40->enter($__internal_a4ada1a1a751c49c31316dfe3ba6ad62ba146fab04ec7fa292ad721670d88e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a4ada1a1a751c49c31316dfe3ba6ad62ba146fab04ec7fa292ad721670d88e40->leave($__internal_a4ada1a1a751c49c31316dfe3ba6ad62ba146fab04ec7fa292ad721670d88e40_prof);

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
