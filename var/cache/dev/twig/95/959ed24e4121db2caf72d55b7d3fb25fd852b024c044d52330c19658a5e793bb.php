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
        $__internal_07d3dd504f6fb6e570a7d7299ac8bd3e16e8a468594026bb17103dffa8713430 = $this->env->getExtension("native_profiler");
        $__internal_07d3dd504f6fb6e570a7d7299ac8bd3e16e8a468594026bb17103dffa8713430->enter($__internal_07d3dd504f6fb6e570a7d7299ac8bd3e16e8a468594026bb17103dffa8713430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_07d3dd504f6fb6e570a7d7299ac8bd3e16e8a468594026bb17103dffa8713430->leave($__internal_07d3dd504f6fb6e570a7d7299ac8bd3e16e8a468594026bb17103dffa8713430_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7d9ed60a6fa8c9b71f9250a1df70bf67bc17e8a29ecd4d4313c674482b6b7049 = $this->env->getExtension("native_profiler");
        $__internal_7d9ed60a6fa8c9b71f9250a1df70bf67bc17e8a29ecd4d4313c674482b6b7049->enter($__internal_7d9ed60a6fa8c9b71f9250a1df70bf67bc17e8a29ecd4d4313c674482b6b7049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7d9ed60a6fa8c9b71f9250a1df70bf67bc17e8a29ecd4d4313c674482b6b7049->leave($__internal_7d9ed60a6fa8c9b71f9250a1df70bf67bc17e8a29ecd4d4313c674482b6b7049_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c6d445ac36da74a9bb04550a7358946cd422c89ed04f9ad19b8859f209f2325d = $this->env->getExtension("native_profiler");
        $__internal_c6d445ac36da74a9bb04550a7358946cd422c89ed04f9ad19b8859f209f2325d->enter($__internal_c6d445ac36da74a9bb04550a7358946cd422c89ed04f9ad19b8859f209f2325d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c6d445ac36da74a9bb04550a7358946cd422c89ed04f9ad19b8859f209f2325d->leave($__internal_c6d445ac36da74a9bb04550a7358946cd422c89ed04f9ad19b8859f209f2325d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_68da82133c446315751fca97a32fc3e74a031a7ffeed7b074a795d7458fe9cd5 = $this->env->getExtension("native_profiler");
        $__internal_68da82133c446315751fca97a32fc3e74a031a7ffeed7b074a795d7458fe9cd5->enter($__internal_68da82133c446315751fca97a32fc3e74a031a7ffeed7b074a795d7458fe9cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_68da82133c446315751fca97a32fc3e74a031a7ffeed7b074a795d7458fe9cd5->leave($__internal_68da82133c446315751fca97a32fc3e74a031a7ffeed7b074a795d7458fe9cd5_prof);

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
