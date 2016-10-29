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
        // line 1
        echo "<div style=\"background-color: #e58664; width:90%; height:500px;padding:20px;\">
\t<div style=\"background-color:white;height:100%;\">
            ";
        // line 4
        echo "            ";
        $this->displayBlock('subject', $context, $blocks);
        // line 9
        echo "            ";
        $this->displayBlock('body_text', $context, $blocks);
        // line 14
        echo "            ";
        $this->displayBlock('body_html', $context, $blocks);
        // line 15
        echo "\t</div>
</div>

";
    }

    // line 4
    public function block_subject($context, array $blocks = array())
    {
        // line 5
        echo "            ";
        // line 6
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)), "FOSUserBundle");
        echo "
            ";
        // line 8
        echo "            ";
    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        // line 10
        echo "            ";
        // line 11
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)), "FOSUserBundle");
        echo "
            ";
        // line 13
        echo "            ";
    }

    // line 14
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  66 => 13,  61 => 11,  59 => 10,  56 => 9,  52 => 8,  47 => 6,  45 => 5,  42 => 4,  35 => 15,  32 => 14,  29 => 9,  26 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
