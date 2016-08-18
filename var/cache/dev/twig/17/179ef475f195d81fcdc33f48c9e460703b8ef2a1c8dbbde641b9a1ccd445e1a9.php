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
        $__internal_35357128a9960b964d7f11548b9eb015101567f4b8a949ca4dce5604beb3c735 = $this->env->getExtension("native_profiler");
        $__internal_35357128a9960b964d7f11548b9eb015101567f4b8a949ca4dce5604beb3c735->enter($__internal_35357128a9960b964d7f11548b9eb015101567f4b8a949ca4dce5604beb3c735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_35357128a9960b964d7f11548b9eb015101567f4b8a949ca4dce5604beb3c735->leave($__internal_35357128a9960b964d7f11548b9eb015101567f4b8a949ca4dce5604beb3c735_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_24f3723f151f899a5d732f292b9964d292cdce8f41f69bc01270f83c5d457b4c = $this->env->getExtension("native_profiler");
        $__internal_24f3723f151f899a5d732f292b9964d292cdce8f41f69bc01270f83c5d457b4c->enter($__internal_24f3723f151f899a5d732f292b9964d292cdce8f41f69bc01270f83c5d457b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_24f3723f151f899a5d732f292b9964d292cdce8f41f69bc01270f83c5d457b4c->leave($__internal_24f3723f151f899a5d732f292b9964d292cdce8f41f69bc01270f83c5d457b4c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_973400c934bf53a086fa569021f0549d9e5d3f3f1c9363f41c18424a4d1762eb = $this->env->getExtension("native_profiler");
        $__internal_973400c934bf53a086fa569021f0549d9e5d3f3f1c9363f41c18424a4d1762eb->enter($__internal_973400c934bf53a086fa569021f0549d9e5d3f3f1c9363f41c18424a4d1762eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_973400c934bf53a086fa569021f0549d9e5d3f3f1c9363f41c18424a4d1762eb->leave($__internal_973400c934bf53a086fa569021f0549d9e5d3f3f1c9363f41c18424a4d1762eb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dc4a378174b44aff08eddb738a8f67817f17db17f950e7cc60179b6652967d30 = $this->env->getExtension("native_profiler");
        $__internal_dc4a378174b44aff08eddb738a8f67817f17db17f950e7cc60179b6652967d30->enter($__internal_dc4a378174b44aff08eddb738a8f67817f17db17f950e7cc60179b6652967d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dc4a378174b44aff08eddb738a8f67817f17db17f950e7cc60179b6652967d30->leave($__internal_dc4a378174b44aff08eddb738a8f67817f17db17f950e7cc60179b6652967d30_prof);

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
