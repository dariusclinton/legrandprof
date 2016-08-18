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
        $__internal_7dc3ebe9bf1853e81c739776f71b00d9343d1f2ce9bbd08d0ab7fcda64b1bbbb = $this->env->getExtension("native_profiler");
        $__internal_7dc3ebe9bf1853e81c739776f71b00d9343d1f2ce9bbd08d0ab7fcda64b1bbbb->enter($__internal_7dc3ebe9bf1853e81c739776f71b00d9343d1f2ce9bbd08d0ab7fcda64b1bbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dc3ebe9bf1853e81c739776f71b00d9343d1f2ce9bbd08d0ab7fcda64b1bbbb->leave($__internal_7dc3ebe9bf1853e81c739776f71b00d9343d1f2ce9bbd08d0ab7fcda64b1bbbb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_466d19c125d294a9188976f8cdd1ce565cfd68802ebe263105008c4a72411a7d = $this->env->getExtension("native_profiler");
        $__internal_466d19c125d294a9188976f8cdd1ce565cfd68802ebe263105008c4a72411a7d->enter($__internal_466d19c125d294a9188976f8cdd1ce565cfd68802ebe263105008c4a72411a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_466d19c125d294a9188976f8cdd1ce565cfd68802ebe263105008c4a72411a7d->leave($__internal_466d19c125d294a9188976f8cdd1ce565cfd68802ebe263105008c4a72411a7d_prof);

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
