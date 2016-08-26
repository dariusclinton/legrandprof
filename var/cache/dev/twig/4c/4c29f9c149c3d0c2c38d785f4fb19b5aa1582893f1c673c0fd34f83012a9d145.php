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
        $__internal_5e3d4096dfb23b608effd8909945f83c1636c311b244d98b3e3357c9731334f1 = $this->env->getExtension("native_profiler");
        $__internal_5e3d4096dfb23b608effd8909945f83c1636c311b244d98b3e3357c9731334f1->enter($__internal_5e3d4096dfb23b608effd8909945f83c1636c311b244d98b3e3357c9731334f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e3d4096dfb23b608effd8909945f83c1636c311b244d98b3e3357c9731334f1->leave($__internal_5e3d4096dfb23b608effd8909945f83c1636c311b244d98b3e3357c9731334f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f75048dd85c38508c805b25217c3900d992d3cdb2f8b41272f47355e270ed599 = $this->env->getExtension("native_profiler");
        $__internal_f75048dd85c38508c805b25217c3900d992d3cdb2f8b41272f47355e270ed599->enter($__internal_f75048dd85c38508c805b25217c3900d992d3cdb2f8b41272f47355e270ed599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f75048dd85c38508c805b25217c3900d992d3cdb2f8b41272f47355e270ed599->leave($__internal_f75048dd85c38508c805b25217c3900d992d3cdb2f8b41272f47355e270ed599_prof);

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
