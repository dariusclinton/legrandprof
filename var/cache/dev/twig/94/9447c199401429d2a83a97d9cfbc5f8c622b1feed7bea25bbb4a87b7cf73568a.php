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
        $__internal_0cd891d5b7013996669049e01cf34bba8498ba8915d717ea900e4197e36c8645 = $this->env->getExtension("native_profiler");
        $__internal_0cd891d5b7013996669049e01cf34bba8498ba8915d717ea900e4197e36c8645->enter($__internal_0cd891d5b7013996669049e01cf34bba8498ba8915d717ea900e4197e36c8645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0cd891d5b7013996669049e01cf34bba8498ba8915d717ea900e4197e36c8645->leave($__internal_0cd891d5b7013996669049e01cf34bba8498ba8915d717ea900e4197e36c8645_prof);

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
