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
        $__internal_b8e64ae99996ddb3f69c646e6bb1852f3992a6a3b577b59959e6cfccb7e9e4e3 = $this->env->getExtension("native_profiler");
        $__internal_b8e64ae99996ddb3f69c646e6bb1852f3992a6a3b577b59959e6cfccb7e9e4e3->enter($__internal_b8e64ae99996ddb3f69c646e6bb1852f3992a6a3b577b59959e6cfccb7e9e4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b8e64ae99996ddb3f69c646e6bb1852f3992a6a3b577b59959e6cfccb7e9e4e3->leave($__internal_b8e64ae99996ddb3f69c646e6bb1852f3992a6a3b577b59959e6cfccb7e9e4e3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a5e32a0a1ff02734f2048852a6701fb46bdcb66161a368a5b420daa8011f4ace = $this->env->getExtension("native_profiler");
        $__internal_a5e32a0a1ff02734f2048852a6701fb46bdcb66161a368a5b420daa8011f4ace->enter($__internal_a5e32a0a1ff02734f2048852a6701fb46bdcb66161a368a5b420daa8011f4ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a5e32a0a1ff02734f2048852a6701fb46bdcb66161a368a5b420daa8011f4ace->leave($__internal_a5e32a0a1ff02734f2048852a6701fb46bdcb66161a368a5b420daa8011f4ace_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ef5e67d5daa45f1636bc68231e649cc2a9af5f2cbee1df1f381bcf9a117896aa = $this->env->getExtension("native_profiler");
        $__internal_ef5e67d5daa45f1636bc68231e649cc2a9af5f2cbee1df1f381bcf9a117896aa->enter($__internal_ef5e67d5daa45f1636bc68231e649cc2a9af5f2cbee1df1f381bcf9a117896aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ef5e67d5daa45f1636bc68231e649cc2a9af5f2cbee1df1f381bcf9a117896aa->leave($__internal_ef5e67d5daa45f1636bc68231e649cc2a9af5f2cbee1df1f381bcf9a117896aa_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2cf4921e85aa766fbb8dbf2b8e988f0a12e7a03fec06ea742e42bf69da2b5964 = $this->env->getExtension("native_profiler");
        $__internal_2cf4921e85aa766fbb8dbf2b8e988f0a12e7a03fec06ea742e42bf69da2b5964->enter($__internal_2cf4921e85aa766fbb8dbf2b8e988f0a12e7a03fec06ea742e42bf69da2b5964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2cf4921e85aa766fbb8dbf2b8e988f0a12e7a03fec06ea742e42bf69da2b5964->leave($__internal_2cf4921e85aa766fbb8dbf2b8e988f0a12e7a03fec06ea742e42bf69da2b5964_prof);

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
