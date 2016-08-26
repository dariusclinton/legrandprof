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
        $__internal_7439d6f549fdd6887ff3927af64ec499fea8729877705296e0936d6bfc0bf9e6 = $this->env->getExtension("native_profiler");
        $__internal_7439d6f549fdd6887ff3927af64ec499fea8729877705296e0936d6bfc0bf9e6->enter($__internal_7439d6f549fdd6887ff3927af64ec499fea8729877705296e0936d6bfc0bf9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7439d6f549fdd6887ff3927af64ec499fea8729877705296e0936d6bfc0bf9e6->leave($__internal_7439d6f549fdd6887ff3927af64ec499fea8729877705296e0936d6bfc0bf9e6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_366da19384691fb48a32acba88f8b248212ad7b41e8a9cb6fdd509f251d42f9f = $this->env->getExtension("native_profiler");
        $__internal_366da19384691fb48a32acba88f8b248212ad7b41e8a9cb6fdd509f251d42f9f->enter($__internal_366da19384691fb48a32acba88f8b248212ad7b41e8a9cb6fdd509f251d42f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_366da19384691fb48a32acba88f8b248212ad7b41e8a9cb6fdd509f251d42f9f->leave($__internal_366da19384691fb48a32acba88f8b248212ad7b41e8a9cb6fdd509f251d42f9f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_40e860d8024228d57fc8aa33eb5dd7e9d361e278d85395fec8db825102e1f292 = $this->env->getExtension("native_profiler");
        $__internal_40e860d8024228d57fc8aa33eb5dd7e9d361e278d85395fec8db825102e1f292->enter($__internal_40e860d8024228d57fc8aa33eb5dd7e9d361e278d85395fec8db825102e1f292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_40e860d8024228d57fc8aa33eb5dd7e9d361e278d85395fec8db825102e1f292->leave($__internal_40e860d8024228d57fc8aa33eb5dd7e9d361e278d85395fec8db825102e1f292_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_637d911489a6b0078ff4051053f241c339fdc5dae7ac12b61995916d9f787525 = $this->env->getExtension("native_profiler");
        $__internal_637d911489a6b0078ff4051053f241c339fdc5dae7ac12b61995916d9f787525->enter($__internal_637d911489a6b0078ff4051053f241c339fdc5dae7ac12b61995916d9f787525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_637d911489a6b0078ff4051053f241c339fdc5dae7ac12b61995916d9f787525->leave($__internal_637d911489a6b0078ff4051053f241c339fdc5dae7ac12b61995916d9f787525_prof);

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
