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
        $__internal_10798807862fe1ad0418aab140af187449871a7ea8159be5e4ce232064ead23b = $this->env->getExtension("native_profiler");
        $__internal_10798807862fe1ad0418aab140af187449871a7ea8159be5e4ce232064ead23b->enter($__internal_10798807862fe1ad0418aab140af187449871a7ea8159be5e4ce232064ead23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_10798807862fe1ad0418aab140af187449871a7ea8159be5e4ce232064ead23b->leave($__internal_10798807862fe1ad0418aab140af187449871a7ea8159be5e4ce232064ead23b_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0864ff9eca7bee67e1248d6e69b6a9ab8192a7c4e9de79017bd7d9adc8c876ba = $this->env->getExtension("native_profiler");
        $__internal_0864ff9eca7bee67e1248d6e69b6a9ab8192a7c4e9de79017bd7d9adc8c876ba->enter($__internal_0864ff9eca7bee67e1248d6e69b6a9ab8192a7c4e9de79017bd7d9adc8c876ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_0864ff9eca7bee67e1248d6e69b6a9ab8192a7c4e9de79017bd7d9adc8c876ba->leave($__internal_0864ff9eca7bee67e1248d6e69b6a9ab8192a7c4e9de79017bd7d9adc8c876ba_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8e1ba64c63867f03a872bf1b74502b57d3a47add60fdde923bf69812d91d8672 = $this->env->getExtension("native_profiler");
        $__internal_8e1ba64c63867f03a872bf1b74502b57d3a47add60fdde923bf69812d91d8672->enter($__internal_8e1ba64c63867f03a872bf1b74502b57d3a47add60fdde923bf69812d91d8672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_8e1ba64c63867f03a872bf1b74502b57d3a47add60fdde923bf69812d91d8672->leave($__internal_8e1ba64c63867f03a872bf1b74502b57d3a47add60fdde923bf69812d91d8672_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3cf665856f2eba9f88f63e6bd53b8c9dd6ca1e6d5e665e995e50a6d694a06cd8 = $this->env->getExtension("native_profiler");
        $__internal_3cf665856f2eba9f88f63e6bd53b8c9dd6ca1e6d5e665e995e50a6d694a06cd8->enter($__internal_3cf665856f2eba9f88f63e6bd53b8c9dd6ca1e6d5e665e995e50a6d694a06cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3cf665856f2eba9f88f63e6bd53b8c9dd6ca1e6d5e665e995e50a6d694a06cd8->leave($__internal_3cf665856f2eba9f88f63e6bd53b8c9dd6ca1e6d5e665e995e50a6d694a06cd8_prof);

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
