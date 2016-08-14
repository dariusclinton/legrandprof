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
        $__internal_084490129ec73a8360c0c34a10611df8d73b1696539d8703c66f33fa29dfc546 = $this->env->getExtension("native_profiler");
        $__internal_084490129ec73a8360c0c34a10611df8d73b1696539d8703c66f33fa29dfc546->enter($__internal_084490129ec73a8360c0c34a10611df8d73b1696539d8703c66f33fa29dfc546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_084490129ec73a8360c0c34a10611df8d73b1696539d8703c66f33fa29dfc546->leave($__internal_084490129ec73a8360c0c34a10611df8d73b1696539d8703c66f33fa29dfc546_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_543f78e21d868ff5879b90a478bdfaca0697896f9bbb735e3eb7bbc73add021c = $this->env->getExtension("native_profiler");
        $__internal_543f78e21d868ff5879b90a478bdfaca0697896f9bbb735e3eb7bbc73add021c->enter($__internal_543f78e21d868ff5879b90a478bdfaca0697896f9bbb735e3eb7bbc73add021c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_543f78e21d868ff5879b90a478bdfaca0697896f9bbb735e3eb7bbc73add021c->leave($__internal_543f78e21d868ff5879b90a478bdfaca0697896f9bbb735e3eb7bbc73add021c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_358b44a3fc335e0feaaeaa5114392f84a6a62ff736ac4f3a4f6a47a03281cc64 = $this->env->getExtension("native_profiler");
        $__internal_358b44a3fc335e0feaaeaa5114392f84a6a62ff736ac4f3a4f6a47a03281cc64->enter($__internal_358b44a3fc335e0feaaeaa5114392f84a6a62ff736ac4f3a4f6a47a03281cc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_358b44a3fc335e0feaaeaa5114392f84a6a62ff736ac4f3a4f6a47a03281cc64->leave($__internal_358b44a3fc335e0feaaeaa5114392f84a6a62ff736ac4f3a4f6a47a03281cc64_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_97d8db9a1f966aed82baef4698502f549d0956de348e307d98ac9d7c14b5f8a5 = $this->env->getExtension("native_profiler");
        $__internal_97d8db9a1f966aed82baef4698502f549d0956de348e307d98ac9d7c14b5f8a5->enter($__internal_97d8db9a1f966aed82baef4698502f549d0956de348e307d98ac9d7c14b5f8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_97d8db9a1f966aed82baef4698502f549d0956de348e307d98ac9d7c14b5f8a5->leave($__internal_97d8db9a1f966aed82baef4698502f549d0956de348e307d98ac9d7c14b5f8a5_prof);

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
