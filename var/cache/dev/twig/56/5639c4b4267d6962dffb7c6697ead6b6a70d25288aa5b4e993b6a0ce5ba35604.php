<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_80464fbf5868c0c8865ff25d806c3d60bd8e2ff3da8e6d052d8dd565e21d7503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_3b99385a320c1fc8bc7d9a5ae70ee8c226e476e6d4870311fe4fd29ac196e679 = $this->env->getExtension("native_profiler");
        $__internal_3b99385a320c1fc8bc7d9a5ae70ee8c226e476e6d4870311fe4fd29ac196e679->enter($__internal_3b99385a320c1fc8bc7d9a5ae70ee8c226e476e6d4870311fe4fd29ac196e679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b99385a320c1fc8bc7d9a5ae70ee8c226e476e6d4870311fe4fd29ac196e679->leave($__internal_3b99385a320c1fc8bc7d9a5ae70ee8c226e476e6d4870311fe4fd29ac196e679_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c3be04974981eb0bad2b84e441bb68a667bc3acdff8191806b3a0f31fe09cac = $this->env->getExtension("native_profiler");
        $__internal_7c3be04974981eb0bad2b84e441bb68a667bc3acdff8191806b3a0f31fe09cac->enter($__internal_7c3be04974981eb0bad2b84e441bb68a667bc3acdff8191806b3a0f31fe09cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_7c3be04974981eb0bad2b84e441bb68a667bc3acdff8191806b3a0f31fe09cac->leave($__internal_7c3be04974981eb0bad2b84e441bb68a667bc3acdff8191806b3a0f31fe09cac_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
