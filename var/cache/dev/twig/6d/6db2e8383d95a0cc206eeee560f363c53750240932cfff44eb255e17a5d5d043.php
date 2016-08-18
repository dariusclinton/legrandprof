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
        $__internal_796b0c0a4c491599310ae9867db341b6b75aa86f495301531bb7383342b20552 = $this->env->getExtension("native_profiler");
        $__internal_796b0c0a4c491599310ae9867db341b6b75aa86f495301531bb7383342b20552->enter($__internal_796b0c0a4c491599310ae9867db341b6b75aa86f495301531bb7383342b20552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_796b0c0a4c491599310ae9867db341b6b75aa86f495301531bb7383342b20552->leave($__internal_796b0c0a4c491599310ae9867db341b6b75aa86f495301531bb7383342b20552_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_196dc86d007ef3ac66d318f70c7700159dfac2a8d530f7109f793c542fb0dfbe = $this->env->getExtension("native_profiler");
        $__internal_196dc86d007ef3ac66d318f70c7700159dfac2a8d530f7109f793c542fb0dfbe->enter($__internal_196dc86d007ef3ac66d318f70c7700159dfac2a8d530f7109f793c542fb0dfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_196dc86d007ef3ac66d318f70c7700159dfac2a8d530f7109f793c542fb0dfbe->leave($__internal_196dc86d007ef3ac66d318f70c7700159dfac2a8d530f7109f793c542fb0dfbe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd7ee73d10b7ced47a13c0473f5ee87ce26222c8ced7f2a59c07a37f87298b2e = $this->env->getExtension("native_profiler");
        $__internal_bd7ee73d10b7ced47a13c0473f5ee87ce26222c8ced7f2a59c07a37f87298b2e->enter($__internal_bd7ee73d10b7ced47a13c0473f5ee87ce26222c8ced7f2a59c07a37f87298b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd7ee73d10b7ced47a13c0473f5ee87ce26222c8ced7f2a59c07a37f87298b2e->leave($__internal_bd7ee73d10b7ced47a13c0473f5ee87ce26222c8ced7f2a59c07a37f87298b2e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5813cce4f32f96f86fb145d16e268287cb2304f3c34d34009613019e28765007 = $this->env->getExtension("native_profiler");
        $__internal_5813cce4f32f96f86fb145d16e268287cb2304f3c34d34009613019e28765007->enter($__internal_5813cce4f32f96f86fb145d16e268287cb2304f3c34d34009613019e28765007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5813cce4f32f96f86fb145d16e268287cb2304f3c34d34009613019e28765007->leave($__internal_5813cce4f32f96f86fb145d16e268287cb2304f3c34d34009613019e28765007_prof);

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
