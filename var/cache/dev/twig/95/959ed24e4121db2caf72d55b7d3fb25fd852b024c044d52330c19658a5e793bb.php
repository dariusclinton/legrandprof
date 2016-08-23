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
        $__internal_957601a08f27a8bb4ea08930b9925da2812e0f8c1648ed9c3485a24e48c50280 = $this->env->getExtension("native_profiler");
        $__internal_957601a08f27a8bb4ea08930b9925da2812e0f8c1648ed9c3485a24e48c50280->enter($__internal_957601a08f27a8bb4ea08930b9925da2812e0f8c1648ed9c3485a24e48c50280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_957601a08f27a8bb4ea08930b9925da2812e0f8c1648ed9c3485a24e48c50280->leave($__internal_957601a08f27a8bb4ea08930b9925da2812e0f8c1648ed9c3485a24e48c50280_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_962e3db09a1229a0d188b206f0bf60d0ce9307e845fae03e9f9accda126749ef = $this->env->getExtension("native_profiler");
        $__internal_962e3db09a1229a0d188b206f0bf60d0ce9307e845fae03e9f9accda126749ef->enter($__internal_962e3db09a1229a0d188b206f0bf60d0ce9307e845fae03e9f9accda126749ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_962e3db09a1229a0d188b206f0bf60d0ce9307e845fae03e9f9accda126749ef->leave($__internal_962e3db09a1229a0d188b206f0bf60d0ce9307e845fae03e9f9accda126749ef_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f4188ebf9b6f278e50dd0a33fe68aefe6a9c3a62f5690a6786dc2a2a087b9b2f = $this->env->getExtension("native_profiler");
        $__internal_f4188ebf9b6f278e50dd0a33fe68aefe6a9c3a62f5690a6786dc2a2a087b9b2f->enter($__internal_f4188ebf9b6f278e50dd0a33fe68aefe6a9c3a62f5690a6786dc2a2a087b9b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f4188ebf9b6f278e50dd0a33fe68aefe6a9c3a62f5690a6786dc2a2a087b9b2f->leave($__internal_f4188ebf9b6f278e50dd0a33fe68aefe6a9c3a62f5690a6786dc2a2a087b9b2f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ecc067ca40c38df375fc42421ad5a42de7478730c6b103678dc5cacc19e7dec5 = $this->env->getExtension("native_profiler");
        $__internal_ecc067ca40c38df375fc42421ad5a42de7478730c6b103678dc5cacc19e7dec5->enter($__internal_ecc067ca40c38df375fc42421ad5a42de7478730c6b103678dc5cacc19e7dec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ecc067ca40c38df375fc42421ad5a42de7478730c6b103678dc5cacc19e7dec5->leave($__internal_ecc067ca40c38df375fc42421ad5a42de7478730c6b103678dc5cacc19e7dec5_prof);

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
