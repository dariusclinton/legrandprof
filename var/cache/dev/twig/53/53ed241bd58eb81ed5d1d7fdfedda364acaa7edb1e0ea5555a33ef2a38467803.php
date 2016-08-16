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
        $__internal_2e66d1dee1782422fd583a42e6ef83fddb8e1d8721d48c6fd3d517c2ccc80aff = $this->env->getExtension("native_profiler");
        $__internal_2e66d1dee1782422fd583a42e6ef83fddb8e1d8721d48c6fd3d517c2ccc80aff->enter($__internal_2e66d1dee1782422fd583a42e6ef83fddb8e1d8721d48c6fd3d517c2ccc80aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_2e66d1dee1782422fd583a42e6ef83fddb8e1d8721d48c6fd3d517c2ccc80aff->leave($__internal_2e66d1dee1782422fd583a42e6ef83fddb8e1d8721d48c6fd3d517c2ccc80aff_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3655f63feabb5968866bd599b18a5f62499b5d7c635f992d1da6d5f6054c9581 = $this->env->getExtension("native_profiler");
        $__internal_3655f63feabb5968866bd599b18a5f62499b5d7c635f992d1da6d5f6054c9581->enter($__internal_3655f63feabb5968866bd599b18a5f62499b5d7c635f992d1da6d5f6054c9581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_3655f63feabb5968866bd599b18a5f62499b5d7c635f992d1da6d5f6054c9581->leave($__internal_3655f63feabb5968866bd599b18a5f62499b5d7c635f992d1da6d5f6054c9581_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1bfe60c0b0eef2df2161833e69977e41627c037164dd4ef4ae1833e1fe860b3a = $this->env->getExtension("native_profiler");
        $__internal_1bfe60c0b0eef2df2161833e69977e41627c037164dd4ef4ae1833e1fe860b3a->enter($__internal_1bfe60c0b0eef2df2161833e69977e41627c037164dd4ef4ae1833e1fe860b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_1bfe60c0b0eef2df2161833e69977e41627c037164dd4ef4ae1833e1fe860b3a->leave($__internal_1bfe60c0b0eef2df2161833e69977e41627c037164dd4ef4ae1833e1fe860b3a_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e2cdbfc13ef8588428cf6ff173a054bce1cc316525272fdd19af2fdf1522f9a0 = $this->env->getExtension("native_profiler");
        $__internal_e2cdbfc13ef8588428cf6ff173a054bce1cc316525272fdd19af2fdf1522f9a0->enter($__internal_e2cdbfc13ef8588428cf6ff173a054bce1cc316525272fdd19af2fdf1522f9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e2cdbfc13ef8588428cf6ff173a054bce1cc316525272fdd19af2fdf1522f9a0->leave($__internal_e2cdbfc13ef8588428cf6ff173a054bce1cc316525272fdd19af2fdf1522f9a0_prof);

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
