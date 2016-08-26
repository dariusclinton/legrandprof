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
        $__internal_f6c9ea0090ca1ef34479c1d9f81e210f511bf0959a8d0e30adffe06ec6a4c503 = $this->env->getExtension("native_profiler");
        $__internal_f6c9ea0090ca1ef34479c1d9f81e210f511bf0959a8d0e30adffe06ec6a4c503->enter($__internal_f6c9ea0090ca1ef34479c1d9f81e210f511bf0959a8d0e30adffe06ec6a4c503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f6c9ea0090ca1ef34479c1d9f81e210f511bf0959a8d0e30adffe06ec6a4c503->leave($__internal_f6c9ea0090ca1ef34479c1d9f81e210f511bf0959a8d0e30adffe06ec6a4c503_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fe7d86a18951da5744cc204fac3b3ea7aef05508a7af5cd70ce83f0ec49ad2b5 = $this->env->getExtension("native_profiler");
        $__internal_fe7d86a18951da5744cc204fac3b3ea7aef05508a7af5cd70ce83f0ec49ad2b5->enter($__internal_fe7d86a18951da5744cc204fac3b3ea7aef05508a7af5cd70ce83f0ec49ad2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fe7d86a18951da5744cc204fac3b3ea7aef05508a7af5cd70ce83f0ec49ad2b5->leave($__internal_fe7d86a18951da5744cc204fac3b3ea7aef05508a7af5cd70ce83f0ec49ad2b5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3f6aae19d057200373c1bf5c2f4284cd160d60906db0e629fbd22144f2c1f0ef = $this->env->getExtension("native_profiler");
        $__internal_3f6aae19d057200373c1bf5c2f4284cd160d60906db0e629fbd22144f2c1f0ef->enter($__internal_3f6aae19d057200373c1bf5c2f4284cd160d60906db0e629fbd22144f2c1f0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3f6aae19d057200373c1bf5c2f4284cd160d60906db0e629fbd22144f2c1f0ef->leave($__internal_3f6aae19d057200373c1bf5c2f4284cd160d60906db0e629fbd22144f2c1f0ef_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_755658c4cb6823082865a8892fa38d452064712c5883122963f00dbbb4aea6cc = $this->env->getExtension("native_profiler");
        $__internal_755658c4cb6823082865a8892fa38d452064712c5883122963f00dbbb4aea6cc->enter($__internal_755658c4cb6823082865a8892fa38d452064712c5883122963f00dbbb4aea6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_755658c4cb6823082865a8892fa38d452064712c5883122963f00dbbb4aea6cc->leave($__internal_755658c4cb6823082865a8892fa38d452064712c5883122963f00dbbb4aea6cc_prof);

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
