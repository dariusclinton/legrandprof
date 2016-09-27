<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_195cc50327953e785b6ede44d8c2f9277a1700b3239c4288c581c4b460cb0726 extends Twig_Template
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
        $__internal_d2b39f9e46159b844ca6cb4b417c43066dfd34a8f4d0539e8583cccf45c71928 = $this->env->getExtension("native_profiler");
        $__internal_d2b39f9e46159b844ca6cb4b417c43066dfd34a8f4d0539e8583cccf45c71928->enter($__internal_d2b39f9e46159b844ca6cb4b417c43066dfd34a8f4d0539e8583cccf45c71928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d2b39f9e46159b844ca6cb4b417c43066dfd34a8f4d0539e8583cccf45c71928->leave($__internal_d2b39f9e46159b844ca6cb4b417c43066dfd34a8f4d0539e8583cccf45c71928_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
