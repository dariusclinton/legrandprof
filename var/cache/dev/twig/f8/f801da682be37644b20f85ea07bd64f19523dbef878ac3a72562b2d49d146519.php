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
        $__internal_e228965baf7e163d69695b9ed99277899c6c4efb80c0401688d0c44948be5c99 = $this->env->getExtension("native_profiler");
        $__internal_e228965baf7e163d69695b9ed99277899c6c4efb80c0401688d0c44948be5c99->enter($__internal_e228965baf7e163d69695b9ed99277899c6c4efb80c0401688d0c44948be5c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e228965baf7e163d69695b9ed99277899c6c4efb80c0401688d0c44948be5c99->leave($__internal_e228965baf7e163d69695b9ed99277899c6c4efb80c0401688d0c44948be5c99_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9be508fd9dbec006e9d12218fd24e373d7e53796bb7c5ce622fb2ecbb83cf022 = $this->env->getExtension("native_profiler");
        $__internal_9be508fd9dbec006e9d12218fd24e373d7e53796bb7c5ce622fb2ecbb83cf022->enter($__internal_9be508fd9dbec006e9d12218fd24e373d7e53796bb7c5ce622fb2ecbb83cf022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9be508fd9dbec006e9d12218fd24e373d7e53796bb7c5ce622fb2ecbb83cf022->leave($__internal_9be508fd9dbec006e9d12218fd24e373d7e53796bb7c5ce622fb2ecbb83cf022_prof);

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
