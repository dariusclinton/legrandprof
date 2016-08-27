<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_81d89fb48bc6949a33958e0b357619f0eeb179b5e2d8799cf2448d36884247e2 extends Twig_Template
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
        $__internal_33bfbc7d6c09c6a433d7bfaa75e53d629695ee40bb41c823e8f8a7b8ef803654 = $this->env->getExtension("native_profiler");
        $__internal_33bfbc7d6c09c6a433d7bfaa75e53d629695ee40bb41c823e8f8a7b8ef803654->enter($__internal_33bfbc7d6c09c6a433d7bfaa75e53d629695ee40bb41c823e8f8a7b8ef803654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_33bfbc7d6c09c6a433d7bfaa75e53d629695ee40bb41c823e8f8a7b8ef803654->leave($__internal_33bfbc7d6c09c6a433d7bfaa75e53d629695ee40bb41c823e8f8a7b8ef803654_prof);

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
