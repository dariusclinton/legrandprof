<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_ee785a962a6416587d11b8ba40dc3a889c38db4830819c0a2ec689e7b66e3165 extends Twig_Template
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
        $__internal_db963759e0342d60659607fd5f0bc5029b55c1206805df54ecf236485640e7b3 = $this->env->getExtension("native_profiler");
        $__internal_db963759e0342d60659607fd5f0bc5029b55c1206805df54ecf236485640e7b3->enter($__internal_db963759e0342d60659607fd5f0bc5029b55c1206805df54ecf236485640e7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_db963759e0342d60659607fd5f0bc5029b55c1206805df54ecf236485640e7b3->leave($__internal_db963759e0342d60659607fd5f0bc5029b55c1206805df54ecf236485640e7b3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_210270bd82dccd75342569184bfb382c314b739dba7e0caedce30bf59f754843 = $this->env->getExtension("native_profiler");
        $__internal_210270bd82dccd75342569184bfb382c314b739dba7e0caedce30bf59f754843->enter($__internal_210270bd82dccd75342569184bfb382c314b739dba7e0caedce30bf59f754843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_210270bd82dccd75342569184bfb382c314b739dba7e0caedce30bf59f754843->leave($__internal_210270bd82dccd75342569184bfb382c314b739dba7e0caedce30bf59f754843_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
