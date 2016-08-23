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
        $__internal_05cb359b6d3b1a450b7b7963c4708dff5821d8cbf22aad1d5c69f689d45cb8d5 = $this->env->getExtension("native_profiler");
        $__internal_05cb359b6d3b1a450b7b7963c4708dff5821d8cbf22aad1d5c69f689d45cb8d5->enter($__internal_05cb359b6d3b1a450b7b7963c4708dff5821d8cbf22aad1d5c69f689d45cb8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_05cb359b6d3b1a450b7b7963c4708dff5821d8cbf22aad1d5c69f689d45cb8d5->leave($__internal_05cb359b6d3b1a450b7b7963c4708dff5821d8cbf22aad1d5c69f689d45cb8d5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4e7727245592bb3d90a8c8d22cb470b92a65cf77dbd2a9db7360d3294bfdab59 = $this->env->getExtension("native_profiler");
        $__internal_4e7727245592bb3d90a8c8d22cb470b92a65cf77dbd2a9db7360d3294bfdab59->enter($__internal_4e7727245592bb3d90a8c8d22cb470b92a65cf77dbd2a9db7360d3294bfdab59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4e7727245592bb3d90a8c8d22cb470b92a65cf77dbd2a9db7360d3294bfdab59->leave($__internal_4e7727245592bb3d90a8c8d22cb470b92a65cf77dbd2a9db7360d3294bfdab59_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c433bc78fbc45e405135d5ac1b3d0e87c10e471368550560a09c1a79c379dd8b = $this->env->getExtension("native_profiler");
        $__internal_c433bc78fbc45e405135d5ac1b3d0e87c10e471368550560a09c1a79c379dd8b->enter($__internal_c433bc78fbc45e405135d5ac1b3d0e87c10e471368550560a09c1a79c379dd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c433bc78fbc45e405135d5ac1b3d0e87c10e471368550560a09c1a79c379dd8b->leave($__internal_c433bc78fbc45e405135d5ac1b3d0e87c10e471368550560a09c1a79c379dd8b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_db8bca99f7ddfb2ab13590de725a0d2d2f637bf308064c78df3c2c281749180c = $this->env->getExtension("native_profiler");
        $__internal_db8bca99f7ddfb2ab13590de725a0d2d2f637bf308064c78df3c2c281749180c->enter($__internal_db8bca99f7ddfb2ab13590de725a0d2d2f637bf308064c78df3c2c281749180c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_db8bca99f7ddfb2ab13590de725a0d2d2f637bf308064c78df3c2c281749180c->leave($__internal_db8bca99f7ddfb2ab13590de725a0d2d2f637bf308064c78df3c2c281749180c_prof);

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
