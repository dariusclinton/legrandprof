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
        $__internal_41b1bf08be186c3e40e4d6de7c6d4fa3d816a2771dc975a5dfc3f65849849f33 = $this->env->getExtension("native_profiler");
        $__internal_41b1bf08be186c3e40e4d6de7c6d4fa3d816a2771dc975a5dfc3f65849849f33->enter($__internal_41b1bf08be186c3e40e4d6de7c6d4fa3d816a2771dc975a5dfc3f65849849f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_41b1bf08be186c3e40e4d6de7c6d4fa3d816a2771dc975a5dfc3f65849849f33->leave($__internal_41b1bf08be186c3e40e4d6de7c6d4fa3d816a2771dc975a5dfc3f65849849f33_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_527fa847d67879df86f5325c90d6a49f3c1654b3919efeadda1a0d967d6de8ae = $this->env->getExtension("native_profiler");
        $__internal_527fa847d67879df86f5325c90d6a49f3c1654b3919efeadda1a0d967d6de8ae->enter($__internal_527fa847d67879df86f5325c90d6a49f3c1654b3919efeadda1a0d967d6de8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_527fa847d67879df86f5325c90d6a49f3c1654b3919efeadda1a0d967d6de8ae->leave($__internal_527fa847d67879df86f5325c90d6a49f3c1654b3919efeadda1a0d967d6de8ae_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2db759c75110add21bd0528773bef78ed6121c4e0f5a56f8916dfa1e1de690f8 = $this->env->getExtension("native_profiler");
        $__internal_2db759c75110add21bd0528773bef78ed6121c4e0f5a56f8916dfa1e1de690f8->enter($__internal_2db759c75110add21bd0528773bef78ed6121c4e0f5a56f8916dfa1e1de690f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2db759c75110add21bd0528773bef78ed6121c4e0f5a56f8916dfa1e1de690f8->leave($__internal_2db759c75110add21bd0528773bef78ed6121c4e0f5a56f8916dfa1e1de690f8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_85cb91b439b960f42d65c1ecc1ff806fdab09028288ca90c61e1ccad6f825308 = $this->env->getExtension("native_profiler");
        $__internal_85cb91b439b960f42d65c1ecc1ff806fdab09028288ca90c61e1ccad6f825308->enter($__internal_85cb91b439b960f42d65c1ecc1ff806fdab09028288ca90c61e1ccad6f825308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_85cb91b439b960f42d65c1ecc1ff806fdab09028288ca90c61e1ccad6f825308->leave($__internal_85cb91b439b960f42d65c1ecc1ff806fdab09028288ca90c61e1ccad6f825308_prof);

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
