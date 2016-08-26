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
        $__internal_e896e4c0652d116b6f731bc5af433cfc7705b4f4335ac4dc9108d1f05a74561a = $this->env->getExtension("native_profiler");
        $__internal_e896e4c0652d116b6f731bc5af433cfc7705b4f4335ac4dc9108d1f05a74561a->enter($__internal_e896e4c0652d116b6f731bc5af433cfc7705b4f4335ac4dc9108d1f05a74561a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e896e4c0652d116b6f731bc5af433cfc7705b4f4335ac4dc9108d1f05a74561a->leave($__internal_e896e4c0652d116b6f731bc5af433cfc7705b4f4335ac4dc9108d1f05a74561a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de2816ced570140dad91e81a2f31805ef4984d83f1dbc0ed3f516df5d717092d = $this->env->getExtension("native_profiler");
        $__internal_de2816ced570140dad91e81a2f31805ef4984d83f1dbc0ed3f516df5d717092d->enter($__internal_de2816ced570140dad91e81a2f31805ef4984d83f1dbc0ed3f516df5d717092d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_de2816ced570140dad91e81a2f31805ef4984d83f1dbc0ed3f516df5d717092d->leave($__internal_de2816ced570140dad91e81a2f31805ef4984d83f1dbc0ed3f516df5d717092d_prof);

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
