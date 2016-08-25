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
        $__internal_3853bbca657fff11bb7fff197a7053d444a81055a67ae703864838a368361de7 = $this->env->getExtension("native_profiler");
        $__internal_3853bbca657fff11bb7fff197a7053d444a81055a67ae703864838a368361de7->enter($__internal_3853bbca657fff11bb7fff197a7053d444a81055a67ae703864838a368361de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_3853bbca657fff11bb7fff197a7053d444a81055a67ae703864838a368361de7->leave($__internal_3853bbca657fff11bb7fff197a7053d444a81055a67ae703864838a368361de7_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_79a5651334e8bda4d29ece6d18f7f4332debfb7d115f131559c4507c2b75b952 = $this->env->getExtension("native_profiler");
        $__internal_79a5651334e8bda4d29ece6d18f7f4332debfb7d115f131559c4507c2b75b952->enter($__internal_79a5651334e8bda4d29ece6d18f7f4332debfb7d115f131559c4507c2b75b952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_79a5651334e8bda4d29ece6d18f7f4332debfb7d115f131559c4507c2b75b952->leave($__internal_79a5651334e8bda4d29ece6d18f7f4332debfb7d115f131559c4507c2b75b952_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3a10f17ece16fa32d3e8459575b4591165b1a291838b8cb7f739077a5abfcf9b = $this->env->getExtension("native_profiler");
        $__internal_3a10f17ece16fa32d3e8459575b4591165b1a291838b8cb7f739077a5abfcf9b->enter($__internal_3a10f17ece16fa32d3e8459575b4591165b1a291838b8cb7f739077a5abfcf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_3a10f17ece16fa32d3e8459575b4591165b1a291838b8cb7f739077a5abfcf9b->leave($__internal_3a10f17ece16fa32d3e8459575b4591165b1a291838b8cb7f739077a5abfcf9b_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c8700fe3f5b7c6bc33b3220ca28ce516c03ba637689e37a55eb2eb232872daba = $this->env->getExtension("native_profiler");
        $__internal_c8700fe3f5b7c6bc33b3220ca28ce516c03ba637689e37a55eb2eb232872daba->enter($__internal_c8700fe3f5b7c6bc33b3220ca28ce516c03ba637689e37a55eb2eb232872daba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c8700fe3f5b7c6bc33b3220ca28ce516c03ba637689e37a55eb2eb232872daba->leave($__internal_c8700fe3f5b7c6bc33b3220ca28ce516c03ba637689e37a55eb2eb232872daba_prof);

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
