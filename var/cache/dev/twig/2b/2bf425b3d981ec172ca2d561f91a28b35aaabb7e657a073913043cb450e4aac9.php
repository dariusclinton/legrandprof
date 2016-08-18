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
        $__internal_893d423441a839e929accb418dd6726db2c096c5ffe58c7d76fec1c82486f881 = $this->env->getExtension("native_profiler");
        $__internal_893d423441a839e929accb418dd6726db2c096c5ffe58c7d76fec1c82486f881->enter($__internal_893d423441a839e929accb418dd6726db2c096c5ffe58c7d76fec1c82486f881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_893d423441a839e929accb418dd6726db2c096c5ffe58c7d76fec1c82486f881->leave($__internal_893d423441a839e929accb418dd6726db2c096c5ffe58c7d76fec1c82486f881_prof);

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
