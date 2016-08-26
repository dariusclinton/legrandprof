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
        $__internal_03fdd4503113f9235b57d6b156215e566b522c49d10748ed3f5fddebc18d9b6d = $this->env->getExtension("native_profiler");
        $__internal_03fdd4503113f9235b57d6b156215e566b522c49d10748ed3f5fddebc18d9b6d->enter($__internal_03fdd4503113f9235b57d6b156215e566b522c49d10748ed3f5fddebc18d9b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03fdd4503113f9235b57d6b156215e566b522c49d10748ed3f5fddebc18d9b6d->leave($__internal_03fdd4503113f9235b57d6b156215e566b522c49d10748ed3f5fddebc18d9b6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22d0a96d8bc0d9ed75b72787bdfa7eb6926a0a1df7df2aaf1bd5a86a52009dca = $this->env->getExtension("native_profiler");
        $__internal_22d0a96d8bc0d9ed75b72787bdfa7eb6926a0a1df7df2aaf1bd5a86a52009dca->enter($__internal_22d0a96d8bc0d9ed75b72787bdfa7eb6926a0a1df7df2aaf1bd5a86a52009dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_22d0a96d8bc0d9ed75b72787bdfa7eb6926a0a1df7df2aaf1bd5a86a52009dca->leave($__internal_22d0a96d8bc0d9ed75b72787bdfa7eb6926a0a1df7df2aaf1bd5a86a52009dca_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_e2d2c701b00e72b5e12e4fd0b4f30d894e7813ecfe7b5e164fb1560da63380be = $this->env->getExtension("native_profiler");
        $__internal_e2d2c701b00e72b5e12e4fd0b4f30d894e7813ecfe7b5e164fb1560da63380be->enter($__internal_e2d2c701b00e72b5e12e4fd0b4f30d894e7813ecfe7b5e164fb1560da63380be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_e2d2c701b00e72b5e12e4fd0b4f30d894e7813ecfe7b5e164fb1560da63380be->leave($__internal_e2d2c701b00e72b5e12e4fd0b4f30d894e7813ecfe7b5e164fb1560da63380be_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9df81df7a36134d586c3d308880bca410aea219c670f0a5871ddfabee2276e6c = $this->env->getExtension("native_profiler");
        $__internal_9df81df7a36134d586c3d308880bca410aea219c670f0a5871ddfabee2276e6c->enter($__internal_9df81df7a36134d586c3d308880bca410aea219c670f0a5871ddfabee2276e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_9df81df7a36134d586c3d308880bca410aea219c670f0a5871ddfabee2276e6c->leave($__internal_9df81df7a36134d586c3d308880bca410aea219c670f0a5871ddfabee2276e6c_prof);

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
