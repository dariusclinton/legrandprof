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
        $__internal_a88f0d1a21a24641613b82309480b22f1e48d4d575a0dfce8fd324089a473035 = $this->env->getExtension("native_profiler");
        $__internal_a88f0d1a21a24641613b82309480b22f1e48d4d575a0dfce8fd324089a473035->enter($__internal_a88f0d1a21a24641613b82309480b22f1e48d4d575a0dfce8fd324089a473035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_a88f0d1a21a24641613b82309480b22f1e48d4d575a0dfce8fd324089a473035->leave($__internal_a88f0d1a21a24641613b82309480b22f1e48d4d575a0dfce8fd324089a473035_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1943ed701c3fb0e608e28523c7fe62a8f23b607570619d7308d42fb639156d15 = $this->env->getExtension("native_profiler");
        $__internal_1943ed701c3fb0e608e28523c7fe62a8f23b607570619d7308d42fb639156d15->enter($__internal_1943ed701c3fb0e608e28523c7fe62a8f23b607570619d7308d42fb639156d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_1943ed701c3fb0e608e28523c7fe62a8f23b607570619d7308d42fb639156d15->leave($__internal_1943ed701c3fb0e608e28523c7fe62a8f23b607570619d7308d42fb639156d15_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0c8c91edf865f8b575849c42ecea0936a969f4586efe1a3fd233bd8e7f95c2e0 = $this->env->getExtension("native_profiler");
        $__internal_0c8c91edf865f8b575849c42ecea0936a969f4586efe1a3fd233bd8e7f95c2e0->enter($__internal_0c8c91edf865f8b575849c42ecea0936a969f4586efe1a3fd233bd8e7f95c2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_0c8c91edf865f8b575849c42ecea0936a969f4586efe1a3fd233bd8e7f95c2e0->leave($__internal_0c8c91edf865f8b575849c42ecea0936a969f4586efe1a3fd233bd8e7f95c2e0_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4559b9f17f8f33991fb6d38a089f78e3f178278002a86897aa26142b179f6903 = $this->env->getExtension("native_profiler");
        $__internal_4559b9f17f8f33991fb6d38a089f78e3f178278002a86897aa26142b179f6903->enter($__internal_4559b9f17f8f33991fb6d38a089f78e3f178278002a86897aa26142b179f6903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4559b9f17f8f33991fb6d38a089f78e3f178278002a86897aa26142b179f6903->leave($__internal_4559b9f17f8f33991fb6d38a089f78e3f178278002a86897aa26142b179f6903_prof);

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
