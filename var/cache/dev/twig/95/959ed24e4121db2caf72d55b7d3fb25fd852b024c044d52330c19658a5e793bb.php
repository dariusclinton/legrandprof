<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_93659deeabdab52df81158fdad1a11a2e0484dcef4f91c75406af85b4f10ddb3 extends Twig_Template
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
        $__internal_02d18e51d05f0d993c7969cf7d453d4d27d61d8acba6d8eccd8c6ffb753ecd2f = $this->env->getExtension("native_profiler");
        $__internal_02d18e51d05f0d993c7969cf7d453d4d27d61d8acba6d8eccd8c6ffb753ecd2f->enter($__internal_02d18e51d05f0d993c7969cf7d453d4d27d61d8acba6d8eccd8c6ffb753ecd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_02d18e51d05f0d993c7969cf7d453d4d27d61d8acba6d8eccd8c6ffb753ecd2f->leave($__internal_02d18e51d05f0d993c7969cf7d453d4d27d61d8acba6d8eccd8c6ffb753ecd2f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6d7ad9bd0427a74ff862fd637ad1b0c74b9f8dc880792d89a825cdaff28d480d = $this->env->getExtension("native_profiler");
        $__internal_6d7ad9bd0427a74ff862fd637ad1b0c74b9f8dc880792d89a825cdaff28d480d->enter($__internal_6d7ad9bd0427a74ff862fd637ad1b0c74b9f8dc880792d89a825cdaff28d480d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_6d7ad9bd0427a74ff862fd637ad1b0c74b9f8dc880792d89a825cdaff28d480d->leave($__internal_6d7ad9bd0427a74ff862fd637ad1b0c74b9f8dc880792d89a825cdaff28d480d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_26bfe7ba1a53269d672799f22785dc6a1a29be27d4544ede17d75dd0a28da3a2 = $this->env->getExtension("native_profiler");
        $__internal_26bfe7ba1a53269d672799f22785dc6a1a29be27d4544ede17d75dd0a28da3a2->enter($__internal_26bfe7ba1a53269d672799f22785dc6a1a29be27d4544ede17d75dd0a28da3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_26bfe7ba1a53269d672799f22785dc6a1a29be27d4544ede17d75dd0a28da3a2->leave($__internal_26bfe7ba1a53269d672799f22785dc6a1a29be27d4544ede17d75dd0a28da3a2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_039947db2cd478977d3d026d76ac6e6a164a71f008dec7fcca563609ccad118c = $this->env->getExtension("native_profiler");
        $__internal_039947db2cd478977d3d026d76ac6e6a164a71f008dec7fcca563609ccad118c->enter($__internal_039947db2cd478977d3d026d76ac6e6a164a71f008dec7fcca563609ccad118c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_039947db2cd478977d3d026d76ac6e6a164a71f008dec7fcca563609ccad118c->leave($__internal_039947db2cd478977d3d026d76ac6e6a164a71f008dec7fcca563609ccad118c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
