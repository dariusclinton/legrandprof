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
        $__internal_1812f6d7bb86dcb966e6e4b8415e0f4af804b65ae08fa16cb1ee70d37a96b986 = $this->env->getExtension("native_profiler");
        $__internal_1812f6d7bb86dcb966e6e4b8415e0f4af804b65ae08fa16cb1ee70d37a96b986->enter($__internal_1812f6d7bb86dcb966e6e4b8415e0f4af804b65ae08fa16cb1ee70d37a96b986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1812f6d7bb86dcb966e6e4b8415e0f4af804b65ae08fa16cb1ee70d37a96b986->leave($__internal_1812f6d7bb86dcb966e6e4b8415e0f4af804b65ae08fa16cb1ee70d37a96b986_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b6f3f6def89a041a4b03980dd1d5cf399cddc3f38bdc42906fb6fd177ab376b = $this->env->getExtension("native_profiler");
        $__internal_1b6f3f6def89a041a4b03980dd1d5cf399cddc3f38bdc42906fb6fd177ab376b->enter($__internal_1b6f3f6def89a041a4b03980dd1d5cf399cddc3f38bdc42906fb6fd177ab376b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1b6f3f6def89a041a4b03980dd1d5cf399cddc3f38bdc42906fb6fd177ab376b->leave($__internal_1b6f3f6def89a041a4b03980dd1d5cf399cddc3f38bdc42906fb6fd177ab376b_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11414847bb1a0227fdc80f5ae3430987010131169f95402b9d9708dc6e9a97a9 = $this->env->getExtension("native_profiler");
        $__internal_11414847bb1a0227fdc80f5ae3430987010131169f95402b9d9708dc6e9a97a9->enter($__internal_11414847bb1a0227fdc80f5ae3430987010131169f95402b9d9708dc6e9a97a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_11414847bb1a0227fdc80f5ae3430987010131169f95402b9d9708dc6e9a97a9->leave($__internal_11414847bb1a0227fdc80f5ae3430987010131169f95402b9d9708dc6e9a97a9_prof);

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
