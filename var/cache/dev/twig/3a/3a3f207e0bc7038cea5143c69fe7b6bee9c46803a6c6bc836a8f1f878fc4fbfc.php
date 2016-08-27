<?php

/* @LGPUser/Registration/email.txt.twig */
class __TwigTemplate_8242e01ba1c1797f041ea9d9850b29640c1c88d11811d64101634708f1d10f78 extends Twig_Template
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
        $__internal_bb42a561a6cbf9d2e2462645f699359787a877f33e8cccdde9041da6c6f65e70 = $this->env->getExtension("native_profiler");
        $__internal_bb42a561a6cbf9d2e2462645f699359787a877f33e8cccdde9041da6c6f65e70->enter($__internal_bb42a561a6cbf9d2e2462645f699359787a877f33e8cccdde9041da6c6f65e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_bb42a561a6cbf9d2e2462645f699359787a877f33e8cccdde9041da6c6f65e70->leave($__internal_bb42a561a6cbf9d2e2462645f699359787a877f33e8cccdde9041da6c6f65e70_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_345db9cd5446a5dd0ae7a3c8cd03d27988999962e2a8e704a28c44acfd6b3dc1 = $this->env->getExtension("native_profiler");
        $__internal_345db9cd5446a5dd0ae7a3c8cd03d27988999962e2a8e704a28c44acfd6b3dc1->enter($__internal_345db9cd5446a5dd0ae7a3c8cd03d27988999962e2a8e704a28c44acfd6b3dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_345db9cd5446a5dd0ae7a3c8cd03d27988999962e2a8e704a28c44acfd6b3dc1->leave($__internal_345db9cd5446a5dd0ae7a3c8cd03d27988999962e2a8e704a28c44acfd6b3dc1_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_482484ede58ca38781a70272aa6fc2c639240bf3bf4ded840945f04d56a7235c = $this->env->getExtension("native_profiler");
        $__internal_482484ede58ca38781a70272aa6fc2c639240bf3bf4ded840945f04d56a7235c->enter($__internal_482484ede58ca38781a70272aa6fc2c639240bf3bf4ded840945f04d56a7235c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_482484ede58ca38781a70272aa6fc2c639240bf3bf4ded840945f04d56a7235c->leave($__internal_482484ede58ca38781a70272aa6fc2c639240bf3bf4ded840945f04d56a7235c_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f65853939f541ffb5a775ae67443fdbb47cecad4e6f4ec3a735da866c321c8a4 = $this->env->getExtension("native_profiler");
        $__internal_f65853939f541ffb5a775ae67443fdbb47cecad4e6f4ec3a735da866c321c8a4->enter($__internal_f65853939f541ffb5a775ae67443fdbb47cecad4e6f4ec3a735da866c321c8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f65853939f541ffb5a775ae67443fdbb47cecad4e6f4ec3a735da866c321c8a4->leave($__internal_f65853939f541ffb5a775ae67443fdbb47cecad4e6f4ec3a735da866c321c8a4_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/email.txt.twig";
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
