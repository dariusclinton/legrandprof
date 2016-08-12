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
        $__internal_3e7f676fdc1b43ea689067030d63589d4678de1b4e704a63ce149949f73df763 = $this->env->getExtension("native_profiler");
        $__internal_3e7f676fdc1b43ea689067030d63589d4678de1b4e704a63ce149949f73df763->enter($__internal_3e7f676fdc1b43ea689067030d63589d4678de1b4e704a63ce149949f73df763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e7f676fdc1b43ea689067030d63589d4678de1b4e704a63ce149949f73df763->leave($__internal_3e7f676fdc1b43ea689067030d63589d4678de1b4e704a63ce149949f73df763_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d498909119385b9d259f1ac71b7b6cc48639c6a07e87239025286da8943e79e = $this->env->getExtension("native_profiler");
        $__internal_9d498909119385b9d259f1ac71b7b6cc48639c6a07e87239025286da8943e79e->enter($__internal_9d498909119385b9d259f1ac71b7b6cc48639c6a07e87239025286da8943e79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d498909119385b9d259f1ac71b7b6cc48639c6a07e87239025286da8943e79e->leave($__internal_9d498909119385b9d259f1ac71b7b6cc48639c6a07e87239025286da8943e79e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c25b3b524b1506650112b87533d0e8e0649c261f8e3601cb47b992ffc4a7f715 = $this->env->getExtension("native_profiler");
        $__internal_c25b3b524b1506650112b87533d0e8e0649c261f8e3601cb47b992ffc4a7f715->enter($__internal_c25b3b524b1506650112b87533d0e8e0649c261f8e3601cb47b992ffc4a7f715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c25b3b524b1506650112b87533d0e8e0649c261f8e3601cb47b992ffc4a7f715->leave($__internal_c25b3b524b1506650112b87533d0e8e0649c261f8e3601cb47b992ffc4a7f715_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14c789d7611b79be41b3a8aa8468a210c665459b277344ac7c8a662d6218b4bb = $this->env->getExtension("native_profiler");
        $__internal_14c789d7611b79be41b3a8aa8468a210c665459b277344ac7c8a662d6218b4bb->enter($__internal_14c789d7611b79be41b3a8aa8468a210c665459b277344ac7c8a662d6218b4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_14c789d7611b79be41b3a8aa8468a210c665459b277344ac7c8a662d6218b4bb->leave($__internal_14c789d7611b79be41b3a8aa8468a210c665459b277344ac7c8a662d6218b4bb_prof);

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
