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
        $__internal_781fd4109e8b2fc97487caeeac6cc20f469e5d753354755425b98765b624d3ef = $this->env->getExtension("native_profiler");
        $__internal_781fd4109e8b2fc97487caeeac6cc20f469e5d753354755425b98765b624d3ef->enter($__internal_781fd4109e8b2fc97487caeeac6cc20f469e5d753354755425b98765b624d3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_781fd4109e8b2fc97487caeeac6cc20f469e5d753354755425b98765b624d3ef->leave($__internal_781fd4109e8b2fc97487caeeac6cc20f469e5d753354755425b98765b624d3ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_17640a62bf93c800420ebd43a7456ac600c3f6c681a8313022f6681c68389c6a = $this->env->getExtension("native_profiler");
        $__internal_17640a62bf93c800420ebd43a7456ac600c3f6c681a8313022f6681c68389c6a->enter($__internal_17640a62bf93c800420ebd43a7456ac600c3f6c681a8313022f6681c68389c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_17640a62bf93c800420ebd43a7456ac600c3f6c681a8313022f6681c68389c6a->leave($__internal_17640a62bf93c800420ebd43a7456ac600c3f6c681a8313022f6681c68389c6a_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_9b8634481eb62801221a1b2bde21fe6e7d63045eb902e2257b8f2c0a6178febe = $this->env->getExtension("native_profiler");
        $__internal_9b8634481eb62801221a1b2bde21fe6e7d63045eb902e2257b8f2c0a6178febe->enter($__internal_9b8634481eb62801221a1b2bde21fe6e7d63045eb902e2257b8f2c0a6178febe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_9b8634481eb62801221a1b2bde21fe6e7d63045eb902e2257b8f2c0a6178febe->leave($__internal_9b8634481eb62801221a1b2bde21fe6e7d63045eb902e2257b8f2c0a6178febe_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee64ab38fe71d81644012421332a0fada002206c27f37c437cd7eddb7f17a082 = $this->env->getExtension("native_profiler");
        $__internal_ee64ab38fe71d81644012421332a0fada002206c27f37c437cd7eddb7f17a082->enter($__internal_ee64ab38fe71d81644012421332a0fada002206c27f37c437cd7eddb7f17a082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_ee64ab38fe71d81644012421332a0fada002206c27f37c437cd7eddb7f17a082->leave($__internal_ee64ab38fe71d81644012421332a0fada002206c27f37c437cd7eddb7f17a082_prof);

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
