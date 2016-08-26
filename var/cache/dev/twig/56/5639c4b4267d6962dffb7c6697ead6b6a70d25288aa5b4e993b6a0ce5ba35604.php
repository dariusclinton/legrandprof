<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_80464fbf5868c0c8865ff25d806c3d60bd8e2ff3da8e6d052d8dd565e21d7503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_be94d9e3d1d90d0012df3c855f5afa75056659ec6d4fc1713b069845d6419766 = $this->env->getExtension("native_profiler");
        $__internal_be94d9e3d1d90d0012df3c855f5afa75056659ec6d4fc1713b069845d6419766->enter($__internal_be94d9e3d1d90d0012df3c855f5afa75056659ec6d4fc1713b069845d6419766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be94d9e3d1d90d0012df3c855f5afa75056659ec6d4fc1713b069845d6419766->leave($__internal_be94d9e3d1d90d0012df3c855f5afa75056659ec6d4fc1713b069845d6419766_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ec2770a510d999ccb3ae25c80c70fe1e4c923dd572903f4ddd6f0b57683cafa = $this->env->getExtension("native_profiler");
        $__internal_9ec2770a510d999ccb3ae25c80c70fe1e4c923dd572903f4ddd6f0b57683cafa->enter($__internal_9ec2770a510d999ccb3ae25c80c70fe1e4c923dd572903f4ddd6f0b57683cafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_9ec2770a510d999ccb3ae25c80c70fe1e4c923dd572903f4ddd6f0b57683cafa->leave($__internal_9ec2770a510d999ccb3ae25c80c70fe1e4c923dd572903f4ddd6f0b57683cafa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
