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
        $__internal_3edd1ffa86201c748319a7cfbf004a23c8c5eddd116c657edc6ddf9abc63cad8 = $this->env->getExtension("native_profiler");
        $__internal_3edd1ffa86201c748319a7cfbf004a23c8c5eddd116c657edc6ddf9abc63cad8->enter($__internal_3edd1ffa86201c748319a7cfbf004a23c8c5eddd116c657edc6ddf9abc63cad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3edd1ffa86201c748319a7cfbf004a23c8c5eddd116c657edc6ddf9abc63cad8->leave($__internal_3edd1ffa86201c748319a7cfbf004a23c8c5eddd116c657edc6ddf9abc63cad8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1cdc831718e2b3cd7880e722e1484a79ec1ba3ccbcf64ee87f14e6be34d84299 = $this->env->getExtension("native_profiler");
        $__internal_1cdc831718e2b3cd7880e722e1484a79ec1ba3ccbcf64ee87f14e6be34d84299->enter($__internal_1cdc831718e2b3cd7880e722e1484a79ec1ba3ccbcf64ee87f14e6be34d84299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1cdc831718e2b3cd7880e722e1484a79ec1ba3ccbcf64ee87f14e6be34d84299->leave($__internal_1cdc831718e2b3cd7880e722e1484a79ec1ba3ccbcf64ee87f14e6be34d84299_prof);

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
