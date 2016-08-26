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
        $__internal_1c1a81b2d7ac6aa63069ca1b52461b9f54360053450e780f8ac0b994cebf6cb5 = $this->env->getExtension("native_profiler");
        $__internal_1c1a81b2d7ac6aa63069ca1b52461b9f54360053450e780f8ac0b994cebf6cb5->enter($__internal_1c1a81b2d7ac6aa63069ca1b52461b9f54360053450e780f8ac0b994cebf6cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c1a81b2d7ac6aa63069ca1b52461b9f54360053450e780f8ac0b994cebf6cb5->leave($__internal_1c1a81b2d7ac6aa63069ca1b52461b9f54360053450e780f8ac0b994cebf6cb5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_704358a1a85f9e0f6eb14d132d143a71451e0886fdee2d647ffdbe8812db8f6b = $this->env->getExtension("native_profiler");
        $__internal_704358a1a85f9e0f6eb14d132d143a71451e0886fdee2d647ffdbe8812db8f6b->enter($__internal_704358a1a85f9e0f6eb14d132d143a71451e0886fdee2d647ffdbe8812db8f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_704358a1a85f9e0f6eb14d132d143a71451e0886fdee2d647ffdbe8812db8f6b->leave($__internal_704358a1a85f9e0f6eb14d132d143a71451e0886fdee2d647ffdbe8812db8f6b_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_7ab12eab0df0091939fcc6bd648c0578a011866b7479f08f8aceac542c426343 = $this->env->getExtension("native_profiler");
        $__internal_7ab12eab0df0091939fcc6bd648c0578a011866b7479f08f8aceac542c426343->enter($__internal_7ab12eab0df0091939fcc6bd648c0578a011866b7479f08f8aceac542c426343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_7ab12eab0df0091939fcc6bd648c0578a011866b7479f08f8aceac542c426343->leave($__internal_7ab12eab0df0091939fcc6bd648c0578a011866b7479f08f8aceac542c426343_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05fc3d116f973c48b311346f02467a5c6106326e4f58abca3f82c5e3013b8b6e = $this->env->getExtension("native_profiler");
        $__internal_05fc3d116f973c48b311346f02467a5c6106326e4f58abca3f82c5e3013b8b6e->enter($__internal_05fc3d116f973c48b311346f02467a5c6106326e4f58abca3f82c5e3013b8b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_05fc3d116f973c48b311346f02467a5c6106326e4f58abca3f82c5e3013b8b6e->leave($__internal_05fc3d116f973c48b311346f02467a5c6106326e4f58abca3f82c5e3013b8b6e_prof);

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
