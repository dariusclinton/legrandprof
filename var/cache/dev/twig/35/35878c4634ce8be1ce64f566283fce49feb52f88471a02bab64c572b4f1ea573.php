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
        $__internal_00535ee9b8f8ebec97aebb9ce3934ee12f61c1812bf6c84319dbee4f2dc69302 = $this->env->getExtension("native_profiler");
        $__internal_00535ee9b8f8ebec97aebb9ce3934ee12f61c1812bf6c84319dbee4f2dc69302->enter($__internal_00535ee9b8f8ebec97aebb9ce3934ee12f61c1812bf6c84319dbee4f2dc69302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00535ee9b8f8ebec97aebb9ce3934ee12f61c1812bf6c84319dbee4f2dc69302->leave($__internal_00535ee9b8f8ebec97aebb9ce3934ee12f61c1812bf6c84319dbee4f2dc69302_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcbca5120667424e25b8fb58b0c4f56e8aa4abee2c1d30bf1e90c61e6cdbdc30 = $this->env->getExtension("native_profiler");
        $__internal_bcbca5120667424e25b8fb58b0c4f56e8aa4abee2c1d30bf1e90c61e6cdbdc30->enter($__internal_bcbca5120667424e25b8fb58b0c4f56e8aa4abee2c1d30bf1e90c61e6cdbdc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bcbca5120667424e25b8fb58b0c4f56e8aa4abee2c1d30bf1e90c61e6cdbdc30->leave($__internal_bcbca5120667424e25b8fb58b0c4f56e8aa4abee2c1d30bf1e90c61e6cdbdc30_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7139675a4811e3d2502932916a6a08204175adf5b4b2ebad888775470f739bb1 = $this->env->getExtension("native_profiler");
        $__internal_7139675a4811e3d2502932916a6a08204175adf5b4b2ebad888775470f739bb1->enter($__internal_7139675a4811e3d2502932916a6a08204175adf5b4b2ebad888775470f739bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_7139675a4811e3d2502932916a6a08204175adf5b4b2ebad888775470f739bb1->leave($__internal_7139675a4811e3d2502932916a6a08204175adf5b4b2ebad888775470f739bb1_prof);

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
