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
        $__internal_f2cb19f3ca1318b8515720deae00d85f1bc5ccd95211c0c3482f1ad6f69f435d = $this->env->getExtension("native_profiler");
        $__internal_f2cb19f3ca1318b8515720deae00d85f1bc5ccd95211c0c3482f1ad6f69f435d->enter($__internal_f2cb19f3ca1318b8515720deae00d85f1bc5ccd95211c0c3482f1ad6f69f435d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2cb19f3ca1318b8515720deae00d85f1bc5ccd95211c0c3482f1ad6f69f435d->leave($__internal_f2cb19f3ca1318b8515720deae00d85f1bc5ccd95211c0c3482f1ad6f69f435d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f9c5f79faba7a79f72525146de52b4a0202f18d46d53eeb2cf00a685159f45e = $this->env->getExtension("native_profiler");
        $__internal_3f9c5f79faba7a79f72525146de52b4a0202f18d46d53eeb2cf00a685159f45e->enter($__internal_3f9c5f79faba7a79f72525146de52b4a0202f18d46d53eeb2cf00a685159f45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_3f9c5f79faba7a79f72525146de52b4a0202f18d46d53eeb2cf00a685159f45e->leave($__internal_3f9c5f79faba7a79f72525146de52b4a0202f18d46d53eeb2cf00a685159f45e_prof);

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
