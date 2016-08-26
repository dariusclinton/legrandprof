<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f3026d447259f0b4887f80ed7a1c1504af723ce4df8b857e6d798b7566e2fe25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae8b6d8abf65143c35664b97ca741e308fe730263701e70e6fe5920e8ed4033e = $this->env->getExtension("native_profiler");
        $__internal_ae8b6d8abf65143c35664b97ca741e308fe730263701e70e6fe5920e8ed4033e->enter($__internal_ae8b6d8abf65143c35664b97ca741e308fe730263701e70e6fe5920e8ed4033e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ae8b6d8abf65143c35664b97ca741e308fe730263701e70e6fe5920e8ed4033e->leave($__internal_ae8b6d8abf65143c35664b97ca741e308fe730263701e70e6fe5920e8ed4033e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cee3afdad8cd937c99969e8c3364996488d1b611283a72ddedecfafe2a443450 = $this->env->getExtension("native_profiler");
        $__internal_cee3afdad8cd937c99969e8c3364996488d1b611283a72ddedecfafe2a443450->enter($__internal_cee3afdad8cd937c99969e8c3364996488d1b611283a72ddedecfafe2a443450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_cee3afdad8cd937c99969e8c3364996488d1b611283a72ddedecfafe2a443450->leave($__internal_cee3afdad8cd937c99969e8c3364996488d1b611283a72ddedecfafe2a443450_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_365dfb464a5dad096d3032f4807ff4a515328dca8c2ee17f8758913311fdfd4e = $this->env->getExtension("native_profiler");
        $__internal_365dfb464a5dad096d3032f4807ff4a515328dca8c2ee17f8758913311fdfd4e->enter($__internal_365dfb464a5dad096d3032f4807ff4a515328dca8c2ee17f8758913311fdfd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_365dfb464a5dad096d3032f4807ff4a515328dca8c2ee17f8758913311fdfd4e->leave($__internal_365dfb464a5dad096d3032f4807ff4a515328dca8c2ee17f8758913311fdfd4e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b1696b73b84a04081f20e4edfe332370aea547057dfe13153c8fb0475c1b8f19 = $this->env->getExtension("native_profiler");
        $__internal_b1696b73b84a04081f20e4edfe332370aea547057dfe13153c8fb0475c1b8f19->enter($__internal_b1696b73b84a04081f20e4edfe332370aea547057dfe13153c8fb0475c1b8f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b1696b73b84a04081f20e4edfe332370aea547057dfe13153c8fb0475c1b8f19->leave($__internal_b1696b73b84a04081f20e4edfe332370aea547057dfe13153c8fb0475c1b8f19_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
