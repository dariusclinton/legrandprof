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
        $__internal_7c3fdde49fbad784e107703f6b798e8b5ee5e0f281121f8a559e0cd640087df1 = $this->env->getExtension("native_profiler");
        $__internal_7c3fdde49fbad784e107703f6b798e8b5ee5e0f281121f8a559e0cd640087df1->enter($__internal_7c3fdde49fbad784e107703f6b798e8b5ee5e0f281121f8a559e0cd640087df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_7c3fdde49fbad784e107703f6b798e8b5ee5e0f281121f8a559e0cd640087df1->leave($__internal_7c3fdde49fbad784e107703f6b798e8b5ee5e0f281121f8a559e0cd640087df1_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dcbf20c708b7bbf3ea94461318546bba6ce5c1d7a321c03fe11723626bb42127 = $this->env->getExtension("native_profiler");
        $__internal_dcbf20c708b7bbf3ea94461318546bba6ce5c1d7a321c03fe11723626bb42127->enter($__internal_dcbf20c708b7bbf3ea94461318546bba6ce5c1d7a321c03fe11723626bb42127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_dcbf20c708b7bbf3ea94461318546bba6ce5c1d7a321c03fe11723626bb42127->leave($__internal_dcbf20c708b7bbf3ea94461318546bba6ce5c1d7a321c03fe11723626bb42127_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3ab94a44e62c3774c65f55cd841482dfec503e93b8f6e32f9d67439babb0953e = $this->env->getExtension("native_profiler");
        $__internal_3ab94a44e62c3774c65f55cd841482dfec503e93b8f6e32f9d67439babb0953e->enter($__internal_3ab94a44e62c3774c65f55cd841482dfec503e93b8f6e32f9d67439babb0953e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_3ab94a44e62c3774c65f55cd841482dfec503e93b8f6e32f9d67439babb0953e->leave($__internal_3ab94a44e62c3774c65f55cd841482dfec503e93b8f6e32f9d67439babb0953e_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_70a3ccc0d1f5a802e9bb5e104b991cd159e8d72e1ee65510f3793cbea48eeb42 = $this->env->getExtension("native_profiler");
        $__internal_70a3ccc0d1f5a802e9bb5e104b991cd159e8d72e1ee65510f3793cbea48eeb42->enter($__internal_70a3ccc0d1f5a802e9bb5e104b991cd159e8d72e1ee65510f3793cbea48eeb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_70a3ccc0d1f5a802e9bb5e104b991cd159e8d72e1ee65510f3793cbea48eeb42->leave($__internal_70a3ccc0d1f5a802e9bb5e104b991cd159e8d72e1ee65510f3793cbea48eeb42_prof);

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
