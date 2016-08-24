<?php

/* @LGPUser/Profile/edit.html.twig */
class __TwigTemplate_16410c83b23fc9cc51d6a12eb9cba3140c2a600b14ce10b45eda7987120e79fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Profile/edit.html.twig", 1);
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
        $__internal_8826688fa0f5efd49466723ee0869931b964a648bb810d62bddd40e509c3d6de = $this->env->getExtension("native_profiler");
        $__internal_8826688fa0f5efd49466723ee0869931b964a648bb810d62bddd40e509c3d6de->enter($__internal_8826688fa0f5efd49466723ee0869931b964a648bb810d62bddd40e509c3d6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8826688fa0f5efd49466723ee0869931b964a648bb810d62bddd40e509c3d6de->leave($__internal_8826688fa0f5efd49466723ee0869931b964a648bb810d62bddd40e509c3d6de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d6bb6b830f203dd9d77340cc304db653327a17e1682d4101d98f349b8308b8b = $this->env->getExtension("native_profiler");
        $__internal_2d6bb6b830f203dd9d77340cc304db653327a17e1682d4101d98f349b8308b8b->enter($__internal_2d6bb6b830f203dd9d77340cc304db653327a17e1682d4101d98f349b8308b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2d6bb6b830f203dd9d77340cc304db653327a17e1682d4101d98f349b8308b8b->leave($__internal_2d6bb6b830f203dd9d77340cc304db653327a17e1682d4101d98f349b8308b8b_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5b5fa2929c3c169bd8ed37a438fb289864e4c4fe3f6f39262c03a711c3863da = $this->env->getExtension("native_profiler");
        $__internal_d5b5fa2929c3c169bd8ed37a438fb289864e4c4fe3f6f39262c03a711c3863da->enter($__internal_d5b5fa2929c3c169bd8ed37a438fb289864e4c4fe3f6f39262c03a711c3863da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_d5b5fa2929c3c169bd8ed37a438fb289864e4c4fe3f6f39262c03a711c3863da->leave($__internal_d5b5fa2929c3c169bd8ed37a438fb289864e4c4fe3f6f39262c03a711c3863da_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Profile/edit.html.twig";
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
