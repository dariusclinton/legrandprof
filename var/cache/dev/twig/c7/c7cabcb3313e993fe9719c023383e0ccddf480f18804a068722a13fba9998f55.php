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
        $__internal_7c7bb28454ba4c66f4e1bf9c4a1570af8b9831444c95f388d555602d57681639 = $this->env->getExtension("native_profiler");
        $__internal_7c7bb28454ba4c66f4e1bf9c4a1570af8b9831444c95f388d555602d57681639->enter($__internal_7c7bb28454ba4c66f4e1bf9c4a1570af8b9831444c95f388d555602d57681639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7c7bb28454ba4c66f4e1bf9c4a1570af8b9831444c95f388d555602d57681639->leave($__internal_7c7bb28454ba4c66f4e1bf9c4a1570af8b9831444c95f388d555602d57681639_prof);

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
