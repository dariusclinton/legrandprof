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
        $__internal_31146d7495016df6208a1d8ad0cc1843197273f6d66f2ba661ae0551f0ec469a = $this->env->getExtension("native_profiler");
        $__internal_31146d7495016df6208a1d8ad0cc1843197273f6d66f2ba661ae0551f0ec469a->enter($__internal_31146d7495016df6208a1d8ad0cc1843197273f6d66f2ba661ae0551f0ec469a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31146d7495016df6208a1d8ad0cc1843197273f6d66f2ba661ae0551f0ec469a->leave($__internal_31146d7495016df6208a1d8ad0cc1843197273f6d66f2ba661ae0551f0ec469a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fc65e28f87d42e5b2617678a66cb12a4fc170d673f748445c3dad67b6e2727d = $this->env->getExtension("native_profiler");
        $__internal_2fc65e28f87d42e5b2617678a66cb12a4fc170d673f748445c3dad67b6e2727d->enter($__internal_2fc65e28f87d42e5b2617678a66cb12a4fc170d673f748445c3dad67b6e2727d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2fc65e28f87d42e5b2617678a66cb12a4fc170d673f748445c3dad67b6e2727d->leave($__internal_2fc65e28f87d42e5b2617678a66cb12a4fc170d673f748445c3dad67b6e2727d_prof);

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
