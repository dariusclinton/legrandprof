<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_57a580726f6f38382b614b6cee9b7d20d12470429cc0ae9d2ecf1aac06549105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67b1bbea3dd8f00e139d6e22fcee142a656da19a1e4ec45587b408bc8dfabab2 = $this->env->getExtension("native_profiler");
        $__internal_67b1bbea3dd8f00e139d6e22fcee142a656da19a1e4ec45587b408bc8dfabab2->enter($__internal_67b1bbea3dd8f00e139d6e22fcee142a656da19a1e4ec45587b408bc8dfabab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67b1bbea3dd8f00e139d6e22fcee142a656da19a1e4ec45587b408bc8dfabab2->leave($__internal_67b1bbea3dd8f00e139d6e22fcee142a656da19a1e4ec45587b408bc8dfabab2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d29b1510f8805dfb9f54e8605ac840ec82adb123076ce87230364ffe0906e27 = $this->env->getExtension("native_profiler");
        $__internal_9d29b1510f8805dfb9f54e8605ac840ec82adb123076ce87230364ffe0906e27->enter($__internal_9d29b1510f8805dfb9f54e8605ac840ec82adb123076ce87230364ffe0906e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_9d29b1510f8805dfb9f54e8605ac840ec82adb123076ce87230364ffe0906e27->leave($__internal_9d29b1510f8805dfb9f54e8605ac840ec82adb123076ce87230364ffe0906e27_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
