<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_d307a7e90ca6c1741aa1061b2c0fe55a6a6a6aea980e344f340b875383ebb623 extends Twig_Template
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
        $__internal_fb0c4f716edeef4da466d25dafc6b9e56c1bf7e9c0e453551601076a78652d3c = $this->env->getExtension("native_profiler");
        $__internal_fb0c4f716edeef4da466d25dafc6b9e56c1bf7e9c0e453551601076a78652d3c->enter($__internal_fb0c4f716edeef4da466d25dafc6b9e56c1bf7e9c0e453551601076a78652d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fb0c4f716edeef4da466d25dafc6b9e56c1bf7e9c0e453551601076a78652d3c->leave($__internal_fb0c4f716edeef4da466d25dafc6b9e56c1bf7e9c0e453551601076a78652d3c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1bbab718e3e3684084e3ce761ce1378b0342c838e358e937b46459da00bcf8c4 = $this->env->getExtension("native_profiler");
        $__internal_1bbab718e3e3684084e3ce761ce1378b0342c838e358e937b46459da00bcf8c4->enter($__internal_1bbab718e3e3684084e3ce761ce1378b0342c838e358e937b46459da00bcf8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1bbab718e3e3684084e3ce761ce1378b0342c838e358e937b46459da00bcf8c4->leave($__internal_1bbab718e3e3684084e3ce761ce1378b0342c838e358e937b46459da00bcf8c4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7c4de3281d688169931dd6ae42d03aea3b177024465093e4bbd445068e95c7a8 = $this->env->getExtension("native_profiler");
        $__internal_7c4de3281d688169931dd6ae42d03aea3b177024465093e4bbd445068e95c7a8->enter($__internal_7c4de3281d688169931dd6ae42d03aea3b177024465093e4bbd445068e95c7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7c4de3281d688169931dd6ae42d03aea3b177024465093e4bbd445068e95c7a8->leave($__internal_7c4de3281d688169931dd6ae42d03aea3b177024465093e4bbd445068e95c7a8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_72cdd313f47758344d654b623e39b7723d47bae25952364bd91110550f6b9960 = $this->env->getExtension("native_profiler");
        $__internal_72cdd313f47758344d654b623e39b7723d47bae25952364bd91110550f6b9960->enter($__internal_72cdd313f47758344d654b623e39b7723d47bae25952364bd91110550f6b9960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_72cdd313f47758344d654b623e39b7723d47bae25952364bd91110550f6b9960->leave($__internal_72cdd313f47758344d654b623e39b7723d47bae25952364bd91110550f6b9960_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
