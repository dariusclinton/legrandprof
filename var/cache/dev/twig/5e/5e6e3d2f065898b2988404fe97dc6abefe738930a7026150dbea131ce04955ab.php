<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_65bf60ec878b87bf7aa5bd6fc1e5adfda07d0a44e500f8e95091af386b0d1be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_5120eb6baaa52ca639a66dcd083fec8a6f61f468ce1913efa24b1635703b4d05 = $this->env->getExtension("native_profiler");
        $__internal_5120eb6baaa52ca639a66dcd083fec8a6f61f468ce1913efa24b1635703b4d05->enter($__internal_5120eb6baaa52ca639a66dcd083fec8a6f61f468ce1913efa24b1635703b4d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5120eb6baaa52ca639a66dcd083fec8a6f61f468ce1913efa24b1635703b4d05->leave($__internal_5120eb6baaa52ca639a66dcd083fec8a6f61f468ce1913efa24b1635703b4d05_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_021a8b4eba6c3d5a48c82c9a8db4651f2bcfa927f6e6bdfd37364d0d57c3e90e = $this->env->getExtension("native_profiler");
        $__internal_021a8b4eba6c3d5a48c82c9a8db4651f2bcfa927f6e6bdfd37364d0d57c3e90e->enter($__internal_021a8b4eba6c3d5a48c82c9a8db4651f2bcfa927f6e6bdfd37364d0d57c3e90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_021a8b4eba6c3d5a48c82c9a8db4651f2bcfa927f6e6bdfd37364d0d57c3e90e->leave($__internal_021a8b4eba6c3d5a48c82c9a8db4651f2bcfa927f6e6bdfd37364d0d57c3e90e_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
