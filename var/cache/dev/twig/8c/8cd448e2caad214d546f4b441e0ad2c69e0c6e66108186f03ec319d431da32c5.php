<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_6369f1369e51652c1c016d94248a533bbf82ee1e71a4a0517d2e3bb33a5975a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_b6f60b13198f76cdd1c3f4acec484868f9a7336f0829db07be6572ec53f8f554 = $this->env->getExtension("native_profiler");
        $__internal_b6f60b13198f76cdd1c3f4acec484868f9a7336f0829db07be6572ec53f8f554->enter($__internal_b6f60b13198f76cdd1c3f4acec484868f9a7336f0829db07be6572ec53f8f554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6f60b13198f76cdd1c3f4acec484868f9a7336f0829db07be6572ec53f8f554->leave($__internal_b6f60b13198f76cdd1c3f4acec484868f9a7336f0829db07be6572ec53f8f554_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0e1ce18b8ec53a47f6b68cce64778a6589e160bd3d59c166b73d114d661d501 = $this->env->getExtension("native_profiler");
        $__internal_f0e1ce18b8ec53a47f6b68cce64778a6589e160bd3d59c166b73d114d661d501->enter($__internal_f0e1ce18b8ec53a47f6b68cce64778a6589e160bd3d59c166b73d114d661d501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_f0e1ce18b8ec53a47f6b68cce64778a6589e160bd3d59c166b73d114d661d501->leave($__internal_f0e1ce18b8ec53a47f6b68cce64778a6589e160bd3d59c166b73d114d661d501_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
