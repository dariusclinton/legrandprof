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
        $__internal_272cf7dcd089255e6d5f51946b8c43b18119a6496fe53da1e0ed473e1ac5ce9b = $this->env->getExtension("native_profiler");
        $__internal_272cf7dcd089255e6d5f51946b8c43b18119a6496fe53da1e0ed473e1ac5ce9b->enter($__internal_272cf7dcd089255e6d5f51946b8c43b18119a6496fe53da1e0ed473e1ac5ce9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_272cf7dcd089255e6d5f51946b8c43b18119a6496fe53da1e0ed473e1ac5ce9b->leave($__internal_272cf7dcd089255e6d5f51946b8c43b18119a6496fe53da1e0ed473e1ac5ce9b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44ef2a8501ecfa6d3b7476f8673a85602107f6e708adda003637d95cdf8832b9 = $this->env->getExtension("native_profiler");
        $__internal_44ef2a8501ecfa6d3b7476f8673a85602107f6e708adda003637d95cdf8832b9->enter($__internal_44ef2a8501ecfa6d3b7476f8673a85602107f6e708adda003637d95cdf8832b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_44ef2a8501ecfa6d3b7476f8673a85602107f6e708adda003637d95cdf8832b9->leave($__internal_44ef2a8501ecfa6d3b7476f8673a85602107f6e708adda003637d95cdf8832b9_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fffbb4221090c5c08b332f768b99e816c55cf5bda193c326c25e4756095d9b7d = $this->env->getExtension("native_profiler");
        $__internal_fffbb4221090c5c08b332f768b99e816c55cf5bda193c326c25e4756095d9b7d->enter($__internal_fffbb4221090c5c08b332f768b99e816c55cf5bda193c326c25e4756095d9b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_fffbb4221090c5c08b332f768b99e816c55cf5bda193c326c25e4756095d9b7d->leave($__internal_fffbb4221090c5c08b332f768b99e816c55cf5bda193c326c25e4756095d9b7d_prof);

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
