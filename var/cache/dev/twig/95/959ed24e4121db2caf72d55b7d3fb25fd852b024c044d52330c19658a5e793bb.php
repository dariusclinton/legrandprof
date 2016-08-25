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
        $__internal_458307457259c1fd06b307b2f825cdcbc057415f8092a82763c93908097ec9b5 = $this->env->getExtension("native_profiler");
        $__internal_458307457259c1fd06b307b2f825cdcbc057415f8092a82763c93908097ec9b5->enter($__internal_458307457259c1fd06b307b2f825cdcbc057415f8092a82763c93908097ec9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_458307457259c1fd06b307b2f825cdcbc057415f8092a82763c93908097ec9b5->leave($__internal_458307457259c1fd06b307b2f825cdcbc057415f8092a82763c93908097ec9b5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0f05ef06a97968bfa821ae94fb8dae56f0367fac2ca95d70ba2b73bbf75bc947 = $this->env->getExtension("native_profiler");
        $__internal_0f05ef06a97968bfa821ae94fb8dae56f0367fac2ca95d70ba2b73bbf75bc947->enter($__internal_0f05ef06a97968bfa821ae94fb8dae56f0367fac2ca95d70ba2b73bbf75bc947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_0f05ef06a97968bfa821ae94fb8dae56f0367fac2ca95d70ba2b73bbf75bc947->leave($__internal_0f05ef06a97968bfa821ae94fb8dae56f0367fac2ca95d70ba2b73bbf75bc947_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4c83777a1723487ba0144f10350ff64d4e524672af3ad14b769164f9806a7611 = $this->env->getExtension("native_profiler");
        $__internal_4c83777a1723487ba0144f10350ff64d4e524672af3ad14b769164f9806a7611->enter($__internal_4c83777a1723487ba0144f10350ff64d4e524672af3ad14b769164f9806a7611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4c83777a1723487ba0144f10350ff64d4e524672af3ad14b769164f9806a7611->leave($__internal_4c83777a1723487ba0144f10350ff64d4e524672af3ad14b769164f9806a7611_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cb3415c07d39e0d91eb62518e667d97cbb48149083d6b0197a04149c0a7f7141 = $this->env->getExtension("native_profiler");
        $__internal_cb3415c07d39e0d91eb62518e667d97cbb48149083d6b0197a04149c0a7f7141->enter($__internal_cb3415c07d39e0d91eb62518e667d97cbb48149083d6b0197a04149c0a7f7141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cb3415c07d39e0d91eb62518e667d97cbb48149083d6b0197a04149c0a7f7141->leave($__internal_cb3415c07d39e0d91eb62518e667d97cbb48149083d6b0197a04149c0a7f7141_prof);

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
