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
        $__internal_d25451619f4d2fb930c16bf7af68424684f61bb48e157cc335202f647c903628 = $this->env->getExtension("native_profiler");
        $__internal_d25451619f4d2fb930c16bf7af68424684f61bb48e157cc335202f647c903628->enter($__internal_d25451619f4d2fb930c16bf7af68424684f61bb48e157cc335202f647c903628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d25451619f4d2fb930c16bf7af68424684f61bb48e157cc335202f647c903628->leave($__internal_d25451619f4d2fb930c16bf7af68424684f61bb48e157cc335202f647c903628_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80a3e03df75aec4e2747a8393006cb4124abe356fb74285a654a2be0228c85b7 = $this->env->getExtension("native_profiler");
        $__internal_80a3e03df75aec4e2747a8393006cb4124abe356fb74285a654a2be0228c85b7->enter($__internal_80a3e03df75aec4e2747a8393006cb4124abe356fb74285a654a2be0228c85b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_80a3e03df75aec4e2747a8393006cb4124abe356fb74285a654a2be0228c85b7->leave($__internal_80a3e03df75aec4e2747a8393006cb4124abe356fb74285a654a2be0228c85b7_prof);

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
