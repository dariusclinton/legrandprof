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
            'header_submenu' => array($this, 'block_header_submenu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5daf1b777157064388f302b61458d33f96c0fdef2f63735bc8162a510ca44483 = $this->env->getExtension("native_profiler");
        $__internal_5daf1b777157064388f302b61458d33f96c0fdef2f63735bc8162a510ca44483->enter($__internal_5daf1b777157064388f302b61458d33f96c0fdef2f63735bc8162a510ca44483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5daf1b777157064388f302b61458d33f96c0fdef2f63735bc8162a510ca44483->leave($__internal_5daf1b777157064388f302b61458d33f96c0fdef2f63735bc8162a510ca44483_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9217973a4456f35700bb4f304711b8089386892445a8e38c33c934876ef8135a = $this->env->getExtension("native_profiler");
        $__internal_9217973a4456f35700bb4f304711b8089386892445a8e38c33c934876ef8135a->enter($__internal_9217973a4456f35700bb4f304711b8089386892445a8e38c33c934876ef8135a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_9217973a4456f35700bb4f304711b8089386892445a8e38c33c934876ef8135a->leave($__internal_9217973a4456f35700bb4f304711b8089386892445a8e38c33c934876ef8135a_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_051eaed4b019c7aa16c111f17b33e8e384146c747eae0bfd5388e9ccfd2c95ed = $this->env->getExtension("native_profiler");
        $__internal_051eaed4b019c7aa16c111f17b33e8e384146c747eae0bfd5388e9ccfd2c95ed->enter($__internal_051eaed4b019c7aa16c111f17b33e8e384146c747eae0bfd5388e9ccfd2c95ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_051eaed4b019c7aa16c111f17b33e8e384146c747eae0bfd5388e9ccfd2c95ed->leave($__internal_051eaed4b019c7aa16c111f17b33e8e384146c747eae0bfd5388e9ccfd2c95ed_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dee68a0d91e89d783b51e597256fd5ba184af31008dfb4ac2dce7d47c3649e22 = $this->env->getExtension("native_profiler");
        $__internal_dee68a0d91e89d783b51e597256fd5ba184af31008dfb4ac2dce7d47c3649e22->enter($__internal_dee68a0d91e89d783b51e597256fd5ba184af31008dfb4ac2dce7d47c3649e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_dee68a0d91e89d783b51e597256fd5ba184af31008dfb4ac2dce7d47c3649e22->leave($__internal_dee68a0d91e89d783b51e597256fd5ba184af31008dfb4ac2dce7d47c3649e22_prof);

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
        return array (  84 => 14,  82 => 13,  73 => 11,  64 => 8,  56 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ app.user.prenoms }} {{ app.user.nom }} - {{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block header_submenu %} */
/*     {{ include('LGPCoreBundle::header-submenu.html.twig') }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}    */
/*     <div class="bg-grey dashboard">*/
/*         {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
