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
        $__internal_e9b276aa945568a39d67bede0992540f7c0ea77fbd152f237ebbc74664db52c2 = $this->env->getExtension("native_profiler");
        $__internal_e9b276aa945568a39d67bede0992540f7c0ea77fbd152f237ebbc74664db52c2->enter($__internal_e9b276aa945568a39d67bede0992540f7c0ea77fbd152f237ebbc74664db52c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9b276aa945568a39d67bede0992540f7c0ea77fbd152f237ebbc74664db52c2->leave($__internal_e9b276aa945568a39d67bede0992540f7c0ea77fbd152f237ebbc74664db52c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_778cad2935c47081201efd8afb8188e4c683e2153f66fae2c898cd20ec946b07 = $this->env->getExtension("native_profiler");
        $__internal_778cad2935c47081201efd8afb8188e4c683e2153f66fae2c898cd20ec946b07->enter($__internal_778cad2935c47081201efd8afb8188e4c683e2153f66fae2c898cd20ec946b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_778cad2935c47081201efd8afb8188e4c683e2153f66fae2c898cd20ec946b07->leave($__internal_778cad2935c47081201efd8afb8188e4c683e2153f66fae2c898cd20ec946b07_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1e4d09b3d54555942ec4e752e3b9dc2965eccea130d29b339f7b5fcd08eb0ba = $this->env->getExtension("native_profiler");
        $__internal_e1e4d09b3d54555942ec4e752e3b9dc2965eccea130d29b339f7b5fcd08eb0ba->enter($__internal_e1e4d09b3d54555942ec4e752e3b9dc2965eccea130d29b339f7b5fcd08eb0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_e1e4d09b3d54555942ec4e752e3b9dc2965eccea130d29b339f7b5fcd08eb0ba->leave($__internal_e1e4d09b3d54555942ec4e752e3b9dc2965eccea130d29b339f7b5fcd08eb0ba_prof);

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
/* */
