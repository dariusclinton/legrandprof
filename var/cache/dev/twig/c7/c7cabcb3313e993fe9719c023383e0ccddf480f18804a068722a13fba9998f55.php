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
        $__internal_a9ef9b3611050989e9c635cfea7917bd6446c4143bfbc014fe3f9bd6d27e8ab8 = $this->env->getExtension("native_profiler");
        $__internal_a9ef9b3611050989e9c635cfea7917bd6446c4143bfbc014fe3f9bd6d27e8ab8->enter($__internal_a9ef9b3611050989e9c635cfea7917bd6446c4143bfbc014fe3f9bd6d27e8ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a9ef9b3611050989e9c635cfea7917bd6446c4143bfbc014fe3f9bd6d27e8ab8->leave($__internal_a9ef9b3611050989e9c635cfea7917bd6446c4143bfbc014fe3f9bd6d27e8ab8_prof);

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
