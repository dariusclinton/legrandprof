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
        $__internal_35ed7a984a5d6089136516aad51857517c80d9db2d38dc4e2fcc2f22b3bd9050 = $this->env->getExtension("native_profiler");
        $__internal_35ed7a984a5d6089136516aad51857517c80d9db2d38dc4e2fcc2f22b3bd9050->enter($__internal_35ed7a984a5d6089136516aad51857517c80d9db2d38dc4e2fcc2f22b3bd9050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35ed7a984a5d6089136516aad51857517c80d9db2d38dc4e2fcc2f22b3bd9050->leave($__internal_35ed7a984a5d6089136516aad51857517c80d9db2d38dc4e2fcc2f22b3bd9050_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38c3b0aea57cf5a864a3f2522929a7b521db7ec5593a078e1275f211667dbc4e = $this->env->getExtension("native_profiler");
        $__internal_38c3b0aea57cf5a864a3f2522929a7b521db7ec5593a078e1275f211667dbc4e->enter($__internal_38c3b0aea57cf5a864a3f2522929a7b521db7ec5593a078e1275f211667dbc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-sm-8 col-sm-offset-2\">
            ";
        // line 8
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 11
        echo "        </div>
    </div>

";
        
        $__internal_38c3b0aea57cf5a864a3f2522929a7b521db7ec5593a078e1275f211667dbc4e->leave($__internal_38c3b0aea57cf5a864a3f2522929a7b521db7ec5593a078e1275f211667dbc4e_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d0a2213221a54c78eb04c1bc6960c259a2105957686fadd25cdcb7df3ffcafe = $this->env->getExtension("native_profiler");
        $__internal_2d0a2213221a54c78eb04c1bc6960c259a2105957686fadd25cdcb7df3ffcafe->enter($__internal_2d0a2213221a54c78eb04c1bc6960c259a2105957686fadd25cdcb7df3ffcafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "
            ";
        
        $__internal_2d0a2213221a54c78eb04c1bc6960c259a2105957686fadd25cdcb7df3ffcafe->leave($__internal_2d0a2213221a54c78eb04c1bc6960c259a2105957686fadd25cdcb7df3ffcafe_prof);

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
        return array (  65 => 9,  59 => 8,  49 => 11,  46 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-8 col-sm-offset-2">*/
/*             {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/*             {% block fos_user_content %}*/
/* */
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
