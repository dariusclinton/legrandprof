<?php

/* @LGPUser/Profile/edit.html.twig */
class __TwigTemplate_16410c83b23fc9cc51d6a12eb9cba3140c2a600b14ce10b45eda7987120e79fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Profile/edit.html.twig", 1);
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
        $__internal_62a4f3614fc62c7e01d202be0595f7e28fc1b2585b712b89b722a8b9b3237404 = $this->env->getExtension("native_profiler");
        $__internal_62a4f3614fc62c7e01d202be0595f7e28fc1b2585b712b89b722a8b9b3237404->enter($__internal_62a4f3614fc62c7e01d202be0595f7e28fc1b2585b712b89b722a8b9b3237404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62a4f3614fc62c7e01d202be0595f7e28fc1b2585b712b89b722a8b9b3237404->leave($__internal_62a4f3614fc62c7e01d202be0595f7e28fc1b2585b712b89b722a8b9b3237404_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a3fe10b63005083fd5df19bcac898a28d76e1de9a7ab483ddf5b313c3e67d6b = $this->env->getExtension("native_profiler");
        $__internal_8a3fe10b63005083fd5df19bcac898a28d76e1de9a7ab483ddf5b313c3e67d6b->enter($__internal_8a3fe10b63005083fd5df19bcac898a28d76e1de9a7ab483ddf5b313c3e67d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8a3fe10b63005083fd5df19bcac898a28d76e1de9a7ab483ddf5b313c3e67d6b->leave($__internal_8a3fe10b63005083fd5df19bcac898a28d76e1de9a7ab483ddf5b313c3e67d6b_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e53128e7f6ba44290ed10b3622bb70aa558e4d5f2987ea5dd1e5c70bcbcafe86 = $this->env->getExtension("native_profiler");
        $__internal_e53128e7f6ba44290ed10b3622bb70aa558e4d5f2987ea5dd1e5c70bcbcafe86->enter($__internal_e53128e7f6ba44290ed10b3622bb70aa558e4d5f2987ea5dd1e5c70bcbcafe86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_e53128e7f6ba44290ed10b3622bb70aa558e4d5f2987ea5dd1e5c70bcbcafe86->leave($__internal_e53128e7f6ba44290ed10b3622bb70aa558e4d5f2987ea5dd1e5c70bcbcafe86_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Profile/edit.html.twig";
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
