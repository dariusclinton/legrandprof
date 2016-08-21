<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_612fe1cd77c47339cbc2a0e68fcda4ab1300b032dd7be1e2c9885af0eaca677b extends Twig_Template
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
        $__internal_d9a57c2d2245fa1efb211978fafca8d0dfaf2addbd328a52158cedd3a6dcd527 = $this->env->getExtension("native_profiler");
        $__internal_d9a57c2d2245fa1efb211978fafca8d0dfaf2addbd328a52158cedd3a6dcd527->enter($__internal_d9a57c2d2245fa1efb211978fafca8d0dfaf2addbd328a52158cedd3a6dcd527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9a57c2d2245fa1efb211978fafca8d0dfaf2addbd328a52158cedd3a6dcd527->leave($__internal_d9a57c2d2245fa1efb211978fafca8d0dfaf2addbd328a52158cedd3a6dcd527_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_62b77589ef143dffb065fcf4c8403b1e2a0d391e41be84d4ef042173d944e9e5 = $this->env->getExtension("native_profiler");
        $__internal_62b77589ef143dffb065fcf4c8403b1e2a0d391e41be84d4ef042173d944e9e5->enter($__internal_62b77589ef143dffb065fcf4c8403b1e2a0d391e41be84d4ef042173d944e9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_62b77589ef143dffb065fcf4c8403b1e2a0d391e41be84d4ef042173d944e9e5->leave($__internal_62b77589ef143dffb065fcf4c8403b1e2a0d391e41be84d4ef042173d944e9e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_482dda425e3646ae279854d3716b07093d8146c0237f2300e102b0a370de7bab = $this->env->getExtension("native_profiler");
        $__internal_482dda425e3646ae279854d3716b07093d8146c0237f2300e102b0a370de7bab->enter($__internal_482dda425e3646ae279854d3716b07093d8146c0237f2300e102b0a370de7bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_482dda425e3646ae279854d3716b07093d8146c0237f2300e102b0a370de7bab->leave($__internal_482dda425e3646ae279854d3716b07093d8146c0237f2300e102b0a370de7bab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b8b9b234fae0f6e70be49ae71295f4727b6ada5994d1726de35a25bfcdc9f85 = $this->env->getExtension("native_profiler");
        $__internal_5b8b9b234fae0f6e70be49ae71295f4727b6ada5994d1726de35a25bfcdc9f85->enter($__internal_5b8b9b234fae0f6e70be49ae71295f4727b6ada5994d1726de35a25bfcdc9f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b8b9b234fae0f6e70be49ae71295f4727b6ada5994d1726de35a25bfcdc9f85->leave($__internal_5b8b9b234fae0f6e70be49ae71295f4727b6ada5994d1726de35a25bfcdc9f85_prof);

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
