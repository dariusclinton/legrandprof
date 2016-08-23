<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_addc6a791de2974e7aa145d72799d3422f9b4b4248c4631977d654914e2cae32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_af056c13ef9dda4dd853c05fdff41f15daf192007bbedc72bd462aea551f7219 = $this->env->getExtension("native_profiler");
        $__internal_af056c13ef9dda4dd853c05fdff41f15daf192007bbedc72bd462aea551f7219->enter($__internal_af056c13ef9dda4dd853c05fdff41f15daf192007bbedc72bd462aea551f7219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af056c13ef9dda4dd853c05fdff41f15daf192007bbedc72bd462aea551f7219->leave($__internal_af056c13ef9dda4dd853c05fdff41f15daf192007bbedc72bd462aea551f7219_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f17b334656fdc8786cb0a3938e776fcbbf419b32ac3348484842d02b3db4953 = $this->env->getExtension("native_profiler");
        $__internal_7f17b334656fdc8786cb0a3938e776fcbbf419b32ac3348484842d02b3db4953->enter($__internal_7f17b334656fdc8786cb0a3938e776fcbbf419b32ac3348484842d02b3db4953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_7f17b334656fdc8786cb0a3938e776fcbbf419b32ac3348484842d02b3db4953->leave($__internal_7f17b334656fdc8786cb0a3938e776fcbbf419b32ac3348484842d02b3db4953_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
