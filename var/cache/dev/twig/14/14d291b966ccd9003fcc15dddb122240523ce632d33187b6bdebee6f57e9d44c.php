<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_2bdbb70e2a1c877fa248404006573ab42dcbdadcf20918b56371727ae9018878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_ac5cf2eef3de9e2c133006ec6f2732550429dae6d75750f73dcac99e5c60621c = $this->env->getExtension("native_profiler");
        $__internal_ac5cf2eef3de9e2c133006ec6f2732550429dae6d75750f73dcac99e5c60621c->enter($__internal_ac5cf2eef3de9e2c133006ec6f2732550429dae6d75750f73dcac99e5c60621c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac5cf2eef3de9e2c133006ec6f2732550429dae6d75750f73dcac99e5c60621c->leave($__internal_ac5cf2eef3de9e2c133006ec6f2732550429dae6d75750f73dcac99e5c60621c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c4c7acffcd46345e1eea5c9bb53e926fee0d54e107073cedd4430d6daff685a = $this->env->getExtension("native_profiler");
        $__internal_1c4c7acffcd46345e1eea5c9bb53e926fee0d54e107073cedd4430d6daff685a->enter($__internal_1c4c7acffcd46345e1eea5c9bb53e926fee0d54e107073cedd4430d6daff685a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1c4c7acffcd46345e1eea5c9bb53e926fee0d54e107073cedd4430d6daff685a->leave($__internal_1c4c7acffcd46345e1eea5c9bb53e926fee0d54e107073cedd4430d6daff685a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
