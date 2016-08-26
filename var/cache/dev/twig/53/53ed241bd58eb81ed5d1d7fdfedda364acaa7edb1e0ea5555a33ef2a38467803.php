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
        $__internal_7a13ece0de93da4bc6aa488bf69e442bd0894b9194da0b230cb830a7fc4d1326 = $this->env->getExtension("native_profiler");
        $__internal_7a13ece0de93da4bc6aa488bf69e442bd0894b9194da0b230cb830a7fc4d1326->enter($__internal_7a13ece0de93da4bc6aa488bf69e442bd0894b9194da0b230cb830a7fc4d1326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_7a13ece0de93da4bc6aa488bf69e442bd0894b9194da0b230cb830a7fc4d1326->leave($__internal_7a13ece0de93da4bc6aa488bf69e442bd0894b9194da0b230cb830a7fc4d1326_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7ec17b3393c0b8e77e9b52f4448644473881a07a6a2462e9011696f0f39ddbaf = $this->env->getExtension("native_profiler");
        $__internal_7ec17b3393c0b8e77e9b52f4448644473881a07a6a2462e9011696f0f39ddbaf->enter($__internal_7ec17b3393c0b8e77e9b52f4448644473881a07a6a2462e9011696f0f39ddbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_7ec17b3393c0b8e77e9b52f4448644473881a07a6a2462e9011696f0f39ddbaf->leave($__internal_7ec17b3393c0b8e77e9b52f4448644473881a07a6a2462e9011696f0f39ddbaf_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2704fd7af9e0672faa305a967c68433be9db7fa606d3e00e236d91ace2d7a3f6 = $this->env->getExtension("native_profiler");
        $__internal_2704fd7af9e0672faa305a967c68433be9db7fa606d3e00e236d91ace2d7a3f6->enter($__internal_2704fd7af9e0672faa305a967c68433be9db7fa606d3e00e236d91ace2d7a3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_2704fd7af9e0672faa305a967c68433be9db7fa606d3e00e236d91ace2d7a3f6->leave($__internal_2704fd7af9e0672faa305a967c68433be9db7fa606d3e00e236d91ace2d7a3f6_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c6288cf258097f0941b4eed49224ec0b128b2075158992b99a3f52a97b59251c = $this->env->getExtension("native_profiler");
        $__internal_c6288cf258097f0941b4eed49224ec0b128b2075158992b99a3f52a97b59251c->enter($__internal_c6288cf258097f0941b4eed49224ec0b128b2075158992b99a3f52a97b59251c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c6288cf258097f0941b4eed49224ec0b128b2075158992b99a3f52a97b59251c->leave($__internal_c6288cf258097f0941b4eed49224ec0b128b2075158992b99a3f52a97b59251c_prof);

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
