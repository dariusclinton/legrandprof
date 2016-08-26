<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_b0f89172cec957e866566e82775eedb082cc3dd30b8d34fbbfb058626c248dec extends Twig_Template
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
        $__internal_ae8728a6d80862582517f879c5ff04913bdf44b2ef3a81833e08179694e53d98 = $this->env->getExtension("native_profiler");
        $__internal_ae8728a6d80862582517f879c5ff04913bdf44b2ef3a81833e08179694e53d98->enter($__internal_ae8728a6d80862582517f879c5ff04913bdf44b2ef3a81833e08179694e53d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ae8728a6d80862582517f879c5ff04913bdf44b2ef3a81833e08179694e53d98->leave($__internal_ae8728a6d80862582517f879c5ff04913bdf44b2ef3a81833e08179694e53d98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
