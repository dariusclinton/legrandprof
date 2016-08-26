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
        $__internal_2ca519364ac36ea95643169e74047e466b5e681e36d937592b596d8e32a4b72c = $this->env->getExtension("native_profiler");
        $__internal_2ca519364ac36ea95643169e74047e466b5e681e36d937592b596d8e32a4b72c->enter($__internal_2ca519364ac36ea95643169e74047e466b5e681e36d937592b596d8e32a4b72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2ca519364ac36ea95643169e74047e466b5e681e36d937592b596d8e32a4b72c->leave($__internal_2ca519364ac36ea95643169e74047e466b5e681e36d937592b596d8e32a4b72c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bb55243dc15eebe56d24bf8abb99fd4efd381bae69d92a75d65542de4a7b7ba1 = $this->env->getExtension("native_profiler");
        $__internal_bb55243dc15eebe56d24bf8abb99fd4efd381bae69d92a75d65542de4a7b7ba1->enter($__internal_bb55243dc15eebe56d24bf8abb99fd4efd381bae69d92a75d65542de4a7b7ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_bb55243dc15eebe56d24bf8abb99fd4efd381bae69d92a75d65542de4a7b7ba1->leave($__internal_bb55243dc15eebe56d24bf8abb99fd4efd381bae69d92a75d65542de4a7b7ba1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_90189e1ef068382f40eda0a7db16f3cdf959ca664aa919fcbb7fd21143eff2a0 = $this->env->getExtension("native_profiler");
        $__internal_90189e1ef068382f40eda0a7db16f3cdf959ca664aa919fcbb7fd21143eff2a0->enter($__internal_90189e1ef068382f40eda0a7db16f3cdf959ca664aa919fcbb7fd21143eff2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_90189e1ef068382f40eda0a7db16f3cdf959ca664aa919fcbb7fd21143eff2a0->leave($__internal_90189e1ef068382f40eda0a7db16f3cdf959ca664aa919fcbb7fd21143eff2a0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0895c88d23cc15812b1bb7eb48be453bdd98ea6a2d2011ef13703a580506b6f8 = $this->env->getExtension("native_profiler");
        $__internal_0895c88d23cc15812b1bb7eb48be453bdd98ea6a2d2011ef13703a580506b6f8->enter($__internal_0895c88d23cc15812b1bb7eb48be453bdd98ea6a2d2011ef13703a580506b6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0895c88d23cc15812b1bb7eb48be453bdd98ea6a2d2011ef13703a580506b6f8->leave($__internal_0895c88d23cc15812b1bb7eb48be453bdd98ea6a2d2011ef13703a580506b6f8_prof);

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
