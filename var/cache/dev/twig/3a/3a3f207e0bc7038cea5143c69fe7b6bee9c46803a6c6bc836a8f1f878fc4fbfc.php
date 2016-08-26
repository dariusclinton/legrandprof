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
        $__internal_eecc9fce8f2ff207b27e0ec06420590d8b2ac5fb6d5cf7d85bc35d59af4a021c = $this->env->getExtension("native_profiler");
        $__internal_eecc9fce8f2ff207b27e0ec06420590d8b2ac5fb6d5cf7d85bc35d59af4a021c->enter($__internal_eecc9fce8f2ff207b27e0ec06420590d8b2ac5fb6d5cf7d85bc35d59af4a021c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_eecc9fce8f2ff207b27e0ec06420590d8b2ac5fb6d5cf7d85bc35d59af4a021c->leave($__internal_eecc9fce8f2ff207b27e0ec06420590d8b2ac5fb6d5cf7d85bc35d59af4a021c_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bafa0d083ba6b6c2c5848233db8519ef28a2cd40df774a75bc2684a1709590ee = $this->env->getExtension("native_profiler");
        $__internal_bafa0d083ba6b6c2c5848233db8519ef28a2cd40df774a75bc2684a1709590ee->enter($__internal_bafa0d083ba6b6c2c5848233db8519ef28a2cd40df774a75bc2684a1709590ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_bafa0d083ba6b6c2c5848233db8519ef28a2cd40df774a75bc2684a1709590ee->leave($__internal_bafa0d083ba6b6c2c5848233db8519ef28a2cd40df774a75bc2684a1709590ee_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_244367b039faf66d29aace238db61a98515e7481ebc3e9a0cb06eef2a6e242ee = $this->env->getExtension("native_profiler");
        $__internal_244367b039faf66d29aace238db61a98515e7481ebc3e9a0cb06eef2a6e242ee->enter($__internal_244367b039faf66d29aace238db61a98515e7481ebc3e9a0cb06eef2a6e242ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_244367b039faf66d29aace238db61a98515e7481ebc3e9a0cb06eef2a6e242ee->leave($__internal_244367b039faf66d29aace238db61a98515e7481ebc3e9a0cb06eef2a6e242ee_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f08b2cbcbd99f1ccfb93e029d7a77b51e191544a85ebb3eceaf50cfd38976bf2 = $this->env->getExtension("native_profiler");
        $__internal_f08b2cbcbd99f1ccfb93e029d7a77b51e191544a85ebb3eceaf50cfd38976bf2->enter($__internal_f08b2cbcbd99f1ccfb93e029d7a77b51e191544a85ebb3eceaf50cfd38976bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f08b2cbcbd99f1ccfb93e029d7a77b51e191544a85ebb3eceaf50cfd38976bf2->leave($__internal_f08b2cbcbd99f1ccfb93e029d7a77b51e191544a85ebb3eceaf50cfd38976bf2_prof);

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
