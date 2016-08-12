<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_47a409e9c9cd64a9391425cd7c0a3207dc6cb7cc5d98367fde2a056f56a63f98 extends Twig_Template
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
        $__internal_c11aa12cc267710987597f7efe0dc61d8c47594d8d16f66b2d7a513fe5bc3997 = $this->env->getExtension("native_profiler");
        $__internal_c11aa12cc267710987597f7efe0dc61d8c47594d8d16f66b2d7a513fe5bc3997->enter($__internal_c11aa12cc267710987597f7efe0dc61d8c47594d8d16f66b2d7a513fe5bc3997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c11aa12cc267710987597f7efe0dc61d8c47594d8d16f66b2d7a513fe5bc3997->leave($__internal_c11aa12cc267710987597f7efe0dc61d8c47594d8d16f66b2d7a513fe5bc3997_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
