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
        $__internal_538c82182378b0a68829fe3dc21411a70e3265b9d1bdaf014135294f9c9cd00d = $this->env->getExtension("native_profiler");
        $__internal_538c82182378b0a68829fe3dc21411a70e3265b9d1bdaf014135294f9c9cd00d->enter($__internal_538c82182378b0a68829fe3dc21411a70e3265b9d1bdaf014135294f9c9cd00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_538c82182378b0a68829fe3dc21411a70e3265b9d1bdaf014135294f9c9cd00d->leave($__internal_538c82182378b0a68829fe3dc21411a70e3265b9d1bdaf014135294f9c9cd00d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_745a44fc3495afb96d56beacca6178502a1fc88eae6c4671be0a3eec0802a200 = $this->env->getExtension("native_profiler");
        $__internal_745a44fc3495afb96d56beacca6178502a1fc88eae6c4671be0a3eec0802a200->enter($__internal_745a44fc3495afb96d56beacca6178502a1fc88eae6c4671be0a3eec0802a200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_745a44fc3495afb96d56beacca6178502a1fc88eae6c4671be0a3eec0802a200->leave($__internal_745a44fc3495afb96d56beacca6178502a1fc88eae6c4671be0a3eec0802a200_prof);

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
