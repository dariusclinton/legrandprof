<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4d7378bbf6b1ae594a260ee0ca57afbaea467696fdaf24151374392056a69f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b36e7ac35286883743cc1a837de5592cac1db1e54c7d2d99787219bd9d69ec0c = $this->env->getExtension("native_profiler");
        $__internal_b36e7ac35286883743cc1a837de5592cac1db1e54c7d2d99787219bd9d69ec0c->enter($__internal_b36e7ac35286883743cc1a837de5592cac1db1e54c7d2d99787219bd9d69ec0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b36e7ac35286883743cc1a837de5592cac1db1e54c7d2d99787219bd9d69ec0c->leave($__internal_b36e7ac35286883743cc1a837de5592cac1db1e54c7d2d99787219bd9d69ec0c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81bcc216bf0d35afe10b534e928005b7b0feff19692e1140d7b5d7e11bc10ba2 = $this->env->getExtension("native_profiler");
        $__internal_81bcc216bf0d35afe10b534e928005b7b0feff19692e1140d7b5d7e11bc10ba2->enter($__internal_81bcc216bf0d35afe10b534e928005b7b0feff19692e1140d7b5d7e11bc10ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_81bcc216bf0d35afe10b534e928005b7b0feff19692e1140d7b5d7e11bc10ba2->leave($__internal_81bcc216bf0d35afe10b534e928005b7b0feff19692e1140d7b5d7e11bc10ba2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
