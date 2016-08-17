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
        $__internal_3361acd4cda7f1174d5125d2e6957bd7c77bf3660ac7ebb8180ad23527d77e8d = $this->env->getExtension("native_profiler");
        $__internal_3361acd4cda7f1174d5125d2e6957bd7c77bf3660ac7ebb8180ad23527d77e8d->enter($__internal_3361acd4cda7f1174d5125d2e6957bd7c77bf3660ac7ebb8180ad23527d77e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3361acd4cda7f1174d5125d2e6957bd7c77bf3660ac7ebb8180ad23527d77e8d->leave($__internal_3361acd4cda7f1174d5125d2e6957bd7c77bf3660ac7ebb8180ad23527d77e8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_725f82a3807b7c1c20723dfa75c2cba48bd6bc887b2f6e8af725fa9dd2893595 = $this->env->getExtension("native_profiler");
        $__internal_725f82a3807b7c1c20723dfa75c2cba48bd6bc887b2f6e8af725fa9dd2893595->enter($__internal_725f82a3807b7c1c20723dfa75c2cba48bd6bc887b2f6e8af725fa9dd2893595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_725f82a3807b7c1c20723dfa75c2cba48bd6bc887b2f6e8af725fa9dd2893595->leave($__internal_725f82a3807b7c1c20723dfa75c2cba48bd6bc887b2f6e8af725fa9dd2893595_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_650dbf58e39b5227a28c6a8c244e413340c8d35c3f1954b99f539c49fdf291e5 = $this->env->getExtension("native_profiler");
        $__internal_650dbf58e39b5227a28c6a8c244e413340c8d35c3f1954b99f539c49fdf291e5->enter($__internal_650dbf58e39b5227a28c6a8c244e413340c8d35c3f1954b99f539c49fdf291e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_650dbf58e39b5227a28c6a8c244e413340c8d35c3f1954b99f539c49fdf291e5->leave($__internal_650dbf58e39b5227a28c6a8c244e413340c8d35c3f1954b99f539c49fdf291e5_prof);

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
