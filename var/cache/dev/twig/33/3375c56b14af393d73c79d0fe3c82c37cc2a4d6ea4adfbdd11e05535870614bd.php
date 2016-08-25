<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_57a580726f6f38382b614b6cee9b7d20d12470429cc0ae9d2ecf1aac06549105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_45b9c9db873844d12f5d15ba945b0095cb85e454c90fd2554fd25138faa89309 = $this->env->getExtension("native_profiler");
        $__internal_45b9c9db873844d12f5d15ba945b0095cb85e454c90fd2554fd25138faa89309->enter($__internal_45b9c9db873844d12f5d15ba945b0095cb85e454c90fd2554fd25138faa89309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45b9c9db873844d12f5d15ba945b0095cb85e454c90fd2554fd25138faa89309->leave($__internal_45b9c9db873844d12f5d15ba945b0095cb85e454c90fd2554fd25138faa89309_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d83d43fb4f8959a5d2eb2ba6eeb48bc6e420baf9ae0ebbb7eb963708ea30e30 = $this->env->getExtension("native_profiler");
        $__internal_5d83d43fb4f8959a5d2eb2ba6eeb48bc6e420baf9ae0ebbb7eb963708ea30e30->enter($__internal_5d83d43fb4f8959a5d2eb2ba6eeb48bc6e420baf9ae0ebbb7eb963708ea30e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_5d83d43fb4f8959a5d2eb2ba6eeb48bc6e420baf9ae0ebbb7eb963708ea30e30->leave($__internal_5d83d43fb4f8959a5d2eb2ba6eeb48bc6e420baf9ae0ebbb7eb963708ea30e30_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
