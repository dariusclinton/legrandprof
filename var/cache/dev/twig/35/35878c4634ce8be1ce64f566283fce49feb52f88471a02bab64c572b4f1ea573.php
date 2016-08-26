<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bfa5b54c28ea6200577ac5882a0df94a75ed8cfb3033da8b9b18747505c20ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f74ce568561a716c23271cfd5a436b7dbf758f7e5a0af0b3db3242cd7643642b = $this->env->getExtension("native_profiler");
        $__internal_f74ce568561a716c23271cfd5a436b7dbf758f7e5a0af0b3db3242cd7643642b->enter($__internal_f74ce568561a716c23271cfd5a436b7dbf758f7e5a0af0b3db3242cd7643642b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f74ce568561a716c23271cfd5a436b7dbf758f7e5a0af0b3db3242cd7643642b->leave($__internal_f74ce568561a716c23271cfd5a436b7dbf758f7e5a0af0b3db3242cd7643642b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_28dfa3e637c32b9fbe9b310f34287653513d9bde4047ce7b546c075a21da0aa1 = $this->env->getExtension("native_profiler");
        $__internal_28dfa3e637c32b9fbe9b310f34287653513d9bde4047ce7b546c075a21da0aa1->enter($__internal_28dfa3e637c32b9fbe9b310f34287653513d9bde4047ce7b546c075a21da0aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_28dfa3e637c32b9fbe9b310f34287653513d9bde4047ce7b546c075a21da0aa1->leave($__internal_28dfa3e637c32b9fbe9b310f34287653513d9bde4047ce7b546c075a21da0aa1_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2b9127ceedca1c9791ef947c2dab40a4801703533f133d75c726a46ed42f12f = $this->env->getExtension("native_profiler");
        $__internal_a2b9127ceedca1c9791ef947c2dab40a4801703533f133d75c726a46ed42f12f->enter($__internal_a2b9127ceedca1c9791ef947c2dab40a4801703533f133d75c726a46ed42f12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_a2b9127ceedca1c9791ef947c2dab40a4801703533f133d75c726a46ed42f12f->leave($__internal_a2b9127ceedca1c9791ef947c2dab40a4801703533f133d75c726a46ed42f12f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/*     {{ app.user.prenoms }} {{ app.user.nom }} - Edit profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
