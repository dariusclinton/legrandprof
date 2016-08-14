<?php

/* LGPUserBundle::layout.html.twig */
class __TwigTemplate_b8bb6847961a74b725e4024b1332655d5ce1b2491f04a550b3538b79739e54a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle::layout.html.twig", 1);
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
        $__internal_422224b54ebeec589d76b13dc4b9f1f4b31b5d058dcbcc69505f9ca66b6973bb = $this->env->getExtension("native_profiler");
        $__internal_422224b54ebeec589d76b13dc4b9f1f4b31b5d058dcbcc69505f9ca66b6973bb->enter($__internal_422224b54ebeec589d76b13dc4b9f1f4b31b5d058dcbcc69505f9ca66b6973bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_422224b54ebeec589d76b13dc4b9f1f4b31b5d058dcbcc69505f9ca66b6973bb->leave($__internal_422224b54ebeec589d76b13dc4b9f1f4b31b5d058dcbcc69505f9ca66b6973bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9ed7a01990bfdc032d588bbda7c1d5cdb1f000e55dd73e9039973d744ce00ca = $this->env->getExtension("native_profiler");
        $__internal_a9ed7a01990bfdc032d588bbda7c1d5cdb1f000e55dd73e9039973d744ce00ca->enter($__internal_a9ed7a01990bfdc032d588bbda7c1d5cdb1f000e55dd73e9039973d744ce00ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_a9ed7a01990bfdc032d588bbda7c1d5cdb1f000e55dd73e9039973d744ce00ca->leave($__internal_a9ed7a01990bfdc032d588bbda7c1d5cdb1f000e55dd73e9039973d744ce00ca_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0fc43bc30f69b03b39ddae47d42e00e86f65d9a3a4d389a3bfc0db349f684c0 = $this->env->getExtension("native_profiler");
        $__internal_e0fc43bc30f69b03b39ddae47d42e00e86f65d9a3a4d389a3bfc0db349f684c0->enter($__internal_e0fc43bc30f69b03b39ddae47d42e00e86f65d9a3a4d389a3bfc0db349f684c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_e0fc43bc30f69b03b39ddae47d42e00e86f65d9a3a4d389a3bfc0db349f684c0->leave($__internal_e0fc43bc30f69b03b39ddae47d42e00e86f65d9a3a4d389a3bfc0db349f684c0_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle::layout.html.twig";
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
