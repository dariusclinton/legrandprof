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
        $__internal_255aac6d6339b1424d3399bdc26ec6668a064cb08ce41a962a161b6333966722 = $this->env->getExtension("native_profiler");
        $__internal_255aac6d6339b1424d3399bdc26ec6668a064cb08ce41a962a161b6333966722->enter($__internal_255aac6d6339b1424d3399bdc26ec6668a064cb08ce41a962a161b6333966722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_255aac6d6339b1424d3399bdc26ec6668a064cb08ce41a962a161b6333966722->leave($__internal_255aac6d6339b1424d3399bdc26ec6668a064cb08ce41a962a161b6333966722_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8c47f306633280a3f77dae53a44a8ce21e7d68da84c7226eab1901c3ca184ac = $this->env->getExtension("native_profiler");
        $__internal_b8c47f306633280a3f77dae53a44a8ce21e7d68da84c7226eab1901c3ca184ac->enter($__internal_b8c47f306633280a3f77dae53a44a8ce21e7d68da84c7226eab1901c3ca184ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_b8c47f306633280a3f77dae53a44a8ce21e7d68da84c7226eab1901c3ca184ac->leave($__internal_b8c47f306633280a3f77dae53a44a8ce21e7d68da84c7226eab1901c3ca184ac_prof);

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
