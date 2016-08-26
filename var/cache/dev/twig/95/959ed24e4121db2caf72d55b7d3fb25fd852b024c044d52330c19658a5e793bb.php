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
        $__internal_9075b8905085d46f030fd12f2b48b2b6b48c72d5e22701ab3f15c7fdfc33f3af = $this->env->getExtension("native_profiler");
        $__internal_9075b8905085d46f030fd12f2b48b2b6b48c72d5e22701ab3f15c7fdfc33f3af->enter($__internal_9075b8905085d46f030fd12f2b48b2b6b48c72d5e22701ab3f15c7fdfc33f3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9075b8905085d46f030fd12f2b48b2b6b48c72d5e22701ab3f15c7fdfc33f3af->leave($__internal_9075b8905085d46f030fd12f2b48b2b6b48c72d5e22701ab3f15c7fdfc33f3af_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d51d807e2901f20e2298aca09a1b6dff71bc8e20327a15d39772033f7e4cff2b = $this->env->getExtension("native_profiler");
        $__internal_d51d807e2901f20e2298aca09a1b6dff71bc8e20327a15d39772033f7e4cff2b->enter($__internal_d51d807e2901f20e2298aca09a1b6dff71bc8e20327a15d39772033f7e4cff2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d51d807e2901f20e2298aca09a1b6dff71bc8e20327a15d39772033f7e4cff2b->leave($__internal_d51d807e2901f20e2298aca09a1b6dff71bc8e20327a15d39772033f7e4cff2b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_99579e869d09aea34e178ecbf159897684ffe0fc57296b1943cf5a77106e4dde = $this->env->getExtension("native_profiler");
        $__internal_99579e869d09aea34e178ecbf159897684ffe0fc57296b1943cf5a77106e4dde->enter($__internal_99579e869d09aea34e178ecbf159897684ffe0fc57296b1943cf5a77106e4dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_99579e869d09aea34e178ecbf159897684ffe0fc57296b1943cf5a77106e4dde->leave($__internal_99579e869d09aea34e178ecbf159897684ffe0fc57296b1943cf5a77106e4dde_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8d5ed64705c9ee00a866f34a4da32acb838591e776ed7ed9f2940438a9643738 = $this->env->getExtension("native_profiler");
        $__internal_8d5ed64705c9ee00a866f34a4da32acb838591e776ed7ed9f2940438a9643738->enter($__internal_8d5ed64705c9ee00a866f34a4da32acb838591e776ed7ed9f2940438a9643738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8d5ed64705c9ee00a866f34a4da32acb838591e776ed7ed9f2940438a9643738->leave($__internal_8d5ed64705c9ee00a866f34a4da32acb838591e776ed7ed9f2940438a9643738_prof);

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
