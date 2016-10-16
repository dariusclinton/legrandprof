<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0ebc701f80c40d29b9116c68bbce9872e27cc783915525f29929a0acad9c7e15 extends Twig_Template
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
        $__internal_ae7d85cc90b24cd1a5aa819d2f56ca4954721505eb20eda39fffc4242bdade3c = $this->env->getExtension("native_profiler");
        $__internal_ae7d85cc90b24cd1a5aa819d2f56ca4954721505eb20eda39fffc4242bdade3c->enter($__internal_ae7d85cc90b24cd1a5aa819d2f56ca4954721505eb20eda39fffc4242bdade3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ae7d85cc90b24cd1a5aa819d2f56ca4954721505eb20eda39fffc4242bdade3c->leave($__internal_ae7d85cc90b24cd1a5aa819d2f56ca4954721505eb20eda39fffc4242bdade3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
