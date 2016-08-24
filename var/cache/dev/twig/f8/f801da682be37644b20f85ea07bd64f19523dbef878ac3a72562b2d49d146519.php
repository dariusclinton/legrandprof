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
        $__internal_4344258bd31b08ddf200c085fc41df1bcd0144a60f784672fea33ea4d7e09ffa = $this->env->getExtension("native_profiler");
        $__internal_4344258bd31b08ddf200c085fc41df1bcd0144a60f784672fea33ea4d7e09ffa->enter($__internal_4344258bd31b08ddf200c085fc41df1bcd0144a60f784672fea33ea4d7e09ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4344258bd31b08ddf200c085fc41df1bcd0144a60f784672fea33ea4d7e09ffa->leave($__internal_4344258bd31b08ddf200c085fc41df1bcd0144a60f784672fea33ea4d7e09ffa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52d422e67633f0a696f9512d3c0e85af661312b231a645d8f69745ad84a66236 = $this->env->getExtension("native_profiler");
        $__internal_52d422e67633f0a696f9512d3c0e85af661312b231a645d8f69745ad84a66236->enter($__internal_52d422e67633f0a696f9512d3c0e85af661312b231a645d8f69745ad84a66236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_52d422e67633f0a696f9512d3c0e85af661312b231a645d8f69745ad84a66236->leave($__internal_52d422e67633f0a696f9512d3c0e85af661312b231a645d8f69745ad84a66236_prof);

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
