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
        $__internal_db2309e5f99f5c03975c71a547679a602f335a87e45b9a3316ab45905a6eba80 = $this->env->getExtension("native_profiler");
        $__internal_db2309e5f99f5c03975c71a547679a602f335a87e45b9a3316ab45905a6eba80->enter($__internal_db2309e5f99f5c03975c71a547679a602f335a87e45b9a3316ab45905a6eba80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db2309e5f99f5c03975c71a547679a602f335a87e45b9a3316ab45905a6eba80->leave($__internal_db2309e5f99f5c03975c71a547679a602f335a87e45b9a3316ab45905a6eba80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16244a322d25c93bd790dcee883954fc14d3bfa79e08906baa0abe32dccb8dda = $this->env->getExtension("native_profiler");
        $__internal_16244a322d25c93bd790dcee883954fc14d3bfa79e08906baa0abe32dccb8dda->enter($__internal_16244a322d25c93bd790dcee883954fc14d3bfa79e08906baa0abe32dccb8dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_16244a322d25c93bd790dcee883954fc14d3bfa79e08906baa0abe32dccb8dda->leave($__internal_16244a322d25c93bd790dcee883954fc14d3bfa79e08906baa0abe32dccb8dda_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d0690cce4c30cdd9797f3ee63d489dc93e720434fef52a4ba5ec7c36a691f12 = $this->env->getExtension("native_profiler");
        $__internal_3d0690cce4c30cdd9797f3ee63d489dc93e720434fef52a4ba5ec7c36a691f12->enter($__internal_3d0690cce4c30cdd9797f3ee63d489dc93e720434fef52a4ba5ec7c36a691f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 8)->display($context);
        
        $__internal_3d0690cce4c30cdd9797f3ee63d489dc93e720434fef52a4ba5ec7c36a691f12->leave($__internal_3d0690cce4c30cdd9797f3ee63d489dc93e720434fef52a4ba5ec7c36a691f12_prof);

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
