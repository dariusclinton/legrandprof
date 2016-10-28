<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_93a701487b2a1bbd0e739219c08b992e54a9f2b2ac43df99c97ef69da38b5f2b extends Twig_Template
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
        $__internal_931e6c253ed0877ee1f664c462c86531aa08e9fcc14ccac420e2f72b1115b134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931e6c253ed0877ee1f664c462c86531aa08e9fcc14ccac420e2f72b1115b134->enter($__internal_931e6c253ed0877ee1f664c462c86531aa08e9fcc14ccac420e2f72b1115b134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_931e6c253ed0877ee1f664c462c86531aa08e9fcc14ccac420e2f72b1115b134->leave($__internal_931e6c253ed0877ee1f664c462c86531aa08e9fcc14ccac420e2f72b1115b134_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
