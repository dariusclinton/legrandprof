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
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_701425ef44f75ffc9c579d76b2ba0bf25487ce2c93eb1cf39c91b690c59dfb60 = $this->env->getExtension("native_profiler");
        $__internal_701425ef44f75ffc9c579d76b2ba0bf25487ce2c93eb1cf39c91b690c59dfb60->enter($__internal_701425ef44f75ffc9c579d76b2ba0bf25487ce2c93eb1cf39c91b690c59dfb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_701425ef44f75ffc9c579d76b2ba0bf25487ce2c93eb1cf39c91b690c59dfb60->leave($__internal_701425ef44f75ffc9c579d76b2ba0bf25487ce2c93eb1cf39c91b690c59dfb60_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f97f2e188813262032bb331cd4baa203eedabe02e656124e0c15a1b570c0e79 = $this->env->getExtension("native_profiler");
        $__internal_2f97f2e188813262032bb331cd4baa203eedabe02e656124e0c15a1b570c0e79->enter($__internal_2f97f2e188813262032bb331cd4baa203eedabe02e656124e0c15a1b570c0e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_2f97f2e188813262032bb331cd4baa203eedabe02e656124e0c15a1b570c0e79->leave($__internal_2f97f2e188813262032bb331cd4baa203eedabe02e656124e0c15a1b570c0e79_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f14d48201d00b0741955e2ad34b4c28250940ff85c8207beb60c19ee79a0b6ab = $this->env->getExtension("native_profiler");
        $__internal_f14d48201d00b0741955e2ad34b4c28250940ff85c8207beb60c19ee79a0b6ab->enter($__internal_f14d48201d00b0741955e2ad34b4c28250940ff85c8207beb60c19ee79a0b6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 8)->display($context);
        
        $__internal_f14d48201d00b0741955e2ad34b4c28250940ff85c8207beb60c19ee79a0b6ab->leave($__internal_f14d48201d00b0741955e2ad34b4c28250940ff85c8207beb60c19ee79a0b6ab_prof);

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
