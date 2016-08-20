<?php

/* @LGPUser/Registration/register.html.twig */
class __TwigTemplate_7fee79d169dc4609d180808d7c2a6cdfc7cb7aed15a819309c1b79c098c137b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Registration/register.html.twig", 1);
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
        $__internal_1a100cf4cb89fca7a7c4fbebda1814de209b6c6c5b34a1e0d159ea5bb8054a8b = $this->env->getExtension("native_profiler");
        $__internal_1a100cf4cb89fca7a7c4fbebda1814de209b6c6c5b34a1e0d159ea5bb8054a8b->enter($__internal_1a100cf4cb89fca7a7c4fbebda1814de209b6c6c5b34a1e0d159ea5bb8054a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a100cf4cb89fca7a7c4fbebda1814de209b6c6c5b34a1e0d159ea5bb8054a8b->leave($__internal_1a100cf4cb89fca7a7c4fbebda1814de209b6c6c5b34a1e0d159ea5bb8054a8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29bc9bd68e833e7d0451c0e5f37779a807460fe6373a4c0a677f650772693540 = $this->env->getExtension("native_profiler");
        $__internal_29bc9bd68e833e7d0451c0e5f37779a807460fe6373a4c0a677f650772693540->enter($__internal_29bc9bd68e833e7d0451c0e5f37779a807460fe6373a4c0a677f650772693540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_29bc9bd68e833e7d0451c0e5f37779a807460fe6373a4c0a677f650772693540->leave($__internal_29bc9bd68e833e7d0451c0e5f37779a807460fe6373a4c0a677f650772693540_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/register.html.twig";
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
/*   {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
