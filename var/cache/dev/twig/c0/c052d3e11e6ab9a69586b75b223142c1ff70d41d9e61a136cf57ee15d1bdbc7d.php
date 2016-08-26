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
        $__internal_a2ea642729a009242fe9e91154ebdc8cd02a06cb114188a5fbbef2c0dd5362c7 = $this->env->getExtension("native_profiler");
        $__internal_a2ea642729a009242fe9e91154ebdc8cd02a06cb114188a5fbbef2c0dd5362c7->enter($__internal_a2ea642729a009242fe9e91154ebdc8cd02a06cb114188a5fbbef2c0dd5362c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2ea642729a009242fe9e91154ebdc8cd02a06cb114188a5fbbef2c0dd5362c7->leave($__internal_a2ea642729a009242fe9e91154ebdc8cd02a06cb114188a5fbbef2c0dd5362c7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e39c9cb3d40e2cad69b84175a90f2f8671e31a4803b9e9ad7f41ebb535078c1 = $this->env->getExtension("native_profiler");
        $__internal_4e39c9cb3d40e2cad69b84175a90f2f8671e31a4803b9e9ad7f41ebb535078c1->enter($__internal_4e39c9cb3d40e2cad69b84175a90f2f8671e31a4803b9e9ad7f41ebb535078c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4e39c9cb3d40e2cad69b84175a90f2f8671e31a4803b9e9ad7f41ebb535078c1->leave($__internal_4e39c9cb3d40e2cad69b84175a90f2f8671e31a4803b9e9ad7f41ebb535078c1_prof);

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
