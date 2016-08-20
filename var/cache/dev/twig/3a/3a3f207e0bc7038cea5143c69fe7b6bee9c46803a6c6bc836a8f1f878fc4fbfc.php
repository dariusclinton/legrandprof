<?php

/* @LGPUser/Registration/email.txt.twig */
class __TwigTemplate_8242e01ba1c1797f041ea9d9850b29640c1c88d11811d64101634708f1d10f78 extends Twig_Template
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
        $__internal_d7e8c32194c5b9d2fd952a8691d1a0bed84f86e74829b646576e663cb3570be4 = $this->env->getExtension("native_profiler");
        $__internal_d7e8c32194c5b9d2fd952a8691d1a0bed84f86e74829b646576e663cb3570be4->enter($__internal_d7e8c32194c5b9d2fd952a8691d1a0bed84f86e74829b646576e663cb3570be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('body_text', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d7e8c32194c5b9d2fd952a8691d1a0bed84f86e74829b646576e663cb3570be4->leave($__internal_d7e8c32194c5b9d2fd952a8691d1a0bed84f86e74829b646576e663cb3570be4_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2ca5429dd0bf2d4caa78b73bd4eacb8019d5a5b101d3d89b94d061d09d25dac4 = $this->env->getExtension("native_profiler");
        $__internal_2ca5429dd0bf2d4caa78b73bd4eacb8019d5a5b101d3d89b94d061d09d25dac4->enter($__internal_2ca5429dd0bf2d4caa78b73bd4eacb8019d5a5b101d3d89b94d061d09d25dac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_2ca5429dd0bf2d4caa78b73bd4eacb8019d5a5b101d3d89b94d061d09d25dac4->leave($__internal_2ca5429dd0bf2d4caa78b73bd4eacb8019d5a5b101d3d89b94d061d09d25dac4_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_052c5e4fa11f6fb47579d312896fb79bb93be841b1285d7dcb92d56bf728688f = $this->env->getExtension("native_profiler");
        $__internal_052c5e4fa11f6fb47579d312896fb79bb93be841b1285d7dcb92d56bf728688f->enter($__internal_052c5e4fa11f6fb47579d312896fb79bb93be841b1285d7dcb92d56bf728688f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_052c5e4fa11f6fb47579d312896fb79bb93be841b1285d7dcb92d56bf728688f->leave($__internal_052c5e4fa11f6fb47579d312896fb79bb93be841b1285d7dcb92d56bf728688f_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_43dbc714020f538bf8e4a59f827c38b761712aa22bb5d8236d26cb63dd5f54a7 = $this->env->getExtension("native_profiler");
        $__internal_43dbc714020f538bf8e4a59f827c38b761712aa22bb5d8236d26cb63dd5f54a7->enter($__internal_43dbc714020f538bf8e4a59f827c38b761712aa22bb5d8236d26cb63dd5f54a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_43dbc714020f538bf8e4a59f827c38b761712aa22bb5d8236d26cb63dd5f54a7->leave($__internal_43dbc714020f538bf8e4a59f827c38b761712aa22bb5d8236d26cb63dd5f54a7_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  71 => 11,  69 => 10,  63 => 9,  53 => 5,  51 => 4,  45 => 3,  38 => 15,  35 => 14,  33 => 9,  30 => 8,  28 => 3,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block subject %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_html %}{% endblock %}*/
/* */
