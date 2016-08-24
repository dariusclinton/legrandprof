<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_d307a7e90ca6c1741aa1061b2c0fe55a6a6a6aea980e344f340b875383ebb623 extends Twig_Template
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
        $__internal_a4459c0b418c6bc7822c2fcac426436dac873c13329cb229dfaac602b4707ed5 = $this->env->getExtension("native_profiler");
        $__internal_a4459c0b418c6bc7822c2fcac426436dac873c13329cb229dfaac602b4707ed5->enter($__internal_a4459c0b418c6bc7822c2fcac426436dac873c13329cb229dfaac602b4707ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a4459c0b418c6bc7822c2fcac426436dac873c13329cb229dfaac602b4707ed5->leave($__internal_a4459c0b418c6bc7822c2fcac426436dac873c13329cb229dfaac602b4707ed5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_df75caf449f5a4bb36d36f0c7a173184f8eb1052c75f4073bd1bab0bb7e23a81 = $this->env->getExtension("native_profiler");
        $__internal_df75caf449f5a4bb36d36f0c7a173184f8eb1052c75f4073bd1bab0bb7e23a81->enter($__internal_df75caf449f5a4bb36d36f0c7a173184f8eb1052c75f4073bd1bab0bb7e23a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_df75caf449f5a4bb36d36f0c7a173184f8eb1052c75f4073bd1bab0bb7e23a81->leave($__internal_df75caf449f5a4bb36d36f0c7a173184f8eb1052c75f4073bd1bab0bb7e23a81_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b6b45040c6ba50f7f1526eed8bf2510c5a84835c25be16212aa6ac4023f99d63 = $this->env->getExtension("native_profiler");
        $__internal_b6b45040c6ba50f7f1526eed8bf2510c5a84835c25be16212aa6ac4023f99d63->enter($__internal_b6b45040c6ba50f7f1526eed8bf2510c5a84835c25be16212aa6ac4023f99d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b6b45040c6ba50f7f1526eed8bf2510c5a84835c25be16212aa6ac4023f99d63->leave($__internal_b6b45040c6ba50f7f1526eed8bf2510c5a84835c25be16212aa6ac4023f99d63_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0d9f79a48a9958a0c504d182229ce7440d3a2b801aeecb3aa8eee0827775bb7e = $this->env->getExtension("native_profiler");
        $__internal_0d9f79a48a9958a0c504d182229ce7440d3a2b801aeecb3aa8eee0827775bb7e->enter($__internal_0d9f79a48a9958a0c504d182229ce7440d3a2b801aeecb3aa8eee0827775bb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0d9f79a48a9958a0c504d182229ce7440d3a2b801aeecb3aa8eee0827775bb7e->leave($__internal_0d9f79a48a9958a0c504d182229ce7440d3a2b801aeecb3aa8eee0827775bb7e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
