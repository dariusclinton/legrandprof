<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2faea6496bd2b2e66877446ebefad269465b9a7911d11b71504a32c05298cdc6 extends Twig_Template
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
        $__internal_47db06cea049e083b4c5ba473d0effe9c61cbc486757280781f67413e8c74433 = $this->env->getExtension("native_profiler");
        $__internal_47db06cea049e083b4c5ba473d0effe9c61cbc486757280781f67413e8c74433->enter($__internal_47db06cea049e083b4c5ba473d0effe9c61cbc486757280781f67413e8c74433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_47db06cea049e083b4c5ba473d0effe9c61cbc486757280781f67413e8c74433->leave($__internal_47db06cea049e083b4c5ba473d0effe9c61cbc486757280781f67413e8c74433_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
