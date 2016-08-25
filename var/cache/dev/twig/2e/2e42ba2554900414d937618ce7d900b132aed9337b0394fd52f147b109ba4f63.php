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
        $__internal_a4ca84778ae470c46e8e1991d251abf1d42d1b719aa748c18437db60f69f7c6e = $this->env->getExtension("native_profiler");
        $__internal_a4ca84778ae470c46e8e1991d251abf1d42d1b719aa748c18437db60f69f7c6e->enter($__internal_a4ca84778ae470c46e8e1991d251abf1d42d1b719aa748c18437db60f69f7c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a4ca84778ae470c46e8e1991d251abf1d42d1b719aa748c18437db60f69f7c6e->leave($__internal_a4ca84778ae470c46e8e1991d251abf1d42d1b719aa748c18437db60f69f7c6e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_742d080053851bdfc7c888bca162b7ab8189fc3ec06ec77c718e88b9689dce04 = $this->env->getExtension("native_profiler");
        $__internal_742d080053851bdfc7c888bca162b7ab8189fc3ec06ec77c718e88b9689dce04->enter($__internal_742d080053851bdfc7c888bca162b7ab8189fc3ec06ec77c718e88b9689dce04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_742d080053851bdfc7c888bca162b7ab8189fc3ec06ec77c718e88b9689dce04->leave($__internal_742d080053851bdfc7c888bca162b7ab8189fc3ec06ec77c718e88b9689dce04_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7a613aab9d73943f65497050472662e46017b5a1769858f7694e5455ea742840 = $this->env->getExtension("native_profiler");
        $__internal_7a613aab9d73943f65497050472662e46017b5a1769858f7694e5455ea742840->enter($__internal_7a613aab9d73943f65497050472662e46017b5a1769858f7694e5455ea742840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7a613aab9d73943f65497050472662e46017b5a1769858f7694e5455ea742840->leave($__internal_7a613aab9d73943f65497050472662e46017b5a1769858f7694e5455ea742840_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4975bf4e366adafb95d7b90edaa38eb4ef74a81f9fd1c235da9b17fa1321f32d = $this->env->getExtension("native_profiler");
        $__internal_4975bf4e366adafb95d7b90edaa38eb4ef74a81f9fd1c235da9b17fa1321f32d->enter($__internal_4975bf4e366adafb95d7b90edaa38eb4ef74a81f9fd1c235da9b17fa1321f32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4975bf4e366adafb95d7b90edaa38eb4ef74a81f9fd1c235da9b17fa1321f32d->leave($__internal_4975bf4e366adafb95d7b90edaa38eb4ef74a81f9fd1c235da9b17fa1321f32d_prof);

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
