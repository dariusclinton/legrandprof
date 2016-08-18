<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_be1e132bae8340ed2a0182bfd29fdc26ce89f6f4aa09f54257e84ea80981a725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_f2b937265f539bd178d9b9073fb174fb7c607b593a7bc7214302c91e488640d1 = $this->env->getExtension("native_profiler");
        $__internal_f2b937265f539bd178d9b9073fb174fb7c607b593a7bc7214302c91e488640d1->enter($__internal_f2b937265f539bd178d9b9073fb174fb7c607b593a7bc7214302c91e488640d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b937265f539bd178d9b9073fb174fb7c607b593a7bc7214302c91e488640d1->leave($__internal_f2b937265f539bd178d9b9073fb174fb7c607b593a7bc7214302c91e488640d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b194f2662d30b1109ab08a0a025abf59ec90275d6efb14fc871d4ba308ae7c6 = $this->env->getExtension("native_profiler");
        $__internal_7b194f2662d30b1109ab08a0a025abf59ec90275d6efb14fc871d4ba308ae7c6->enter($__internal_7b194f2662d30b1109ab08a0a025abf59ec90275d6efb14fc871d4ba308ae7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7b194f2662d30b1109ab08a0a025abf59ec90275d6efb14fc871d4ba308ae7c6->leave($__internal_7b194f2662d30b1109ab08a0a025abf59ec90275d6efb14fc871d4ba308ae7c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
