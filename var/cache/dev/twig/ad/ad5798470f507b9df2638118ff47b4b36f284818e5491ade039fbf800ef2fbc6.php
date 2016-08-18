<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_ec52b5077b7639cdefe61788cacbf62c3f44462d53284020fa171ffdab3e79ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41e3c2870833a8920774265f099f6b2b380a32335efae3b86c64923a5f1d33f4 = $this->env->getExtension("native_profiler");
        $__internal_41e3c2870833a8920774265f099f6b2b380a32335efae3b86c64923a5f1d33f4->enter($__internal_41e3c2870833a8920774265f099f6b2b380a32335efae3b86c64923a5f1d33f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41e3c2870833a8920774265f099f6b2b380a32335efae3b86c64923a5f1d33f4->leave($__internal_41e3c2870833a8920774265f099f6b2b380a32335efae3b86c64923a5f1d33f4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46bc5c9c233f99a61791827958f8072478bbbeffa8ccf3ad2483167434631162 = $this->env->getExtension("native_profiler");
        $__internal_46bc5c9c233f99a61791827958f8072478bbbeffa8ccf3ad2483167434631162->enter($__internal_46bc5c9c233f99a61791827958f8072478bbbeffa8ccf3ad2483167434631162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_46bc5c9c233f99a61791827958f8072478bbbeffa8ccf3ad2483167434631162->leave($__internal_46bc5c9c233f99a61791827958f8072478bbbeffa8ccf3ad2483167434631162_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
