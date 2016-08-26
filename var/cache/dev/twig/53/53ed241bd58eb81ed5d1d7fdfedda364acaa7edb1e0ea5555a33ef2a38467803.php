<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5157624dd1fed23d585bc0aa41f4c2ac82430c0814efc019f571a5c5094b1db1 extends Twig_Template
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
        $__internal_944023445ec1d353a535c2f50f640ad1b3e1a3f109ebc5fa3598cff05034c8a0 = $this->env->getExtension("native_profiler");
        $__internal_944023445ec1d353a535c2f50f640ad1b3e1a3f109ebc5fa3598cff05034c8a0->enter($__internal_944023445ec1d353a535c2f50f640ad1b3e1a3f109ebc5fa3598cff05034c8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_944023445ec1d353a535c2f50f640ad1b3e1a3f109ebc5fa3598cff05034c8a0->leave($__internal_944023445ec1d353a535c2f50f640ad1b3e1a3f109ebc5fa3598cff05034c8a0_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5340f2082bcf2c06d2e1fb595400c498862a3eb5ce3c0e597e56a31e738308fc = $this->env->getExtension("native_profiler");
        $__internal_5340f2082bcf2c06d2e1fb595400c498862a3eb5ce3c0e597e56a31e738308fc->enter($__internal_5340f2082bcf2c06d2e1fb595400c498862a3eb5ce3c0e597e56a31e738308fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_5340f2082bcf2c06d2e1fb595400c498862a3eb5ce3c0e597e56a31e738308fc->leave($__internal_5340f2082bcf2c06d2e1fb595400c498862a3eb5ce3c0e597e56a31e738308fc_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7ede6ccc1b4c82769fdcee232263a81c47b5ebd56c13ef9c790a5057aa27a5e6 = $this->env->getExtension("native_profiler");
        $__internal_7ede6ccc1b4c82769fdcee232263a81c47b5ebd56c13ef9c790a5057aa27a5e6->enter($__internal_7ede6ccc1b4c82769fdcee232263a81c47b5ebd56c13ef9c790a5057aa27a5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_7ede6ccc1b4c82769fdcee232263a81c47b5ebd56c13ef9c790a5057aa27a5e6->leave($__internal_7ede6ccc1b4c82769fdcee232263a81c47b5ebd56c13ef9c790a5057aa27a5e6_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_924007362c97da449125813992b7ce359a41c57d4a059862bb2701d91c181e7d = $this->env->getExtension("native_profiler");
        $__internal_924007362c97da449125813992b7ce359a41c57d4a059862bb2701d91c181e7d->enter($__internal_924007362c97da449125813992b7ce359a41c57d4a059862bb2701d91c181e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_924007362c97da449125813992b7ce359a41c57d4a059862bb2701d91c181e7d->leave($__internal_924007362c97da449125813992b7ce359a41c57d4a059862bb2701d91c181e7d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  71 => 11,  69 => 10,  63 => 9,  53 => 5,  51 => 4,  45 => 3,  38 => 15,  35 => 14,  33 => 9,  30 => 8,  28 => 3,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block subject %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_html %}{% endblock %}*/
/* */
