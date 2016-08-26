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
        $__internal_7cb7f42b48a355663f49623dc3a32664a26f524a94c9acc4ae80ab2ac5ddb2e6 = $this->env->getExtension("native_profiler");
        $__internal_7cb7f42b48a355663f49623dc3a32664a26f524a94c9acc4ae80ab2ac5ddb2e6->enter($__internal_7cb7f42b48a355663f49623dc3a32664a26f524a94c9acc4ae80ab2ac5ddb2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_7cb7f42b48a355663f49623dc3a32664a26f524a94c9acc4ae80ab2ac5ddb2e6->leave($__internal_7cb7f42b48a355663f49623dc3a32664a26f524a94c9acc4ae80ab2ac5ddb2e6_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5c7080e68db4b66532de83a017bb48801cc6f6fd37602143086bea5dd6dd7abe = $this->env->getExtension("native_profiler");
        $__internal_5c7080e68db4b66532de83a017bb48801cc6f6fd37602143086bea5dd6dd7abe->enter($__internal_5c7080e68db4b66532de83a017bb48801cc6f6fd37602143086bea5dd6dd7abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_5c7080e68db4b66532de83a017bb48801cc6f6fd37602143086bea5dd6dd7abe->leave($__internal_5c7080e68db4b66532de83a017bb48801cc6f6fd37602143086bea5dd6dd7abe_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d13d6eeaf4a69614310365a5921c87086b08a0ab696d674bbb8ebdaba21618ad = $this->env->getExtension("native_profiler");
        $__internal_d13d6eeaf4a69614310365a5921c87086b08a0ab696d674bbb8ebdaba21618ad->enter($__internal_d13d6eeaf4a69614310365a5921c87086b08a0ab696d674bbb8ebdaba21618ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_d13d6eeaf4a69614310365a5921c87086b08a0ab696d674bbb8ebdaba21618ad->leave($__internal_d13d6eeaf4a69614310365a5921c87086b08a0ab696d674bbb8ebdaba21618ad_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2f38fe2b8cdc3eb5776789191c94424444cceddb3576222f1421826246481281 = $this->env->getExtension("native_profiler");
        $__internal_2f38fe2b8cdc3eb5776789191c94424444cceddb3576222f1421826246481281->enter($__internal_2f38fe2b8cdc3eb5776789191c94424444cceddb3576222f1421826246481281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2f38fe2b8cdc3eb5776789191c94424444cceddb3576222f1421826246481281->leave($__internal_2f38fe2b8cdc3eb5776789191c94424444cceddb3576222f1421826246481281_prof);

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
