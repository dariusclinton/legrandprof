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
        $__internal_2f4f8af82102e55ef53b7d5f0c2c319519b2af0bea45274dd29d78bbcad4dc27 = $this->env->getExtension("native_profiler");
        $__internal_2f4f8af82102e55ef53b7d5f0c2c319519b2af0bea45274dd29d78bbcad4dc27->enter($__internal_2f4f8af82102e55ef53b7d5f0c2c319519b2af0bea45274dd29d78bbcad4dc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2f4f8af82102e55ef53b7d5f0c2c319519b2af0bea45274dd29d78bbcad4dc27->leave($__internal_2f4f8af82102e55ef53b7d5f0c2c319519b2af0bea45274dd29d78bbcad4dc27_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2bb5c7bd57088e08792e381439b6d5da523ddf4257f06cc8ffe15ba99eb07765 = $this->env->getExtension("native_profiler");
        $__internal_2bb5c7bd57088e08792e381439b6d5da523ddf4257f06cc8ffe15ba99eb07765->enter($__internal_2bb5c7bd57088e08792e381439b6d5da523ddf4257f06cc8ffe15ba99eb07765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_2bb5c7bd57088e08792e381439b6d5da523ddf4257f06cc8ffe15ba99eb07765->leave($__internal_2bb5c7bd57088e08792e381439b6d5da523ddf4257f06cc8ffe15ba99eb07765_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_eccf015b15651fdd320dcdf8fac14e4c765ee3fc43f66282760c25cddcba3667 = $this->env->getExtension("native_profiler");
        $__internal_eccf015b15651fdd320dcdf8fac14e4c765ee3fc43f66282760c25cddcba3667->enter($__internal_eccf015b15651fdd320dcdf8fac14e4c765ee3fc43f66282760c25cddcba3667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_eccf015b15651fdd320dcdf8fac14e4c765ee3fc43f66282760c25cddcba3667->leave($__internal_eccf015b15651fdd320dcdf8fac14e4c765ee3fc43f66282760c25cddcba3667_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_81218d8446c85cfc0ce3a4f596b2894e32e167b1b643925c57a49fc6d8916084 = $this->env->getExtension("native_profiler");
        $__internal_81218d8446c85cfc0ce3a4f596b2894e32e167b1b643925c57a49fc6d8916084->enter($__internal_81218d8446c85cfc0ce3a4f596b2894e32e167b1b643925c57a49fc6d8916084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_81218d8446c85cfc0ce3a4f596b2894e32e167b1b643925c57a49fc6d8916084->leave($__internal_81218d8446c85cfc0ce3a4f596b2894e32e167b1b643925c57a49fc6d8916084_prof);

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
