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
        $__internal_c81c0cfb49ed4dbf512e43866102c2f89ba3145395a8671ba635f9ce1c7734bd = $this->env->getExtension("native_profiler");
        $__internal_c81c0cfb49ed4dbf512e43866102c2f89ba3145395a8671ba635f9ce1c7734bd->enter($__internal_c81c0cfb49ed4dbf512e43866102c2f89ba3145395a8671ba635f9ce1c7734bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_c81c0cfb49ed4dbf512e43866102c2f89ba3145395a8671ba635f9ce1c7734bd->leave($__internal_c81c0cfb49ed4dbf512e43866102c2f89ba3145395a8671ba635f9ce1c7734bd_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7e38dcbaff1fcd9079d4ad34c6ce962381abbcda38ad2c851b7699fd5df0b740 = $this->env->getExtension("native_profiler");
        $__internal_7e38dcbaff1fcd9079d4ad34c6ce962381abbcda38ad2c851b7699fd5df0b740->enter($__internal_7e38dcbaff1fcd9079d4ad34c6ce962381abbcda38ad2c851b7699fd5df0b740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_7e38dcbaff1fcd9079d4ad34c6ce962381abbcda38ad2c851b7699fd5df0b740->leave($__internal_7e38dcbaff1fcd9079d4ad34c6ce962381abbcda38ad2c851b7699fd5df0b740_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fb2bc6ff3dc8a54f56d9d0fd6d07f55baaff39e360829708687857164fc16dd0 = $this->env->getExtension("native_profiler");
        $__internal_fb2bc6ff3dc8a54f56d9d0fd6d07f55baaff39e360829708687857164fc16dd0->enter($__internal_fb2bc6ff3dc8a54f56d9d0fd6d07f55baaff39e360829708687857164fc16dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_fb2bc6ff3dc8a54f56d9d0fd6d07f55baaff39e360829708687857164fc16dd0->leave($__internal_fb2bc6ff3dc8a54f56d9d0fd6d07f55baaff39e360829708687857164fc16dd0_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9ce997f1c7359e786f235320b6f398abc5869e5c350c21271fbf12f6eba025df = $this->env->getExtension("native_profiler");
        $__internal_9ce997f1c7359e786f235320b6f398abc5869e5c350c21271fbf12f6eba025df->enter($__internal_9ce997f1c7359e786f235320b6f398abc5869e5c350c21271fbf12f6eba025df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9ce997f1c7359e786f235320b6f398abc5869e5c350c21271fbf12f6eba025df->leave($__internal_9ce997f1c7359e786f235320b6f398abc5869e5c350c21271fbf12f6eba025df_prof);

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
