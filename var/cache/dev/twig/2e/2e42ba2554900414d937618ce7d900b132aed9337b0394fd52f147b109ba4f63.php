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
        $__internal_fb056f46ded82b2197f62831681fda018e91915075a6200f7f71288038b4b5e5 = $this->env->getExtension("native_profiler");
        $__internal_fb056f46ded82b2197f62831681fda018e91915075a6200f7f71288038b4b5e5->enter($__internal_fb056f46ded82b2197f62831681fda018e91915075a6200f7f71288038b4b5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fb056f46ded82b2197f62831681fda018e91915075a6200f7f71288038b4b5e5->leave($__internal_fb056f46ded82b2197f62831681fda018e91915075a6200f7f71288038b4b5e5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_674abe181ea245448819c149e8e6d9bbddf9ed81ade503e3f4968daaa0d528ef = $this->env->getExtension("native_profiler");
        $__internal_674abe181ea245448819c149e8e6d9bbddf9ed81ade503e3f4968daaa0d528ef->enter($__internal_674abe181ea245448819c149e8e6d9bbddf9ed81ade503e3f4968daaa0d528ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_674abe181ea245448819c149e8e6d9bbddf9ed81ade503e3f4968daaa0d528ef->leave($__internal_674abe181ea245448819c149e8e6d9bbddf9ed81ade503e3f4968daaa0d528ef_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d6438469c327a20d3044fdb84fa3a6094b716b7284e5d8a9d60b2503c74e0a92 = $this->env->getExtension("native_profiler");
        $__internal_d6438469c327a20d3044fdb84fa3a6094b716b7284e5d8a9d60b2503c74e0a92->enter($__internal_d6438469c327a20d3044fdb84fa3a6094b716b7284e5d8a9d60b2503c74e0a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d6438469c327a20d3044fdb84fa3a6094b716b7284e5d8a9d60b2503c74e0a92->leave($__internal_d6438469c327a20d3044fdb84fa3a6094b716b7284e5d8a9d60b2503c74e0a92_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c7b01287abd83f6528e71a0a4a3bac05ac706d6f6bf986faed47bd0635b591de = $this->env->getExtension("native_profiler");
        $__internal_c7b01287abd83f6528e71a0a4a3bac05ac706d6f6bf986faed47bd0635b591de->enter($__internal_c7b01287abd83f6528e71a0a4a3bac05ac706d6f6bf986faed47bd0635b591de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c7b01287abd83f6528e71a0a4a3bac05ac706d6f6bf986faed47bd0635b591de->leave($__internal_c7b01287abd83f6528e71a0a4a3bac05ac706d6f6bf986faed47bd0635b591de_prof);

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
