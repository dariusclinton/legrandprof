<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c4f94d31f2e523e47e35d0e1c45888f50f2b7ef8e5ddd575c47d94eb4a311e06 extends Twig_Template
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
        $__internal_777f251efffd46f08507a415b08c4659d4ea556cdd53aa7ae0ebfad975077e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777f251efffd46f08507a415b08c4659d4ea556cdd53aa7ae0ebfad975077e2e->enter($__internal_777f251efffd46f08507a415b08c4659d4ea556cdd53aa7ae0ebfad975077e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_777f251efffd46f08507a415b08c4659d4ea556cdd53aa7ae0ebfad975077e2e->leave($__internal_777f251efffd46f08507a415b08c4659d4ea556cdd53aa7ae0ebfad975077e2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
