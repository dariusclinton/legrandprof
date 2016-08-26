<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fb066bcf2d55920074d062bf9f8a2b020a082426d3e80de5ac9665145d8a6fb = $this->env->getExtension("native_profiler");
        $__internal_4fb066bcf2d55920074d062bf9f8a2b020a082426d3e80de5ac9665145d8a6fb->enter($__internal_4fb066bcf2d55920074d062bf9f8a2b020a082426d3e80de5ac9665145d8a6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fb066bcf2d55920074d062bf9f8a2b020a082426d3e80de5ac9665145d8a6fb->leave($__internal_4fb066bcf2d55920074d062bf9f8a2b020a082426d3e80de5ac9665145d8a6fb_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd4baec59eb0fdef609fc7348ff661ddce89d7779515e1215bd201aaf0fbf84b = $this->env->getExtension("native_profiler");
        $__internal_fd4baec59eb0fdef609fc7348ff661ddce89d7779515e1215bd201aaf0fbf84b->enter($__internal_fd4baec59eb0fdef609fc7348ff661ddce89d7779515e1215bd201aaf0fbf84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_fd4baec59eb0fdef609fc7348ff661ddce89d7779515e1215bd201aaf0fbf84b->leave($__internal_fd4baec59eb0fdef609fc7348ff661ddce89d7779515e1215bd201aaf0fbf84b_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
