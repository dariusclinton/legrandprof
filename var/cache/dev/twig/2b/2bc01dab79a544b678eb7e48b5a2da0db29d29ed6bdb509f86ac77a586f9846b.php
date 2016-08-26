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
        $__internal_9a6da6bae727a23f360386bba44b8492c870202a09fb0b76c6b13d676b9c5644 = $this->env->getExtension("native_profiler");
        $__internal_9a6da6bae727a23f360386bba44b8492c870202a09fb0b76c6b13d676b9c5644->enter($__internal_9a6da6bae727a23f360386bba44b8492c870202a09fb0b76c6b13d676b9c5644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a6da6bae727a23f360386bba44b8492c870202a09fb0b76c6b13d676b9c5644->leave($__internal_9a6da6bae727a23f360386bba44b8492c870202a09fb0b76c6b13d676b9c5644_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4e0e37cab2a8c783cd61de8d46b4cfdc4ea4cb40d110bc9dbb825db9de20fbe = $this->env->getExtension("native_profiler");
        $__internal_c4e0e37cab2a8c783cd61de8d46b4cfdc4ea4cb40d110bc9dbb825db9de20fbe->enter($__internal_c4e0e37cab2a8c783cd61de8d46b4cfdc4ea4cb40d110bc9dbb825db9de20fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c4e0e37cab2a8c783cd61de8d46b4cfdc4ea4cb40d110bc9dbb825db9de20fbe->leave($__internal_c4e0e37cab2a8c783cd61de8d46b4cfdc4ea4cb40d110bc9dbb825db9de20fbe_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_263b7ef4a9589bfffd36d13294899d19d82ec1bc4d2b4c7413e86e9898affce6 = $this->env->getExtension("native_profiler");
        $__internal_263b7ef4a9589bfffd36d13294899d19d82ec1bc4d2b4c7413e86e9898affce6->enter($__internal_263b7ef4a9589bfffd36d13294899d19d82ec1bc4d2b4c7413e86e9898affce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_263b7ef4a9589bfffd36d13294899d19d82ec1bc4d2b4c7413e86e9898affce6->leave($__internal_263b7ef4a9589bfffd36d13294899d19d82ec1bc4d2b4c7413e86e9898affce6_prof);

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
