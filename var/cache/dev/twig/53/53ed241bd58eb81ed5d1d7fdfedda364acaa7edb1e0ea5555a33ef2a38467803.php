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
        $__internal_308143a1a2b07810973d92e46617d90bd11b4cc6eb8f47d03c822a687dad8e3e = $this->env->getExtension("native_profiler");
        $__internal_308143a1a2b07810973d92e46617d90bd11b4cc6eb8f47d03c822a687dad8e3e->enter($__internal_308143a1a2b07810973d92e46617d90bd11b4cc6eb8f47d03c822a687dad8e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_308143a1a2b07810973d92e46617d90bd11b4cc6eb8f47d03c822a687dad8e3e->leave($__internal_308143a1a2b07810973d92e46617d90bd11b4cc6eb8f47d03c822a687dad8e3e_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_895708d000d866bbd0c0eaac7510844488fb94c890c85e6f1b636fa695b82686 = $this->env->getExtension("native_profiler");
        $__internal_895708d000d866bbd0c0eaac7510844488fb94c890c85e6f1b636fa695b82686->enter($__internal_895708d000d866bbd0c0eaac7510844488fb94c890c85e6f1b636fa695b82686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_895708d000d866bbd0c0eaac7510844488fb94c890c85e6f1b636fa695b82686->leave($__internal_895708d000d866bbd0c0eaac7510844488fb94c890c85e6f1b636fa695b82686_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_376d6a8e6c044142be7c32d4a26c9ffaf524248be0a29a8e363cd91e3fbed5ee = $this->env->getExtension("native_profiler");
        $__internal_376d6a8e6c044142be7c32d4a26c9ffaf524248be0a29a8e363cd91e3fbed5ee->enter($__internal_376d6a8e6c044142be7c32d4a26c9ffaf524248be0a29a8e363cd91e3fbed5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_376d6a8e6c044142be7c32d4a26c9ffaf524248be0a29a8e363cd91e3fbed5ee->leave($__internal_376d6a8e6c044142be7c32d4a26c9ffaf524248be0a29a8e363cd91e3fbed5ee_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_52cf6e08f2d1a069506771c94e0b539fa31bdc3850a55b77f37e6a0ceb3f6751 = $this->env->getExtension("native_profiler");
        $__internal_52cf6e08f2d1a069506771c94e0b539fa31bdc3850a55b77f37e6a0ceb3f6751->enter($__internal_52cf6e08f2d1a069506771c94e0b539fa31bdc3850a55b77f37e6a0ceb3f6751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_52cf6e08f2d1a069506771c94e0b539fa31bdc3850a55b77f37e6a0ceb3f6751->leave($__internal_52cf6e08f2d1a069506771c94e0b539fa31bdc3850a55b77f37e6a0ceb3f6751_prof);

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
