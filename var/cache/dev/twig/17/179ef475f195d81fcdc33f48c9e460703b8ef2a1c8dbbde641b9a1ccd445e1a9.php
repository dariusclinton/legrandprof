<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_d307a7e90ca6c1741aa1061b2c0fe55a6a6a6aea980e344f340b875383ebb623 extends Twig_Template
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
        $__internal_d7c12abb46cfa7057c1f87112c21d2e5f5718b8e7df3efdc1ec1c12de9eaa566 = $this->env->getExtension("native_profiler");
        $__internal_d7c12abb46cfa7057c1f87112c21d2e5f5718b8e7df3efdc1ec1c12de9eaa566->enter($__internal_d7c12abb46cfa7057c1f87112c21d2e5f5718b8e7df3efdc1ec1c12de9eaa566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d7c12abb46cfa7057c1f87112c21d2e5f5718b8e7df3efdc1ec1c12de9eaa566->leave($__internal_d7c12abb46cfa7057c1f87112c21d2e5f5718b8e7df3efdc1ec1c12de9eaa566_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9b632770d0496841581515901cd2a311d320e54ee9ad436e0ccdea0c5bff84c0 = $this->env->getExtension("native_profiler");
        $__internal_9b632770d0496841581515901cd2a311d320e54ee9ad436e0ccdea0c5bff84c0->enter($__internal_9b632770d0496841581515901cd2a311d320e54ee9ad436e0ccdea0c5bff84c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9b632770d0496841581515901cd2a311d320e54ee9ad436e0ccdea0c5bff84c0->leave($__internal_9b632770d0496841581515901cd2a311d320e54ee9ad436e0ccdea0c5bff84c0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_64db062ce8bf33354d3a4fd8780ee17411508eacf6f406af57ddfba5eb03c7fc = $this->env->getExtension("native_profiler");
        $__internal_64db062ce8bf33354d3a4fd8780ee17411508eacf6f406af57ddfba5eb03c7fc->enter($__internal_64db062ce8bf33354d3a4fd8780ee17411508eacf6f406af57ddfba5eb03c7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_64db062ce8bf33354d3a4fd8780ee17411508eacf6f406af57ddfba5eb03c7fc->leave($__internal_64db062ce8bf33354d3a4fd8780ee17411508eacf6f406af57ddfba5eb03c7fc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e7805c1c1144ccaabbc0f48026cc11793a09d3f4e222f6689dfd2af60e1afa70 = $this->env->getExtension("native_profiler");
        $__internal_e7805c1c1144ccaabbc0f48026cc11793a09d3f4e222f6689dfd2af60e1afa70->enter($__internal_e7805c1c1144ccaabbc0f48026cc11793a09d3f4e222f6689dfd2af60e1afa70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e7805c1c1144ccaabbc0f48026cc11793a09d3f4e222f6689dfd2af60e1afa70->leave($__internal_e7805c1c1144ccaabbc0f48026cc11793a09d3f4e222f6689dfd2af60e1afa70_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
