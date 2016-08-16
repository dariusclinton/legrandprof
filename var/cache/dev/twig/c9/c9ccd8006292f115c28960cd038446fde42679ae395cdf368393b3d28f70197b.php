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
        $__internal_69d0be0f22394a310fb0a51105f8e8ad5205e5330d546c9d805fb681ef510c53 = $this->env->getExtension("native_profiler");
        $__internal_69d0be0f22394a310fb0a51105f8e8ad5205e5330d546c9d805fb681ef510c53->enter($__internal_69d0be0f22394a310fb0a51105f8e8ad5205e5330d546c9d805fb681ef510c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69d0be0f22394a310fb0a51105f8e8ad5205e5330d546c9d805fb681ef510c53->leave($__internal_69d0be0f22394a310fb0a51105f8e8ad5205e5330d546c9d805fb681ef510c53_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a96eee835c7f20cf101be254498064abdb0fa810b1844c22f8ce5e8e1eb1e6c = $this->env->getExtension("native_profiler");
        $__internal_2a96eee835c7f20cf101be254498064abdb0fa810b1844c22f8ce5e8e1eb1e6c->enter($__internal_2a96eee835c7f20cf101be254498064abdb0fa810b1844c22f8ce5e8e1eb1e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a96eee835c7f20cf101be254498064abdb0fa810b1844c22f8ce5e8e1eb1e6c->leave($__internal_2a96eee835c7f20cf101be254498064abdb0fa810b1844c22f8ce5e8e1eb1e6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b01100506fee3b8ed52677b8202bcd7a624d173f27b577391da3f986110db55 = $this->env->getExtension("native_profiler");
        $__internal_0b01100506fee3b8ed52677b8202bcd7a624d173f27b577391da3f986110db55->enter($__internal_0b01100506fee3b8ed52677b8202bcd7a624d173f27b577391da3f986110db55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0b01100506fee3b8ed52677b8202bcd7a624d173f27b577391da3f986110db55->leave($__internal_0b01100506fee3b8ed52677b8202bcd7a624d173f27b577391da3f986110db55_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef05221edefb003a0a527d6fbf0a5628bfded36e98af2520fde73796b95227d8 = $this->env->getExtension("native_profiler");
        $__internal_ef05221edefb003a0a527d6fbf0a5628bfded36e98af2520fde73796b95227d8->enter($__internal_ef05221edefb003a0a527d6fbf0a5628bfded36e98af2520fde73796b95227d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ef05221edefb003a0a527d6fbf0a5628bfded36e98af2520fde73796b95227d8->leave($__internal_ef05221edefb003a0a527d6fbf0a5628bfded36e98af2520fde73796b95227d8_prof);

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
