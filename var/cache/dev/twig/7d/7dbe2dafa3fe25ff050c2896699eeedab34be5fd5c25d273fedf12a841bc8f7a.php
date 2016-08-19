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
        $__internal_21add8d827d149d648931acf4ed2419397491651225bdae221a434db71e32b63 = $this->env->getExtension("native_profiler");
        $__internal_21add8d827d149d648931acf4ed2419397491651225bdae221a434db71e32b63->enter($__internal_21add8d827d149d648931acf4ed2419397491651225bdae221a434db71e32b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21add8d827d149d648931acf4ed2419397491651225bdae221a434db71e32b63->leave($__internal_21add8d827d149d648931acf4ed2419397491651225bdae221a434db71e32b63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f2b506aefea21c561b202a5b8f8f5fc47c8af1863541f3407f79522e93ab5bb = $this->env->getExtension("native_profiler");
        $__internal_0f2b506aefea21c561b202a5b8f8f5fc47c8af1863541f3407f79522e93ab5bb->enter($__internal_0f2b506aefea21c561b202a5b8f8f5fc47c8af1863541f3407f79522e93ab5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0f2b506aefea21c561b202a5b8f8f5fc47c8af1863541f3407f79522e93ab5bb->leave($__internal_0f2b506aefea21c561b202a5b8f8f5fc47c8af1863541f3407f79522e93ab5bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53903f912e762727e3ddafa640e4b4cb859711d8abba01be343916758a55bda9 = $this->env->getExtension("native_profiler");
        $__internal_53903f912e762727e3ddafa640e4b4cb859711d8abba01be343916758a55bda9->enter($__internal_53903f912e762727e3ddafa640e4b4cb859711d8abba01be343916758a55bda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_53903f912e762727e3ddafa640e4b4cb859711d8abba01be343916758a55bda9->leave($__internal_53903f912e762727e3ddafa640e4b4cb859711d8abba01be343916758a55bda9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_178b88e91baac071262f9a393a85628a5d75a8cad678e4e41aa1bb00eec5ffa9 = $this->env->getExtension("native_profiler");
        $__internal_178b88e91baac071262f9a393a85628a5d75a8cad678e4e41aa1bb00eec5ffa9->enter($__internal_178b88e91baac071262f9a393a85628a5d75a8cad678e4e41aa1bb00eec5ffa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_178b88e91baac071262f9a393a85628a5d75a8cad678e4e41aa1bb00eec5ffa9->leave($__internal_178b88e91baac071262f9a393a85628a5d75a8cad678e4e41aa1bb00eec5ffa9_prof);

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
