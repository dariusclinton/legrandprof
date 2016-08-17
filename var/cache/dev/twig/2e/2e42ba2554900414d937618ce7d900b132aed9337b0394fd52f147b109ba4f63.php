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
        $__internal_c6634e6c72be06f30c4ba0d5b6e505e7936943a53ce68bdc89c27ab564dec8be = $this->env->getExtension("native_profiler");
        $__internal_c6634e6c72be06f30c4ba0d5b6e505e7936943a53ce68bdc89c27ab564dec8be->enter($__internal_c6634e6c72be06f30c4ba0d5b6e505e7936943a53ce68bdc89c27ab564dec8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c6634e6c72be06f30c4ba0d5b6e505e7936943a53ce68bdc89c27ab564dec8be->leave($__internal_c6634e6c72be06f30c4ba0d5b6e505e7936943a53ce68bdc89c27ab564dec8be_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5731539105572c6f6e30dd5c5ceacbf245c6e6155bc46ab705d568edb8228b68 = $this->env->getExtension("native_profiler");
        $__internal_5731539105572c6f6e30dd5c5ceacbf245c6e6155bc46ab705d568edb8228b68->enter($__internal_5731539105572c6f6e30dd5c5ceacbf245c6e6155bc46ab705d568edb8228b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_5731539105572c6f6e30dd5c5ceacbf245c6e6155bc46ab705d568edb8228b68->leave($__internal_5731539105572c6f6e30dd5c5ceacbf245c6e6155bc46ab705d568edb8228b68_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_27bd12a3ab16b05cc05eb194543508d60ac1530d8440d418d955292ec1ad7dd0 = $this->env->getExtension("native_profiler");
        $__internal_27bd12a3ab16b05cc05eb194543508d60ac1530d8440d418d955292ec1ad7dd0->enter($__internal_27bd12a3ab16b05cc05eb194543508d60ac1530d8440d418d955292ec1ad7dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_27bd12a3ab16b05cc05eb194543508d60ac1530d8440d418d955292ec1ad7dd0->leave($__internal_27bd12a3ab16b05cc05eb194543508d60ac1530d8440d418d955292ec1ad7dd0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4f5cf5ffd9853cb355797de298d8279391ec0189b13debc1f34362acd3ae3f59 = $this->env->getExtension("native_profiler");
        $__internal_4f5cf5ffd9853cb355797de298d8279391ec0189b13debc1f34362acd3ae3f59->enter($__internal_4f5cf5ffd9853cb355797de298d8279391ec0189b13debc1f34362acd3ae3f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4f5cf5ffd9853cb355797de298d8279391ec0189b13debc1f34362acd3ae3f59->leave($__internal_4f5cf5ffd9853cb355797de298d8279391ec0189b13debc1f34362acd3ae3f59_prof);

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
