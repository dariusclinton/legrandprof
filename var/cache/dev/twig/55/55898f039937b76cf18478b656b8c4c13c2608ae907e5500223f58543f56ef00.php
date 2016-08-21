<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b8bb6847961a74b725e4024b1332655d5ce1b2491f04a550b3538b79739e54a4 extends Twig_Template
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
        $__internal_96283d68060cac7fe98cc0ba2529fea58988345a01801fedf090f1615659582d = $this->env->getExtension("native_profiler");
        $__internal_96283d68060cac7fe98cc0ba2529fea58988345a01801fedf090f1615659582d->enter($__internal_96283d68060cac7fe98cc0ba2529fea58988345a01801fedf090f1615659582d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96283d68060cac7fe98cc0ba2529fea58988345a01801fedf090f1615659582d->leave($__internal_96283d68060cac7fe98cc0ba2529fea58988345a01801fedf090f1615659582d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e5c9fd019e3a4a2a168bf1bc75cf2ce856ce50f7aa3a98d6e1661b2bbd40426 = $this->env->getExtension("native_profiler");
        $__internal_0e5c9fd019e3a4a2a168bf1bc75cf2ce856ce50f7aa3a98d6e1661b2bbd40426->enter($__internal_0e5c9fd019e3a4a2a168bf1bc75cf2ce856ce50f7aa3a98d6e1661b2bbd40426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_0e5c9fd019e3a4a2a168bf1bc75cf2ce856ce50f7aa3a98d6e1661b2bbd40426->leave($__internal_0e5c9fd019e3a4a2a168bf1bc75cf2ce856ce50f7aa3a98d6e1661b2bbd40426_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_393adcdc6281dee62412e80bef774c9f15af553e5708f1093d2017779d9fa49e = $this->env->getExtension("native_profiler");
        $__internal_393adcdc6281dee62412e80bef774c9f15af553e5708f1093d2017779d9fa49e->enter($__internal_393adcdc6281dee62412e80bef774c9f15af553e5708f1093d2017779d9fa49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_393adcdc6281dee62412e80bef774c9f15af553e5708f1093d2017779d9fa49e->leave($__internal_393adcdc6281dee62412e80bef774c9f15af553e5708f1093d2017779d9fa49e_prof);

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
