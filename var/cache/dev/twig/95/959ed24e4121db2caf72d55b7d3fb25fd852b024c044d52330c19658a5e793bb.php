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
        $__internal_e18d9d271cd2e68b8a2dca2a657e460fced1a515444c9d1ae2bc5a001979710f = $this->env->getExtension("native_profiler");
        $__internal_e18d9d271cd2e68b8a2dca2a657e460fced1a515444c9d1ae2bc5a001979710f->enter($__internal_e18d9d271cd2e68b8a2dca2a657e460fced1a515444c9d1ae2bc5a001979710f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e18d9d271cd2e68b8a2dca2a657e460fced1a515444c9d1ae2bc5a001979710f->leave($__internal_e18d9d271cd2e68b8a2dca2a657e460fced1a515444c9d1ae2bc5a001979710f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7a42b768aa0084f498bb6ba27c2eb91b92825cb32ffb2f2d7ad9e9dc339bce9d = $this->env->getExtension("native_profiler");
        $__internal_7a42b768aa0084f498bb6ba27c2eb91b92825cb32ffb2f2d7ad9e9dc339bce9d->enter($__internal_7a42b768aa0084f498bb6ba27c2eb91b92825cb32ffb2f2d7ad9e9dc339bce9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7a42b768aa0084f498bb6ba27c2eb91b92825cb32ffb2f2d7ad9e9dc339bce9d->leave($__internal_7a42b768aa0084f498bb6ba27c2eb91b92825cb32ffb2f2d7ad9e9dc339bce9d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5d217a35b3205a35e21b75f4a4bf8149ea98e6fd95d426c9aba7c62ce2b654cc = $this->env->getExtension("native_profiler");
        $__internal_5d217a35b3205a35e21b75f4a4bf8149ea98e6fd95d426c9aba7c62ce2b654cc->enter($__internal_5d217a35b3205a35e21b75f4a4bf8149ea98e6fd95d426c9aba7c62ce2b654cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5d217a35b3205a35e21b75f4a4bf8149ea98e6fd95d426c9aba7c62ce2b654cc->leave($__internal_5d217a35b3205a35e21b75f4a4bf8149ea98e6fd95d426c9aba7c62ce2b654cc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_52a348974b7625acbedf9b14fbb3dd74524a9dc86f12d77b9ac63fbfddf509b6 = $this->env->getExtension("native_profiler");
        $__internal_52a348974b7625acbedf9b14fbb3dd74524a9dc86f12d77b9ac63fbfddf509b6->enter($__internal_52a348974b7625acbedf9b14fbb3dd74524a9dc86f12d77b9ac63fbfddf509b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_52a348974b7625acbedf9b14fbb3dd74524a9dc86f12d77b9ac63fbfddf509b6->leave($__internal_52a348974b7625acbedf9b14fbb3dd74524a9dc86f12d77b9ac63fbfddf509b6_prof);

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
