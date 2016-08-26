<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_27a09d736fac03f0d4c39cae07b895e26a09caedb8ed943a9e6b28bf4fd87ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_34d65e787c14de9374c4ffc238b69a03a5a222d4ba3bc93d45ab91059a010b3a = $this->env->getExtension("native_profiler");
        $__internal_34d65e787c14de9374c4ffc238b69a03a5a222d4ba3bc93d45ab91059a010b3a->enter($__internal_34d65e787c14de9374c4ffc238b69a03a5a222d4ba3bc93d45ab91059a010b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34d65e787c14de9374c4ffc238b69a03a5a222d4ba3bc93d45ab91059a010b3a->leave($__internal_34d65e787c14de9374c4ffc238b69a03a5a222d4ba3bc93d45ab91059a010b3a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94aa0731c438c12d67b3022dd39727115c66d3ef7146d35d6044199da8f52aef = $this->env->getExtension("native_profiler");
        $__internal_94aa0731c438c12d67b3022dd39727115c66d3ef7146d35d6044199da8f52aef->enter($__internal_94aa0731c438c12d67b3022dd39727115c66d3ef7146d35d6044199da8f52aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_94aa0731c438c12d67b3022dd39727115c66d3ef7146d35d6044199da8f52aef->leave($__internal_94aa0731c438c12d67b3022dd39727115c66d3ef7146d35d6044199da8f52aef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
