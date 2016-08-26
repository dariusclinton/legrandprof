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
        $__internal_6ace5e464b2102f73a4ae89374074e94d011aedc94ef248a2c43cb854e286bec = $this->env->getExtension("native_profiler");
        $__internal_6ace5e464b2102f73a4ae89374074e94d011aedc94ef248a2c43cb854e286bec->enter($__internal_6ace5e464b2102f73a4ae89374074e94d011aedc94ef248a2c43cb854e286bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6ace5e464b2102f73a4ae89374074e94d011aedc94ef248a2c43cb854e286bec->leave($__internal_6ace5e464b2102f73a4ae89374074e94d011aedc94ef248a2c43cb854e286bec_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bde9f602b9f53a0bff1ed6d432423c701db731f359eba8726abea7c06df71098 = $this->env->getExtension("native_profiler");
        $__internal_bde9f602b9f53a0bff1ed6d432423c701db731f359eba8726abea7c06df71098->enter($__internal_bde9f602b9f53a0bff1ed6d432423c701db731f359eba8726abea7c06df71098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_bde9f602b9f53a0bff1ed6d432423c701db731f359eba8726abea7c06df71098->leave($__internal_bde9f602b9f53a0bff1ed6d432423c701db731f359eba8726abea7c06df71098_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8257aa288e946c4d7ebf3cdcc2c0aaff843315f1ab8ce170bb9e95a00c2de04b = $this->env->getExtension("native_profiler");
        $__internal_8257aa288e946c4d7ebf3cdcc2c0aaff843315f1ab8ce170bb9e95a00c2de04b->enter($__internal_8257aa288e946c4d7ebf3cdcc2c0aaff843315f1ab8ce170bb9e95a00c2de04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8257aa288e946c4d7ebf3cdcc2c0aaff843315f1ab8ce170bb9e95a00c2de04b->leave($__internal_8257aa288e946c4d7ebf3cdcc2c0aaff843315f1ab8ce170bb9e95a00c2de04b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c99610e5e9033581e9518807e6d1a2889e65158b781950d4cb352eda960fdf88 = $this->env->getExtension("native_profiler");
        $__internal_c99610e5e9033581e9518807e6d1a2889e65158b781950d4cb352eda960fdf88->enter($__internal_c99610e5e9033581e9518807e6d1a2889e65158b781950d4cb352eda960fdf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c99610e5e9033581e9518807e6d1a2889e65158b781950d4cb352eda960fdf88->leave($__internal_c99610e5e9033581e9518807e6d1a2889e65158b781950d4cb352eda960fdf88_prof);

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
