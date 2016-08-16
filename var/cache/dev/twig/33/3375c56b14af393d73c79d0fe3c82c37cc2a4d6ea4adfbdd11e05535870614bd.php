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
        $__internal_c587211b712241db89bbb3640834339c90edcdc9eb6d5b5fa5f6d683e30d3bb3 = $this->env->getExtension("native_profiler");
        $__internal_c587211b712241db89bbb3640834339c90edcdc9eb6d5b5fa5f6d683e30d3bb3->enter($__internal_c587211b712241db89bbb3640834339c90edcdc9eb6d5b5fa5f6d683e30d3bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c587211b712241db89bbb3640834339c90edcdc9eb6d5b5fa5f6d683e30d3bb3->leave($__internal_c587211b712241db89bbb3640834339c90edcdc9eb6d5b5fa5f6d683e30d3bb3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b3f4dde1cd142a33c76dd7e685e1259966e330ea6004c91c6ac711e31b8da6c = $this->env->getExtension("native_profiler");
        $__internal_4b3f4dde1cd142a33c76dd7e685e1259966e330ea6004c91c6ac711e31b8da6c->enter($__internal_4b3f4dde1cd142a33c76dd7e685e1259966e330ea6004c91c6ac711e31b8da6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_4b3f4dde1cd142a33c76dd7e685e1259966e330ea6004c91c6ac711e31b8da6c->leave($__internal_4b3f4dde1cd142a33c76dd7e685e1259966e330ea6004c91c6ac711e31b8da6c_prof);

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
