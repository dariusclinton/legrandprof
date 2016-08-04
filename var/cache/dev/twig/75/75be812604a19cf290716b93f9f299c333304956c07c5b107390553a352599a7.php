<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_936acb47bcced09d6dbfcf5a913fa60bf827dcb7fb0400695f5ac57554a0c35e extends Twig_Template
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
        $__internal_e36ff6f0353fa6e85b7366786d0adf23b72468e5257b67c1e995f126ec11ae32 = $this->env->getExtension("native_profiler");
        $__internal_e36ff6f0353fa6e85b7366786d0adf23b72468e5257b67c1e995f126ec11ae32->enter($__internal_e36ff6f0353fa6e85b7366786d0adf23b72468e5257b67c1e995f126ec11ae32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e36ff6f0353fa6e85b7366786d0adf23b72468e5257b67c1e995f126ec11ae32->leave($__internal_e36ff6f0353fa6e85b7366786d0adf23b72468e5257b67c1e995f126ec11ae32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
