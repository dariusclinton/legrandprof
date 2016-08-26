<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bfa5b54c28ea6200577ac5882a0df94a75ed8cfb3033da8b9b18747505c20ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7bfbd0829e0ea34efa5b27aba5cae666c1de3eafb30dbacc96ace0cc0da859d = $this->env->getExtension("native_profiler");
        $__internal_b7bfbd0829e0ea34efa5b27aba5cae666c1de3eafb30dbacc96ace0cc0da859d->enter($__internal_b7bfbd0829e0ea34efa5b27aba5cae666c1de3eafb30dbacc96ace0cc0da859d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7bfbd0829e0ea34efa5b27aba5cae666c1de3eafb30dbacc96ace0cc0da859d->leave($__internal_b7bfbd0829e0ea34efa5b27aba5cae666c1de3eafb30dbacc96ace0cc0da859d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca5e74db9b6bed67cde6d94b9d93156bf99fa2ea3ccca225a3355ee7abbd6883 = $this->env->getExtension("native_profiler");
        $__internal_ca5e74db9b6bed67cde6d94b9d93156bf99fa2ea3ccca225a3355ee7abbd6883->enter($__internal_ca5e74db9b6bed67cde6d94b9d93156bf99fa2ea3ccca225a3355ee7abbd6883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ca5e74db9b6bed67cde6d94b9d93156bf99fa2ea3ccca225a3355ee7abbd6883->leave($__internal_ca5e74db9b6bed67cde6d94b9d93156bf99fa2ea3ccca225a3355ee7abbd6883_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_472f33c0067c677a3cbde386f75587e40e5239338d4e213a24785d7cdee50a2a = $this->env->getExtension("native_profiler");
        $__internal_472f33c0067c677a3cbde386f75587e40e5239338d4e213a24785d7cdee50a2a->enter($__internal_472f33c0067c677a3cbde386f75587e40e5239338d4e213a24785d7cdee50a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_472f33c0067c677a3cbde386f75587e40e5239338d4e213a24785d7cdee50a2a->leave($__internal_472f33c0067c677a3cbde386f75587e40e5239338d4e213a24785d7cdee50a2a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  55 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ app.user.prenoms }} {{ app.user.nom }} - Edit profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
