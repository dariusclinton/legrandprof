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
        $__internal_17ebd674f5d50ec64518da288ad7ab985e02f24954ebbc3e8067cef475749b84 = $this->env->getExtension("native_profiler");
        $__internal_17ebd674f5d50ec64518da288ad7ab985e02f24954ebbc3e8067cef475749b84->enter($__internal_17ebd674f5d50ec64518da288ad7ab985e02f24954ebbc3e8067cef475749b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_17ebd674f5d50ec64518da288ad7ab985e02f24954ebbc3e8067cef475749b84->leave($__internal_17ebd674f5d50ec64518da288ad7ab985e02f24954ebbc3e8067cef475749b84_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_82a144ac443cce9df1df7fa2e3fbf0e3af466a379d86b858e569205aece6df4e = $this->env->getExtension("native_profiler");
        $__internal_82a144ac443cce9df1df7fa2e3fbf0e3af466a379d86b858e569205aece6df4e->enter($__internal_82a144ac443cce9df1df7fa2e3fbf0e3af466a379d86b858e569205aece6df4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_82a144ac443cce9df1df7fa2e3fbf0e3af466a379d86b858e569205aece6df4e->leave($__internal_82a144ac443cce9df1df7fa2e3fbf0e3af466a379d86b858e569205aece6df4e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a50d5128152a3ec00282f39c73114491c13fe80918144def1db0ce5da49caba3 = $this->env->getExtension("native_profiler");
        $__internal_a50d5128152a3ec00282f39c73114491c13fe80918144def1db0ce5da49caba3->enter($__internal_a50d5128152a3ec00282f39c73114491c13fe80918144def1db0ce5da49caba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a50d5128152a3ec00282f39c73114491c13fe80918144def1db0ce5da49caba3->leave($__internal_a50d5128152a3ec00282f39c73114491c13fe80918144def1db0ce5da49caba3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_064c200d3efdb14b661abb27a2fbf23d246570fb66019926c2f246443ebecf67 = $this->env->getExtension("native_profiler");
        $__internal_064c200d3efdb14b661abb27a2fbf23d246570fb66019926c2f246443ebecf67->enter($__internal_064c200d3efdb14b661abb27a2fbf23d246570fb66019926c2f246443ebecf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_064c200d3efdb14b661abb27a2fbf23d246570fb66019926c2f246443ebecf67->leave($__internal_064c200d3efdb14b661abb27a2fbf23d246570fb66019926c2f246443ebecf67_prof);

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
