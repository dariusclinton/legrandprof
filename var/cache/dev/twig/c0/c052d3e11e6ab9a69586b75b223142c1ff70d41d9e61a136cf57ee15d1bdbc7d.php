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
        $__internal_dc038d8e02aa5e5c781c8d2c4673bce0a19d2b9a4469bc3928879a71a338808a = $this->env->getExtension("native_profiler");
        $__internal_dc038d8e02aa5e5c781c8d2c4673bce0a19d2b9a4469bc3928879a71a338808a->enter($__internal_dc038d8e02aa5e5c781c8d2c4673bce0a19d2b9a4469bc3928879a71a338808a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc038d8e02aa5e5c781c8d2c4673bce0a19d2b9a4469bc3928879a71a338808a->leave($__internal_dc038d8e02aa5e5c781c8d2c4673bce0a19d2b9a4469bc3928879a71a338808a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d24e790349b21fe86b38b69e8afd0db7b2aa86d714e39a81bebe51141777aec = $this->env->getExtension("native_profiler");
        $__internal_5d24e790349b21fe86b38b69e8afd0db7b2aa86d714e39a81bebe51141777aec->enter($__internal_5d24e790349b21fe86b38b69e8afd0db7b2aa86d714e39a81bebe51141777aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5d24e790349b21fe86b38b69e8afd0db7b2aa86d714e39a81bebe51141777aec->leave($__internal_5d24e790349b21fe86b38b69e8afd0db7b2aa86d714e39a81bebe51141777aec_prof);

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
