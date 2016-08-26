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
        $__internal_ff31becbb7b85b49d3a7b2faed5546ed18edafa43cbb3bcc2cb0672406715be6 = $this->env->getExtension("native_profiler");
        $__internal_ff31becbb7b85b49d3a7b2faed5546ed18edafa43cbb3bcc2cb0672406715be6->enter($__internal_ff31becbb7b85b49d3a7b2faed5546ed18edafa43cbb3bcc2cb0672406715be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ff31becbb7b85b49d3a7b2faed5546ed18edafa43cbb3bcc2cb0672406715be6->leave($__internal_ff31becbb7b85b49d3a7b2faed5546ed18edafa43cbb3bcc2cb0672406715be6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_25b6dabe6e7ad131486cb70af83e6b4f86bc3d9715b174ee3c21f46e0b0f28b9 = $this->env->getExtension("native_profiler");
        $__internal_25b6dabe6e7ad131486cb70af83e6b4f86bc3d9715b174ee3c21f46e0b0f28b9->enter($__internal_25b6dabe6e7ad131486cb70af83e6b4f86bc3d9715b174ee3c21f46e0b0f28b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_25b6dabe6e7ad131486cb70af83e6b4f86bc3d9715b174ee3c21f46e0b0f28b9->leave($__internal_25b6dabe6e7ad131486cb70af83e6b4f86bc3d9715b174ee3c21f46e0b0f28b9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7620ddeb183313edbd974bdd312523350003aef5af6ecce2e2053398339ed072 = $this->env->getExtension("native_profiler");
        $__internal_7620ddeb183313edbd974bdd312523350003aef5af6ecce2e2053398339ed072->enter($__internal_7620ddeb183313edbd974bdd312523350003aef5af6ecce2e2053398339ed072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7620ddeb183313edbd974bdd312523350003aef5af6ecce2e2053398339ed072->leave($__internal_7620ddeb183313edbd974bdd312523350003aef5af6ecce2e2053398339ed072_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_50d9649cf86ad68aef08e5711e2eac561ccd8aa71fee7618ef9d4f79b43e5a92 = $this->env->getExtension("native_profiler");
        $__internal_50d9649cf86ad68aef08e5711e2eac561ccd8aa71fee7618ef9d4f79b43e5a92->enter($__internal_50d9649cf86ad68aef08e5711e2eac561ccd8aa71fee7618ef9d4f79b43e5a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_50d9649cf86ad68aef08e5711e2eac561ccd8aa71fee7618ef9d4f79b43e5a92->leave($__internal_50d9649cf86ad68aef08e5711e2eac561ccd8aa71fee7618ef9d4f79b43e5a92_prof);

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
