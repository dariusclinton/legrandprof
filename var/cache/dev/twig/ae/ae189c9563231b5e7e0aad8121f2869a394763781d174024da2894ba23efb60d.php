<?php

/* @LGPUser/layout.html.twig */
class __TwigTemplate_121d417e80f449987b96c0694b6c3f8454776af0ec9692c329704d319b061a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/layout.html.twig", 1);
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
        $__internal_3943253ef0025728d5a68fb0b8783063344c155a4f258806db8375c04d55a019 = $this->env->getExtension("native_profiler");
        $__internal_3943253ef0025728d5a68fb0b8783063344c155a4f258806db8375c04d55a019->enter($__internal_3943253ef0025728d5a68fb0b8783063344c155a4f258806db8375c04d55a019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3943253ef0025728d5a68fb0b8783063344c155a4f258806db8375c04d55a019->leave($__internal_3943253ef0025728d5a68fb0b8783063344c155a4f258806db8375c04d55a019_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_79f29417522695a422fa29d156e5cf3f12ab39133dc39c82525d9abec2aca750 = $this->env->getExtension("native_profiler");
        $__internal_79f29417522695a422fa29d156e5cf3f12ab39133dc39c82525d9abec2aca750->enter($__internal_79f29417522695a422fa29d156e5cf3f12ab39133dc39c82525d9abec2aca750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_79f29417522695a422fa29d156e5cf3f12ab39133dc39c82525d9abec2aca750->leave($__internal_79f29417522695a422fa29d156e5cf3f12ab39133dc39c82525d9abec2aca750_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d1221f8ed3820391887e66b83ab06c5afa177915265c9014dfb4875868c092e = $this->env->getExtension("native_profiler");
        $__internal_2d1221f8ed3820391887e66b83ab06c5afa177915265c9014dfb4875868c092e->enter($__internal_2d1221f8ed3820391887e66b83ab06c5afa177915265c9014dfb4875868c092e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_2d1221f8ed3820391887e66b83ab06c5afa177915265c9014dfb4875868c092e->leave($__internal_2d1221f8ed3820391887e66b83ab06c5afa177915265c9014dfb4875868c092e_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/layout.html.twig";
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
