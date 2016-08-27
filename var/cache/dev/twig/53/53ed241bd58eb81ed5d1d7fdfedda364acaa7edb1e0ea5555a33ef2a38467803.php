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
        $__internal_abd599872155db290ad24699f32b7c667dc3a988a63f42c811fcf3bc9c89f087 = $this->env->getExtension("native_profiler");
        $__internal_abd599872155db290ad24699f32b7c667dc3a988a63f42c811fcf3bc9c89f087->enter($__internal_abd599872155db290ad24699f32b7c667dc3a988a63f42c811fcf3bc9c89f087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_abd599872155db290ad24699f32b7c667dc3a988a63f42c811fcf3bc9c89f087->leave($__internal_abd599872155db290ad24699f32b7c667dc3a988a63f42c811fcf3bc9c89f087_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ccb0b0ebbaf879db9df80b76c21c93210e840b5348a1efae9d92740c1d5e6676 = $this->env->getExtension("native_profiler");
        $__internal_ccb0b0ebbaf879db9df80b76c21c93210e840b5348a1efae9d92740c1d5e6676->enter($__internal_ccb0b0ebbaf879db9df80b76c21c93210e840b5348a1efae9d92740c1d5e6676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_ccb0b0ebbaf879db9df80b76c21c93210e840b5348a1efae9d92740c1d5e6676->leave($__internal_ccb0b0ebbaf879db9df80b76c21c93210e840b5348a1efae9d92740c1d5e6676_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d78ebcdbda81da731786822897aa9e78d28fb08f0119a8b00f8196601e621e97 = $this->env->getExtension("native_profiler");
        $__internal_d78ebcdbda81da731786822897aa9e78d28fb08f0119a8b00f8196601e621e97->enter($__internal_d78ebcdbda81da731786822897aa9e78d28fb08f0119a8b00f8196601e621e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_d78ebcdbda81da731786822897aa9e78d28fb08f0119a8b00f8196601e621e97->leave($__internal_d78ebcdbda81da731786822897aa9e78d28fb08f0119a8b00f8196601e621e97_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c4a841be3ef9c53fe12dd409516f88bd8d993a9dc2553fa0d12a007aa8227e4a = $this->env->getExtension("native_profiler");
        $__internal_c4a841be3ef9c53fe12dd409516f88bd8d993a9dc2553fa0d12a007aa8227e4a->enter($__internal_c4a841be3ef9c53fe12dd409516f88bd8d993a9dc2553fa0d12a007aa8227e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c4a841be3ef9c53fe12dd409516f88bd8d993a9dc2553fa0d12a007aa8227e4a->leave($__internal_c4a841be3ef9c53fe12dd409516f88bd8d993a9dc2553fa0d12a007aa8227e4a_prof);

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
