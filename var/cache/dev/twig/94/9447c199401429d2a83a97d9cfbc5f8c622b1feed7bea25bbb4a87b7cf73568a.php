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
        $__internal_c63089c813cd518d9ce7a54313478e1c6977057b378b23d1fd0aa51466818790 = $this->env->getExtension("native_profiler");
        $__internal_c63089c813cd518d9ce7a54313478e1c6977057b378b23d1fd0aa51466818790->enter($__internal_c63089c813cd518d9ce7a54313478e1c6977057b378b23d1fd0aa51466818790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c63089c813cd518d9ce7a54313478e1c6977057b378b23d1fd0aa51466818790->leave($__internal_c63089c813cd518d9ce7a54313478e1c6977057b378b23d1fd0aa51466818790_prof);

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
