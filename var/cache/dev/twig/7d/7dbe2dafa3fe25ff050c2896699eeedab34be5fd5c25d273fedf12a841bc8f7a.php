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
        $__internal_66c3a5ccd660d923dd3bba4e091e439ca4069a37452043d26f36ea59992d69f9 = $this->env->getExtension("native_profiler");
        $__internal_66c3a5ccd660d923dd3bba4e091e439ca4069a37452043d26f36ea59992d69f9->enter($__internal_66c3a5ccd660d923dd3bba4e091e439ca4069a37452043d26f36ea59992d69f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66c3a5ccd660d923dd3bba4e091e439ca4069a37452043d26f36ea59992d69f9->leave($__internal_66c3a5ccd660d923dd3bba4e091e439ca4069a37452043d26f36ea59992d69f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba1514f2a55ac94ab9e8fb82f4b465bd676832686c2bd8671eed9802e5d29109 = $this->env->getExtension("native_profiler");
        $__internal_ba1514f2a55ac94ab9e8fb82f4b465bd676832686c2bd8671eed9802e5d29109->enter($__internal_ba1514f2a55ac94ab9e8fb82f4b465bd676832686c2bd8671eed9802e5d29109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba1514f2a55ac94ab9e8fb82f4b465bd676832686c2bd8671eed9802e5d29109->leave($__internal_ba1514f2a55ac94ab9e8fb82f4b465bd676832686c2bd8671eed9802e5d29109_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5614b5d003ac015f10637748d706004ee58592f02ccd6f2df1abe32a43671575 = $this->env->getExtension("native_profiler");
        $__internal_5614b5d003ac015f10637748d706004ee58592f02ccd6f2df1abe32a43671575->enter($__internal_5614b5d003ac015f10637748d706004ee58592f02ccd6f2df1abe32a43671575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5614b5d003ac015f10637748d706004ee58592f02ccd6f2df1abe32a43671575->leave($__internal_5614b5d003ac015f10637748d706004ee58592f02ccd6f2df1abe32a43671575_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_455625f333e3d33d471d15a9f81b2c3921cd7c732c1285612b5abfd3533e2f0c = $this->env->getExtension("native_profiler");
        $__internal_455625f333e3d33d471d15a9f81b2c3921cd7c732c1285612b5abfd3533e2f0c->enter($__internal_455625f333e3d33d471d15a9f81b2c3921cd7c732c1285612b5abfd3533e2f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_455625f333e3d33d471d15a9f81b2c3921cd7c732c1285612b5abfd3533e2f0c->leave($__internal_455625f333e3d33d471d15a9f81b2c3921cd7c732c1285612b5abfd3533e2f0c_prof);

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
