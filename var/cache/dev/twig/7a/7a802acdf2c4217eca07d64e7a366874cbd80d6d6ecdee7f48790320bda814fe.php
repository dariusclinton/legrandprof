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
        $__internal_087dd3231407a2c26400e76ab2b9720c6759fd7a0896b1f48f00b4c457f46e82 = $this->env->getExtension("native_profiler");
        $__internal_087dd3231407a2c26400e76ab2b9720c6759fd7a0896b1f48f00b4c457f46e82->enter($__internal_087dd3231407a2c26400e76ab2b9720c6759fd7a0896b1f48f00b4c457f46e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_087dd3231407a2c26400e76ab2b9720c6759fd7a0896b1f48f00b4c457f46e82->leave($__internal_087dd3231407a2c26400e76ab2b9720c6759fd7a0896b1f48f00b4c457f46e82_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c70abfab5b867e9c3d3f441a4ee4e0bab59b8c754a9ba07d6d1c91aa96fd9a53 = $this->env->getExtension("native_profiler");
        $__internal_c70abfab5b867e9c3d3f441a4ee4e0bab59b8c754a9ba07d6d1c91aa96fd9a53->enter($__internal_c70abfab5b867e9c3d3f441a4ee4e0bab59b8c754a9ba07d6d1c91aa96fd9a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_c70abfab5b867e9c3d3f441a4ee4e0bab59b8c754a9ba07d6d1c91aa96fd9a53->leave($__internal_c70abfab5b867e9c3d3f441a4ee4e0bab59b8c754a9ba07d6d1c91aa96fd9a53_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d4e20b8fc8afc432275a1acaf791ac41be25641147fceed8ef6537a1e10f631 = $this->env->getExtension("native_profiler");
        $__internal_3d4e20b8fc8afc432275a1acaf791ac41be25641147fceed8ef6537a1e10f631->enter($__internal_3d4e20b8fc8afc432275a1acaf791ac41be25641147fceed8ef6537a1e10f631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 8)->display($context);
        
        $__internal_3d4e20b8fc8afc432275a1acaf791ac41be25641147fceed8ef6537a1e10f631->leave($__internal_3d4e20b8fc8afc432275a1acaf791ac41be25641147fceed8ef6537a1e10f631_prof);

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
