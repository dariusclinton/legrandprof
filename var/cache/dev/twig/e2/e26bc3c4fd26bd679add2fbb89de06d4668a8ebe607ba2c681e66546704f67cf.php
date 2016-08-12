<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e3b95f27a4f2345689944bcd40cb5f7bad6dd72b74a0579c4e500b6d0ef84170 extends Twig_Template
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
        $__internal_714b108e2574b52632b25b0a9e6b3ff07395188e2e6f84eefa5cc448ff49e6ec = $this->env->getExtension("native_profiler");
        $__internal_714b108e2574b52632b25b0a9e6b3ff07395188e2e6f84eefa5cc448ff49e6ec->enter($__internal_714b108e2574b52632b25b0a9e6b3ff07395188e2e6f84eefa5cc448ff49e6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_714b108e2574b52632b25b0a9e6b3ff07395188e2e6f84eefa5cc448ff49e6ec->leave($__internal_714b108e2574b52632b25b0a9e6b3ff07395188e2e6f84eefa5cc448ff49e6ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
