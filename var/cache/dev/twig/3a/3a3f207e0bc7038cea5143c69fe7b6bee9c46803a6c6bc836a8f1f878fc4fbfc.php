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
        $__internal_75b90e4c6e6ce5679a3dfd89454095a8e66243912e3b26d989a4f3af70ecf317 = $this->env->getExtension("native_profiler");
        $__internal_75b90e4c6e6ce5679a3dfd89454095a8e66243912e3b26d989a4f3af70ecf317->enter($__internal_75b90e4c6e6ce5679a3dfd89454095a8e66243912e3b26d989a4f3af70ecf317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_75b90e4c6e6ce5679a3dfd89454095a8e66243912e3b26d989a4f3af70ecf317->leave($__internal_75b90e4c6e6ce5679a3dfd89454095a8e66243912e3b26d989a4f3af70ecf317_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_34e08a1d5804bb018e250b25284fdf2259c1015d5d5494068137c335ddd98957 = $this->env->getExtension("native_profiler");
        $__internal_34e08a1d5804bb018e250b25284fdf2259c1015d5d5494068137c335ddd98957->enter($__internal_34e08a1d5804bb018e250b25284fdf2259c1015d5d5494068137c335ddd98957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_34e08a1d5804bb018e250b25284fdf2259c1015d5d5494068137c335ddd98957->leave($__internal_34e08a1d5804bb018e250b25284fdf2259c1015d5d5494068137c335ddd98957_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_03df67c97e043f60e3cfebd8b9baa846690a80b3d57d92520c6e94191db70278 = $this->env->getExtension("native_profiler");
        $__internal_03df67c97e043f60e3cfebd8b9baa846690a80b3d57d92520c6e94191db70278->enter($__internal_03df67c97e043f60e3cfebd8b9baa846690a80b3d57d92520c6e94191db70278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_03df67c97e043f60e3cfebd8b9baa846690a80b3d57d92520c6e94191db70278->leave($__internal_03df67c97e043f60e3cfebd8b9baa846690a80b3d57d92520c6e94191db70278_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f5f2a2df9aae5f51dd0beb9ea4151d9b63cbb8d9f85d005c875d56a8b6ca23f9 = $this->env->getExtension("native_profiler");
        $__internal_f5f2a2df9aae5f51dd0beb9ea4151d9b63cbb8d9f85d005c875d56a8b6ca23f9->enter($__internal_f5f2a2df9aae5f51dd0beb9ea4151d9b63cbb8d9f85d005c875d56a8b6ca23f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f5f2a2df9aae5f51dd0beb9ea4151d9b63cbb8d9f85d005c875d56a8b6ca23f9->leave($__internal_f5f2a2df9aae5f51dd0beb9ea4151d9b63cbb8d9f85d005c875d56a8b6ca23f9_prof);

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
