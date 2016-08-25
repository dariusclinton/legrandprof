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
        $__internal_4d0523ad96cf0e5c5f558d2d0c9ebfb60f8a850570fe5af74cd2cb32ed052a97 = $this->env->getExtension("native_profiler");
        $__internal_4d0523ad96cf0e5c5f558d2d0c9ebfb60f8a850570fe5af74cd2cb32ed052a97->enter($__internal_4d0523ad96cf0e5c5f558d2d0c9ebfb60f8a850570fe5af74cd2cb32ed052a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4d0523ad96cf0e5c5f558d2d0c9ebfb60f8a850570fe5af74cd2cb32ed052a97->leave($__internal_4d0523ad96cf0e5c5f558d2d0c9ebfb60f8a850570fe5af74cd2cb32ed052a97_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e54960a49d3b584621b1b55374a7b5edfbe35745a0f344b79687f353d11feb00 = $this->env->getExtension("native_profiler");
        $__internal_e54960a49d3b584621b1b55374a7b5edfbe35745a0f344b79687f353d11feb00->enter($__internal_e54960a49d3b584621b1b55374a7b5edfbe35745a0f344b79687f353d11feb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e54960a49d3b584621b1b55374a7b5edfbe35745a0f344b79687f353d11feb00->leave($__internal_e54960a49d3b584621b1b55374a7b5edfbe35745a0f344b79687f353d11feb00_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2de4ccf671fd7105e9df8bd34256260edae606f9b5e01e47ff5bc8e2cc7471bd = $this->env->getExtension("native_profiler");
        $__internal_2de4ccf671fd7105e9df8bd34256260edae606f9b5e01e47ff5bc8e2cc7471bd->enter($__internal_2de4ccf671fd7105e9df8bd34256260edae606f9b5e01e47ff5bc8e2cc7471bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2de4ccf671fd7105e9df8bd34256260edae606f9b5e01e47ff5bc8e2cc7471bd->leave($__internal_2de4ccf671fd7105e9df8bd34256260edae606f9b5e01e47ff5bc8e2cc7471bd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_59c74a31e8e9fff365ad22c00c40614af41bad03eaa572f33e99ef9de26c3f56 = $this->env->getExtension("native_profiler");
        $__internal_59c74a31e8e9fff365ad22c00c40614af41bad03eaa572f33e99ef9de26c3f56->enter($__internal_59c74a31e8e9fff365ad22c00c40614af41bad03eaa572f33e99ef9de26c3f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_59c74a31e8e9fff365ad22c00c40614af41bad03eaa572f33e99ef9de26c3f56->leave($__internal_59c74a31e8e9fff365ad22c00c40614af41bad03eaa572f33e99ef9de26c3f56_prof);

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
