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
        $__internal_01db0ea81a3e31dc10d498749e87d1643b3d438b6ca639008d814ebef247037b = $this->env->getExtension("native_profiler");
        $__internal_01db0ea81a3e31dc10d498749e87d1643b3d438b6ca639008d814ebef247037b->enter($__internal_01db0ea81a3e31dc10d498749e87d1643b3d438b6ca639008d814ebef247037b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_01db0ea81a3e31dc10d498749e87d1643b3d438b6ca639008d814ebef247037b->leave($__internal_01db0ea81a3e31dc10d498749e87d1643b3d438b6ca639008d814ebef247037b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0a640fdaade65d1852b308f19794905becbc0690018a422b40ae5405da9dfe8e = $this->env->getExtension("native_profiler");
        $__internal_0a640fdaade65d1852b308f19794905becbc0690018a422b40ae5405da9dfe8e->enter($__internal_0a640fdaade65d1852b308f19794905becbc0690018a422b40ae5405da9dfe8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_0a640fdaade65d1852b308f19794905becbc0690018a422b40ae5405da9dfe8e->leave($__internal_0a640fdaade65d1852b308f19794905becbc0690018a422b40ae5405da9dfe8e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_37c4fe57336797e74a2e5cedc58ef935d116052a5f2b3dfc3a2abcdc4a941554 = $this->env->getExtension("native_profiler");
        $__internal_37c4fe57336797e74a2e5cedc58ef935d116052a5f2b3dfc3a2abcdc4a941554->enter($__internal_37c4fe57336797e74a2e5cedc58ef935d116052a5f2b3dfc3a2abcdc4a941554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_37c4fe57336797e74a2e5cedc58ef935d116052a5f2b3dfc3a2abcdc4a941554->leave($__internal_37c4fe57336797e74a2e5cedc58ef935d116052a5f2b3dfc3a2abcdc4a941554_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1664cdf6d8bbe1360a200ed719de2d3e4e883fdfe1ee65fddf01a7f872bc38ae = $this->env->getExtension("native_profiler");
        $__internal_1664cdf6d8bbe1360a200ed719de2d3e4e883fdfe1ee65fddf01a7f872bc38ae->enter($__internal_1664cdf6d8bbe1360a200ed719de2d3e4e883fdfe1ee65fddf01a7f872bc38ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1664cdf6d8bbe1360a200ed719de2d3e4e883fdfe1ee65fddf01a7f872bc38ae->leave($__internal_1664cdf6d8bbe1360a200ed719de2d3e4e883fdfe1ee65fddf01a7f872bc38ae_prof);

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
