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
        $__internal_429369907559df745af1edc27fc93a24d6b53728b24296acabd559c1144294eb = $this->env->getExtension("native_profiler");
        $__internal_429369907559df745af1edc27fc93a24d6b53728b24296acabd559c1144294eb->enter($__internal_429369907559df745af1edc27fc93a24d6b53728b24296acabd559c1144294eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_429369907559df745af1edc27fc93a24d6b53728b24296acabd559c1144294eb->leave($__internal_429369907559df745af1edc27fc93a24d6b53728b24296acabd559c1144294eb_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_74cea01a3709cf475932110e97627bb81edffb0d2ec7b458beeaaee244250891 = $this->env->getExtension("native_profiler");
        $__internal_74cea01a3709cf475932110e97627bb81edffb0d2ec7b458beeaaee244250891->enter($__internal_74cea01a3709cf475932110e97627bb81edffb0d2ec7b458beeaaee244250891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_74cea01a3709cf475932110e97627bb81edffb0d2ec7b458beeaaee244250891->leave($__internal_74cea01a3709cf475932110e97627bb81edffb0d2ec7b458beeaaee244250891_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_eb7deac3d4f91e5cd3ac89464955fcd85e8d329db3ee3ce014fc232ec863a754 = $this->env->getExtension("native_profiler");
        $__internal_eb7deac3d4f91e5cd3ac89464955fcd85e8d329db3ee3ce014fc232ec863a754->enter($__internal_eb7deac3d4f91e5cd3ac89464955fcd85e8d329db3ee3ce014fc232ec863a754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_eb7deac3d4f91e5cd3ac89464955fcd85e8d329db3ee3ce014fc232ec863a754->leave($__internal_eb7deac3d4f91e5cd3ac89464955fcd85e8d329db3ee3ce014fc232ec863a754_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_35d8003e7c80afaab69b9c3c416064556d0f174fb8b0671404cd460533c1936d = $this->env->getExtension("native_profiler");
        $__internal_35d8003e7c80afaab69b9c3c416064556d0f174fb8b0671404cd460533c1936d->enter($__internal_35d8003e7c80afaab69b9c3c416064556d0f174fb8b0671404cd460533c1936d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_35d8003e7c80afaab69b9c3c416064556d0f174fb8b0671404cd460533c1936d->leave($__internal_35d8003e7c80afaab69b9c3c416064556d0f174fb8b0671404cd460533c1936d_prof);

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
