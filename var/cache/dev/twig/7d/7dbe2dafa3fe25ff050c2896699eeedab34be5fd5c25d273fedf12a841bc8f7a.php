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
        $__internal_79a49881f081468619535960716de5b93ba94019e7ead259c39a8a00be60cbe7 = $this->env->getExtension("native_profiler");
        $__internal_79a49881f081468619535960716de5b93ba94019e7ead259c39a8a00be60cbe7->enter($__internal_79a49881f081468619535960716de5b93ba94019e7ead259c39a8a00be60cbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79a49881f081468619535960716de5b93ba94019e7ead259c39a8a00be60cbe7->leave($__internal_79a49881f081468619535960716de5b93ba94019e7ead259c39a8a00be60cbe7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fffe97303d06d348c41fa726db0322b2c4a9a8c1dc961c0c449f2397c4b2dcee = $this->env->getExtension("native_profiler");
        $__internal_fffe97303d06d348c41fa726db0322b2c4a9a8c1dc961c0c449f2397c4b2dcee->enter($__internal_fffe97303d06d348c41fa726db0322b2c4a9a8c1dc961c0c449f2397c4b2dcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fffe97303d06d348c41fa726db0322b2c4a9a8c1dc961c0c449f2397c4b2dcee->leave($__internal_fffe97303d06d348c41fa726db0322b2c4a9a8c1dc961c0c449f2397c4b2dcee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19851735dbe44b674f2ae853d8382f7704182498d1ae038909f235e3c86b0c10 = $this->env->getExtension("native_profiler");
        $__internal_19851735dbe44b674f2ae853d8382f7704182498d1ae038909f235e3c86b0c10->enter($__internal_19851735dbe44b674f2ae853d8382f7704182498d1ae038909f235e3c86b0c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_19851735dbe44b674f2ae853d8382f7704182498d1ae038909f235e3c86b0c10->leave($__internal_19851735dbe44b674f2ae853d8382f7704182498d1ae038909f235e3c86b0c10_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e59f1ad9496366b77e7006b25efe3b0499b42c67c2d5642c017e2fc4db011b0e = $this->env->getExtension("native_profiler");
        $__internal_e59f1ad9496366b77e7006b25efe3b0499b42c67c2d5642c017e2fc4db011b0e->enter($__internal_e59f1ad9496366b77e7006b25efe3b0499b42c67c2d5642c017e2fc4db011b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e59f1ad9496366b77e7006b25efe3b0499b42c67c2d5642c017e2fc4db011b0e->leave($__internal_e59f1ad9496366b77e7006b25efe3b0499b42c67c2d5642c017e2fc4db011b0e_prof);

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
