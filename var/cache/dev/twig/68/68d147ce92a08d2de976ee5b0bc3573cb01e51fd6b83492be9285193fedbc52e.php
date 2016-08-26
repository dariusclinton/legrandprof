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
        $__internal_f2b1c01db456d2a5a4365193a970c450b6838d99782e3f672ef8366e49eb3d2c = $this->env->getExtension("native_profiler");
        $__internal_f2b1c01db456d2a5a4365193a970c450b6838d99782e3f672ef8366e49eb3d2c->enter($__internal_f2b1c01db456d2a5a4365193a970c450b6838d99782e3f672ef8366e49eb3d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b1c01db456d2a5a4365193a970c450b6838d99782e3f672ef8366e49eb3d2c->leave($__internal_f2b1c01db456d2a5a4365193a970c450b6838d99782e3f672ef8366e49eb3d2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c74458c8a6b862713ab60518d5a29bad5ed87ab6970e7fc6966537572b224090 = $this->env->getExtension("native_profiler");
        $__internal_c74458c8a6b862713ab60518d5a29bad5ed87ab6970e7fc6966537572b224090->enter($__internal_c74458c8a6b862713ab60518d5a29bad5ed87ab6970e7fc6966537572b224090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_c74458c8a6b862713ab60518d5a29bad5ed87ab6970e7fc6966537572b224090->leave($__internal_c74458c8a6b862713ab60518d5a29bad5ed87ab6970e7fc6966537572b224090_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a11aef3e39d54090abd07824cc9506de09343fc8b0940e4ac58fae7a3ed3cfac = $this->env->getExtension("native_profiler");
        $__internal_a11aef3e39d54090abd07824cc9506de09343fc8b0940e4ac58fae7a3ed3cfac->enter($__internal_a11aef3e39d54090abd07824cc9506de09343fc8b0940e4ac58fae7a3ed3cfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_a11aef3e39d54090abd07824cc9506de09343fc8b0940e4ac58fae7a3ed3cfac->leave($__internal_a11aef3e39d54090abd07824cc9506de09343fc8b0940e4ac58fae7a3ed3cfac_prof);

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
