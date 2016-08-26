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
        $__internal_7f16dac08c3e4370f1ca02febd6b2a63ec55aaf6b009599ddbcec26b4a03db4c = $this->env->getExtension("native_profiler");
        $__internal_7f16dac08c3e4370f1ca02febd6b2a63ec55aaf6b009599ddbcec26b4a03db4c->enter($__internal_7f16dac08c3e4370f1ca02febd6b2a63ec55aaf6b009599ddbcec26b4a03db4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f16dac08c3e4370f1ca02febd6b2a63ec55aaf6b009599ddbcec26b4a03db4c->leave($__internal_7f16dac08c3e4370f1ca02febd6b2a63ec55aaf6b009599ddbcec26b4a03db4c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_514a1fed7f955c9d133f9aacd2eabd44d195d9c6c639165a2a08ba6507ec9d19 = $this->env->getExtension("native_profiler");
        $__internal_514a1fed7f955c9d133f9aacd2eabd44d195d9c6c639165a2a08ba6507ec9d19->enter($__internal_514a1fed7f955c9d133f9aacd2eabd44d195d9c6c639165a2a08ba6507ec9d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_514a1fed7f955c9d133f9aacd2eabd44d195d9c6c639165a2a08ba6507ec9d19->leave($__internal_514a1fed7f955c9d133f9aacd2eabd44d195d9c6c639165a2a08ba6507ec9d19_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_977fea7bf77a0836e48e1a1d910c987cae1d48546d747572f4a2ea6d455c2c31 = $this->env->getExtension("native_profiler");
        $__internal_977fea7bf77a0836e48e1a1d910c987cae1d48546d747572f4a2ea6d455c2c31->enter($__internal_977fea7bf77a0836e48e1a1d910c987cae1d48546d747572f4a2ea6d455c2c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_977fea7bf77a0836e48e1a1d910c987cae1d48546d747572f4a2ea6d455c2c31->leave($__internal_977fea7bf77a0836e48e1a1d910c987cae1d48546d747572f4a2ea6d455c2c31_prof);

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
