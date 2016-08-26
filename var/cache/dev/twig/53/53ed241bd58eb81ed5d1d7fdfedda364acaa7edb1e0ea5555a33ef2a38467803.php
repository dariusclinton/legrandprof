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
        $__internal_23f32c9bdeb9c4e23431bb122759e9effd67d208ad81be6a5c27a65ed8294f7c = $this->env->getExtension("native_profiler");
        $__internal_23f32c9bdeb9c4e23431bb122759e9effd67d208ad81be6a5c27a65ed8294f7c->enter($__internal_23f32c9bdeb9c4e23431bb122759e9effd67d208ad81be6a5c27a65ed8294f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_23f32c9bdeb9c4e23431bb122759e9effd67d208ad81be6a5c27a65ed8294f7c->leave($__internal_23f32c9bdeb9c4e23431bb122759e9effd67d208ad81be6a5c27a65ed8294f7c_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5b2b989e59e335a5e0ea1f086c4f86fa1b83eda01dea515a6fbcdcac2b798bae = $this->env->getExtension("native_profiler");
        $__internal_5b2b989e59e335a5e0ea1f086c4f86fa1b83eda01dea515a6fbcdcac2b798bae->enter($__internal_5b2b989e59e335a5e0ea1f086c4f86fa1b83eda01dea515a6fbcdcac2b798bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_5b2b989e59e335a5e0ea1f086c4f86fa1b83eda01dea515a6fbcdcac2b798bae->leave($__internal_5b2b989e59e335a5e0ea1f086c4f86fa1b83eda01dea515a6fbcdcac2b798bae_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c8569c9a38bb1160e06107e3c9778bed7a4ce0d6e7bdbdf50f59f2323ab6528d = $this->env->getExtension("native_profiler");
        $__internal_c8569c9a38bb1160e06107e3c9778bed7a4ce0d6e7bdbdf50f59f2323ab6528d->enter($__internal_c8569c9a38bb1160e06107e3c9778bed7a4ce0d6e7bdbdf50f59f2323ab6528d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_c8569c9a38bb1160e06107e3c9778bed7a4ce0d6e7bdbdf50f59f2323ab6528d->leave($__internal_c8569c9a38bb1160e06107e3c9778bed7a4ce0d6e7bdbdf50f59f2323ab6528d_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_92a8e9c08f11386015b5045c92fbf7547222541fbb29d1a81cca3af2c85a22a1 = $this->env->getExtension("native_profiler");
        $__internal_92a8e9c08f11386015b5045c92fbf7547222541fbb29d1a81cca3af2c85a22a1->enter($__internal_92a8e9c08f11386015b5045c92fbf7547222541fbb29d1a81cca3af2c85a22a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_92a8e9c08f11386015b5045c92fbf7547222541fbb29d1a81cca3af2c85a22a1->leave($__internal_92a8e9c08f11386015b5045c92fbf7547222541fbb29d1a81cca3af2c85a22a1_prof);

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
