<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_225c0888c8d9bd7f5f76296f77ed0a56a0831e7eb5b1398311b8df0a873451e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_2acc06581036b136150ed119484a54fe8e020a4fb6a41fa7129638b811be703f = $this->env->getExtension("native_profiler");
        $__internal_2acc06581036b136150ed119484a54fe8e020a4fb6a41fa7129638b811be703f->enter($__internal_2acc06581036b136150ed119484a54fe8e020a4fb6a41fa7129638b811be703f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2acc06581036b136150ed119484a54fe8e020a4fb6a41fa7129638b811be703f->leave($__internal_2acc06581036b136150ed119484a54fe8e020a4fb6a41fa7129638b811be703f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_906f6b483effffff84a938b9ca1b86413cceadb49d3400e21fac62ad302f139d = $this->env->getExtension("native_profiler");
        $__internal_906f6b483effffff84a938b9ca1b86413cceadb49d3400e21fac62ad302f139d->enter($__internal_906f6b483effffff84a938b9ca1b86413cceadb49d3400e21fac62ad302f139d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_906f6b483effffff84a938b9ca1b86413cceadb49d3400e21fac62ad302f139d->leave($__internal_906f6b483effffff84a938b9ca1b86413cceadb49d3400e21fac62ad302f139d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
