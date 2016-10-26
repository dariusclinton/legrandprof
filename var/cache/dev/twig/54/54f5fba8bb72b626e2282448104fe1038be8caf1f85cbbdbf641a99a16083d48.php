<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_508c444539c872b59791dd9af7ef8f04da96365517cd1204b0331392337f4302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87164a67e74aaa0c99ef2369b2dd6d4fa3d72fdc03243d58cd48e578dcf313cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87164a67e74aaa0c99ef2369b2dd6d4fa3d72fdc03243d58cd48e578dcf313cf->enter($__internal_87164a67e74aaa0c99ef2369b2dd6d4fa3d72fdc03243d58cd48e578dcf313cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_87164a67e74aaa0c99ef2369b2dd6d4fa3d72fdc03243d58cd48e578dcf313cf->leave($__internal_87164a67e74aaa0c99ef2369b2dd6d4fa3d72fdc03243d58cd48e578dcf313cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
