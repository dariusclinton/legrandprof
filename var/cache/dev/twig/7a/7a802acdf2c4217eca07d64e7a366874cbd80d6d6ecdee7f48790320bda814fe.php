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
        $__internal_ea0d4d9d1119ec5abc52573e9b156d7d2d26eddff26d48548c0756598baba5ec = $this->env->getExtension("native_profiler");
        $__internal_ea0d4d9d1119ec5abc52573e9b156d7d2d26eddff26d48548c0756598baba5ec->enter($__internal_ea0d4d9d1119ec5abc52573e9b156d7d2d26eddff26d48548c0756598baba5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea0d4d9d1119ec5abc52573e9b156d7d2d26eddff26d48548c0756598baba5ec->leave($__internal_ea0d4d9d1119ec5abc52573e9b156d7d2d26eddff26d48548c0756598baba5ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ab264482e26524fc0c23dcd7c5517bf432af6aac87567b7e63500a3397ff513 = $this->env->getExtension("native_profiler");
        $__internal_3ab264482e26524fc0c23dcd7c5517bf432af6aac87567b7e63500a3397ff513->enter($__internal_3ab264482e26524fc0c23dcd7c5517bf432af6aac87567b7e63500a3397ff513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_3ab264482e26524fc0c23dcd7c5517bf432af6aac87567b7e63500a3397ff513->leave($__internal_3ab264482e26524fc0c23dcd7c5517bf432af6aac87567b7e63500a3397ff513_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27fb0694d1472d475ada5e4829fa2683debe7e34d5139f9fb9fff54ca7e3f13d = $this->env->getExtension("native_profiler");
        $__internal_27fb0694d1472d475ada5e4829fa2683debe7e34d5139f9fb9fff54ca7e3f13d->enter($__internal_27fb0694d1472d475ada5e4829fa2683debe7e34d5139f9fb9fff54ca7e3f13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 8)->display($context);
        
        $__internal_27fb0694d1472d475ada5e4829fa2683debe7e34d5139f9fb9fff54ca7e3f13d->leave($__internal_27fb0694d1472d475ada5e4829fa2683debe7e34d5139f9fb9fff54ca7e3f13d_prof);

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
