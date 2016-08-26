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
        $__internal_599e6f4f2db4b776c2bc994d20770912bc68ebd3b95ae91e9ad0de3a23ba8ca9 = $this->env->getExtension("native_profiler");
        $__internal_599e6f4f2db4b776c2bc994d20770912bc68ebd3b95ae91e9ad0de3a23ba8ca9->enter($__internal_599e6f4f2db4b776c2bc994d20770912bc68ebd3b95ae91e9ad0de3a23ba8ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_599e6f4f2db4b776c2bc994d20770912bc68ebd3b95ae91e9ad0de3a23ba8ca9->leave($__internal_599e6f4f2db4b776c2bc994d20770912bc68ebd3b95ae91e9ad0de3a23ba8ca9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_782292e058128463659ad0b3105d87728dbc7d599656028dca6d58475c0017f9 = $this->env->getExtension("native_profiler");
        $__internal_782292e058128463659ad0b3105d87728dbc7d599656028dca6d58475c0017f9->enter($__internal_782292e058128463659ad0b3105d87728dbc7d599656028dca6d58475c0017f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_782292e058128463659ad0b3105d87728dbc7d599656028dca6d58475c0017f9->leave($__internal_782292e058128463659ad0b3105d87728dbc7d599656028dca6d58475c0017f9_prof);

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
