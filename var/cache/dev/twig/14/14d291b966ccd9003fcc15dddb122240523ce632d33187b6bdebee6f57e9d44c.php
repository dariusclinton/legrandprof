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
        $__internal_7ac67d966e313cd05a569ebe0caf6b2d9fdc42c54791d6666cb73c9656ef179e = $this->env->getExtension("native_profiler");
        $__internal_7ac67d966e313cd05a569ebe0caf6b2d9fdc42c54791d6666cb73c9656ef179e->enter($__internal_7ac67d966e313cd05a569ebe0caf6b2d9fdc42c54791d6666cb73c9656ef179e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ac67d966e313cd05a569ebe0caf6b2d9fdc42c54791d6666cb73c9656ef179e->leave($__internal_7ac67d966e313cd05a569ebe0caf6b2d9fdc42c54791d6666cb73c9656ef179e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f094a17b7d9d4cb30ae0709a006e152c93ae44eaf18970ccbcf15eb8c0f63b1 = $this->env->getExtension("native_profiler");
        $__internal_6f094a17b7d9d4cb30ae0709a006e152c93ae44eaf18970ccbcf15eb8c0f63b1->enter($__internal_6f094a17b7d9d4cb30ae0709a006e152c93ae44eaf18970ccbcf15eb8c0f63b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_6f094a17b7d9d4cb30ae0709a006e152c93ae44eaf18970ccbcf15eb8c0f63b1->leave($__internal_6f094a17b7d9d4cb30ae0709a006e152c93ae44eaf18970ccbcf15eb8c0f63b1_prof);

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
