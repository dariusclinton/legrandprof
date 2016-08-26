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
        $__internal_2b5203125fe366d6d442ea135536bbf455da8f6e165b3fa7621ec0302947206e = $this->env->getExtension("native_profiler");
        $__internal_2b5203125fe366d6d442ea135536bbf455da8f6e165b3fa7621ec0302947206e->enter($__internal_2b5203125fe366d6d442ea135536bbf455da8f6e165b3fa7621ec0302947206e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b5203125fe366d6d442ea135536bbf455da8f6e165b3fa7621ec0302947206e->leave($__internal_2b5203125fe366d6d442ea135536bbf455da8f6e165b3fa7621ec0302947206e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85b195f0735390413575d8738a595e7d8c2b4179a74508d4b801ae8a96dbb348 = $this->env->getExtension("native_profiler");
        $__internal_85b195f0735390413575d8738a595e7d8c2b4179a74508d4b801ae8a96dbb348->enter($__internal_85b195f0735390413575d8738a595e7d8c2b4179a74508d4b801ae8a96dbb348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_85b195f0735390413575d8738a595e7d8c2b4179a74508d4b801ae8a96dbb348->leave($__internal_85b195f0735390413575d8738a595e7d8c2b4179a74508d4b801ae8a96dbb348_prof);

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
