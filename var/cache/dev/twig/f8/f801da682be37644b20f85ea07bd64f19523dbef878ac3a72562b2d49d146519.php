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
        $__internal_cb4b0957c63bf14d91b3a452738135bc24277567fb7c8c469e8c70dbad8f9f06 = $this->env->getExtension("native_profiler");
        $__internal_cb4b0957c63bf14d91b3a452738135bc24277567fb7c8c469e8c70dbad8f9f06->enter($__internal_cb4b0957c63bf14d91b3a452738135bc24277567fb7c8c469e8c70dbad8f9f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb4b0957c63bf14d91b3a452738135bc24277567fb7c8c469e8c70dbad8f9f06->leave($__internal_cb4b0957c63bf14d91b3a452738135bc24277567fb7c8c469e8c70dbad8f9f06_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa83a1b87e08806e8ea222111dfda1770e017aebf636eaf32dec49cb57d91b6d = $this->env->getExtension("native_profiler");
        $__internal_fa83a1b87e08806e8ea222111dfda1770e017aebf636eaf32dec49cb57d91b6d->enter($__internal_fa83a1b87e08806e8ea222111dfda1770e017aebf636eaf32dec49cb57d91b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fa83a1b87e08806e8ea222111dfda1770e017aebf636eaf32dec49cb57d91b6d->leave($__internal_fa83a1b87e08806e8ea222111dfda1770e017aebf636eaf32dec49cb57d91b6d_prof);

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
