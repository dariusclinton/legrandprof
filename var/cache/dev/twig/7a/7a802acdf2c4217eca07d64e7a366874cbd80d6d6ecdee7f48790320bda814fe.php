<?php

/* @LGPUser/Profile/show.html.twig */
class __TwigTemplate_a5f8413eda7573d3f30913d1076d736bc729b89d8f3951e8d6b1d76b85360962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Profile/show.html.twig", 1);
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
        $__internal_ab20600512f187e47c8d09319f13ab0f380e107110250cc434863a607d4eb704 = $this->env->getExtension("native_profiler");
        $__internal_ab20600512f187e47c8d09319f13ab0f380e107110250cc434863a607d4eb704->enter($__internal_ab20600512f187e47c8d09319f13ab0f380e107110250cc434863a607d4eb704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab20600512f187e47c8d09319f13ab0f380e107110250cc434863a607d4eb704->leave($__internal_ab20600512f187e47c8d09319f13ab0f380e107110250cc434863a607d4eb704_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec56a5777d4628ac766c6798fdc600fdfec887dfb79e69ef426dcc161e542e29 = $this->env->getExtension("native_profiler");
        $__internal_ec56a5777d4628ac766c6798fdc600fdfec887dfb79e69ef426dcc161e542e29->enter($__internal_ec56a5777d4628ac766c6798fdc600fdfec887dfb79e69ef426dcc161e542e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_ec56a5777d4628ac766c6798fdc600fdfec887dfb79e69ef426dcc161e542e29->leave($__internal_ec56a5777d4628ac766c6798fdc600fdfec887dfb79e69ef426dcc161e542e29_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb8915b71e76ad532c09e84a6d8cd491ffd25eedeaece321909e1fd778048bb9 = $this->env->getExtension("native_profiler");
        $__internal_bb8915b71e76ad532c09e84a6d8cd491ffd25eedeaece321909e1fd778048bb9->enter($__internal_bb8915b71e76ad532c09e84a6d8cd491ffd25eedeaece321909e1fd778048bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 8)->display($context);
        
        $__internal_bb8915b71e76ad532c09e84a6d8cd491ffd25eedeaece321909e1fd778048bb9->leave($__internal_bb8915b71e76ad532c09e84a6d8cd491ffd25eedeaece321909e1fd778048bb9_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Profile/show.html.twig";
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
