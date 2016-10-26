<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2c5f92dff74191c08487f536c915c860b0d802cec6b06649d0697f230bfb9383 extends Twig_Template
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
        $__internal_2ea75d7971b32cbeac43ffcec0b3e29ad65efe88c14bae2f03bf71e931ba3c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea75d7971b32cbeac43ffcec0b3e29ad65efe88c14bae2f03bf71e931ba3c14->enter($__internal_2ea75d7971b32cbeac43ffcec0b3e29ad65efe88c14bae2f03bf71e931ba3c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2ea75d7971b32cbeac43ffcec0b3e29ad65efe88c14bae2f03bf71e931ba3c14->leave($__internal_2ea75d7971b32cbeac43ffcec0b3e29ad65efe88c14bae2f03bf71e931ba3c14_prof);

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
