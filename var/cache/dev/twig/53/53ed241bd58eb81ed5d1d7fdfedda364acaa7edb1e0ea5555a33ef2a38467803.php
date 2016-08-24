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
        $__internal_e0e615d0499b99f8084b59812f3f698861ec5192da75d0b682f9eba4f9b3762c = $this->env->getExtension("native_profiler");
        $__internal_e0e615d0499b99f8084b59812f3f698861ec5192da75d0b682f9eba4f9b3762c->enter($__internal_e0e615d0499b99f8084b59812f3f698861ec5192da75d0b682f9eba4f9b3762c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_e0e615d0499b99f8084b59812f3f698861ec5192da75d0b682f9eba4f9b3762c->leave($__internal_e0e615d0499b99f8084b59812f3f698861ec5192da75d0b682f9eba4f9b3762c_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_418667a138c6a247501b1a1bf994ad3afd42b6e93fa609b56700ebc492d645e0 = $this->env->getExtension("native_profiler");
        $__internal_418667a138c6a247501b1a1bf994ad3afd42b6e93fa609b56700ebc492d645e0->enter($__internal_418667a138c6a247501b1a1bf994ad3afd42b6e93fa609b56700ebc492d645e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_418667a138c6a247501b1a1bf994ad3afd42b6e93fa609b56700ebc492d645e0->leave($__internal_418667a138c6a247501b1a1bf994ad3afd42b6e93fa609b56700ebc492d645e0_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6bda037bbf40b23e92bca98c026d5ebc1fe82f59d03172d8a5b816c3de7ea52f = $this->env->getExtension("native_profiler");
        $__internal_6bda037bbf40b23e92bca98c026d5ebc1fe82f59d03172d8a5b816c3de7ea52f->enter($__internal_6bda037bbf40b23e92bca98c026d5ebc1fe82f59d03172d8a5b816c3de7ea52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_6bda037bbf40b23e92bca98c026d5ebc1fe82f59d03172d8a5b816c3de7ea52f->leave($__internal_6bda037bbf40b23e92bca98c026d5ebc1fe82f59d03172d8a5b816c3de7ea52f_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_74384fbaaaf25c86eafb37a3aa5acf4a1fa0c1136fa0eb4fea32f1af23b9ef08 = $this->env->getExtension("native_profiler");
        $__internal_74384fbaaaf25c86eafb37a3aa5acf4a1fa0c1136fa0eb4fea32f1af23b9ef08->enter($__internal_74384fbaaaf25c86eafb37a3aa5acf4a1fa0c1136fa0eb4fea32f1af23b9ef08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_74384fbaaaf25c86eafb37a3aa5acf4a1fa0c1136fa0eb4fea32f1af23b9ef08->leave($__internal_74384fbaaaf25c86eafb37a3aa5acf4a1fa0c1136fa0eb4fea32f1af23b9ef08_prof);

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
