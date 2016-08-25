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
        $__internal_8d50b25983c46b11046418d4089be64e6ecb18289f2b84544e81a23f9747e001 = $this->env->getExtension("native_profiler");
        $__internal_8d50b25983c46b11046418d4089be64e6ecb18289f2b84544e81a23f9747e001->enter($__internal_8d50b25983c46b11046418d4089be64e6ecb18289f2b84544e81a23f9747e001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_8d50b25983c46b11046418d4089be64e6ecb18289f2b84544e81a23f9747e001->leave($__internal_8d50b25983c46b11046418d4089be64e6ecb18289f2b84544e81a23f9747e001_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_df9bb7f1fc5657160500750996325b9315e9219a9ec4157130f6e16eda1359d0 = $this->env->getExtension("native_profiler");
        $__internal_df9bb7f1fc5657160500750996325b9315e9219a9ec4157130f6e16eda1359d0->enter($__internal_df9bb7f1fc5657160500750996325b9315e9219a9ec4157130f6e16eda1359d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_df9bb7f1fc5657160500750996325b9315e9219a9ec4157130f6e16eda1359d0->leave($__internal_df9bb7f1fc5657160500750996325b9315e9219a9ec4157130f6e16eda1359d0_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8601785a96eddcd5159f533eeec03d8d784937eb28d39155eaa40e4480880c03 = $this->env->getExtension("native_profiler");
        $__internal_8601785a96eddcd5159f533eeec03d8d784937eb28d39155eaa40e4480880c03->enter($__internal_8601785a96eddcd5159f533eeec03d8d784937eb28d39155eaa40e4480880c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_8601785a96eddcd5159f533eeec03d8d784937eb28d39155eaa40e4480880c03->leave($__internal_8601785a96eddcd5159f533eeec03d8d784937eb28d39155eaa40e4480880c03_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fd4e0dfcaadca66330861ff3f4f63dbed2759e1451591ddf5160fc51565cbaa7 = $this->env->getExtension("native_profiler");
        $__internal_fd4e0dfcaadca66330861ff3f4f63dbed2759e1451591ddf5160fc51565cbaa7->enter($__internal_fd4e0dfcaadca66330861ff3f4f63dbed2759e1451591ddf5160fc51565cbaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fd4e0dfcaadca66330861ff3f4f63dbed2759e1451591ddf5160fc51565cbaa7->leave($__internal_fd4e0dfcaadca66330861ff3f4f63dbed2759e1451591ddf5160fc51565cbaa7_prof);

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
