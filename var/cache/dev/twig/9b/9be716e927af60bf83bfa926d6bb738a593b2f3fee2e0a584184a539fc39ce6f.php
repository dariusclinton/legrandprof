<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_ed1635f31659db5a27da36bd60bc355274982c19f5bcb639dc8c1048eb3f8213 extends Twig_Template
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
        $__internal_87bd40fbd9ff3a0ac8326956e733cd51e10bacd47c7af37fec0439cd074952ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87bd40fbd9ff3a0ac8326956e733cd51e10bacd47c7af37fec0439cd074952ee->enter($__internal_87bd40fbd9ff3a0ac8326956e733cd51e10bacd47c7af37fec0439cd074952ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_87bd40fbd9ff3a0ac8326956e733cd51e10bacd47c7af37fec0439cd074952ee->leave($__internal_87bd40fbd9ff3a0ac8326956e733cd51e10bacd47c7af37fec0439cd074952ee_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_425dee32c6794810280d537337f59147f69e3d8427912cc726d794a78884ef77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425dee32c6794810280d537337f59147f69e3d8427912cc726d794a78884ef77->enter($__internal_425dee32c6794810280d537337f59147f69e3d8427912cc726d794a78884ef77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_425dee32c6794810280d537337f59147f69e3d8427912cc726d794a78884ef77->leave($__internal_425dee32c6794810280d537337f59147f69e3d8427912cc726d794a78884ef77_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2352c4e921d26e752ad568c432faec14e48bc1ecf9e0f40dc827bd8fa45f2743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2352c4e921d26e752ad568c432faec14e48bc1ecf9e0f40dc827bd8fa45f2743->enter($__internal_2352c4e921d26e752ad568c432faec14e48bc1ecf9e0f40dc827bd8fa45f2743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2352c4e921d26e752ad568c432faec14e48bc1ecf9e0f40dc827bd8fa45f2743->leave($__internal_2352c4e921d26e752ad568c432faec14e48bc1ecf9e0f40dc827bd8fa45f2743_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_392571ccbeac66e957f073b83483ae0d73bca15d32337dbb4efe8951afe05189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392571ccbeac66e957f073b83483ae0d73bca15d32337dbb4efe8951afe05189->enter($__internal_392571ccbeac66e957f073b83483ae0d73bca15d32337dbb4efe8951afe05189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_392571ccbeac66e957f073b83483ae0d73bca15d32337dbb4efe8951afe05189->leave($__internal_392571ccbeac66e957f073b83483ae0d73bca15d32337dbb4efe8951afe05189_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
