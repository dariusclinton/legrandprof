<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5157624dd1fed23d585bc0aa41f4c2ac82430c0814efc019f571a5c5094b1db1 extends Twig_Template
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
        $__internal_15166e59686af9d5a7f73fb987f2e223398442fa430aa13ca30c25a6873eafa8 = $this->env->getExtension("native_profiler");
        $__internal_15166e59686af9d5a7f73fb987f2e223398442fa430aa13ca30c25a6873eafa8->enter($__internal_15166e59686af9d5a7f73fb987f2e223398442fa430aa13ca30c25a6873eafa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_15166e59686af9d5a7f73fb987f2e223398442fa430aa13ca30c25a6873eafa8->leave($__internal_15166e59686af9d5a7f73fb987f2e223398442fa430aa13ca30c25a6873eafa8_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bcbe13ba2227700e4042b99f350cb31657d403dc997ea4c30db64b67aa53002b = $this->env->getExtension("native_profiler");
        $__internal_bcbe13ba2227700e4042b99f350cb31657d403dc997ea4c30db64b67aa53002b->enter($__internal_bcbe13ba2227700e4042b99f350cb31657d403dc997ea4c30db64b67aa53002b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_bcbe13ba2227700e4042b99f350cb31657d403dc997ea4c30db64b67aa53002b->leave($__internal_bcbe13ba2227700e4042b99f350cb31657d403dc997ea4c30db64b67aa53002b_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ab51b705e2e4c2bf47baca88eca5e103d10a96a061a522b1343eece1fceeef6e = $this->env->getExtension("native_profiler");
        $__internal_ab51b705e2e4c2bf47baca88eca5e103d10a96a061a522b1343eece1fceeef6e->enter($__internal_ab51b705e2e4c2bf47baca88eca5e103d10a96a061a522b1343eece1fceeef6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_ab51b705e2e4c2bf47baca88eca5e103d10a96a061a522b1343eece1fceeef6e->leave($__internal_ab51b705e2e4c2bf47baca88eca5e103d10a96a061a522b1343eece1fceeef6e_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fcf4f81dd80841ab9763804b7a67396ecf69a0f62bf9d395255c1cfb01177e69 = $this->env->getExtension("native_profiler");
        $__internal_fcf4f81dd80841ab9763804b7a67396ecf69a0f62bf9d395255c1cfb01177e69->enter($__internal_fcf4f81dd80841ab9763804b7a67396ecf69a0f62bf9d395255c1cfb01177e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fcf4f81dd80841ab9763804b7a67396ecf69a0f62bf9d395255c1cfb01177e69->leave($__internal_fcf4f81dd80841ab9763804b7a67396ecf69a0f62bf9d395255c1cfb01177e69_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
