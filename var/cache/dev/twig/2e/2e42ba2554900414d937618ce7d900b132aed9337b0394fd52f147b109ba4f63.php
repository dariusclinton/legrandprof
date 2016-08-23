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
        $__internal_58df9eeb5f4ca188ae07438949e09025d5d74de1d3a7325f98fa9020faceffa5 = $this->env->getExtension("native_profiler");
        $__internal_58df9eeb5f4ca188ae07438949e09025d5d74de1d3a7325f98fa9020faceffa5->enter($__internal_58df9eeb5f4ca188ae07438949e09025d5d74de1d3a7325f98fa9020faceffa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_58df9eeb5f4ca188ae07438949e09025d5d74de1d3a7325f98fa9020faceffa5->leave($__internal_58df9eeb5f4ca188ae07438949e09025d5d74de1d3a7325f98fa9020faceffa5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_399cafce9d294b801b223049f7d0f63813dda9943dfc397dde1ea4571605abd3 = $this->env->getExtension("native_profiler");
        $__internal_399cafce9d294b801b223049f7d0f63813dda9943dfc397dde1ea4571605abd3->enter($__internal_399cafce9d294b801b223049f7d0f63813dda9943dfc397dde1ea4571605abd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_399cafce9d294b801b223049f7d0f63813dda9943dfc397dde1ea4571605abd3->leave($__internal_399cafce9d294b801b223049f7d0f63813dda9943dfc397dde1ea4571605abd3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_338a2011084eb061ec2b7a7600f4f0010d9771a6d4e06a99a3160c761823e442 = $this->env->getExtension("native_profiler");
        $__internal_338a2011084eb061ec2b7a7600f4f0010d9771a6d4e06a99a3160c761823e442->enter($__internal_338a2011084eb061ec2b7a7600f4f0010d9771a6d4e06a99a3160c761823e442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_338a2011084eb061ec2b7a7600f4f0010d9771a6d4e06a99a3160c761823e442->leave($__internal_338a2011084eb061ec2b7a7600f4f0010d9771a6d4e06a99a3160c761823e442_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_098eff31a760a823526a9fed3ef30a06ada516acfe69a16bce8810c36c8c4398 = $this->env->getExtension("native_profiler");
        $__internal_098eff31a760a823526a9fed3ef30a06ada516acfe69a16bce8810c36c8c4398->enter($__internal_098eff31a760a823526a9fed3ef30a06ada516acfe69a16bce8810c36c8c4398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_098eff31a760a823526a9fed3ef30a06ada516acfe69a16bce8810c36c8c4398->leave($__internal_098eff31a760a823526a9fed3ef30a06ada516acfe69a16bce8810c36c8c4398_prof);

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
