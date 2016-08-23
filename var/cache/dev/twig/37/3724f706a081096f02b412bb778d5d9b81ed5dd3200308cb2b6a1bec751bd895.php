<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_addc6a791de2974e7aa145d72799d3422f9b4b4248c4631977d654914e2cae32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_c650e3ef852f5ba42900f2ccd5e134f093d5d4958c8929276df9d505eaa00f7b = $this->env->getExtension("native_profiler");
        $__internal_c650e3ef852f5ba42900f2ccd5e134f093d5d4958c8929276df9d505eaa00f7b->enter($__internal_c650e3ef852f5ba42900f2ccd5e134f093d5d4958c8929276df9d505eaa00f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c650e3ef852f5ba42900f2ccd5e134f093d5d4958c8929276df9d505eaa00f7b->leave($__internal_c650e3ef852f5ba42900f2ccd5e134f093d5d4958c8929276df9d505eaa00f7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5c461245eafc80400fd909e9068d7421c900644604e9751eb82d6077d75d81d = $this->env->getExtension("native_profiler");
        $__internal_e5c461245eafc80400fd909e9068d7421c900644604e9751eb82d6077d75d81d->enter($__internal_e5c461245eafc80400fd909e9068d7421c900644604e9751eb82d6077d75d81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_e5c461245eafc80400fd909e9068d7421c900644604e9751eb82d6077d75d81d->leave($__internal_e5c461245eafc80400fd909e9068d7421c900644604e9751eb82d6077d75d81d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
