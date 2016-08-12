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
        $__internal_0495f644ab8d0fdeef05c85607d85a577d52dcf5ca4c49802f33dd02a18c984c = $this->env->getExtension("native_profiler");
        $__internal_0495f644ab8d0fdeef05c85607d85a577d52dcf5ca4c49802f33dd02a18c984c->enter($__internal_0495f644ab8d0fdeef05c85607d85a577d52dcf5ca4c49802f33dd02a18c984c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0495f644ab8d0fdeef05c85607d85a577d52dcf5ca4c49802f33dd02a18c984c->leave($__internal_0495f644ab8d0fdeef05c85607d85a577d52dcf5ca4c49802f33dd02a18c984c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9d69992225d6e043bf7afad292004242319fdc1d05447b28843e5ae13de36e5 = $this->env->getExtension("native_profiler");
        $__internal_c9d69992225d6e043bf7afad292004242319fdc1d05447b28843e5ae13de36e5->enter($__internal_c9d69992225d6e043bf7afad292004242319fdc1d05447b28843e5ae13de36e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9d69992225d6e043bf7afad292004242319fdc1d05447b28843e5ae13de36e5->leave($__internal_c9d69992225d6e043bf7afad292004242319fdc1d05447b28843e5ae13de36e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac852c230ff94a736062c8f28bf503793d4684402eb2e4cc561fb21a294d22f2 = $this->env->getExtension("native_profiler");
        $__internal_ac852c230ff94a736062c8f28bf503793d4684402eb2e4cc561fb21a294d22f2->enter($__internal_ac852c230ff94a736062c8f28bf503793d4684402eb2e4cc561fb21a294d22f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ac852c230ff94a736062c8f28bf503793d4684402eb2e4cc561fb21a294d22f2->leave($__internal_ac852c230ff94a736062c8f28bf503793d4684402eb2e4cc561fb21a294d22f2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_679903744e643b12c9929203cfc5a713aaafbc27ed0b7f3128ad6ad5d97b3109 = $this->env->getExtension("native_profiler");
        $__internal_679903744e643b12c9929203cfc5a713aaafbc27ed0b7f3128ad6ad5d97b3109->enter($__internal_679903744e643b12c9929203cfc5a713aaafbc27ed0b7f3128ad6ad5d97b3109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_679903744e643b12c9929203cfc5a713aaafbc27ed0b7f3128ad6ad5d97b3109->leave($__internal_679903744e643b12c9929203cfc5a713aaafbc27ed0b7f3128ad6ad5d97b3109_prof);

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
