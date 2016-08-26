<?php

/* @LGPUser/Registration/checkEmail.html.twig */
class __TwigTemplate_7aae9c1e0e87ac6aae144a0fd6c3497add40fe654b15084734373b8ceeea6021 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_a3ac0688b9304d6213021fcd10f01cc1600c1a5a5d024b77be358cd7e663298d = $this->env->getExtension("native_profiler");
        $__internal_a3ac0688b9304d6213021fcd10f01cc1600c1a5a5d024b77be358cd7e663298d->enter($__internal_a3ac0688b9304d6213021fcd10f01cc1600c1a5a5d024b77be358cd7e663298d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3ac0688b9304d6213021fcd10f01cc1600c1a5a5d024b77be358cd7e663298d->leave($__internal_a3ac0688b9304d6213021fcd10f01cc1600c1a5a5d024b77be358cd7e663298d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25122c782b591150807f1021d7f69585330b1d3c462f884daaa41deb6fec82da = $this->env->getExtension("native_profiler");
        $__internal_25122c782b591150807f1021d7f69585330b1d3c462f884daaa41deb6fec82da->enter($__internal_25122c782b591150807f1021d7f69585330b1d3c462f884daaa41deb6fec82da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_25122c782b591150807f1021d7f69585330b1d3c462f884daaa41deb6fec82da->leave($__internal_25122c782b591150807f1021d7f69585330b1d3c462f884daaa41deb6fec82da_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/checkEmail.html.twig";
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
