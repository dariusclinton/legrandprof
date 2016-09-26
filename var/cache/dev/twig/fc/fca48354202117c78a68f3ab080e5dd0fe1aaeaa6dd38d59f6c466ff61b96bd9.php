<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f3446a0d7a9ba67f2180fcfc606e57efd00b990511ba88de04fee30b939eb745 extends Twig_Template
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
        $__internal_046e0797b29689814568e515db1bf1f1e5e21d53765b40e517ad658fbffa6f77 = $this->env->getExtension("native_profiler");
        $__internal_046e0797b29689814568e515db1bf1f1e5e21d53765b40e517ad658fbffa6f77->enter($__internal_046e0797b29689814568e515db1bf1f1e5e21d53765b40e517ad658fbffa6f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_046e0797b29689814568e515db1bf1f1e5e21d53765b40e517ad658fbffa6f77->leave($__internal_046e0797b29689814568e515db1bf1f1e5e21d53765b40e517ad658fbffa6f77_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f333e49ddbaac23b00f85f65d8739c4df82b8668db5996b2609d4a06975477af = $this->env->getExtension("native_profiler");
        $__internal_f333e49ddbaac23b00f85f65d8739c4df82b8668db5996b2609d4a06975477af->enter($__internal_f333e49ddbaac23b00f85f65d8739c4df82b8668db5996b2609d4a06975477af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f333e49ddbaac23b00f85f65d8739c4df82b8668db5996b2609d4a06975477af->leave($__internal_f333e49ddbaac23b00f85f65d8739c4df82b8668db5996b2609d4a06975477af_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f3ef26705fbb518be9df6d3df6f6413c513234d3184dd11340615aab80d3dff6 = $this->env->getExtension("native_profiler");
        $__internal_f3ef26705fbb518be9df6d3df6f6413c513234d3184dd11340615aab80d3dff6->enter($__internal_f3ef26705fbb518be9df6d3df6f6413c513234d3184dd11340615aab80d3dff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f3ef26705fbb518be9df6d3df6f6413c513234d3184dd11340615aab80d3dff6->leave($__internal_f3ef26705fbb518be9df6d3df6f6413c513234d3184dd11340615aab80d3dff6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_215241f4269bc1b0cc2352077d168b006f77cb2dfc47ae21fb23de6c37720479 = $this->env->getExtension("native_profiler");
        $__internal_215241f4269bc1b0cc2352077d168b006f77cb2dfc47ae21fb23de6c37720479->enter($__internal_215241f4269bc1b0cc2352077d168b006f77cb2dfc47ae21fb23de6c37720479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_215241f4269bc1b0cc2352077d168b006f77cb2dfc47ae21fb23de6c37720479->leave($__internal_215241f4269bc1b0cc2352077d168b006f77cb2dfc47ae21fb23de6c37720479_prof);

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

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
