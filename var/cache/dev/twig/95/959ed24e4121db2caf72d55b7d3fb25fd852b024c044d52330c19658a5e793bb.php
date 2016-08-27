<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_93659deeabdab52df81158fdad1a11a2e0484dcef4f91c75406af85b4f10ddb3 extends Twig_Template
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
        $__internal_cb083cf832fa43ed31723ac35708116d3b5858a680bb0244de9ce86edc1afbed = $this->env->getExtension("native_profiler");
        $__internal_cb083cf832fa43ed31723ac35708116d3b5858a680bb0244de9ce86edc1afbed->enter($__internal_cb083cf832fa43ed31723ac35708116d3b5858a680bb0244de9ce86edc1afbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cb083cf832fa43ed31723ac35708116d3b5858a680bb0244de9ce86edc1afbed->leave($__internal_cb083cf832fa43ed31723ac35708116d3b5858a680bb0244de9ce86edc1afbed_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6b39c8f994ac857d75815aba0732cac0d736130395788ddd9549778c513be829 = $this->env->getExtension("native_profiler");
        $__internal_6b39c8f994ac857d75815aba0732cac0d736130395788ddd9549778c513be829->enter($__internal_6b39c8f994ac857d75815aba0732cac0d736130395788ddd9549778c513be829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_6b39c8f994ac857d75815aba0732cac0d736130395788ddd9549778c513be829->leave($__internal_6b39c8f994ac857d75815aba0732cac0d736130395788ddd9549778c513be829_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1f240662baf21ab4e4e05ce3f493a89dfeeb3a2e6fe9c466754119b9e4c0c97c = $this->env->getExtension("native_profiler");
        $__internal_1f240662baf21ab4e4e05ce3f493a89dfeeb3a2e6fe9c466754119b9e4c0c97c->enter($__internal_1f240662baf21ab4e4e05ce3f493a89dfeeb3a2e6fe9c466754119b9e4c0c97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1f240662baf21ab4e4e05ce3f493a89dfeeb3a2e6fe9c466754119b9e4c0c97c->leave($__internal_1f240662baf21ab4e4e05ce3f493a89dfeeb3a2e6fe9c466754119b9e4c0c97c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4a0012e454f421567bcc8532a67b357de7521a114370751245aeb0a5027537b8 = $this->env->getExtension("native_profiler");
        $__internal_4a0012e454f421567bcc8532a67b357de7521a114370751245aeb0a5027537b8->enter($__internal_4a0012e454f421567bcc8532a67b357de7521a114370751245aeb0a5027537b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4a0012e454f421567bcc8532a67b357de7521a114370751245aeb0a5027537b8->leave($__internal_4a0012e454f421567bcc8532a67b357de7521a114370751245aeb0a5027537b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
