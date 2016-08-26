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
        $__internal_13dfb0a429603e068aedc77f9da93500bf643b585fdb27696133cedf16ed4a6c = $this->env->getExtension("native_profiler");
        $__internal_13dfb0a429603e068aedc77f9da93500bf643b585fdb27696133cedf16ed4a6c->enter($__internal_13dfb0a429603e068aedc77f9da93500bf643b585fdb27696133cedf16ed4a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_13dfb0a429603e068aedc77f9da93500bf643b585fdb27696133cedf16ed4a6c->leave($__internal_13dfb0a429603e068aedc77f9da93500bf643b585fdb27696133cedf16ed4a6c_prof);

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
