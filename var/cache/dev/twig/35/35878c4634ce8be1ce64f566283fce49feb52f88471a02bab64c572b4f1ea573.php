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
        $__internal_d3bd2b5d1821708e700bae17f9d791362180f8f4016daf350f808b52f89c6a6d = $this->env->getExtension("native_profiler");
        $__internal_d3bd2b5d1821708e700bae17f9d791362180f8f4016daf350f808b52f89c6a6d->enter($__internal_d3bd2b5d1821708e700bae17f9d791362180f8f4016daf350f808b52f89c6a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3bd2b5d1821708e700bae17f9d791362180f8f4016daf350f808b52f89c6a6d->leave($__internal_d3bd2b5d1821708e700bae17f9d791362180f8f4016daf350f808b52f89c6a6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_08f76031f8ff79e082e658ef3ec92af29d860d5b25cc3e6ed64dcafe98b4240b = $this->env->getExtension("native_profiler");
        $__internal_08f76031f8ff79e082e658ef3ec92af29d860d5b25cc3e6ed64dcafe98b4240b->enter($__internal_08f76031f8ff79e082e658ef3ec92af29d860d5b25cc3e6ed64dcafe98b4240b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_08f76031f8ff79e082e658ef3ec92af29d860d5b25cc3e6ed64dcafe98b4240b->leave($__internal_08f76031f8ff79e082e658ef3ec92af29d860d5b25cc3e6ed64dcafe98b4240b_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_100afd6d8518a7d13d0257331bb1dc7b5f6c03d875ec9aee7f5af1ca08b51367 = $this->env->getExtension("native_profiler");
        $__internal_100afd6d8518a7d13d0257331bb1dc7b5f6c03d875ec9aee7f5af1ca08b51367->enter($__internal_100afd6d8518a7d13d0257331bb1dc7b5f6c03d875ec9aee7f5af1ca08b51367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_100afd6d8518a7d13d0257331bb1dc7b5f6c03d875ec9aee7f5af1ca08b51367->leave($__internal_100afd6d8518a7d13d0257331bb1dc7b5f6c03d875ec9aee7f5af1ca08b51367_prof);

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
