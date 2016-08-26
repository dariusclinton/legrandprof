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
        $__internal_8c91d2ba6793d9c01647468379984aefbed206ef3af60f574d11b9ae73aad92a = $this->env->getExtension("native_profiler");
        $__internal_8c91d2ba6793d9c01647468379984aefbed206ef3af60f574d11b9ae73aad92a->enter($__internal_8c91d2ba6793d9c01647468379984aefbed206ef3af60f574d11b9ae73aad92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c91d2ba6793d9c01647468379984aefbed206ef3af60f574d11b9ae73aad92a->leave($__internal_8c91d2ba6793d9c01647468379984aefbed206ef3af60f574d11b9ae73aad92a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22e99e1b2a73886bd166dec97e01152fcc790a3d212989b4819af30a2bc112ae = $this->env->getExtension("native_profiler");
        $__internal_22e99e1b2a73886bd166dec97e01152fcc790a3d212989b4819af30a2bc112ae->enter($__internal_22e99e1b2a73886bd166dec97e01152fcc790a3d212989b4819af30a2bc112ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_22e99e1b2a73886bd166dec97e01152fcc790a3d212989b4819af30a2bc112ae->leave($__internal_22e99e1b2a73886bd166dec97e01152fcc790a3d212989b4819af30a2bc112ae_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_3f73b05ed9dab151b61276257943cb8872df0f57ef2d5a60ea575f7471b36dc7 = $this->env->getExtension("native_profiler");
        $__internal_3f73b05ed9dab151b61276257943cb8872df0f57ef2d5a60ea575f7471b36dc7->enter($__internal_3f73b05ed9dab151b61276257943cb8872df0f57ef2d5a60ea575f7471b36dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_3f73b05ed9dab151b61276257943cb8872df0f57ef2d5a60ea575f7471b36dc7->leave($__internal_3f73b05ed9dab151b61276257943cb8872df0f57ef2d5a60ea575f7471b36dc7_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc81be0ad0916d6f50d70f229b9fb83d0e8f002e1ec6a3eaa98458c15250c0a1 = $this->env->getExtension("native_profiler");
        $__internal_dc81be0ad0916d6f50d70f229b9fb83d0e8f002e1ec6a3eaa98458c15250c0a1->enter($__internal_dc81be0ad0916d6f50d70f229b9fb83d0e8f002e1ec6a3eaa98458c15250c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_dc81be0ad0916d6f50d70f229b9fb83d0e8f002e1ec6a3eaa98458c15250c0a1->leave($__internal_dc81be0ad0916d6f50d70f229b9fb83d0e8f002e1ec6a3eaa98458c15250c0a1_prof);

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
