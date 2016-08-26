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
        $__internal_511ae292f6c75f350de50f5034943ea97e1e2384e8917efebb883005c6ed012a = $this->env->getExtension("native_profiler");
        $__internal_511ae292f6c75f350de50f5034943ea97e1e2384e8917efebb883005c6ed012a->enter($__internal_511ae292f6c75f350de50f5034943ea97e1e2384e8917efebb883005c6ed012a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_511ae292f6c75f350de50f5034943ea97e1e2384e8917efebb883005c6ed012a->leave($__internal_511ae292f6c75f350de50f5034943ea97e1e2384e8917efebb883005c6ed012a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65ebb56cfdf24b1775efb6e87e2ea36ba371f06272823e6f226ef7cb99c7c303 = $this->env->getExtension("native_profiler");
        $__internal_65ebb56cfdf24b1775efb6e87e2ea36ba371f06272823e6f226ef7cb99c7c303->enter($__internal_65ebb56cfdf24b1775efb6e87e2ea36ba371f06272823e6f226ef7cb99c7c303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_65ebb56cfdf24b1775efb6e87e2ea36ba371f06272823e6f226ef7cb99c7c303->leave($__internal_65ebb56cfdf24b1775efb6e87e2ea36ba371f06272823e6f226ef7cb99c7c303_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_ac3e0c2c8e62418c3830a695de1a6f74a61267080a5b5463fa3ce977d131e1f5 = $this->env->getExtension("native_profiler");
        $__internal_ac3e0c2c8e62418c3830a695de1a6f74a61267080a5b5463fa3ce977d131e1f5->enter($__internal_ac3e0c2c8e62418c3830a695de1a6f74a61267080a5b5463fa3ce977d131e1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_ac3e0c2c8e62418c3830a695de1a6f74a61267080a5b5463fa3ce977d131e1f5->leave($__internal_ac3e0c2c8e62418c3830a695de1a6f74a61267080a5b5463fa3ce977d131e1f5_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfc643a87ba126b23c7aaeb63494f9442be7c38c2865eebb2a0edd7496062c95 = $this->env->getExtension("native_profiler");
        $__internal_bfc643a87ba126b23c7aaeb63494f9442be7c38c2865eebb2a0edd7496062c95->enter($__internal_bfc643a87ba126b23c7aaeb63494f9442be7c38c2865eebb2a0edd7496062c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_bfc643a87ba126b23c7aaeb63494f9442be7c38c2865eebb2a0edd7496062c95->leave($__internal_bfc643a87ba126b23c7aaeb63494f9442be7c38c2865eebb2a0edd7496062c95_prof);

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
