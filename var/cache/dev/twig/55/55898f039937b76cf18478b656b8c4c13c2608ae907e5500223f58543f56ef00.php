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
        $__internal_dfd474da807cdeb0143cb821a25b5675d808bb6c8ea3d5be3c4c144ab4f2bb83 = $this->env->getExtension("native_profiler");
        $__internal_dfd474da807cdeb0143cb821a25b5675d808bb6c8ea3d5be3c4c144ab4f2bb83->enter($__internal_dfd474da807cdeb0143cb821a25b5675d808bb6c8ea3d5be3c4c144ab4f2bb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd474da807cdeb0143cb821a25b5675d808bb6c8ea3d5be3c4c144ab4f2bb83->leave($__internal_dfd474da807cdeb0143cb821a25b5675d808bb6c8ea3d5be3c4c144ab4f2bb83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98ed9f3178e6b8aa77d110b9d1ac23469165ffc694bcea772fe31866b59ae736 = $this->env->getExtension("native_profiler");
        $__internal_98ed9f3178e6b8aa77d110b9d1ac23469165ffc694bcea772fe31866b59ae736->enter($__internal_98ed9f3178e6b8aa77d110b9d1ac23469165ffc694bcea772fe31866b59ae736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_98ed9f3178e6b8aa77d110b9d1ac23469165ffc694bcea772fe31866b59ae736->leave($__internal_98ed9f3178e6b8aa77d110b9d1ac23469165ffc694bcea772fe31866b59ae736_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1353fef7566ec01c8ce1a32e2d2f21ea36616fffe0a0b1cb2506fb99a2d2cccd = $this->env->getExtension("native_profiler");
        $__internal_1353fef7566ec01c8ce1a32e2d2f21ea36616fffe0a0b1cb2506fb99a2d2cccd->enter($__internal_1353fef7566ec01c8ce1a32e2d2f21ea36616fffe0a0b1cb2506fb99a2d2cccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_1353fef7566ec01c8ce1a32e2d2f21ea36616fffe0a0b1cb2506fb99a2d2cccd->leave($__internal_1353fef7566ec01c8ce1a32e2d2f21ea36616fffe0a0b1cb2506fb99a2d2cccd_prof);

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
