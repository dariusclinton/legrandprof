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
        $__internal_73523c6e6ab57d8649b69c44c9ede052eace6e34a1d1b44a1f08a2a0d0f79050 = $this->env->getExtension("native_profiler");
        $__internal_73523c6e6ab57d8649b69c44c9ede052eace6e34a1d1b44a1f08a2a0d0f79050->enter($__internal_73523c6e6ab57d8649b69c44c9ede052eace6e34a1d1b44a1f08a2a0d0f79050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_73523c6e6ab57d8649b69c44c9ede052eace6e34a1d1b44a1f08a2a0d0f79050->leave($__internal_73523c6e6ab57d8649b69c44c9ede052eace6e34a1d1b44a1f08a2a0d0f79050_prof);

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
