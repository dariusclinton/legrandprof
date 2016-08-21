<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3367fb9ba5b109089089c76ddf6b7d400349579681b0c10616ea3dd1530dcb0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_c759c960bff7970754ee288c7dd052f1eed3a0192e77fc89eadc22bb9576e3e5 = $this->env->getExtension("native_profiler");
        $__internal_c759c960bff7970754ee288c7dd052f1eed3a0192e77fc89eadc22bb9576e3e5->enter($__internal_c759c960bff7970754ee288c7dd052f1eed3a0192e77fc89eadc22bb9576e3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c759c960bff7970754ee288c7dd052f1eed3a0192e77fc89eadc22bb9576e3e5->leave($__internal_c759c960bff7970754ee288c7dd052f1eed3a0192e77fc89eadc22bb9576e3e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcc66f8b2e72f66383ee4802817ab819e37fcdc70988b87c9b7efa5541c676ba = $this->env->getExtension("native_profiler");
        $__internal_bcc66f8b2e72f66383ee4802817ab819e37fcdc70988b87c9b7efa5541c676ba->enter($__internal_bcc66f8b2e72f66383ee4802817ab819e37fcdc70988b87c9b7efa5541c676ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_bcc66f8b2e72f66383ee4802817ab819e37fcdc70988b87c9b7efa5541c676ba->leave($__internal_bcc66f8b2e72f66383ee4802817ab819e37fcdc70988b87c9b7efa5541c676ba_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b9d7a7d9ebbb017dd8408fac7d7e51cc04bce17baf97ebea56a5b8cf0908359 = $this->env->getExtension("native_profiler");
        $__internal_7b9d7a7d9ebbb017dd8408fac7d7e51cc04bce17baf97ebea56a5b8cf0908359->enter($__internal_7b9d7a7d9ebbb017dd8408fac7d7e51cc04bce17baf97ebea56a5b8cf0908359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 8)->display($context);
        
        $__internal_7b9d7a7d9ebbb017dd8408fac7d7e51cc04bce17baf97ebea56a5b8cf0908359->leave($__internal_7b9d7a7d9ebbb017dd8408fac7d7e51cc04bce17baf97ebea56a5b8cf0908359_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/*     {{ app.user.prenoms }} {{ app.user.nom }} - {{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
