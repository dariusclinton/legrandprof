<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3fdd0fe26f20ab2fa3a7cef7d0ce17f5a25a77dd12be4936c8c0a13907114031 extends Twig_Template
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
        $__internal_e78bea7bd098616106a2bd415ed4de409411d173cb2181cb994871f3db246dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78bea7bd098616106a2bd415ed4de409411d173cb2181cb994871f3db246dd0->enter($__internal_e78bea7bd098616106a2bd415ed4de409411d173cb2181cb994871f3db246dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e78bea7bd098616106a2bd415ed4de409411d173cb2181cb994871f3db246dd0->leave($__internal_e78bea7bd098616106a2bd415ed4de409411d173cb2181cb994871f3db246dd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
