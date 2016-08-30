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
        $__internal_58f934c30f6300900ebd40661e9bfc77eeb4762603e08307dcd6944852a3d93c = $this->env->getExtension("native_profiler");
        $__internal_58f934c30f6300900ebd40661e9bfc77eeb4762603e08307dcd6944852a3d93c->enter($__internal_58f934c30f6300900ebd40661e9bfc77eeb4762603e08307dcd6944852a3d93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58f934c30f6300900ebd40661e9bfc77eeb4762603e08307dcd6944852a3d93c->leave($__internal_58f934c30f6300900ebd40661e9bfc77eeb4762603e08307dcd6944852a3d93c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08f18c2c84d5c7a431ac30ee4ba9fa6f7c9f78246a271a93d43cf6e1d4de2a19 = $this->env->getExtension("native_profiler");
        $__internal_08f18c2c84d5c7a431ac30ee4ba9fa6f7c9f78246a271a93d43cf6e1d4de2a19->enter($__internal_08f18c2c84d5c7a431ac30ee4ba9fa6f7c9f78246a271a93d43cf6e1d4de2a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_08f18c2c84d5c7a431ac30ee4ba9fa6f7c9f78246a271a93d43cf6e1d4de2a19->leave($__internal_08f18c2c84d5c7a431ac30ee4ba9fa6f7c9f78246a271a93d43cf6e1d4de2a19_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_283aca67919d87a2ba4cb06aeb33b1e7fbc79c6818ca7bd7771d392545fbce5e = $this->env->getExtension("native_profiler");
        $__internal_283aca67919d87a2ba4cb06aeb33b1e7fbc79c6818ca7bd7771d392545fbce5e->enter($__internal_283aca67919d87a2ba4cb06aeb33b1e7fbc79c6818ca7bd7771d392545fbce5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_283aca67919d87a2ba4cb06aeb33b1e7fbc79c6818ca7bd7771d392545fbce5e->leave($__internal_283aca67919d87a2ba4cb06aeb33b1e7fbc79c6818ca7bd7771d392545fbce5e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4213e4b4e4056b9dea0e509d41b4413022cb00c32a5bc6ad13a47254e6a616fd = $this->env->getExtension("native_profiler");
        $__internal_4213e4b4e4056b9dea0e509d41b4413022cb00c32a5bc6ad13a47254e6a616fd->enter($__internal_4213e4b4e4056b9dea0e509d41b4413022cb00c32a5bc6ad13a47254e6a616fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4213e4b4e4056b9dea0e509d41b4413022cb00c32a5bc6ad13a47254e6a616fd->leave($__internal_4213e4b4e4056b9dea0e509d41b4413022cb00c32a5bc6ad13a47254e6a616fd_prof);

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
