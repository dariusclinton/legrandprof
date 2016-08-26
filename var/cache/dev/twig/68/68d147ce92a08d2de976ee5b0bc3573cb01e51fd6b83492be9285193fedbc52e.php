<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4ab49bb795b9cf59c836d91c2c3dbbd61afe0342bba06ccaa56bf3d136d119fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5534a4ffe8723dcbc219cae667aa4e144b1983f83bfccc7ceae5660fff83aee1 = $this->env->getExtension("native_profiler");
        $__internal_5534a4ffe8723dcbc219cae667aa4e144b1983f83bfccc7ceae5660fff83aee1->enter($__internal_5534a4ffe8723dcbc219cae667aa4e144b1983f83bfccc7ceae5660fff83aee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5534a4ffe8723dcbc219cae667aa4e144b1983f83bfccc7ceae5660fff83aee1->leave($__internal_5534a4ffe8723dcbc219cae667aa4e144b1983f83bfccc7ceae5660fff83aee1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97061155e5869d068710d98ca087767b3c479e64851d167fe6440c4ad8885d3f = $this->env->getExtension("native_profiler");
        $__internal_97061155e5869d068710d98ca087767b3c479e64851d167fe6440c4ad8885d3f->enter($__internal_97061155e5869d068710d98ca087767b3c479e64851d167fe6440c4ad8885d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_97061155e5869d068710d98ca087767b3c479e64851d167fe6440c4ad8885d3f->leave($__internal_97061155e5869d068710d98ca087767b3c479e64851d167fe6440c4ad8885d3f_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d30cc15b5f8f8901a21365e5c66441a5635fc58abccdaaa888b56af3664e9d0a = $this->env->getExtension("native_profiler");
        $__internal_d30cc15b5f8f8901a21365e5c66441a5635fc58abccdaaa888b56af3664e9d0a->enter($__internal_d30cc15b5f8f8901a21365e5c66441a5635fc58abccdaaa888b56af3664e9d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_d30cc15b5f8f8901a21365e5c66441a5635fc58abccdaaa888b56af3664e9d0a->leave($__internal_d30cc15b5f8f8901a21365e5c66441a5635fc58abccdaaa888b56af3664e9d0a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/* */
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
