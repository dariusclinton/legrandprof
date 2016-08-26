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
        $__internal_46434c2e9b69faea7729852fcd82e78af18f3b290ebf44e3853b3f50e20a6ed0 = $this->env->getExtension("native_profiler");
        $__internal_46434c2e9b69faea7729852fcd82e78af18f3b290ebf44e3853b3f50e20a6ed0->enter($__internal_46434c2e9b69faea7729852fcd82e78af18f3b290ebf44e3853b3f50e20a6ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_46434c2e9b69faea7729852fcd82e78af18f3b290ebf44e3853b3f50e20a6ed0->leave($__internal_46434c2e9b69faea7729852fcd82e78af18f3b290ebf44e3853b3f50e20a6ed0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5629ce740ad3596ba58ed6c4f51ed12f9083699e81b56b53cf3f36808bc8987c = $this->env->getExtension("native_profiler");
        $__internal_5629ce740ad3596ba58ed6c4f51ed12f9083699e81b56b53cf3f36808bc8987c->enter($__internal_5629ce740ad3596ba58ed6c4f51ed12f9083699e81b56b53cf3f36808bc8987c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5629ce740ad3596ba58ed6c4f51ed12f9083699e81b56b53cf3f36808bc8987c->leave($__internal_5629ce740ad3596ba58ed6c4f51ed12f9083699e81b56b53cf3f36808bc8987c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a384a9bb3d0914ea6aec430d093b893c830a3f195a434e47bfb74f411de67a40 = $this->env->getExtension("native_profiler");
        $__internal_a384a9bb3d0914ea6aec430d093b893c830a3f195a434e47bfb74f411de67a40->enter($__internal_a384a9bb3d0914ea6aec430d093b893c830a3f195a434e47bfb74f411de67a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a384a9bb3d0914ea6aec430d093b893c830a3f195a434e47bfb74f411de67a40->leave($__internal_a384a9bb3d0914ea6aec430d093b893c830a3f195a434e47bfb74f411de67a40_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8f9357ba155906b87b7424c45029f8e80792a4cd1cb5ffb280a5dc457e7a2391 = $this->env->getExtension("native_profiler");
        $__internal_8f9357ba155906b87b7424c45029f8e80792a4cd1cb5ffb280a5dc457e7a2391->enter($__internal_8f9357ba155906b87b7424c45029f8e80792a4cd1cb5ffb280a5dc457e7a2391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8f9357ba155906b87b7424c45029f8e80792a4cd1cb5ffb280a5dc457e7a2391->leave($__internal_8f9357ba155906b87b7424c45029f8e80792a4cd1cb5ffb280a5dc457e7a2391_prof);

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
