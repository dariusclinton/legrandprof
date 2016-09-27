<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_09f632d4aa5ae6bddf11a8997faa42a59820b4c253fa7e6101af29644c85a605 extends Twig_Template
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
        $__internal_ccc1c3ce5c3deed3ae09874423d227a217133b57787d233571b06a41487b5340 = $this->env->getExtension("native_profiler");
        $__internal_ccc1c3ce5c3deed3ae09874423d227a217133b57787d233571b06a41487b5340->enter($__internal_ccc1c3ce5c3deed3ae09874423d227a217133b57787d233571b06a41487b5340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ccc1c3ce5c3deed3ae09874423d227a217133b57787d233571b06a41487b5340->leave($__internal_ccc1c3ce5c3deed3ae09874423d227a217133b57787d233571b06a41487b5340_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
