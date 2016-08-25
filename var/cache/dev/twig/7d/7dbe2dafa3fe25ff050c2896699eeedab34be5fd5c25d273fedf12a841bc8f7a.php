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
        $__internal_b2b3dc2d2200d8f1926076861aa36e6dddbc070d163992e363fda618c01e5c0b = $this->env->getExtension("native_profiler");
        $__internal_b2b3dc2d2200d8f1926076861aa36e6dddbc070d163992e363fda618c01e5c0b->enter($__internal_b2b3dc2d2200d8f1926076861aa36e6dddbc070d163992e363fda618c01e5c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2b3dc2d2200d8f1926076861aa36e6dddbc070d163992e363fda618c01e5c0b->leave($__internal_b2b3dc2d2200d8f1926076861aa36e6dddbc070d163992e363fda618c01e5c0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2721cf45b7c79529acbfb471f41c24378ac626778d82a55974e1450fe91124ea = $this->env->getExtension("native_profiler");
        $__internal_2721cf45b7c79529acbfb471f41c24378ac626778d82a55974e1450fe91124ea->enter($__internal_2721cf45b7c79529acbfb471f41c24378ac626778d82a55974e1450fe91124ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2721cf45b7c79529acbfb471f41c24378ac626778d82a55974e1450fe91124ea->leave($__internal_2721cf45b7c79529acbfb471f41c24378ac626778d82a55974e1450fe91124ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a8a55a3a1838ac03a68cdcc6939e9d82a909709328e05ad227ed8c1e0f4c1d8 = $this->env->getExtension("native_profiler");
        $__internal_7a8a55a3a1838ac03a68cdcc6939e9d82a909709328e05ad227ed8c1e0f4c1d8->enter($__internal_7a8a55a3a1838ac03a68cdcc6939e9d82a909709328e05ad227ed8c1e0f4c1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7a8a55a3a1838ac03a68cdcc6939e9d82a909709328e05ad227ed8c1e0f4c1d8->leave($__internal_7a8a55a3a1838ac03a68cdcc6939e9d82a909709328e05ad227ed8c1e0f4c1d8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8be974dd89d46f8edccd4487b3e10d6d8fd0d2110a2ab09a4a9332a9b22b1a7c = $this->env->getExtension("native_profiler");
        $__internal_8be974dd89d46f8edccd4487b3e10d6d8fd0d2110a2ab09a4a9332a9b22b1a7c->enter($__internal_8be974dd89d46f8edccd4487b3e10d6d8fd0d2110a2ab09a4a9332a9b22b1a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8be974dd89d46f8edccd4487b3e10d6d8fd0d2110a2ab09a4a9332a9b22b1a7c->leave($__internal_8be974dd89d46f8edccd4487b3e10d6d8fd0d2110a2ab09a4a9332a9b22b1a7c_prof);

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
