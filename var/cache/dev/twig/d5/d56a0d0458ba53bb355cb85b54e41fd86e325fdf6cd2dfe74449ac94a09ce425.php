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
        $__internal_9be2088f748988e27495ff37fea9bc7b3260c0b1c90c0c4225bef9f6c1fae2e0 = $this->env->getExtension("native_profiler");
        $__internal_9be2088f748988e27495ff37fea9bc7b3260c0b1c90c0c4225bef9f6c1fae2e0->enter($__internal_9be2088f748988e27495ff37fea9bc7b3260c0b1c90c0c4225bef9f6c1fae2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be2088f748988e27495ff37fea9bc7b3260c0b1c90c0c4225bef9f6c1fae2e0->leave($__internal_9be2088f748988e27495ff37fea9bc7b3260c0b1c90c0c4225bef9f6c1fae2e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42f09125ecaaa4fb159932fc0d932d4889682e213322daf8d9f24d24a7a75fe3 = $this->env->getExtension("native_profiler");
        $__internal_42f09125ecaaa4fb159932fc0d932d4889682e213322daf8d9f24d24a7a75fe3->enter($__internal_42f09125ecaaa4fb159932fc0d932d4889682e213322daf8d9f24d24a7a75fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_42f09125ecaaa4fb159932fc0d932d4889682e213322daf8d9f24d24a7a75fe3->leave($__internal_42f09125ecaaa4fb159932fc0d932d4889682e213322daf8d9f24d24a7a75fe3_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_e88afb6079d01ab157bd5a511037137d36cb09043fcbd8199afbba3cc8d4a3a7 = $this->env->getExtension("native_profiler");
        $__internal_e88afb6079d01ab157bd5a511037137d36cb09043fcbd8199afbba3cc8d4a3a7->enter($__internal_e88afb6079d01ab157bd5a511037137d36cb09043fcbd8199afbba3cc8d4a3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_e88afb6079d01ab157bd5a511037137d36cb09043fcbd8199afbba3cc8d4a3a7->leave($__internal_e88afb6079d01ab157bd5a511037137d36cb09043fcbd8199afbba3cc8d4a3a7_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_125e92b2ddd616d5c110456730a03ad33200bdd2cabebbdfc0e98241d707dc1b = $this->env->getExtension("native_profiler");
        $__internal_125e92b2ddd616d5c110456730a03ad33200bdd2cabebbdfc0e98241d707dc1b->enter($__internal_125e92b2ddd616d5c110456730a03ad33200bdd2cabebbdfc0e98241d707dc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_125e92b2ddd616d5c110456730a03ad33200bdd2cabebbdfc0e98241d707dc1b->leave($__internal_125e92b2ddd616d5c110456730a03ad33200bdd2cabebbdfc0e98241d707dc1b_prof);

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
