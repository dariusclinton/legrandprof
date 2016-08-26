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
        $__internal_9c0bc3d945f24d829ea58664ee27fbf241f0a3fd6697200a50457f0b46593f44 = $this->env->getExtension("native_profiler");
        $__internal_9c0bc3d945f24d829ea58664ee27fbf241f0a3fd6697200a50457f0b46593f44->enter($__internal_9c0bc3d945f24d829ea58664ee27fbf241f0a3fd6697200a50457f0b46593f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c0bc3d945f24d829ea58664ee27fbf241f0a3fd6697200a50457f0b46593f44->leave($__internal_9c0bc3d945f24d829ea58664ee27fbf241f0a3fd6697200a50457f0b46593f44_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd43e8e0cc0549a75540750b7f4021a36b6fc208ed7ff17c05fa98b07793c32a = $this->env->getExtension("native_profiler");
        $__internal_bd43e8e0cc0549a75540750b7f4021a36b6fc208ed7ff17c05fa98b07793c32a->enter($__internal_bd43e8e0cc0549a75540750b7f4021a36b6fc208ed7ff17c05fa98b07793c32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bd43e8e0cc0549a75540750b7f4021a36b6fc208ed7ff17c05fa98b07793c32a->leave($__internal_bd43e8e0cc0549a75540750b7f4021a36b6fc208ed7ff17c05fa98b07793c32a_prof);

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
