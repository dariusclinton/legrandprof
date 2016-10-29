<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4a12d206b7dd89a860dd4ad62cd21f0787f674e52d98ce7eed504d9028261e06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04e56e6632990766bdc85b4065ec24424781e0dabc57ae89f0987d7ae01fc1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e56e6632990766bdc85b4065ec24424781e0dabc57ae89f0987d7ae01fc1b5->enter($__internal_04e56e6632990766bdc85b4065ec24424781e0dabc57ae89f0987d7ae01fc1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_04e56e6632990766bdc85b4065ec24424781e0dabc57ae89f0987d7ae01fc1b5->leave($__internal_04e56e6632990766bdc85b4065ec24424781e0dabc57ae89f0987d7ae01fc1b5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_46e4724687461122fba3d689d4c8e439dedf63d68d203cb9fea91465a742fc9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e4724687461122fba3d689d4c8e439dedf63d68d203cb9fea91465a742fc9b->enter($__internal_46e4724687461122fba3d689d4c8e439dedf63d68d203cb9fea91465a742fc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_46e4724687461122fba3d689d4c8e439dedf63d68d203cb9fea91465a742fc9b->leave($__internal_46e4724687461122fba3d689d4c8e439dedf63d68d203cb9fea91465a742fc9b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
