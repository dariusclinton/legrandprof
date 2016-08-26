<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2a00b1dac2c61a734ba3034bd7813c4ce86417a5f2788a98b4230a1dff6fda7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_a548b40449f5ef06bd064f3276a51c4e57761540491a8fac360c9b34930d98ac = $this->env->getExtension("native_profiler");
        $__internal_a548b40449f5ef06bd064f3276a51c4e57761540491a8fac360c9b34930d98ac->enter($__internal_a548b40449f5ef06bd064f3276a51c4e57761540491a8fac360c9b34930d98ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a548b40449f5ef06bd064f3276a51c4e57761540491a8fac360c9b34930d98ac->leave($__internal_a548b40449f5ef06bd064f3276a51c4e57761540491a8fac360c9b34930d98ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c21b5ed704aee73099a8b6b49fcda3fa2e36b2c0ef792c6926eb2397499c6df = $this->env->getExtension("native_profiler");
        $__internal_7c21b5ed704aee73099a8b6b49fcda3fa2e36b2c0ef792c6926eb2397499c6df->enter($__internal_7c21b5ed704aee73099a8b6b49fcda3fa2e36b2c0ef792c6926eb2397499c6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7c21b5ed704aee73099a8b6b49fcda3fa2e36b2c0ef792c6926eb2397499c6df->leave($__internal_7c21b5ed704aee73099a8b6b49fcda3fa2e36b2c0ef792c6926eb2397499c6df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
