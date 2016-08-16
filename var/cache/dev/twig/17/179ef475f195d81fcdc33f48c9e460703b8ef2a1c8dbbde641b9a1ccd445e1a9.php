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
        $__internal_99b9e3b10e72cac3f5aa4e7d25ca584f01e39ef7cb290506f017f3e0a6c2227d = $this->env->getExtension("native_profiler");
        $__internal_99b9e3b10e72cac3f5aa4e7d25ca584f01e39ef7cb290506f017f3e0a6c2227d->enter($__internal_99b9e3b10e72cac3f5aa4e7d25ca584f01e39ef7cb290506f017f3e0a6c2227d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_99b9e3b10e72cac3f5aa4e7d25ca584f01e39ef7cb290506f017f3e0a6c2227d->leave($__internal_99b9e3b10e72cac3f5aa4e7d25ca584f01e39ef7cb290506f017f3e0a6c2227d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e851ed702f6843495385e69b6f80c775d013aa99ca9c297303daee9031d572ee = $this->env->getExtension("native_profiler");
        $__internal_e851ed702f6843495385e69b6f80c775d013aa99ca9c297303daee9031d572ee->enter($__internal_e851ed702f6843495385e69b6f80c775d013aa99ca9c297303daee9031d572ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e851ed702f6843495385e69b6f80c775d013aa99ca9c297303daee9031d572ee->leave($__internal_e851ed702f6843495385e69b6f80c775d013aa99ca9c297303daee9031d572ee_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5240fb01d6553b418bf76c74f789647adac1c8ab91ac65a31ee024dcddffceb8 = $this->env->getExtension("native_profiler");
        $__internal_5240fb01d6553b418bf76c74f789647adac1c8ab91ac65a31ee024dcddffceb8->enter($__internal_5240fb01d6553b418bf76c74f789647adac1c8ab91ac65a31ee024dcddffceb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5240fb01d6553b418bf76c74f789647adac1c8ab91ac65a31ee024dcddffceb8->leave($__internal_5240fb01d6553b418bf76c74f789647adac1c8ab91ac65a31ee024dcddffceb8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ad0a576560f1089cf95dba1f549bc43badaea5fbd8d645f605ef4863a4e779b5 = $this->env->getExtension("native_profiler");
        $__internal_ad0a576560f1089cf95dba1f549bc43badaea5fbd8d645f605ef4863a4e779b5->enter($__internal_ad0a576560f1089cf95dba1f549bc43badaea5fbd8d645f605ef4863a4e779b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ad0a576560f1089cf95dba1f549bc43badaea5fbd8d645f605ef4863a4e779b5->leave($__internal_ad0a576560f1089cf95dba1f549bc43badaea5fbd8d645f605ef4863a4e779b5_prof);

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
