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
        $__internal_cbd5a44cee14eab31bf5a0e793a8836c06a41e7f6957c5a5d75b58d9cb861cf2 = $this->env->getExtension("native_profiler");
        $__internal_cbd5a44cee14eab31bf5a0e793a8836c06a41e7f6957c5a5d75b58d9cb861cf2->enter($__internal_cbd5a44cee14eab31bf5a0e793a8836c06a41e7f6957c5a5d75b58d9cb861cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cbd5a44cee14eab31bf5a0e793a8836c06a41e7f6957c5a5d75b58d9cb861cf2->leave($__internal_cbd5a44cee14eab31bf5a0e793a8836c06a41e7f6957c5a5d75b58d9cb861cf2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2de4e683ffb824592ac2f57d2a91eafe63820a907f92560fb886f3682ccd3bf3 = $this->env->getExtension("native_profiler");
        $__internal_2de4e683ffb824592ac2f57d2a91eafe63820a907f92560fb886f3682ccd3bf3->enter($__internal_2de4e683ffb824592ac2f57d2a91eafe63820a907f92560fb886f3682ccd3bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_2de4e683ffb824592ac2f57d2a91eafe63820a907f92560fb886f3682ccd3bf3->leave($__internal_2de4e683ffb824592ac2f57d2a91eafe63820a907f92560fb886f3682ccd3bf3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1aa280d57f95ac35a9c08d1050100263e8e313927d203d72ed277fd65db8f350 = $this->env->getExtension("native_profiler");
        $__internal_1aa280d57f95ac35a9c08d1050100263e8e313927d203d72ed277fd65db8f350->enter($__internal_1aa280d57f95ac35a9c08d1050100263e8e313927d203d72ed277fd65db8f350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1aa280d57f95ac35a9c08d1050100263e8e313927d203d72ed277fd65db8f350->leave($__internal_1aa280d57f95ac35a9c08d1050100263e8e313927d203d72ed277fd65db8f350_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cda28bc5eb65efe806591de5e07b6867cd22c8654ba535a5471fe008876050fe = $this->env->getExtension("native_profiler");
        $__internal_cda28bc5eb65efe806591de5e07b6867cd22c8654ba535a5471fe008876050fe->enter($__internal_cda28bc5eb65efe806591de5e07b6867cd22c8654ba535a5471fe008876050fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cda28bc5eb65efe806591de5e07b6867cd22c8654ba535a5471fe008876050fe->leave($__internal_cda28bc5eb65efe806591de5e07b6867cd22c8654ba535a5471fe008876050fe_prof);

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
