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
        $__internal_9ddb705ef4a58baeb6a11a935efe70e51bf77eafb6682cb242179a7f49d24839 = $this->env->getExtension("native_profiler");
        $__internal_9ddb705ef4a58baeb6a11a935efe70e51bf77eafb6682cb242179a7f49d24839->enter($__internal_9ddb705ef4a58baeb6a11a935efe70e51bf77eafb6682cb242179a7f49d24839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_9ddb705ef4a58baeb6a11a935efe70e51bf77eafb6682cb242179a7f49d24839->leave($__internal_9ddb705ef4a58baeb6a11a935efe70e51bf77eafb6682cb242179a7f49d24839_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6d500cece7cf8e0f3eb690ca4bb3ee55e724ed5cfdb95263cfe5237e1f0e274a = $this->env->getExtension("native_profiler");
        $__internal_6d500cece7cf8e0f3eb690ca4bb3ee55e724ed5cfdb95263cfe5237e1f0e274a->enter($__internal_6d500cece7cf8e0f3eb690ca4bb3ee55e724ed5cfdb95263cfe5237e1f0e274a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_6d500cece7cf8e0f3eb690ca4bb3ee55e724ed5cfdb95263cfe5237e1f0e274a->leave($__internal_6d500cece7cf8e0f3eb690ca4bb3ee55e724ed5cfdb95263cfe5237e1f0e274a_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0a9bdbfb6f48f67d9e0e1f7d7b1235fcfaff72bfe85359bc62f4742cfa09c159 = $this->env->getExtension("native_profiler");
        $__internal_0a9bdbfb6f48f67d9e0e1f7d7b1235fcfaff72bfe85359bc62f4742cfa09c159->enter($__internal_0a9bdbfb6f48f67d9e0e1f7d7b1235fcfaff72bfe85359bc62f4742cfa09c159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_0a9bdbfb6f48f67d9e0e1f7d7b1235fcfaff72bfe85359bc62f4742cfa09c159->leave($__internal_0a9bdbfb6f48f67d9e0e1f7d7b1235fcfaff72bfe85359bc62f4742cfa09c159_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d8b7095dae454e5c914a61245993fe846cf4179b1246dff623ab58fbe436bf8f = $this->env->getExtension("native_profiler");
        $__internal_d8b7095dae454e5c914a61245993fe846cf4179b1246dff623ab58fbe436bf8f->enter($__internal_d8b7095dae454e5c914a61245993fe846cf4179b1246dff623ab58fbe436bf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d8b7095dae454e5c914a61245993fe846cf4179b1246dff623ab58fbe436bf8f->leave($__internal_d8b7095dae454e5c914a61245993fe846cf4179b1246dff623ab58fbe436bf8f_prof);

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
