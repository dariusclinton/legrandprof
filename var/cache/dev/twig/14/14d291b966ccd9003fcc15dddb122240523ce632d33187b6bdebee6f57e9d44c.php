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
        $__internal_10cd1ee6bf014c818efb66299ad7df14ebda6456c28c2faf147266d369d599d9 = $this->env->getExtension("native_profiler");
        $__internal_10cd1ee6bf014c818efb66299ad7df14ebda6456c28c2faf147266d369d599d9->enter($__internal_10cd1ee6bf014c818efb66299ad7df14ebda6456c28c2faf147266d369d599d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10cd1ee6bf014c818efb66299ad7df14ebda6456c28c2faf147266d369d599d9->leave($__internal_10cd1ee6bf014c818efb66299ad7df14ebda6456c28c2faf147266d369d599d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eed43d6061abcf8e993444a3c958ef425185823ca3b7afe175364678ec28abc5 = $this->env->getExtension("native_profiler");
        $__internal_eed43d6061abcf8e993444a3c958ef425185823ca3b7afe175364678ec28abc5->enter($__internal_eed43d6061abcf8e993444a3c958ef425185823ca3b7afe175364678ec28abc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_eed43d6061abcf8e993444a3c958ef425185823ca3b7afe175364678ec28abc5->leave($__internal_eed43d6061abcf8e993444a3c958ef425185823ca3b7afe175364678ec28abc5_prof);

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
