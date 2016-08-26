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
        $__internal_249945c04998b016127df97996d9c821548f9234b8686376e7f0589c1254cd95 = $this->env->getExtension("native_profiler");
        $__internal_249945c04998b016127df97996d9c821548f9234b8686376e7f0589c1254cd95->enter($__internal_249945c04998b016127df97996d9c821548f9234b8686376e7f0589c1254cd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_249945c04998b016127df97996d9c821548f9234b8686376e7f0589c1254cd95->leave($__internal_249945c04998b016127df97996d9c821548f9234b8686376e7f0589c1254cd95_prof);

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
