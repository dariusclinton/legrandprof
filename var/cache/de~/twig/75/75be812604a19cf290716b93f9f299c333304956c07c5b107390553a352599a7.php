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
        $__internal_c40fdb883bc65b61c382e3e3773e5f7cf662bf4ddd0230bf329438f45503647d = $this->env->getExtension("native_profiler");
        $__internal_c40fdb883bc65b61c382e3e3773e5f7cf662bf4ddd0230bf329438f45503647d->enter($__internal_c40fdb883bc65b61c382e3e3773e5f7cf662bf4ddd0230bf329438f45503647d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c40fdb883bc65b61c382e3e3773e5f7cf662bf4ddd0230bf329438f45503647d->leave($__internal_c40fdb883bc65b61c382e3e3773e5f7cf662bf4ddd0230bf329438f45503647d_prof);

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
