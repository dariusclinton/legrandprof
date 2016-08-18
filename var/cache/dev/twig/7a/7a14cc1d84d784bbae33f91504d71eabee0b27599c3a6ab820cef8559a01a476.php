<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ea1010ea581a864e9fe1aa0bc32435a0fdaa2da2559efa6e1c104ca220be309e extends Twig_Template
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
        $__internal_2a86ac8077012f58c4fa5e3f5a03d113ae7a0c720b27e4caa6e52a9f21266f71 = $this->env->getExtension("native_profiler");
        $__internal_2a86ac8077012f58c4fa5e3f5a03d113ae7a0c720b27e4caa6e52a9f21266f71->enter($__internal_2a86ac8077012f58c4fa5e3f5a03d113ae7a0c720b27e4caa6e52a9f21266f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2a86ac8077012f58c4fa5e3f5a03d113ae7a0c720b27e4caa6e52a9f21266f71->leave($__internal_2a86ac8077012f58c4fa5e3f5a03d113ae7a0c720b27e4caa6e52a9f21266f71_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fe52571ca7c10149b74fd1ba255965a961c15cb74345e2d361b367db514e5fb = $this->env->getExtension("native_profiler");
        $__internal_2fe52571ca7c10149b74fd1ba255965a961c15cb74345e2d361b367db514e5fb->enter($__internal_2fe52571ca7c10149b74fd1ba255965a961c15cb74345e2d361b367db514e5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2fe52571ca7c10149b74fd1ba255965a961c15cb74345e2d361b367db514e5fb->leave($__internal_2fe52571ca7c10149b74fd1ba255965a961c15cb74345e2d361b367db514e5fb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
