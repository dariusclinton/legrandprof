<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f3026d447259f0b4887f80ed7a1c1504af723ce4df8b857e6d798b7566e2fe25 extends Twig_Template
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
        $__internal_834ac40caf0f44d3f3ca67c022834dab9f62f1394bb29269c465bb231a9e04d5 = $this->env->getExtension("native_profiler");
        $__internal_834ac40caf0f44d3f3ca67c022834dab9f62f1394bb29269c465bb231a9e04d5->enter($__internal_834ac40caf0f44d3f3ca67c022834dab9f62f1394bb29269c465bb231a9e04d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_834ac40caf0f44d3f3ca67c022834dab9f62f1394bb29269c465bb231a9e04d5->leave($__internal_834ac40caf0f44d3f3ca67c022834dab9f62f1394bb29269c465bb231a9e04d5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9bdacb00e17fedca88e75d53789dc4666f5e91cbca64d59c26f77a0b74da6c19 = $this->env->getExtension("native_profiler");
        $__internal_9bdacb00e17fedca88e75d53789dc4666f5e91cbca64d59c26f77a0b74da6c19->enter($__internal_9bdacb00e17fedca88e75d53789dc4666f5e91cbca64d59c26f77a0b74da6c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_9bdacb00e17fedca88e75d53789dc4666f5e91cbca64d59c26f77a0b74da6c19->leave($__internal_9bdacb00e17fedca88e75d53789dc4666f5e91cbca64d59c26f77a0b74da6c19_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_783a324819e3782c915ebcb51374c9be2e9cfbd2e800605d4233ac8159a4d8c4 = $this->env->getExtension("native_profiler");
        $__internal_783a324819e3782c915ebcb51374c9be2e9cfbd2e800605d4233ac8159a4d8c4->enter($__internal_783a324819e3782c915ebcb51374c9be2e9cfbd2e800605d4233ac8159a4d8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_783a324819e3782c915ebcb51374c9be2e9cfbd2e800605d4233ac8159a4d8c4->leave($__internal_783a324819e3782c915ebcb51374c9be2e9cfbd2e800605d4233ac8159a4d8c4_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_77b8bb3295f1a59a473a5f2856b2fe77e0480dd27c902cc793260e96665238a2 = $this->env->getExtension("native_profiler");
        $__internal_77b8bb3295f1a59a473a5f2856b2fe77e0480dd27c902cc793260e96665238a2->enter($__internal_77b8bb3295f1a59a473a5f2856b2fe77e0480dd27c902cc793260e96665238a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_77b8bb3295f1a59a473a5f2856b2fe77e0480dd27c902cc793260e96665238a2->leave($__internal_77b8bb3295f1a59a473a5f2856b2fe77e0480dd27c902cc793260e96665238a2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
