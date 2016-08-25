<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f296d9fa5242cb1505675a65e0c0b16174156b5a6fa7016a5624cb490cb075af extends Twig_Template
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
        $__internal_6a4525130ec89efdce14c73e756b0584b0857453a353daa583353af72b97196f = $this->env->getExtension("native_profiler");
        $__internal_6a4525130ec89efdce14c73e756b0584b0857453a353daa583353af72b97196f->enter($__internal_6a4525130ec89efdce14c73e756b0584b0857453a353daa583353af72b97196f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a4525130ec89efdce14c73e756b0584b0857453a353daa583353af72b97196f->leave($__internal_6a4525130ec89efdce14c73e756b0584b0857453a353daa583353af72b97196f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55dc5d77b9227d22e1141303d8843f1ac4b8c1bcc4fbc7267c399df66ce59e92 = $this->env->getExtension("native_profiler");
        $__internal_55dc5d77b9227d22e1141303d8843f1ac4b8c1bcc4fbc7267c399df66ce59e92->enter($__internal_55dc5d77b9227d22e1141303d8843f1ac4b8c1bcc4fbc7267c399df66ce59e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_55dc5d77b9227d22e1141303d8843f1ac4b8c1bcc4fbc7267c399df66ce59e92->leave($__internal_55dc5d77b9227d22e1141303d8843f1ac4b8c1bcc4fbc7267c399df66ce59e92_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c75650f4ca61ffbd138c75de24fbcfddfcf373337f48e521982cb22cd06cb99 = $this->env->getExtension("native_profiler");
        $__internal_9c75650f4ca61ffbd138c75de24fbcfddfcf373337f48e521982cb22cd06cb99->enter($__internal_9c75650f4ca61ffbd138c75de24fbcfddfcf373337f48e521982cb22cd06cb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_9c75650f4ca61ffbd138c75de24fbcfddfcf373337f48e521982cb22cd06cb99->leave($__internal_9c75650f4ca61ffbd138c75de24fbcfddfcf373337f48e521982cb22cd06cb99_prof);

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
