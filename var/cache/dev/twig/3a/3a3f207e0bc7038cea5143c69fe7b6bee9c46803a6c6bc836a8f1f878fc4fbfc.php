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
        $__internal_cc2e3d193833fdad57333d9a5be61bd7f6a49e0b93041105d16d6a66d75b053e = $this->env->getExtension("native_profiler");
        $__internal_cc2e3d193833fdad57333d9a5be61bd7f6a49e0b93041105d16d6a66d75b053e->enter($__internal_cc2e3d193833fdad57333d9a5be61bd7f6a49e0b93041105d16d6a66d75b053e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_cc2e3d193833fdad57333d9a5be61bd7f6a49e0b93041105d16d6a66d75b053e->leave($__internal_cc2e3d193833fdad57333d9a5be61bd7f6a49e0b93041105d16d6a66d75b053e_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4870b51e3bc74b9913b0e86509a6ea07ebaf8c88f2925ed79156afe39301ba91 = $this->env->getExtension("native_profiler");
        $__internal_4870b51e3bc74b9913b0e86509a6ea07ebaf8c88f2925ed79156afe39301ba91->enter($__internal_4870b51e3bc74b9913b0e86509a6ea07ebaf8c88f2925ed79156afe39301ba91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_4870b51e3bc74b9913b0e86509a6ea07ebaf8c88f2925ed79156afe39301ba91->leave($__internal_4870b51e3bc74b9913b0e86509a6ea07ebaf8c88f2925ed79156afe39301ba91_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0e4f4c9937f452f28ac96b3bcb893cde438e15772e95abf4df33df8c8b63131c = $this->env->getExtension("native_profiler");
        $__internal_0e4f4c9937f452f28ac96b3bcb893cde438e15772e95abf4df33df8c8b63131c->enter($__internal_0e4f4c9937f452f28ac96b3bcb893cde438e15772e95abf4df33df8c8b63131c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_0e4f4c9937f452f28ac96b3bcb893cde438e15772e95abf4df33df8c8b63131c->leave($__internal_0e4f4c9937f452f28ac96b3bcb893cde438e15772e95abf4df33df8c8b63131c_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8fb999eb17190e6147c3da7637b1951f462a6141b789cd1f57ccb6f1c3268005 = $this->env->getExtension("native_profiler");
        $__internal_8fb999eb17190e6147c3da7637b1951f462a6141b789cd1f57ccb6f1c3268005->enter($__internal_8fb999eb17190e6147c3da7637b1951f462a6141b789cd1f57ccb6f1c3268005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8fb999eb17190e6147c3da7637b1951f462a6141b789cd1f57ccb6f1c3268005->leave($__internal_8fb999eb17190e6147c3da7637b1951f462a6141b789cd1f57ccb6f1c3268005_prof);

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
