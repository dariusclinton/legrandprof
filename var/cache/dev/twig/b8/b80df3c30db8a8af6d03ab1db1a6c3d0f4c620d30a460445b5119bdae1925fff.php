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
        $__internal_9876cce3682fd3324f51f5c64a58532c8a588ffdd087ce8ace88fc5cee8ad28a = $this->env->getExtension("native_profiler");
        $__internal_9876cce3682fd3324f51f5c64a58532c8a588ffdd087ce8ace88fc5cee8ad28a->enter($__internal_9876cce3682fd3324f51f5c64a58532c8a588ffdd087ce8ace88fc5cee8ad28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9876cce3682fd3324f51f5c64a58532c8a588ffdd087ce8ace88fc5cee8ad28a->leave($__internal_9876cce3682fd3324f51f5c64a58532c8a588ffdd087ce8ace88fc5cee8ad28a_prof);

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