<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b33440cf62e13830e2a92c456c55e15c46027057b2b65f6518b667b0088515c3 extends Twig_Template
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
        $__internal_3dc938ee2fcd3e38a37c54c7dfe27980521a816f3b9852a20c17fc959181f21f = $this->env->getExtension("native_profiler");
        $__internal_3dc938ee2fcd3e38a37c54c7dfe27980521a816f3b9852a20c17fc959181f21f->enter($__internal_3dc938ee2fcd3e38a37c54c7dfe27980521a816f3b9852a20c17fc959181f21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3dc938ee2fcd3e38a37c54c7dfe27980521a816f3b9852a20c17fc959181f21f->leave($__internal_3dc938ee2fcd3e38a37c54c7dfe27980521a816f3b9852a20c17fc959181f21f_prof);

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
