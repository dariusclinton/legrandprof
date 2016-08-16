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
        $__internal_3cece733a1d52bf798df730b741bd878e125baf2e6c94df52c55e398a0b94e4d = $this->env->getExtension("native_profiler");
        $__internal_3cece733a1d52bf798df730b741bd878e125baf2e6c94df52c55e398a0b94e4d->enter($__internal_3cece733a1d52bf798df730b741bd878e125baf2e6c94df52c55e398a0b94e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3cece733a1d52bf798df730b741bd878e125baf2e6c94df52c55e398a0b94e4d->leave($__internal_3cece733a1d52bf798df730b741bd878e125baf2e6c94df52c55e398a0b94e4d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_75e551b9f4e5654751bacf26965c68780b568bc1c743deddc87fa398e8b56d07 = $this->env->getExtension("native_profiler");
        $__internal_75e551b9f4e5654751bacf26965c68780b568bc1c743deddc87fa398e8b56d07->enter($__internal_75e551b9f4e5654751bacf26965c68780b568bc1c743deddc87fa398e8b56d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_75e551b9f4e5654751bacf26965c68780b568bc1c743deddc87fa398e8b56d07->leave($__internal_75e551b9f4e5654751bacf26965c68780b568bc1c743deddc87fa398e8b56d07_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f532e3710b9c9cd359b16db9291c1f53a5eec353ac0b6e758c1c9adb61b1cc57 = $this->env->getExtension("native_profiler");
        $__internal_f532e3710b9c9cd359b16db9291c1f53a5eec353ac0b6e758c1c9adb61b1cc57->enter($__internal_f532e3710b9c9cd359b16db9291c1f53a5eec353ac0b6e758c1c9adb61b1cc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f532e3710b9c9cd359b16db9291c1f53a5eec353ac0b6e758c1c9adb61b1cc57->leave($__internal_f532e3710b9c9cd359b16db9291c1f53a5eec353ac0b6e758c1c9adb61b1cc57_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bb78232b3251b8fa011b36565da0f99258e7b4e164b2eb3cb41f74acceaa19ad = $this->env->getExtension("native_profiler");
        $__internal_bb78232b3251b8fa011b36565da0f99258e7b4e164b2eb3cb41f74acceaa19ad->enter($__internal_bb78232b3251b8fa011b36565da0f99258e7b4e164b2eb3cb41f74acceaa19ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bb78232b3251b8fa011b36565da0f99258e7b4e164b2eb3cb41f74acceaa19ad->leave($__internal_bb78232b3251b8fa011b36565da0f99258e7b4e164b2eb3cb41f74acceaa19ad_prof);

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
