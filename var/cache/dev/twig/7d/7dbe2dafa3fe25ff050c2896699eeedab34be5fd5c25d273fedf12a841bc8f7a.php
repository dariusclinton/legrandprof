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
        $__internal_72547fff7db9e849301b203240a8061c441b573c50c3d47a3d5aa7635586b038 = $this->env->getExtension("native_profiler");
        $__internal_72547fff7db9e849301b203240a8061c441b573c50c3d47a3d5aa7635586b038->enter($__internal_72547fff7db9e849301b203240a8061c441b573c50c3d47a3d5aa7635586b038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72547fff7db9e849301b203240a8061c441b573c50c3d47a3d5aa7635586b038->leave($__internal_72547fff7db9e849301b203240a8061c441b573c50c3d47a3d5aa7635586b038_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c5a71285eaf1eeed6bfbc1d4d5101cd65032d19a4e94c87fb969e419dc9f55c6 = $this->env->getExtension("native_profiler");
        $__internal_c5a71285eaf1eeed6bfbc1d4d5101cd65032d19a4e94c87fb969e419dc9f55c6->enter($__internal_c5a71285eaf1eeed6bfbc1d4d5101cd65032d19a4e94c87fb969e419dc9f55c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c5a71285eaf1eeed6bfbc1d4d5101cd65032d19a4e94c87fb969e419dc9f55c6->leave($__internal_c5a71285eaf1eeed6bfbc1d4d5101cd65032d19a4e94c87fb969e419dc9f55c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5720acd557606a7cfcb56952bd8260326969c355ed6cf45c0a4654993c4e1fd2 = $this->env->getExtension("native_profiler");
        $__internal_5720acd557606a7cfcb56952bd8260326969c355ed6cf45c0a4654993c4e1fd2->enter($__internal_5720acd557606a7cfcb56952bd8260326969c355ed6cf45c0a4654993c4e1fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5720acd557606a7cfcb56952bd8260326969c355ed6cf45c0a4654993c4e1fd2->leave($__internal_5720acd557606a7cfcb56952bd8260326969c355ed6cf45c0a4654993c4e1fd2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84668a88109590f169740faa9f2a708d8e8403e464d60fb7c39a0cccc5442576 = $this->env->getExtension("native_profiler");
        $__internal_84668a88109590f169740faa9f2a708d8e8403e464d60fb7c39a0cccc5442576->enter($__internal_84668a88109590f169740faa9f2a708d8e8403e464d60fb7c39a0cccc5442576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_84668a88109590f169740faa9f2a708d8e8403e464d60fb7c39a0cccc5442576->leave($__internal_84668a88109590f169740faa9f2a708d8e8403e464d60fb7c39a0cccc5442576_prof);

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
