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
        $__internal_a579c1f0e1ab1d03925e0478696709edef4cca3779aab651b6ca375f6e301f77 = $this->env->getExtension("native_profiler");
        $__internal_a579c1f0e1ab1d03925e0478696709edef4cca3779aab651b6ca375f6e301f77->enter($__internal_a579c1f0e1ab1d03925e0478696709edef4cca3779aab651b6ca375f6e301f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a579c1f0e1ab1d03925e0478696709edef4cca3779aab651b6ca375f6e301f77->leave($__internal_a579c1f0e1ab1d03925e0478696709edef4cca3779aab651b6ca375f6e301f77_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e32990ba1db68e9e3a1d7f64befbab5940c0fd09e9d29a16054f167b1217f6f6 = $this->env->getExtension("native_profiler");
        $__internal_e32990ba1db68e9e3a1d7f64befbab5940c0fd09e9d29a16054f167b1217f6f6->enter($__internal_e32990ba1db68e9e3a1d7f64befbab5940c0fd09e9d29a16054f167b1217f6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e32990ba1db68e9e3a1d7f64befbab5940c0fd09e9d29a16054f167b1217f6f6->leave($__internal_e32990ba1db68e9e3a1d7f64befbab5940c0fd09e9d29a16054f167b1217f6f6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_495649d1c1b64fb80b80b15547fb4a77afc1074d65bb52a746fcca3ede7eac01 = $this->env->getExtension("native_profiler");
        $__internal_495649d1c1b64fb80b80b15547fb4a77afc1074d65bb52a746fcca3ede7eac01->enter($__internal_495649d1c1b64fb80b80b15547fb4a77afc1074d65bb52a746fcca3ede7eac01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_495649d1c1b64fb80b80b15547fb4a77afc1074d65bb52a746fcca3ede7eac01->leave($__internal_495649d1c1b64fb80b80b15547fb4a77afc1074d65bb52a746fcca3ede7eac01_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6e8997abd47e184716c90b3f392cd74f89a1928a4b624b9ea00f3b6ccf42ef0b = $this->env->getExtension("native_profiler");
        $__internal_6e8997abd47e184716c90b3f392cd74f89a1928a4b624b9ea00f3b6ccf42ef0b->enter($__internal_6e8997abd47e184716c90b3f392cd74f89a1928a4b624b9ea00f3b6ccf42ef0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6e8997abd47e184716c90b3f392cd74f89a1928a4b624b9ea00f3b6ccf42ef0b->leave($__internal_6e8997abd47e184716c90b3f392cd74f89a1928a4b624b9ea00f3b6ccf42ef0b_prof);

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
