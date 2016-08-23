<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6e659f441b0be411675991e045c89a537eed53cca390353003cc4a11f1e14ba3 extends Twig_Template
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
        $__internal_863b44fa62df967ed87ba4ba16b65d491e1b7851f858fae5beb52cf4a79633fc = $this->env->getExtension("native_profiler");
        $__internal_863b44fa62df967ed87ba4ba16b65d491e1b7851f858fae5beb52cf4a79633fc->enter($__internal_863b44fa62df967ed87ba4ba16b65d491e1b7851f858fae5beb52cf4a79633fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_863b44fa62df967ed87ba4ba16b65d491e1b7851f858fae5beb52cf4a79633fc->leave($__internal_863b44fa62df967ed87ba4ba16b65d491e1b7851f858fae5beb52cf4a79633fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76d9258cd975e77b75132ce7984d46e3b23e1ec11196ec0f927b6dd874791c8d = $this->env->getExtension("native_profiler");
        $__internal_76d9258cd975e77b75132ce7984d46e3b23e1ec11196ec0f927b6dd874791c8d->enter($__internal_76d9258cd975e77b75132ce7984d46e3b23e1ec11196ec0f927b6dd874791c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_76d9258cd975e77b75132ce7984d46e3b23e1ec11196ec0f927b6dd874791c8d->leave($__internal_76d9258cd975e77b75132ce7984d46e3b23e1ec11196ec0f927b6dd874791c8d_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2463bab154a334f3fbf96213b014a929e5f30d5dcfe5057b451a4db38924b2b1 = $this->env->getExtension("native_profiler");
        $__internal_2463bab154a334f3fbf96213b014a929e5f30d5dcfe5057b451a4db38924b2b1->enter($__internal_2463bab154a334f3fbf96213b014a929e5f30d5dcfe5057b451a4db38924b2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 8)->display($context);
        
        $__internal_2463bab154a334f3fbf96213b014a929e5f30d5dcfe5057b451a4db38924b2b1->leave($__internal_2463bab154a334f3fbf96213b014a929e5f30d5dcfe5057b451a4db38924b2b1_prof);

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
