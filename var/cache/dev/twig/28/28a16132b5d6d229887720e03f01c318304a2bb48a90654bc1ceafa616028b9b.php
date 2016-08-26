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
        $__internal_622cdee6146738bfb641c1d4de219214986d22c3323e695813e50231bbd63c96 = $this->env->getExtension("native_profiler");
        $__internal_622cdee6146738bfb641c1d4de219214986d22c3323e695813e50231bbd63c96->enter($__internal_622cdee6146738bfb641c1d4de219214986d22c3323e695813e50231bbd63c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_622cdee6146738bfb641c1d4de219214986d22c3323e695813e50231bbd63c96->leave($__internal_622cdee6146738bfb641c1d4de219214986d22c3323e695813e50231bbd63c96_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0b452730a1f68d760d42c5a66fa19538de3385f0c53010b466084073015e62b = $this->env->getExtension("native_profiler");
        $__internal_f0b452730a1f68d760d42c5a66fa19538de3385f0c53010b466084073015e62b->enter($__internal_f0b452730a1f68d760d42c5a66fa19538de3385f0c53010b466084073015e62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f0b452730a1f68d760d42c5a66fa19538de3385f0c53010b466084073015e62b->leave($__internal_f0b452730a1f68d760d42c5a66fa19538de3385f0c53010b466084073015e62b_prof);

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
