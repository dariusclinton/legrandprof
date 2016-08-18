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
        $__internal_4b8d2ca307215ff93e6dcd49de3e8215a8659123ea2261686809199c74c427e1 = $this->env->getExtension("native_profiler");
        $__internal_4b8d2ca307215ff93e6dcd49de3e8215a8659123ea2261686809199c74c427e1->enter($__internal_4b8d2ca307215ff93e6dcd49de3e8215a8659123ea2261686809199c74c427e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4b8d2ca307215ff93e6dcd49de3e8215a8659123ea2261686809199c74c427e1->leave($__internal_4b8d2ca307215ff93e6dcd49de3e8215a8659123ea2261686809199c74c427e1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7815d763d19853001f81a8015b7986775592306de7e8025cfaa47777f3dc9d72 = $this->env->getExtension("native_profiler");
        $__internal_7815d763d19853001f81a8015b7986775592306de7e8025cfaa47777f3dc9d72->enter($__internal_7815d763d19853001f81a8015b7986775592306de7e8025cfaa47777f3dc9d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7815d763d19853001f81a8015b7986775592306de7e8025cfaa47777f3dc9d72->leave($__internal_7815d763d19853001f81a8015b7986775592306de7e8025cfaa47777f3dc9d72_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_eedb1fd12124368deff19558998eb54fb64eb17c45cfe0f8dc0510df14265b88 = $this->env->getExtension("native_profiler");
        $__internal_eedb1fd12124368deff19558998eb54fb64eb17c45cfe0f8dc0510df14265b88->enter($__internal_eedb1fd12124368deff19558998eb54fb64eb17c45cfe0f8dc0510df14265b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_eedb1fd12124368deff19558998eb54fb64eb17c45cfe0f8dc0510df14265b88->leave($__internal_eedb1fd12124368deff19558998eb54fb64eb17c45cfe0f8dc0510df14265b88_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_59d71fc448dde6ff82170ebd4bfa0cf12ef0e69987c28ee62f67f5753a836f3f = $this->env->getExtension("native_profiler");
        $__internal_59d71fc448dde6ff82170ebd4bfa0cf12ef0e69987c28ee62f67f5753a836f3f->enter($__internal_59d71fc448dde6ff82170ebd4bfa0cf12ef0e69987c28ee62f67f5753a836f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_59d71fc448dde6ff82170ebd4bfa0cf12ef0e69987c28ee62f67f5753a836f3f->leave($__internal_59d71fc448dde6ff82170ebd4bfa0cf12ef0e69987c28ee62f67f5753a836f3f_prof);

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
