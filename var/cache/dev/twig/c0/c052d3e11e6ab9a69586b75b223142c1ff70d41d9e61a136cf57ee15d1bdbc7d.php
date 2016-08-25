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
        $__internal_c08be9ff0cc063fe8a327d3321e9555b20d32caf60e69ee9e7309c7f7751abc5 = $this->env->getExtension("native_profiler");
        $__internal_c08be9ff0cc063fe8a327d3321e9555b20d32caf60e69ee9e7309c7f7751abc5->enter($__internal_c08be9ff0cc063fe8a327d3321e9555b20d32caf60e69ee9e7309c7f7751abc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c08be9ff0cc063fe8a327d3321e9555b20d32caf60e69ee9e7309c7f7751abc5->leave($__internal_c08be9ff0cc063fe8a327d3321e9555b20d32caf60e69ee9e7309c7f7751abc5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b7c230a52daaa741e3bab64277b6d0992d9601d49f1df038229d848d18a5e85 = $this->env->getExtension("native_profiler");
        $__internal_8b7c230a52daaa741e3bab64277b6d0992d9601d49f1df038229d848d18a5e85->enter($__internal_8b7c230a52daaa741e3bab64277b6d0992d9601d49f1df038229d848d18a5e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8b7c230a52daaa741e3bab64277b6d0992d9601d49f1df038229d848d18a5e85->leave($__internal_8b7c230a52daaa741e3bab64277b6d0992d9601d49f1df038229d848d18a5e85_prof);

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
