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
        $__internal_a1325302120b6ebb6cacd2c4bce04582c18c02a800f8a47d3143913e36feb693 = $this->env->getExtension("native_profiler");
        $__internal_a1325302120b6ebb6cacd2c4bce04582c18c02a800f8a47d3143913e36feb693->enter($__internal_a1325302120b6ebb6cacd2c4bce04582c18c02a800f8a47d3143913e36feb693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1325302120b6ebb6cacd2c4bce04582c18c02a800f8a47d3143913e36feb693->leave($__internal_a1325302120b6ebb6cacd2c4bce04582c18c02a800f8a47d3143913e36feb693_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b39ebb61282f9ba9801254753487b2e6020f0af7c21255ebca09db9eb1fdc50c = $this->env->getExtension("native_profiler");
        $__internal_b39ebb61282f9ba9801254753487b2e6020f0af7c21255ebca09db9eb1fdc50c->enter($__internal_b39ebb61282f9ba9801254753487b2e6020f0af7c21255ebca09db9eb1fdc50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_b39ebb61282f9ba9801254753487b2e6020f0af7c21255ebca09db9eb1fdc50c->leave($__internal_b39ebb61282f9ba9801254753487b2e6020f0af7c21255ebca09db9eb1fdc50c_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_54740b62ed8812aae5fb91e52f913472343d6f1bd271f96bb7a527d65cc808c8 = $this->env->getExtension("native_profiler");
        $__internal_54740b62ed8812aae5fb91e52f913472343d6f1bd271f96bb7a527d65cc808c8->enter($__internal_54740b62ed8812aae5fb91e52f913472343d6f1bd271f96bb7a527d65cc808c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_54740b62ed8812aae5fb91e52f913472343d6f1bd271f96bb7a527d65cc808c8->leave($__internal_54740b62ed8812aae5fb91e52f913472343d6f1bd271f96bb7a527d65cc808c8_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b404048339e59308d93cb36ad1062bf624ac5111bbf06decddb21ec3311963eb = $this->env->getExtension("native_profiler");
        $__internal_b404048339e59308d93cb36ad1062bf624ac5111bbf06decddb21ec3311963eb->enter($__internal_b404048339e59308d93cb36ad1062bf624ac5111bbf06decddb21ec3311963eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_b404048339e59308d93cb36ad1062bf624ac5111bbf06decddb21ec3311963eb->leave($__internal_b404048339e59308d93cb36ad1062bf624ac5111bbf06decddb21ec3311963eb_prof);

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
