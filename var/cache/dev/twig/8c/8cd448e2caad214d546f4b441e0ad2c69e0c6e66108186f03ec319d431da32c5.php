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
        $__internal_800dd620b419bf5725d423670f73826716e6470ba033cedb48e42b95561ac870 = $this->env->getExtension("native_profiler");
        $__internal_800dd620b419bf5725d423670f73826716e6470ba033cedb48e42b95561ac870->enter($__internal_800dd620b419bf5725d423670f73826716e6470ba033cedb48e42b95561ac870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_800dd620b419bf5725d423670f73826716e6470ba033cedb48e42b95561ac870->leave($__internal_800dd620b419bf5725d423670f73826716e6470ba033cedb48e42b95561ac870_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dc33213908c45e7162025c2b0342a7c9988b8c0bf046b699d249445ee74bbc2 = $this->env->getExtension("native_profiler");
        $__internal_5dc33213908c45e7162025c2b0342a7c9988b8c0bf046b699d249445ee74bbc2->enter($__internal_5dc33213908c45e7162025c2b0342a7c9988b8c0bf046b699d249445ee74bbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_5dc33213908c45e7162025c2b0342a7c9988b8c0bf046b699d249445ee74bbc2->leave($__internal_5dc33213908c45e7162025c2b0342a7c9988b8c0bf046b699d249445ee74bbc2_prof);

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
