<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5744e40132e65522deb6d6ab465429ee63a9cccedd58296b695050312122e581 extends Twig_Template
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
        $__internal_76a7a7c528f8a2bfd93096ae0e3c22418921db9d286d068b7a86d87bde22aec4 = $this->env->getExtension("native_profiler");
        $__internal_76a7a7c528f8a2bfd93096ae0e3c22418921db9d286d068b7a86d87bde22aec4->enter($__internal_76a7a7c528f8a2bfd93096ae0e3c22418921db9d286d068b7a86d87bde22aec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_76a7a7c528f8a2bfd93096ae0e3c22418921db9d286d068b7a86d87bde22aec4->leave($__internal_76a7a7c528f8a2bfd93096ae0e3c22418921db9d286d068b7a86d87bde22aec4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
