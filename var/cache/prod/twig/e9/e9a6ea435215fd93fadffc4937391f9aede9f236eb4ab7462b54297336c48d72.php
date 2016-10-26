<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_1b3b9586e742bc4892fb1ae5e50c46a76bbe815407dc9815e95e2eed8dc4c6bb extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('body_text', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "prenoms", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)), "FOSUserBundle");
        echo "
  ";
    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "prenoms", array())), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)), "FOSUserBundle");
        echo "
  ";
    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  56 => 11,  54 => 10,  51 => 9,  44 => 5,  42 => 4,  39 => 3,  35 => 15,  32 => 14,  30 => 9,  27 => 8,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "";
    }
}
