<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9159cbb35803601a5d0e66d750479500492f69f85d9795dab460d7b1172c2152 extends Twig_Template
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
        $__internal_964bbb4c2f33fb576ea9c5feddff45595185895a15e0853fb5382b957b9c50d0 = $this->env->getExtension("native_profiler");
        $__internal_964bbb4c2f33fb576ea9c5feddff45595185895a15e0853fb5382b957b9c50d0->enter($__internal_964bbb4c2f33fb576ea9c5feddff45595185895a15e0853fb5382b957b9c50d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_964bbb4c2f33fb576ea9c5feddff45595185895a15e0853fb5382b957b9c50d0->leave($__internal_964bbb4c2f33fb576ea9c5feddff45595185895a15e0853fb5382b957b9c50d0_prof);

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
