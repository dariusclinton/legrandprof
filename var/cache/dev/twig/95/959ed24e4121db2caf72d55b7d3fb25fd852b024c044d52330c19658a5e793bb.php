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
        $__internal_6669ee099557b193eafdfc6b66d95b94cf124976d90650a9f087b4fa88b8b306 = $this->env->getExtension("native_profiler");
        $__internal_6669ee099557b193eafdfc6b66d95b94cf124976d90650a9f087b4fa88b8b306->enter($__internal_6669ee099557b193eafdfc6b66d95b94cf124976d90650a9f087b4fa88b8b306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6669ee099557b193eafdfc6b66d95b94cf124976d90650a9f087b4fa88b8b306->leave($__internal_6669ee099557b193eafdfc6b66d95b94cf124976d90650a9f087b4fa88b8b306_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_70699bec5f9e97dd23f21adae2209c4ad2afc07a11d08e8ef664b442d8eef0f6 = $this->env->getExtension("native_profiler");
        $__internal_70699bec5f9e97dd23f21adae2209c4ad2afc07a11d08e8ef664b442d8eef0f6->enter($__internal_70699bec5f9e97dd23f21adae2209c4ad2afc07a11d08e8ef664b442d8eef0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_70699bec5f9e97dd23f21adae2209c4ad2afc07a11d08e8ef664b442d8eef0f6->leave($__internal_70699bec5f9e97dd23f21adae2209c4ad2afc07a11d08e8ef664b442d8eef0f6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3e7ea6744db976082a5ee421ebdd1818f232143f61aac56a4e679425e4687db6 = $this->env->getExtension("native_profiler");
        $__internal_3e7ea6744db976082a5ee421ebdd1818f232143f61aac56a4e679425e4687db6->enter($__internal_3e7ea6744db976082a5ee421ebdd1818f232143f61aac56a4e679425e4687db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3e7ea6744db976082a5ee421ebdd1818f232143f61aac56a4e679425e4687db6->leave($__internal_3e7ea6744db976082a5ee421ebdd1818f232143f61aac56a4e679425e4687db6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_30cc88d2481261ab3efcfc72820c037ff32579a366d253bf63f6a0061c33357f = $this->env->getExtension("native_profiler");
        $__internal_30cc88d2481261ab3efcfc72820c037ff32579a366d253bf63f6a0061c33357f->enter($__internal_30cc88d2481261ab3efcfc72820c037ff32579a366d253bf63f6a0061c33357f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_30cc88d2481261ab3efcfc72820c037ff32579a366d253bf63f6a0061c33357f->leave($__internal_30cc88d2481261ab3efcfc72820c037ff32579a366d253bf63f6a0061c33357f_prof);

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
