<?php

/* @LGPUser/Registration/email.txt.twig */
class __TwigTemplate_8242e01ba1c1797f041ea9d9850b29640c1c88d11811d64101634708f1d10f78 extends Twig_Template
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
        $__internal_cc0424ce7fc8358d2473fd27791f714bba9267b1a4dcb0d950fbfcaa7fccc9c4 = $this->env->getExtension("native_profiler");
        $__internal_cc0424ce7fc8358d2473fd27791f714bba9267b1a4dcb0d950fbfcaa7fccc9c4->enter($__internal_cc0424ce7fc8358d2473fd27791f714bba9267b1a4dcb0d950fbfcaa7fccc9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_cc0424ce7fc8358d2473fd27791f714bba9267b1a4dcb0d950fbfcaa7fccc9c4->leave($__internal_cc0424ce7fc8358d2473fd27791f714bba9267b1a4dcb0d950fbfcaa7fccc9c4_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_80e0007fa4946d1dced2272c11b97ec9323fd6c75a7a391039a12eaafda27e71 = $this->env->getExtension("native_profiler");
        $__internal_80e0007fa4946d1dced2272c11b97ec9323fd6c75a7a391039a12eaafda27e71->enter($__internal_80e0007fa4946d1dced2272c11b97ec9323fd6c75a7a391039a12eaafda27e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_80e0007fa4946d1dced2272c11b97ec9323fd6c75a7a391039a12eaafda27e71->leave($__internal_80e0007fa4946d1dced2272c11b97ec9323fd6c75a7a391039a12eaafda27e71_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_58bccb0157654effc14a7b6c6ea8e68178a778bb82c41033c6e220ceb0f5b1bb = $this->env->getExtension("native_profiler");
        $__internal_58bccb0157654effc14a7b6c6ea8e68178a778bb82c41033c6e220ceb0f5b1bb->enter($__internal_58bccb0157654effc14a7b6c6ea8e68178a778bb82c41033c6e220ceb0f5b1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_58bccb0157654effc14a7b6c6ea8e68178a778bb82c41033c6e220ceb0f5b1bb->leave($__internal_58bccb0157654effc14a7b6c6ea8e68178a778bb82c41033c6e220ceb0f5b1bb_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a716b36c29efabbec7e87a1507e13446997ee6432e3d9c69c1fbdd37d25795e2 = $this->env->getExtension("native_profiler");
        $__internal_a716b36c29efabbec7e87a1507e13446997ee6432e3d9c69c1fbdd37d25795e2->enter($__internal_a716b36c29efabbec7e87a1507e13446997ee6432e3d9c69c1fbdd37d25795e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a716b36c29efabbec7e87a1507e13446997ee6432e3d9c69c1fbdd37d25795e2->leave($__internal_a716b36c29efabbec7e87a1507e13446997ee6432e3d9c69c1fbdd37d25795e2_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/email.txt.twig";
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
