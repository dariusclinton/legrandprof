<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5157624dd1fed23d585bc0aa41f4c2ac82430c0814efc019f571a5c5094b1db1 extends Twig_Template
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
        $__internal_08117756fdf2e3618334e025abd95230e85f837f7c08e94d1387d210f6a1c8ea = $this->env->getExtension("native_profiler");
        $__internal_08117756fdf2e3618334e025abd95230e85f837f7c08e94d1387d210f6a1c8ea->enter($__internal_08117756fdf2e3618334e025abd95230e85f837f7c08e94d1387d210f6a1c8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('body_text', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_08117756fdf2e3618334e025abd95230e85f837f7c08e94d1387d210f6a1c8ea->leave($__internal_08117756fdf2e3618334e025abd95230e85f837f7c08e94d1387d210f6a1c8ea_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9ce129559bb48c4a9018e96744233dd413c14d3360ef547708b09cd2e7428dc6 = $this->env->getExtension("native_profiler");
        $__internal_9ce129559bb48c4a9018e96744233dd413c14d3360ef547708b09cd2e7428dc6->enter($__internal_9ce129559bb48c4a9018e96744233dd413c14d3360ef547708b09cd2e7428dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_9ce129559bb48c4a9018e96744233dd413c14d3360ef547708b09cd2e7428dc6->leave($__internal_9ce129559bb48c4a9018e96744233dd413c14d3360ef547708b09cd2e7428dc6_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ab21d450962a3d602c1653be03b833d91d552835a9ddc2b949212229d8af66d5 = $this->env->getExtension("native_profiler");
        $__internal_ab21d450962a3d602c1653be03b833d91d552835a9ddc2b949212229d8af66d5->enter($__internal_ab21d450962a3d602c1653be03b833d91d552835a9ddc2b949212229d8af66d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_ab21d450962a3d602c1653be03b833d91d552835a9ddc2b949212229d8af66d5->leave($__internal_ab21d450962a3d602c1653be03b833d91d552835a9ddc2b949212229d8af66d5_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5ee5055b24b42759029daad2ada17ba85b8c694ef36c168dc1a2cb5bf48a7c05 = $this->env->getExtension("native_profiler");
        $__internal_5ee5055b24b42759029daad2ada17ba85b8c694ef36c168dc1a2cb5bf48a7c05->enter($__internal_5ee5055b24b42759029daad2ada17ba85b8c694ef36c168dc1a2cb5bf48a7c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5ee5055b24b42759029daad2ada17ba85b8c694ef36c168dc1a2cb5bf48a7c05->leave($__internal_5ee5055b24b42759029daad2ada17ba85b8c694ef36c168dc1a2cb5bf48a7c05_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  71 => 11,  69 => 10,  63 => 9,  53 => 5,  51 => 4,  45 => 3,  38 => 15,  35 => 14,  33 => 9,  30 => 8,  28 => 3,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block subject %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_html %}{% endblock %}*/
/* */
