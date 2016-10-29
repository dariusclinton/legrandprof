<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_09f632d4aa5ae6bddf11a8997faa42a59820b4c253fa7e6101af29644c85a605 extends Twig_Template
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
        $__internal_fdb8d2ff7ddc61c943d93d2e110090e6ffc4bcb252b77977bd2558e4ab31439f = $this->env->getExtension("native_profiler");
        $__internal_fdb8d2ff7ddc61c943d93d2e110090e6ffc4bcb252b77977bd2558e4ab31439f->enter($__internal_fdb8d2ff7ddc61c943d93d2e110090e6ffc4bcb252b77977bd2558e4ab31439f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fdb8d2ff7ddc61c943d93d2e110090e6ffc4bcb252b77977bd2558e4ab31439f->leave($__internal_fdb8d2ff7ddc61c943d93d2e110090e6ffc4bcb252b77977bd2558e4ab31439f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
