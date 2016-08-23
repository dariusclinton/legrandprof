<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_76f956740670e1d0c7cf76e1e38e59ae9e7cd737e87007a415e8dc0b23580121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_5a8726bab67d082899a7ff13e0a193ff0898f742e1b36f6206b3f6f807ca00b5 = $this->env->getExtension("native_profiler");
        $__internal_5a8726bab67d082899a7ff13e0a193ff0898f742e1b36f6206b3f6f807ca00b5->enter($__internal_5a8726bab67d082899a7ff13e0a193ff0898f742e1b36f6206b3f6f807ca00b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a8726bab67d082899a7ff13e0a193ff0898f742e1b36f6206b3f6f807ca00b5->leave($__internal_5a8726bab67d082899a7ff13e0a193ff0898f742e1b36f6206b3f6f807ca00b5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed90bcdc76db7df889f15a61a97b7ad06671854f4af1d5222bdb09974d80a343 = $this->env->getExtension("native_profiler");
        $__internal_ed90bcdc76db7df889f15a61a97b7ad06671854f4af1d5222bdb09974d80a343->enter($__internal_ed90bcdc76db7df889f15a61a97b7ad06671854f4af1d5222bdb09974d80a343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ed90bcdc76db7df889f15a61a97b7ad06671854f4af1d5222bdb09974d80a343->leave($__internal_ed90bcdc76db7df889f15a61a97b7ad06671854f4af1d5222bdb09974d80a343_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
