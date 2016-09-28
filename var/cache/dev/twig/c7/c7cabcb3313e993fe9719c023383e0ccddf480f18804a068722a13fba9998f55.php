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
        $__internal_835cffe449094f505e5f704a16a7ecb9b48f923a158eb7f75d2fab1803e9a01f = $this->env->getExtension("native_profiler");
        $__internal_835cffe449094f505e5f704a16a7ecb9b48f923a158eb7f75d2fab1803e9a01f->enter($__internal_835cffe449094f505e5f704a16a7ecb9b48f923a158eb7f75d2fab1803e9a01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_835cffe449094f505e5f704a16a7ecb9b48f923a158eb7f75d2fab1803e9a01f->leave($__internal_835cffe449094f505e5f704a16a7ecb9b48f923a158eb7f75d2fab1803e9a01f_prof);

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
