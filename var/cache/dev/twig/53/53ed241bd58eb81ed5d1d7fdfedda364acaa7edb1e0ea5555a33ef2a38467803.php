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
        $__internal_8efead402ea5728148f5e9ab4f16267b6072f1be0b1f89e6ebfbfe3e764ae03a = $this->env->getExtension("native_profiler");
        $__internal_8efead402ea5728148f5e9ab4f16267b6072f1be0b1f89e6ebfbfe3e764ae03a->enter($__internal_8efead402ea5728148f5e9ab4f16267b6072f1be0b1f89e6ebfbfe3e764ae03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_8efead402ea5728148f5e9ab4f16267b6072f1be0b1f89e6ebfbfe3e764ae03a->leave($__internal_8efead402ea5728148f5e9ab4f16267b6072f1be0b1f89e6ebfbfe3e764ae03a_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7813b8472aa51d2da39b3208082ba63f719724cf787f788e08ab3d045b7ab83c = $this->env->getExtension("native_profiler");
        $__internal_7813b8472aa51d2da39b3208082ba63f719724cf787f788e08ab3d045b7ab83c->enter($__internal_7813b8472aa51d2da39b3208082ba63f719724cf787f788e08ab3d045b7ab83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_7813b8472aa51d2da39b3208082ba63f719724cf787f788e08ab3d045b7ab83c->leave($__internal_7813b8472aa51d2da39b3208082ba63f719724cf787f788e08ab3d045b7ab83c_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e21a5850abe384542bb1ad52ec50c66a83deeca96c4dfec9c0619be576fbd1e7 = $this->env->getExtension("native_profiler");
        $__internal_e21a5850abe384542bb1ad52ec50c66a83deeca96c4dfec9c0619be576fbd1e7->enter($__internal_e21a5850abe384542bb1ad52ec50c66a83deeca96c4dfec9c0619be576fbd1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_e21a5850abe384542bb1ad52ec50c66a83deeca96c4dfec9c0619be576fbd1e7->leave($__internal_e21a5850abe384542bb1ad52ec50c66a83deeca96c4dfec9c0619be576fbd1e7_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b8aea9641d7cf868708eb4fde5f390f421f9a761de45a21f2f12dad948ed08c2 = $this->env->getExtension("native_profiler");
        $__internal_b8aea9641d7cf868708eb4fde5f390f421f9a761de45a21f2f12dad948ed08c2->enter($__internal_b8aea9641d7cf868708eb4fde5f390f421f9a761de45a21f2f12dad948ed08c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b8aea9641d7cf868708eb4fde5f390f421f9a761de45a21f2f12dad948ed08c2->leave($__internal_b8aea9641d7cf868708eb4fde5f390f421f9a761de45a21f2f12dad948ed08c2_prof);

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
