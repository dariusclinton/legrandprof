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
        $__internal_a1deb36b4318cb252efb604e6c5c320b6347bd052c7b30de83e73f2a6ab535f9 = $this->env->getExtension("native_profiler");
        $__internal_a1deb36b4318cb252efb604e6c5c320b6347bd052c7b30de83e73f2a6ab535f9->enter($__internal_a1deb36b4318cb252efb604e6c5c320b6347bd052c7b30de83e73f2a6ab535f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a1deb36b4318cb252efb604e6c5c320b6347bd052c7b30de83e73f2a6ab535f9->leave($__internal_a1deb36b4318cb252efb604e6c5c320b6347bd052c7b30de83e73f2a6ab535f9_prof);

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
