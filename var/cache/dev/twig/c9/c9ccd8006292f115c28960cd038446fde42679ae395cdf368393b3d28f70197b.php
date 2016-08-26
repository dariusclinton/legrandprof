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
        $__internal_f6e3ac7acbb845aabde6b3391896c7f474bfc3a1f2061a65df0c41cf8982b665 = $this->env->getExtension("native_profiler");
        $__internal_f6e3ac7acbb845aabde6b3391896c7f474bfc3a1f2061a65df0c41cf8982b665->enter($__internal_f6e3ac7acbb845aabde6b3391896c7f474bfc3a1f2061a65df0c41cf8982b665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e3ac7acbb845aabde6b3391896c7f474bfc3a1f2061a65df0c41cf8982b665->leave($__internal_f6e3ac7acbb845aabde6b3391896c7f474bfc3a1f2061a65df0c41cf8982b665_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bbaa8382ee3a8417c7db4961b7d88eb264d9a4a0008bccbc17566fac9c79dd9b = $this->env->getExtension("native_profiler");
        $__internal_bbaa8382ee3a8417c7db4961b7d88eb264d9a4a0008bccbc17566fac9c79dd9b->enter($__internal_bbaa8382ee3a8417c7db4961b7d88eb264d9a4a0008bccbc17566fac9c79dd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bbaa8382ee3a8417c7db4961b7d88eb264d9a4a0008bccbc17566fac9c79dd9b->leave($__internal_bbaa8382ee3a8417c7db4961b7d88eb264d9a4a0008bccbc17566fac9c79dd9b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c6e7d7a4bb359e24e4d32b165d05fa67d8a2afcc965eb132d1c534ec711ec36 = $this->env->getExtension("native_profiler");
        $__internal_6c6e7d7a4bb359e24e4d32b165d05fa67d8a2afcc965eb132d1c534ec711ec36->enter($__internal_6c6e7d7a4bb359e24e4d32b165d05fa67d8a2afcc965eb132d1c534ec711ec36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c6e7d7a4bb359e24e4d32b165d05fa67d8a2afcc965eb132d1c534ec711ec36->leave($__internal_6c6e7d7a4bb359e24e4d32b165d05fa67d8a2afcc965eb132d1c534ec711ec36_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e03cb1a8c2c4c094b9041d6e4ff11cfe7b99ff1cc5f67899e1f8dfaef905264c = $this->env->getExtension("native_profiler");
        $__internal_e03cb1a8c2c4c094b9041d6e4ff11cfe7b99ff1cc5f67899e1f8dfaef905264c->enter($__internal_e03cb1a8c2c4c094b9041d6e4ff11cfe7b99ff1cc5f67899e1f8dfaef905264c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e03cb1a8c2c4c094b9041d6e4ff11cfe7b99ff1cc5f67899e1f8dfaef905264c->leave($__internal_e03cb1a8c2c4c094b9041d6e4ff11cfe7b99ff1cc5f67899e1f8dfaef905264c_prof);

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
