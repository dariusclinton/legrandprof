<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_ee0985f62d4eacb1eb1f956850499e166fce5a6d04d9851b488e299475614d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_a23b9bb67833ff3e7a02e0c84057617a83feb883b7f75530a4d3195c4d50ef00 = $this->env->getExtension("native_profiler");
        $__internal_a23b9bb67833ff3e7a02e0c84057617a83feb883b7f75530a4d3195c4d50ef00->enter($__internal_a23b9bb67833ff3e7a02e0c84057617a83feb883b7f75530a4d3195c4d50ef00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a23b9bb67833ff3e7a02e0c84057617a83feb883b7f75530a4d3195c4d50ef00->leave($__internal_a23b9bb67833ff3e7a02e0c84057617a83feb883b7f75530a4d3195c4d50ef00_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0220d3ac016b6ddbe6c3fcaaace2d434b6df34688c8af6b2038d9e175f9c9b67 = $this->env->getExtension("native_profiler");
        $__internal_0220d3ac016b6ddbe6c3fcaaace2d434b6df34688c8af6b2038d9e175f9c9b67->enter($__internal_0220d3ac016b6ddbe6c3fcaaace2d434b6df34688c8af6b2038d9e175f9c9b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0220d3ac016b6ddbe6c3fcaaace2d434b6df34688c8af6b2038d9e175f9c9b67->leave($__internal_0220d3ac016b6ddbe6c3fcaaace2d434b6df34688c8af6b2038d9e175f9c9b67_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
