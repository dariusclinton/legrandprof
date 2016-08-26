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
        $__internal_61797aa79edd6c6994fbcfa3d09dc410fdef72a3f3cb82ec46672762b43eef65 = $this->env->getExtension("native_profiler");
        $__internal_61797aa79edd6c6994fbcfa3d09dc410fdef72a3f3cb82ec46672762b43eef65->enter($__internal_61797aa79edd6c6994fbcfa3d09dc410fdef72a3f3cb82ec46672762b43eef65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_61797aa79edd6c6994fbcfa3d09dc410fdef72a3f3cb82ec46672762b43eef65->leave($__internal_61797aa79edd6c6994fbcfa3d09dc410fdef72a3f3cb82ec46672762b43eef65_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_359abc8ca7b95f759d7411f9d75457afa316e036d1a5e09ec7d1731edcc1db36 = $this->env->getExtension("native_profiler");
        $__internal_359abc8ca7b95f759d7411f9d75457afa316e036d1a5e09ec7d1731edcc1db36->enter($__internal_359abc8ca7b95f759d7411f9d75457afa316e036d1a5e09ec7d1731edcc1db36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_359abc8ca7b95f759d7411f9d75457afa316e036d1a5e09ec7d1731edcc1db36->leave($__internal_359abc8ca7b95f759d7411f9d75457afa316e036d1a5e09ec7d1731edcc1db36_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_14f6b8b83718941a7793f80ab86e8e25107460888a3b22df2affe48b87264c7a = $this->env->getExtension("native_profiler");
        $__internal_14f6b8b83718941a7793f80ab86e8e25107460888a3b22df2affe48b87264c7a->enter($__internal_14f6b8b83718941a7793f80ab86e8e25107460888a3b22df2affe48b87264c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_14f6b8b83718941a7793f80ab86e8e25107460888a3b22df2affe48b87264c7a->leave($__internal_14f6b8b83718941a7793f80ab86e8e25107460888a3b22df2affe48b87264c7a_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_506ca2661379f3bc7e90ca0d052acd6d92d22b39c7b8b2f2c2439ee2ea80a9ea = $this->env->getExtension("native_profiler");
        $__internal_506ca2661379f3bc7e90ca0d052acd6d92d22b39c7b8b2f2c2439ee2ea80a9ea->enter($__internal_506ca2661379f3bc7e90ca0d052acd6d92d22b39c7b8b2f2c2439ee2ea80a9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_506ca2661379f3bc7e90ca0d052acd6d92d22b39c7b8b2f2c2439ee2ea80a9ea->leave($__internal_506ca2661379f3bc7e90ca0d052acd6d92d22b39c7b8b2f2c2439ee2ea80a9ea_prof);

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
