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
        $__internal_4dc30d90ef155c40c9b0e1b1dcc842b7ad34e0134d46bf1cdc3ca1c1568ba616 = $this->env->getExtension("native_profiler");
        $__internal_4dc30d90ef155c40c9b0e1b1dcc842b7ad34e0134d46bf1cdc3ca1c1568ba616->enter($__internal_4dc30d90ef155c40c9b0e1b1dcc842b7ad34e0134d46bf1cdc3ca1c1568ba616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dc30d90ef155c40c9b0e1b1dcc842b7ad34e0134d46bf1cdc3ca1c1568ba616->leave($__internal_4dc30d90ef155c40c9b0e1b1dcc842b7ad34e0134d46bf1cdc3ca1c1568ba616_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e2b7ebc2780cf5457ae27c6af3c7e2bdd5705035807caf3b4a9f1f4f7cdb9ba = $this->env->getExtension("native_profiler");
        $__internal_4e2b7ebc2780cf5457ae27c6af3c7e2bdd5705035807caf3b4a9f1f4f7cdb9ba->enter($__internal_4e2b7ebc2780cf5457ae27c6af3c7e2bdd5705035807caf3b4a9f1f4f7cdb9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4e2b7ebc2780cf5457ae27c6af3c7e2bdd5705035807caf3b4a9f1f4f7cdb9ba->leave($__internal_4e2b7ebc2780cf5457ae27c6af3c7e2bdd5705035807caf3b4a9f1f4f7cdb9ba_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9293f430a3be4235f09038b4d922bbe8b328ed593632a08d4a54358102d852a = $this->env->getExtension("native_profiler");
        $__internal_f9293f430a3be4235f09038b4d922bbe8b328ed593632a08d4a54358102d852a->enter($__internal_f9293f430a3be4235f09038b4d922bbe8b328ed593632a08d4a54358102d852a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_f9293f430a3be4235f09038b4d922bbe8b328ed593632a08d4a54358102d852a->leave($__internal_f9293f430a3be4235f09038b4d922bbe8b328ed593632a08d4a54358102d852a_prof);

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
