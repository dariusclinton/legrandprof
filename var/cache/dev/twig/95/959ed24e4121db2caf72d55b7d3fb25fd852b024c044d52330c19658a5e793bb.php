<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_93659deeabdab52df81158fdad1a11a2e0484dcef4f91c75406af85b4f10ddb3 extends Twig_Template
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
        $__internal_8ec3724966a3fc218f55165d21836045eba6948cd21d2a1bdc7ed4bbee3a92b6 = $this->env->getExtension("native_profiler");
        $__internal_8ec3724966a3fc218f55165d21836045eba6948cd21d2a1bdc7ed4bbee3a92b6->enter($__internal_8ec3724966a3fc218f55165d21836045eba6948cd21d2a1bdc7ed4bbee3a92b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8ec3724966a3fc218f55165d21836045eba6948cd21d2a1bdc7ed4bbee3a92b6->leave($__internal_8ec3724966a3fc218f55165d21836045eba6948cd21d2a1bdc7ed4bbee3a92b6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f70929d83fb7bf81e645caef87d68011006c026fd59e3f2d9243f2ab5f829b1a = $this->env->getExtension("native_profiler");
        $__internal_f70929d83fb7bf81e645caef87d68011006c026fd59e3f2d9243f2ab5f829b1a->enter($__internal_f70929d83fb7bf81e645caef87d68011006c026fd59e3f2d9243f2ab5f829b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_f70929d83fb7bf81e645caef87d68011006c026fd59e3f2d9243f2ab5f829b1a->leave($__internal_f70929d83fb7bf81e645caef87d68011006c026fd59e3f2d9243f2ab5f829b1a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0c5121dfe23501ac9e1131d821466d2fc218547ca300851a1972bd3ac01e84b6 = $this->env->getExtension("native_profiler");
        $__internal_0c5121dfe23501ac9e1131d821466d2fc218547ca300851a1972bd3ac01e84b6->enter($__internal_0c5121dfe23501ac9e1131d821466d2fc218547ca300851a1972bd3ac01e84b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0c5121dfe23501ac9e1131d821466d2fc218547ca300851a1972bd3ac01e84b6->leave($__internal_0c5121dfe23501ac9e1131d821466d2fc218547ca300851a1972bd3ac01e84b6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b701e20e5113532a9ee21cf59e988dd2821b7680161b8ad15beb67d2aa8cb7fa = $this->env->getExtension("native_profiler");
        $__internal_b701e20e5113532a9ee21cf59e988dd2821b7680161b8ad15beb67d2aa8cb7fa->enter($__internal_b701e20e5113532a9ee21cf59e988dd2821b7680161b8ad15beb67d2aa8cb7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b701e20e5113532a9ee21cf59e988dd2821b7680161b8ad15beb67d2aa8cb7fa->leave($__internal_b701e20e5113532a9ee21cf59e988dd2821b7680161b8ad15beb67d2aa8cb7fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
